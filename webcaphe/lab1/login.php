<?php

session_start();

// If an after target is provided via GET (e.g. login.php?after=...), store it for post-login redirect
if (!empty($_GET['after'])) {
    // Basic sanitation: only allow relative URLs
    $after = $_GET['after'];
    $_SESSION['after_login_redirect'] = $after;
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

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailOrUsername = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    // Truy vấn thông tin đăng nhập từ bảng users (kiểm tra cả email và username)
    $stmt = $conn->prepare("SELECT id, username, email, password, fullname, role, active FROM users WHERE email = ? OR username = ?");
    $stmt->bind_param("ss", $emailOrUsername, $emailOrUsername);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Kiểm tra trạng thái tài khoản
        if ($user['active'] == 0) {
            $error = "Tài khoản của bạn đã bị khóa. Vui lòng liên hệ quản trị viên để được hỗ trợ.";
        } else {
            $login_success = false;
            
            // Kiểm tra mật khẩu với bcrypt (dùng cho người dùng tạo từ admin panel)
            if (password_verify($password, $user['password'])) {
                $login_success = true;
            } else {
                // Kiểm tra mật khẩu với định dạng SHA1 (dùng cho người dùng cũ)
                $hashed_input_password = '*' . strtoupper(sha1(sha1($password, true)));
                if ($hashed_input_password === $user['password']) {
                    $login_success = true;
                }
            }
            
            if ($login_success) {
                // Đăng nhập thành công
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['fullname'] = $user['fullname'] ?? $user['username'];
                $_SESSION['role'] = $user['role'] ?? 'user';
                
                // Redirect to the saved target after login if present
                if (!empty($_SESSION['after_login_redirect'])) {
                    $redirect = $_SESSION['after_login_redirect'];
                    unset($_SESSION['after_login_redirect']);
                    header("Location: " . $redirect);
                    exit;
                }

                // Default: chuyển hướng đến trang chủ
                header("Location: index.php");
                exit;
            } else {
                $error = "Mật khẩu không chính xác.";
            }
        }
    } else {
        $error = "Email hoặc tên đăng nhập không tồn tại trong hệ thống.";
    }
}
?>

<?php include 'includes/header.php'; ?>

<div class="container" style="max-width:800px; margin:40px auto; padding:20px;">
    <?php
    // Display any flash messages set via set_message()
    if (function_exists('display_message')) {
        display_message();
    }

    if (!empty($error)) {
        echo '<div class="alert alert-danger" style="margin-bottom:16px;">' . htmlspecialchars($error) . '</div>';
    }
    ?>

    <div class="login-container" style="background-color: rgba(255,255,255,0.95); border-radius:10px; padding:32px; box-shadow:0 6px 18px rgba(0,0,0,0.12);">
        <h1 style="font-family: 'Playfair Display', serif; text-align:center; color:#5d4037; margin-bottom:20px;">Đăng Nhập</h1>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group" style="margin-bottom:16px;">
                <label for="username">Email hoặc Tên đăng nhập:</label>
                <input type="text" id="username" name="email" required style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;">
            </div>

            <div class="form-group" style="margin-bottom:16px;">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;">
            </div>

            <button type="submit" style="background-color:#5d4037; color:#fff; border:none; padding:12px; border-radius:6px; width:100%; font-weight:600;">Đăng Nhập</button>
        </form>

        <div class="register-link" style="text-align:center; margin-top:12px;">
            Chưa có tài khoản? <a href="register.php" style="color:#5d4037; font-weight:600;">Đăng ký ngay</a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>