<?php
session_start();
include 'includes/db_connect.php';
require_once 'includes/cart_functions.php';
require_once 'includes/db_checks.php';
require_once 'classes/Customer.php';

// Đảm bảo các cột cần thiết đã tồn tại trong database
checkOrderSystemDb($conn);

// Kiểm tra giỏ hàng
if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    $_SESSION['message'] = "Giỏ hàng của bạn đang trống. Vui lòng thêm sản phẩm trước khi thanh toán.";
    header("Location: cart.php");
    exit;
}

// Kiểm tra dữ liệu POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: checkout.php");
    exit;
}

// Đảm bảo user_id được đặt đúng
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    $_SESSION['error'] = "Phiên đăng nhập của bạn đã hết hạn. Vui lòng đăng nhập lại.";
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Lấy thông tin người dùng từ cơ sở dữ liệu
$user_stmt = $conn->prepare("SELECT fullname, phone FROM users WHERE id = ?");
$user_stmt->bind_param("i", $user_id);
$user_stmt->execute();
$user_result = $user_stmt->get_result();
$user_data = $user_result->fetch_assoc();

// Lấy dữ liệu từ form
$fullname = $user_data['fullname']; // Lấy từ cơ sở dữ liệu
$email = trim($_POST['email']);
$phone = $user_data['phone']; // Lấy từ cơ sở dữ liệu
$address = trim($_POST['address']);
$city = "Không rõ"; // Thêm giá trị mặc định cho city
$payment = $_POST['payment'];
$note = isset($_POST['note']) ? trim($_POST['note']) : '';

// Kiểm tra dữ liệu
if (empty($fullname) || empty($email) || empty($phone) || empty($address)) {
    $_SESSION['error'] = "Vui lòng điền đầy đủ thông tin bắt buộc.";
    header("Location: checkout.php");
    exit;
}

// Lấy thông tin giỏ hàng
$cart = $_SESSION['cart'];

// Kiểm tra tồn kho trước khi đặt hàng
$stockIssues = [];
$stockOk = true;

foreach ($cart as $key => $item) {
    if (!isset($item['id'])) continue;
    
    // Kiểm tra tồn kho
    $stmt = $conn->prepare("SELECT stock FROM products WHERE id = ?");
    $stmt->bind_param("i", $item['id']);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result && $result->num_rows > 0) {
        $product = $result->fetch_assoc();
        $availableStock = (int)$product['stock'];
        
        // Nếu số lượng vượt quá tồn kho
        if ($item['quantity'] > $availableStock) {
            $stockOk = false;
            if ($availableStock <= 0) {
                $stockIssues[] = "Sản phẩm '{$item['name']}' đã hết hàng.";
            } else {
                $stockIssues[] = "Chỉ còn {$availableStock} sản phẩm '{$item['name']}' trong kho. Bạn đã đặt {$item['quantity']}.";
                // Cập nhật lại số lượng
                $cart[$key]['quantity'] = $availableStock;
            }
        }
    }
}

// Nếu có vấn đề về tồn kho, thông báo và chuyển hướng về trang giỏ hàng
if (!$stockOk) {
    $_SESSION['cart'] = $cart; // Cập nhật lại giỏ hàng với số lượng đã điều chỉnh
    $_SESSION['error'] = "Đã có vấn đề với tồn kho: " . implode(" ", $stockIssues);
    header("Location: cart.php");
    exit;
}

// Tính tổng tiền
$totalAmount = calculateCartTotal($cart);

// Ghi log thông tin user_id
$debug_info = "User ID: " . (isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 'NULL') . "\n";
$debug_info .= "Email: " . (isset($_SESSION['email']) ? $_SESSION['email'] : 'NULL') . "\n";
$debug_info .= "Fullname: " . (isset($_SESSION['fullname']) ? $_SESSION['fullname'] : 'NULL') . "\n";
file_put_contents('order_debug.log', date('Y-m-d H:i:s') . " - PRE-ORDER: " . $debug_info, FILE_APPEND);

