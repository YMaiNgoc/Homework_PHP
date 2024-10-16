<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng điểm</title>
    <style>
        .container {
            width: 500px;
            height: 500px;
            background-color: beige;
            justify-content: center;
            margin: auto;
            padding: 20px;
        }
        .header {
            margin-left: 70px;
            color: blue;
        }
        .item {
            display: flex;
            flex: 1;
            align-items: center;
            margin-left: 20px;
            padding: 10px;
            min-height: 20px;
        }
        #se1, #se2 {
            border: none;
            padding: 10px;
            width: 100%;
        }
        #select {
            border: none;
            padding: 5px;
            color: red;
        }
        #result {
            padding: 10px;
            width: 100%;
        }
        .button-container {
            display: flex;
            gap: 0px; 
            margin-top: 15px;
            margin-left: 10px;
        }
        .check1, .check2 {
            margin-left: 30%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<?php
        error_reporting(0); // Bỏ qua lỗi

        function tinh_diemTB($semeter1, $semeter2, $year) {
            $avg = 0;
            switch ($year) {
                case 1:
                    $avg = ($semeter1 + ($semeter2 * 2)) / 3;
                    break;
                case 2:
                    $avg = (($semeter1 * 2) + ($semeter2 * 2)) / 4;
                    break;
                case 3:
                    $avg = (($semeter1 * 3) + ($semeter2 * 4)) / 7;
                    break;
                default:
                    $avg = 0;
                    break;
            }
            return $avg;
        }

   
        $a = $_POST["seme_1"];
        $b = $_POST["seme_2"]; 
        $year = $_POST["year"]; 
        $kq = tinh_diemTB($a, $b, $year);

        $text = '';

        if ($kq >= 9) {
            $text = "<p style='color:red;'>HỌC SINH GIỎI</p>";
        } elseif ($kq >= 7) {
            $text = "<p style='color:blue;'>HỌC SINH KHÁ</p>";
        } elseif ($kq >= 5) {
            $text = "<p style='color:black;'>HỌC SINH TRUNG BÌNH</p>";
        } else {
            $text = "<p style='color:grey;'>HỌC SINH YẾU</p>";
        }
        
    
    ?>
<div class="container">
    <form action="bangdiem.php" method="POST">
        <div class="item">
            <h1 class="header">BẢNG ĐIỂM CỦA EM</h1>
        </div>
        <div class="item">
            <p>Semester1:</p> 
            <input type="text" name="seme_1" id="se1" size="40px" required value="<?php echo $a?>">
        </div>
        <div class="item">
            <p>Semester2:</p> 
            <input type="text" name="seme_2" id="se2" size="40px" required value="<?php echo $b?>">
        </div>
        <div class="item">
            <p>Year: </p>
            <select name="year" id="select" required>
                <option value="1" class="nam">1</option>
                <option value="2" class="nam">2</option>
                <option value="3" class="nam">3</option>
            </select>
        </div>
        <div class="item">
            <p>Summarise:</p>
            <input type="text" disabled="true" value="<?php echo $kq?>">
        </div> 
        <p><?php echo $text?></p>
         
        <div class="button-container">
            <div class="check1">
                <input type="submit" value="OK">
            </div>
            <div class="check2">
                <input type="reset" value="Cancel" onclick="window.location.href='http://localhost:8080/PHP/BUOI2/bangdiem.php'">
            </div>
        </div>
    </form>

    
</div>
</body>
</html>
