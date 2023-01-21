<?php
    require "PHP/protect.php";
    require "PHP/init.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyD20 - Aventuras</title>
    <link rel="stylesheet" href="CSS/aventuras.css">
</head>

<body>
    <?php 
        if($_SESSION['aventuras'] == 0){
            require "PHP/adventure.php";
        }
        else{
            echo $_SESSION['aventuras'];
        }
    ?>
</body>

</html>