<?php 
    require "../conexao.php";

    if(!isset($_SESSION)){
        session_start();
    }

    $id = $_SESSION['id'];
    
    $codigo = $_POST['acodigo'];

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
    header("Location: ../dashboard.php");
?>