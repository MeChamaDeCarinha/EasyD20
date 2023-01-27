<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        require "conexao.php";
        require "protect.php";

        $id_usuario = $_SESSION['id'];
        $id_aventura = $_GET['id_aventura'];
        
        $sql = "select * from participantes where cod_usuario = $id_usuario and cod_aventura = $id_aventura";

        $resultado = mysqli_fetch_assoc(mysqli_query($con, $sql));

        if($resultado['mestrando'] == true){
            require "";
        }
        else if($resultado['mestrando'] == false){
            echo "Você não é mestre";
        }

    ?>
</body>

</html>