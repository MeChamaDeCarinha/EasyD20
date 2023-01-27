<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $banco = "EasyD20";

    $con = mysqli_connect($server, $user, $pass, $banco);

    if(!isset($_SESSION)){
        session_start();
    }

    $id = $_SESSION['id'];

    $sql = "select * from participantes where cod_usuario = $id";

    $_SESSION['aventuras'] = mysqli_num_rows(mysqli_query($con, $sql));
?>