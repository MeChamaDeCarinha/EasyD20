<?php
    require "conexao.php";
    
    $login = mysqli_real_escape_string($con, $_POST["login"]);
    $senha = mysqli_real_escape_string($con, $_POST["senha"]);

    $SQL = "select * from usuario where (nick = '$login' or email = '$login') and senha = '$senha'";

    $resultado = mysqli_query($con, $SQL);

    if(mysqli_num_rows($resultado) == 1){
        $usuario = mysqli_fetch_assoc($resultado);

        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nick'] = $usuario['nick'];
        $_SESSION['auth'] = true;

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