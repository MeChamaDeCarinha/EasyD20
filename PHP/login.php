<?php
    require "conexao.php";
    
    $login = mysqli_real_escape_string($con, $_POST["login"]);
    $senha = mysqli_real_escape_string($con, $_POST["senha"]);

    $sql = "select * from usuario where nome = '$login' or email = '$login'";

    $resultado = mysqli_query($con, $sql);

    $usuario = mysqli_fetch_assoc($resultado);

    if(password_verify($senha, $usuario['senha'])){
        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];

        header("Location: ../dashboard.php");
    }
    else{
        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['auth'] = false;

        header("Location: ../index.php");
    }
?>