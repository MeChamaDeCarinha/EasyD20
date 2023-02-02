<?php
    require "../protect.php";
    require "checkAVT.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyD20 - Aventuras</title>
    <link rel="stylesheet" href="../../CSS/aventura/main.css">
</head>

<body>
    <?php 
        if($_SESSION['aventuras'] == 0){
            require "entrar_frm.php";
        }
        else if($_SESSION['aventuras'] >= 1){
            require "cards.php";
        }
    ?>
</body>

</html>