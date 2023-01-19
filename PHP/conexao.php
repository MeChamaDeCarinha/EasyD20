<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $banco = "EasyD20";

    $con = mysqli_connect($server, $user, $pass, $banco);
    if (mysqli_connect_errno()) {
        echo "Erro ao conectar " . mysqli_connect_error();
    }
?>