<?php 
    require "conexao.php";
    require "protect.php";

    $id = $_SESSION['id'];
    
    $codigo = $_POST['codigo'];

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

            header("Location: aventuras.php");
        }
    }
?>