<?php
require "PHP/protect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyD20 - Dashboard</title>
    <link rel="stylesheet" href="CSS/dash.css">
</head>

<body>
    <div id="principal">
        <div id="conteudo">
            <iframe id="content" name="content" src="aventuras.php" frameborder="0"></iframe>
        </div>
        <div id="header">
            <a class="logo" href=""><img src="Images/Logo.png">EasyD20</a>
            <a class="aventuras" href="aventuras.php" target="content"><img src="Images/aventuras.png"></a>
            <a class="perfil"  href=""><img src="Images/perfil.png"></a>
        </div>
        <div id="navbar">
            <a class="hamburger" href=""><img src="Images/hamburger.png"></a>
            <a class="fichas" href=""><img src="Images/fichas.png"></a>
            <a class="mapas" href=""><img src="Images/mapas.png"></a>
            <a class="inv" href=""><img src="Images/inventarios.png"></a>

            <a class="ajuda" href=""><img src="Images/ajuda.png"></a>
            <a class="config" href=""><img src="Images/config.png"></a>
        </div>
    </div>
</body>

</html>