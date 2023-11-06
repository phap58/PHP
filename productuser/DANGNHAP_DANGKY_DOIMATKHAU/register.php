<?php
session_start(); // Khởi động phiên làm việc
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo_db";
$conn = new mysqli($servername, $username, $password, $dbname);


if (isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Password'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    // Validation for username, email, and password
    $valid = true;
    $errorMsg = "";

    if (empty($name)) {
        $errorMsg .= "Name is required.<br>";
        $valid = false;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMsg .= "Invalid email address.<br>";
        $valid = false;
    }

    if (strlen($password) < 8) {
        $errorMsg .= "Password must be at least 8 characters long.<br>";
        $valid = false;
    }

    if ($valid) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert the user into the database
        $sql = "INSERT INTO user (username, password, email) VALUES ('$name',  '$hashedPassword', '$email')";
        if (mysqli_query($conn, $sql)) {
            // Gán tên người dùng cho $_SESSION['username']
            $_SESSION['username'] = $name;

            echo "<script>window.location = '/CNTT6-K61/BTLWEB/productuser/indexproduct.php';</script>"; // Chuyển hướng đến trang chủ bằng JavaScript
            exit();
        } else {
            $errorMsg .= "Error: " . mysqli_error($conn);
        }
    } else {
        $errorMsg .= "Registration failed. Please check your input.<br>";
    }

    echo $errorMsg;
} 
?>
