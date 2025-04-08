<?php
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}
$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Chính</title>
    <style>
        body {
            background-color: #E3F2FD;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .main-box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
            text-align: center;
        }

        .main-box h2 {
            color: #2193b0;
        }

        .main-box a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #f44336;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .main-box a:hover {
            background-color: #c62828;
        }
    </style>
</head>
<body>
    <div class="main-box">
        <h2>TRANG CHÍNH</h2>
        <p>Người dùng đã đăng nhập với tên <strong><?= $username ?></strong> và Email là <strong><?= $email ?></strong></p>
        <a href="logout.php">Đăng xuất</a>
    </div>
</body>
</html>
