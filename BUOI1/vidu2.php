<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* .demo{
            width: 10px;
            height: 10px;
            background-color:red;
            display:inline-block;
            margin:2px;
        } */
    </style>
</head>
<body>
    <?php 
        $sum=0;
        $sumC =0;
        $sumL=0;
        for($i=0; $i<=5; $i++){
            $sum= $sum+$i;
            if($i%2==0){
                $sumC= $sumC+$i;
            }
            else{
                $sumL= $sumL+$i;
            }
         echo $sum;
         echo $sumC;
         echo $sumL;
        
    }
    ?>
</body>
</html>