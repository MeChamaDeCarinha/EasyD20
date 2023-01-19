<?php
    require "conexao.php";
    
    $nome = mysqli_real_escape_string($con, $_POST["nome"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $senha = mysqli_real_escape_string($con, $_POST["senha"]);

    $sql = "select * from usuario where nome = '$nome'";

    $resultado = mysqli_query($con, $sql);

    if(mysqli_num_rows($resultado) != 0){
        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['nome'] = false;

        header("Location: ../cadastro.php");

        die;
    }

    $sql = "select * from usuario where email = '$email'";

    $resultado = mysqli_query($con, $sql);

    if(mysqli_num_rows($resultado) != 0){
        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['email'] = false;

        header("Location: ../cadastro.php");

        die;
    }

    if(strlen($senha) < 8){
        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['senha'] = false;

        header("Location: ../cadastro.php");

        die;
    }

    $senha = password_hash($senha, PASSWORD_DEFAULT);
    
    $sql = "insert into usuario(`nome`, `email`, `senha`) values ('$nome', '$email', '$senha')";

    mysqli_query($con, $sql);

    if(!isset($_SESSION)){
        session_start();
    }

    $_SESSION['singin'] = true;

    header("Location: ../login.php");
?>