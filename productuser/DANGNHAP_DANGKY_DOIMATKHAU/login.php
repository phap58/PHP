<?php
session_start(); // Khởi động phiên làm việc


if (isset($_POST['LogEmail']) && isset($_POST['LogPassword'])) {
    $loginEmail = $_POST['LogEmail'];
    $loginPassword = $_POST['LogPassword'];

    // Kiểm tra xem trường nhập liệu có rỗng không
    if (!empty($loginEmail) && !empty($loginPassword)) {
        // Truy vấn để kiểm tra người dùng
        $query = "SELECT * FROM user WHERE email = '$loginEmail'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPassword = $row['password'];

            if (password_verify($loginPassword, $storedPassword)) {
                $_SESSION['username'] = $row['username']; // Lưu tên người dùng vào session
                echo "<script>window.location = '/CNTT6-K61/BTLWEB/productuser/indexproduct.php';</script>"; // Chuyển hướng đến trang chủ bằng JavaScript
                exit();
            } else {
                echo "Mật khẩu không đúng. Vui lòng kiểm tra lại.";
            }
        } else {
            echo "Không tìm thấy người dùng với email này.";
        }
    } }
?>
