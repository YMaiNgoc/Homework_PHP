<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="hsa">Nhập số:</label>
        <input type="number" name="hsa" id="hsa" required>
        <button type="submit">Kiểm tra</button>
    </form>

    <?php
    function check($hsa){
        if ($hsa % 2 == 0) {
            return "Đây là số chẵn";
        } else {
            return "Đây là số lẻ";
        }
    }
        error_reporting(0) ;
        $a = $_POST["hsa"];
        $kq = check($a);
        echo "<p>Kết quả: $kq</p>";
   
    ?>
</body>
</html>
