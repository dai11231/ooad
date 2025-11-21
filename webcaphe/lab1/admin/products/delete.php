<?php
session_start();

// Kiểm tra đăng nhập
if (!isset($_SESSION["admin"])) {
    header("Location: ../login.php");
    exit();
}

// Kết nối database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab1";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Kiểm tra ID sản phẩm
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$product_id = intval($_GET['id']);

// Lấy thông tin sản phẩm trước khi xóa
$sql_select = "SELECT * FROM products WHERE id = ?";
$stmt_select = $conn->prepare($sql_select);
$stmt_select->bind_param("i", $product_id);
$stmt_select->execute();
$result_select = $stmt_select->get_result();
$product = $result_select->fetch_assoc();

// Kiểm tra xem sản phẩm có trong giỏ hàng của người dùng nào không
$in_cart = false;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        if (isset($item['id']) && $item['id'] == $product_id) {
            $in_cart = true;
            break;
        }
    }
}

// Xóa sản phẩm
$sql = "DELETE FROM products WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_id);

if ($stmt->execute()) {
    // Xóa file hình ảnh nếu có
    if (!empty($product['image']) && file_exists("../../" . $product['image'])) {
        unlink("../../" . $product['image']);
    }
    
    // Nếu sản phẩm đang có trong giỏ hàng
    if ($in_cart) {
        // Xóa sản phẩm khỏi giỏ hàng
        if (isset($_SESSION['cart'])) {
            $new_cart = [];
            foreach ($_SESSION['cart'] as $item) {
                if (!isset($item['id']) || $item['id'] != $product_id) {
                    $new_cart[] = $item;
                }
            }
            $_SESSION['cart'] = $new_cart;
            
            // Thêm thông báo vào session với tên sản phẩm
            $productName = isset($product['name']) ? htmlspecialchars($product['name']) : 'Sản phẩm';
            $_SESSION['cart_message'] = [
                'type' => 'warning',
                'message' => 'Sản phẩm "' . $productName . '" đã hết hàng và đã được xóa khỏi giỏ hàng của bạn.'
            ];
            
            // Cập nhật localStorage thông qua JavaScript
            echo '<script>
                if (typeof(Storage) !== "undefined") {
                    localStorage.setItem("cart", JSON.stringify(' . json_encode($new_cart) . '));
                }
                window.location.href = "index.php?message=Sản phẩm đã được xóa thành công";
            </script>';
            exit();
        }
    }
    
    header("Location: index.php?message=Sản phẩm đã được xóa thành công");
} else {
    header("Location: index.php?error=Có lỗi xảy ra khi xóa sản phẩm: " . $conn->error);
}

exit();
?>
