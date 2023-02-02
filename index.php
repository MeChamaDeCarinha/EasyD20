<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyD20 - Home</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>

<body>
    <div id="principal">
        <div id="conteudo">
            <center>
                <div id="divlogo">
                    <img id="logo" src="Images/logo.png">
                    <h1 id="textologo">EasyD20</h1>
                    <p id="bemvindo"><?php
                        if (isset($_SESSION['id'])) {
                            $nome = $_SESSION['nome'];
                            echo "Seja bem vindo <span id='nome'>$nome!</span>";
                        } 
                        else {
                            echo "Seja bem vindo!";
                        }
                    ?></p>
                </div>
            </center>
        </div>
        <div id="header">
            <a class="logo" href=""><img src="Images/Logo.png">EasyD20</a>
            <?php
                if (isset($_SESSION['id'])) {
                    echo "<a class='aventuras' href='PHP/dashboard.php'><img src='Images/aventura/icone.png'></a>";
                    echo "<a class='perfil' href=''><img src='Images/perfil/icone.png'></a>";
                }
                else {
                    echo "<a class='login' href='PHP/auth/login_frm.php'><p class='texto'>Entre</p></a>";
                    echo "<a class='singin' href='PHP/auth/singin_frm.php'><p class='texto'>Cadastre-se</p></a>";
                }
            ?>
        </div>
</body>

</html>