<?php
    $con = mysqli_connect("localhost", "root", "", "EasyD20");
    if (mysqli_connect_errno()) {
        echo "Erro ao conectar " . mysqli_connect_error();
    }
?>