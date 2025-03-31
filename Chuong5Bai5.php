<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính USCLN và BSCNN</title>
</head>
<body>
    <h2>TÍNH USCLN VÀ BSCNN</h2>
    <form method="post">
        Số thứ 1: <input type="number" name="num1" required><br><br>
        Số thứ 2: <input type="number" name="num2" required><br><br>
        <input type="submit" name="uscln" value="USCLN">
        <input type="submit" name="bscnn" value="BSCNN">
    </form>

    <?php
    // Hàm tính USCLN (GCD) dùng thuật toán Euclid
    function uscln($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    // Hàm tính BSCNN (LCM)
    function bscnn($a, $b) {
        return ($a * $b) / uscln($a, $b);
    }

    // Xử lý khi form được submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['num1']) && isset($_POST['num2'])) {
            $num1 = intval($_POST['num1']);
            $num2 = intval($_POST['num2']);

            if (isset($_POST['uscln'])) {
                echo "<p>Ước số chung lớn nhất của $num1 và $num2 là: <strong>" . uscln($num1, $num2) . "</strong></p>";
            }

            if (isset($_POST['bscnn'])) {
                echo "<p>Bội số chung nhỏ nhất của $num1 và $num2 là: <strong>" . bscnn($num1, $num2) . "</strong></p>";
            }
        }
    }
    ?>
</body>
</html>