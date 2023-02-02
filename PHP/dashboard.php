<?php
    require "protect.php";
    require "aventura/checkAVT.php";

    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache')
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyD20 - Dashboard</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
</head>

<body>
    <div id="principal">
        <div id="conteudo">
            <iframe id="content" name="content" src="aventura/main.php" frameborder="0"></iframe>
        </div>
        <div id="header">
            <a class="logo" href="../index.php"><img src="../Images/Logo.png">EasyD20</a>
            <?php
                if($_SESSION['aventuras'] != 0){
                    echo '<div id="adiv">';
                    echo '<form action="aventura/entrar.php" method="POST">';
                    echo '<input type="text" name="acodigo" id="acodigo" maxlength="6" placeholder="Insira o código" autocomplete="off" required>';
                    echo '<input type="submit" name="aenviar" id="aenviar" value="→">'; 
                    echo '</form>';
                    echo '</div>';
                    echo '<a class="acriar" href="aventura/criarAVT_frm.php" target="content"><img src="../Images/dashboard/criar.png"></a>';
                    echo '<a class="aperfil" href=""><img src="../Images/perfil/icone.png"></a>';
                }
                else {
                    echo "<a class='aventuras' href='/aventura/entrar_frm.php' target='content'><img src='../Images/aventura/icone.png'></a>";
                    echo '<a class="perfil" href=""><img src="../Images/perfil/icone.png"></a>';
                }
            ?>
        </div>
        <div id="navbar">
            <a class="hamburger" href=""><img src="../Images/dashboard/hamburger.png"></a>
            <a class="fichas" href=""><img src="../Images/ficha/icone.png"></a>
            <a class="mapas" href=""><img src="../Images/mapa/icone.png"></a>
            <a class="inv" href=""><img src="../Images/inventario/icone.png"></a>

            <a class="ajuda" href=""><img src="../Images/ajuda/icone.png"></a>
            <a class="config" href=""><img src="../Images/config/icone.png"></a>
        </div>
    </div>
</body>

</html>