try {
    // Bắt đầu transaction
    $conn->begin_transaction();
    
    // Lưu thông tin đơn hàng
    $order_date = date('Y-m-d H:i:s');
    $status = 'pending';
    
    // Kiểm tra xem người dùng có phải là admin không
    $is_admin = false;
    if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
        $is_admin = true;
    }

    // Tạo mã đơn hàng tùy chỉnh và insert trong vòng lặp để đảm bảo unique
    $max_retries = 5;
    $retry_count = 0;
    $success = false;
    $order_id = 0;
    $custom_order_id = null;
    
    do {
        if ($is_admin) {
            // Admin: DH + YYMMDD + 6 random digits
            $prefix = "DH";
            $random_number = mt_rand(100000, 999999);
            $timestamp_short = date('ymd');
            $custom_order_id = $prefix . $timestamp_short . $random_number;
        } else {
            // User: ORDER + YYYYMMDDHHMMSS + 3 random digits
            $timestamp = date('YmdHis');
            $random_suffix = mt_rand(100, 999);
            $custom_order_id = "ORDER" . $timestamp . $random_suffix;
        }
        
        // Sử dụng custom_order_id làm order_number luôn
        $order_number = $custom_order_id;
        
        try {
            // Thử insert trực tiếp
            $sql = "INSERT INTO orders (user_id, shipping_name, shipping_address, shipping_phone, shipping_city, total_amount, payment_method, status, order_date, custom_order_id, order_number) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            $stmt = $conn->prepare($sql);
            if (!$stmt) {
                throw new Exception("Prepare failed: " . $conn->error);
            }
            
            $stmt->bind_param("issssdsssss", $user_id, $fullname, $address, $phone, $city, $totalAmount, $payment, $status, $order_date, $custom_order_id, $order_number);
            
            if ($stmt->execute()) {
                $success = true;
                $order_id = $conn->insert_id;
                $_SESSION['custom_order_id'] = $custom_order_id;
            } else {
                // Nếu lỗi là do duplicate key (mã đơn hàng trùng), thử lại
                if ($conn->errno == 1062) { // MySQL error code for duplicate entry
                    $retry_count++;
                    continue;
                } else {
                    throw new Exception("Execute failed: " . $stmt->error);
                }
            }
        } catch (Exception $e) {
            // Nếu lỗi không phải do duplicate key, ném ngoại lệ
            throw $e;
        }
        
    } while (!$success && $retry_count < $max_retries);
    
    if (!$success) {
        throw new Exception("Failed to generate unique order ID after $max_retries attempts");
    }
    
    $log_result = "Created order ID: $order_id";
    if ($custom_order_id !== null) {
        $log_result .= " (Custom ID: $custom_order_id)";
    }
    $log_result .= "\n";
    file_put_contents('order_debug.log', date('Y-m-d H:i:s') . " - ORDER CREATED: " . $log_result, FILE_APPEND);
    
    // Lưu chi tiết đơn hàng và cập nhật tồn kho
    foreach ($cart as $item) {
        $product_id = $item['id'];
        $price = $item['price'];
        $quantity = $item['quantity'];
        $product_image = isset($item['image']) ? $item['image'] : '';
        
        // Kiểm tra xem cột product_id và image có tồn tại trong bảng order_items không
        $check_product_id = $conn->query("SHOW COLUMNS FROM order_items LIKE 'product_id'");
        $check_image = $conn->query("SHOW COLUMNS FROM order_items LIKE 'image'");
        
        // Chuẩn bị câu truy vấn dựa trên các cột có sẵn
        if ($check_product_id->num_rows > 0 && $check_image->num_rows > 0) {
            // Nếu cả product_id và image tồn tại
            $stmt = $conn->prepare("INSERT INTO order_items (order_id, product_id, product_name, quantity, price, image) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("iisids", $order_id, $product_id, $item['name'], $quantity, $price, $product_image);
        } elseif ($check_product_id->num_rows > 0) {
            // Nếu chỉ có product_id tồn tại
            $stmt = $conn->prepare("INSERT INTO order_items (order_id, product_id, product_name, quantity, price) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("iisid", $order_id, $product_id, $item['name'], $quantity, $price);
        } elseif ($check_image->num_rows > 0) {
            // Nếu chỉ có image tồn tại
            $stmt = $conn->prepare("INSERT INTO order_items (order_id, product_name, quantity, price, image) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("isids", $order_id, $item['name'], $quantity, $price, $product_image);
        } else {
            // Nếu không có cột nào tồn tại
            $stmt = $conn->prepare("INSERT INTO order_items (order_id, product_name, quantity, price) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("isid", $order_id, $item['name'], $quantity, $price);
        }
        $stmt->execute();
        
        // Cập nhật tồn kho sản phẩm
        if (isset($item['id'])) {
            $update_stock = $conn->prepare("UPDATE products SET stock = stock - ? WHERE id = ? AND stock >= ?");
            $update_stock->bind_param("iii", $quantity, $product_id, $quantity);
            $update_stock->execute();
        }
    }

    // Cập nhật tổng chi tiêu của khách hàng
    $customer = new Customer($conn, $user_id);
    $customer->updateTotalSpent($totalAmount);
    
    // Hoàn tất transaction
    $conn->commit();
    
    // Ghi log transaction hoàn tất
    file_put_contents('order_debug.log', date('Y-m-d H:i:s') . " - TRANSACTION COMPLETED\n", FILE_APPEND);
    
    // Kiểm tra xác nhận đơn hàng đã được lưu
    $verify_query = "SELECT * FROM orders WHERE id = $order_id";
    $verify_result = $conn->query($verify_query);
    if ($verify_result->num_rows > 0) {
        $verify_order = $verify_result->fetch_assoc();
        $verification_log = "Verified order exists - ID: $order_id | User ID: {$verify_order['user_id']} | Total: {$verify_order['total_amount']}\n";
        file_put_contents('order_debug.log', date('Y-m-d H:i:s') . " - VERIFICATION: " . $verification_log, FILE_APPEND);
    } else {
        file_put_contents('order_debug.log', date('Y-m-d H:i:s') . " - VERIFICATION ERROR: Order not found after commit!\n", FILE_APPEND);
    }
    
    // Xóa giỏ hàng
    unset($_SESSION['cart']);
    
    // Thêm thông tin đơn hàng vào session để hiển thị trang cảm ơn
    $_SESSION['order_id'] = $order_id;
    $_SESSION['order_total'] = $totalAmount;
    
    // Thêm script để xóa giỏ hàng trong localStorage trước khi chuyển hướng
    echo '<script>
        localStorage.removeItem("cart");
        window.location.href = "order-success.php";
    </script>';
    exit;
    
} catch (Exception $e) {
    // Rollback nếu có lỗi
    $conn->rollback();
    
    // Ghi log lỗi
    file_put_contents('order_debug.log', date('Y-m-d H:i:s') . " - ERROR: " . $e->getMessage() . "\n", FILE_APPEND);
    
    // Hiển thị thông báo lỗi
    $_SESSION['error'] = "Có lỗi xảy ra khi đặt hàng: " . $e->getMessage();
    header("Location: checkout.php");
    exit;
}
?>