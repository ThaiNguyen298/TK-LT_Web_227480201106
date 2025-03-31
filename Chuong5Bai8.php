<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Năm</title>
</head>
<body>
    <h2>Chọn Năm:</h2>
    <form method="post">
        <select name="year">
            <?php
                $currentYear = date("Y"); // Lấy năm hiện tại
                for ($year = 1900; $year <= $currentYear; $year++) {
                    echo "<option value='$year'>$year</option>";
                }
            ?>
        </select>
        <input type="submit" value="Chọn">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['year'])) {
            echo "<p>Bạn đã chọn năm: <strong>" . $_POST['year'] . "</strong></p>";
        }
    ?>
</body>
</html>