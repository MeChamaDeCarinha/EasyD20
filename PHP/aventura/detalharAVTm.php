<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../CSS/aventura/detalhar.css">
</head>

<body>
    <?php
        require "../conexao.php";
        require "../protect.php";
        require "functions.php";

        $id_usuario = $_SESSION['id'];
        $id_aventura = $_GET['id_aventura'];

        $sql = "select * from aventura where id = $id_aventura";
    
        $resultado = mysqli_fetch_assoc(mysqli_query($con, $sql));    
    ?>

    <div id="sidebar">
        <a class="voltar" href="../main.php"><img src="../../../Images/aventura/buttons/voltar.png"></a>
        <a class="editar" href=""><img src="../../../Images/aventura/buttons/editar.png"></a>
        <a class="excluir" href=""><img src="../../../Images/aventura/buttons/excluir.png"></a>
        <a class="config" href=""><img src="../../../Images/aventura/buttons/config.png"></a>
    </div>

    <center>
        <div id="geral">
            <div id="imagem">
                <img src="../../../Images/aventura/cards/<?php echo imgdef($resultado['imagem']) ?>">
                </center>
                <div id="texto">
                    <span class="nome"><?php echo $resultado['nome']?></span>
                    <span class="codigo"><?php echo $resultado['cod']?></span>
                </div>
                <center>
            </div>
            </center>
            <div id="descricao">
                <h1>Descrição:</h1>
                <p><?php echo $resultado['descricao']?></p>
            </div>
            <div id="participantes">
                <h1>Participantes:</h1>
                <div class="borda">
                    <div id="jogador">
                        <span class="nome">MeChamaDeCarinha</span>
                        <span><a href=""><img src="../../../Images/aventura/buttons/expulsar.png"></a></span>
                        <span><a href=""><img src="../../../Images/aventura/buttons/block.png"></a></span>
                    </div>
                    <div id="jogador">
                        <span class="nome">MeChamaDeCarinha</span>
                        <span><a href=""><img src="../../../Images/aventura/buttons/expulsar.png"></a></span>
                        <span><a href=""><img src="../../../Images/aventura/buttons/block.png"></a></span>
                    </div>
                    <div id="jogador">
                        <span class="nome">MeChamaDeCarinha</span>
                        <span><a href=""><img src="../../../Images/aventura/buttons/expulsar.png"></a></span>
                        <span><a href=""><img src="../../../Images/aventura/buttons/block.png"></a></span>
                    </div>
                    <div id="jogador">
                        <span class="nome">MeChamaDeCarinha</span>
                        <span><a href=""><img src="../../../Images/aventura/buttons/expulsar.png"></a></span>
                        <span><a href=""><img src="../../../Images/aventura/buttons/block.png"></a></span>
                    </div>
                </div>
            </div>
            <center>
        </div>
    </center>
</body>

</html>