<?php
session_start(); // Bắt đầu phiên

if (isset($_POST["logout"])) {
    // Hủy phiên hiện tại
    session_destroy();
    
    // Điều hướng người dùng đến trang đăng nhập hoặc trang chính
    header("Location: /CNTT6-K61/BTLWEB/productuser/indexproduct.php");
    exit(); // Đảm bảo rằng không có mã PHP tiếp theo được thực thi sau khi điều hướng
}

if (isset($_SESSION['username'])) {
    echo $_SESSION['username']; // Hiển thị tên người dùng nếu đã đăng nhập
} else {
    echo 'Guest'; // Hiển thị 'Guest' nếu chưa đăng nhập
}
?>
