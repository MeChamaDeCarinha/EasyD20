<?php
    require "conexao.php";

    if(!isset($_SESSION)){
        session_start();
    }

    $id = $_SESSION['id'];

    $sql = "select * from participantes where cod_usuario = $id";

    $_SESSION['aventuras'] = mysqli_num_rows(mysqli_query($con, $sql));
?>