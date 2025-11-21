<?php
// Ensure session and site config are loaded
require_once __DIR__ . '/includes/config.php';

// Detect AJAX request
$isAjax = false;
if (isset($_REQUEST['ajax']) && $_REQUEST['ajax'] == 1) {
    $isAjax = true;
} elseif (isset($_POST['ajax']) && $_POST['ajax'] == 1) {
    $isAjax = true;
}

// Build the intended process-cart URL with query string
$query = $_SERVER['QUERY_STRING'];
if (!empty($query)) {
    if (strpos($query, 'action=') === false) {
        $query .= '&action=add';
    }
    $target = 'process-cart.php?' . $query;
} else {
    $target = 'process-cart.php?action=add';
}

// If user is not logged in
if (empty($_SESSION['user_id'])) {
    // Save where to go after successful login (for non-AJAX flows)
    $_SESSION['after_login_redirect'] = $target;
    // Optional message for user
    set_message('Bạn cần đăng nhập trước khi thêm sản phẩm vào giỏ hàng.', 'info');

    if ($isAjax) {
        // Return JSON indicating login is required
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'login_required' => true,
            'redirect' => 'login.php?after=' . urlencode($target)
        ]);
        exit;
    }

    // Non-AJAX: redirect to login
    redirect('login.php');
    exit;
}

// User is logged in — handle AJAX or normal redirect
if ($isAjax) {
    // Let process-cart.php handle the AJAX add and output JSON
    // Ensure REQUEST variables are available and include process-cart
    include __DIR__ . '/process-cart.php';
    exit;
} else {
    // Normal browser flow: redirect to process-cart
    redirect($target);
    exit;
}
?>