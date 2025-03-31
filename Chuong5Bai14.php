<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</html><?php

// Hàm nhập ma trận (dữ liệu mẫu)
function nhapMaTran() {
    return [
        [1.1, 2.3, 3.1, 4.0, 5.0],
        [6.2, 7.7, 8.8, 9.5, 1.2],
        [4.6, 1.9, 3.6, 8.9, 1.5],
        [1.6, 1.7, 1.8, 1.9, 2.0]
    ];
}

// Hàm tìm số lớn nhất trong ma trận
function timSoLonNhat($matran) {
    $max = $matran[0][0];
    foreach ($matran as $dong) {
        foreach ($dong as $giaTri) {
            if ($giaTri > $max) {
                $max = $giaTri;
            }
        }
    }
    return $max;
}

// Hàm tìm số nhỏ nhất trong ma trận
function timSoNhoNhat($matran) {
    $min = $matran[0][0];
    foreach ($matran as $dong) {
        foreach ($dong as $giaTri) {
            if ($giaTri < $min) {
                $min = $giaTri;
            }
        }
    }
    return $min;
}

// Hàm tính tổng các phần tử trong ma trận
function tinhTong($matran) {
    $tong = 0;
    foreach ($matran as $dong) {
        foreach ($dong as $giaTri) {
            $tong += $giaTri;
        }
    }
    return $tong;
}

// Hàm hiển thị ma trận
function hienThiMaTran($matran) {
    echo "<h3>Ma trận số thực:</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    foreach ($matran as $dong) {
        echo "<tr>";
        foreach ($dong as $giaTri) {
            echo "<td>" . number_format($giaTri, 1) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// Chương trình chính
$matran = nhapMaTran();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chương trình xử lý ma trận</title>
</head>
<body>
    <h2>Chương trình xử lý ma trận</h2>

    <?php hienThiMaTran($matran); ?>

    <p><strong>Số lớn nhất trong ma trận:</strong> <?php echo timSoLonNhat($matran); ?></p>
    <p><strong>Số nhỏ nhất trong ma trận:</strong> <?php echo timSoNhoNhat($matran); ?></p>
    <p><strong>Tổng các phần tử trong ma trận:</strong> <?php echo tinhTong($matran); ?></p>
</body>
</html>