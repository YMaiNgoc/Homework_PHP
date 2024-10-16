<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while</title>
</head>
<body>
    <?php
    $sum=0;
    $sumC=0;
    $sumL =0;
    $i=0;
    while($i<10){
        $sum = $sum +$i;
        if($i%2==0){
            $sumC= $sumC+$i;
        }
        else{
            $sumL += $i;
        }
        $i ++;
        }
        echo "Tong: $sum <br>"; 
        echo "Tong chan:$sumC <br>";
        echo "Tong Le: $sumL <br>r";
    ?>
</body>
</html>