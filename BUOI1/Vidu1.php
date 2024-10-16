<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .demo{
            width: 10px;
            height: 10px;
            background-color:red;
            display:inline-block;
            margin:2px;
        }
    </style>
</head>
<body>
    <?php 
        for($i=0; $i<10; $i++){
            for($j =0; $j<=5;$j++){
            echo "<div class='demo'></div>";
        }
        echo"<br>";
    }
    ?>
</body>
</html>