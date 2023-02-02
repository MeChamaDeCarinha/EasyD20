<?php 
    require "../conexao.php";
    require "checkAVT.php";

    $id = $_SESSION['id'];
    
    if(isset($_POST['acodigo'])){
        $codigo = $_POST['acodigo'];
    }
    else if(isset($_POST['codigo'])){
        $codigo = $_POST['codigo'];
    }

    $sql = "select * from aventura where cod = $codigo";

    $resultado = mysqli_query($con, $sql);

    if(mysqli_num_rows($resultado) >= 1){
        $aventura = mysqli_fetch_assoc($resultado);

        $id_aventura = $aventura['id'];

        $sql = "select * from participantes where cod_usuario = $id and cod_aventura = $id_aventura";
        $resultado = mysqli_query($con, $sql);
        
        if(mysqli_num_rows($resultado) == 0){
            $sql = "insert into participantes(cod_usuario, cod_aventura) values ($id, $id_aventura)";
            mysqli_query($con, $sql);
        }
        else {
            $_SESSION['alerta'] = "Você já participa dessa aventura.";
        }
    }
    else {
        $_SESSION['alerta'] = "Esse código não pertence a nenhuma aventura.";
    }

    if($_SESSION['aventuras'] != 0){
        header("Location: ../dashboard.php");
    }
    else{
        header("Location: main.php");
    }
?>