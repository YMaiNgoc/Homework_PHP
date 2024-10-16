<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tổng</title>
</head>
<body>
<?php
function tinh_tong( $a,$b )
{
    $total = $a+$b;
    return $total;
}
echo tinh_tong(4,5);
?>
</body>
</html>