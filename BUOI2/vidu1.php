<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tổng</title>
</head>
<body>
   <?php
    error_reporting(0);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    ?>
     <form action="vidu1.php" method="POST">
        First name: <input type="text" name="firstname"><br>
        Last name: <input type="text" name="lastname">
        <br>
        <input  name="form_submit" disabled ="true" value="<?php echo "<p> $firstname $lastname </p>" ?>"/>
        <input type ="submit" value = "submit">
    </form>
</body>
</html>