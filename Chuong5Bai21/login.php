<?php
session_start();

$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Giả sử thông tin hợp lệ nếu đúng như sau:
if ($username == "nguyen" && $email == "nguyen@gmail.com" && $password == "123") {
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $valid = true;
} else {
    $valid = false;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xử Lý Đăng Nhập</title>
    <style>
        body {
            background: #f2f2f2;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .result-box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }

        .result-box a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #2193b0;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .result-box a:hover {
            background-color: #17667e;
        }
    </style>
</head>
<body>
    <div class="result-box">
        <?php if ($valid): ?>
            <h2>Thông tin đăng nhập hợp lệ</h2>
            <a href="mainpage.php">Trang chính</a>
        <?php else: ?>
            <h2>Đăng nhập thất bại!</h2>
            <a href="login.html">Thử lại</a>
        <?php endif; ?>
    </div>
</body>
</html>
