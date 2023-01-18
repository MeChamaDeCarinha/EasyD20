<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyD20 - Login</title>
    <link rel="stylesheet" href="CSS/principal.css">
    <style>
        <?php
            if (!isset($_SESSION)) {
                session_start();
            }
            if (isset($_SESSION['singin'])) {
                echo "#auth {\nright: 106px;\ncolor: yellow;\n}";
            }
        ?>
    </style>
</head>

<body>
    <center>
        <div id=central>
            <div id="divlogo">
                <img id="logo" src="Images/Logo.png">
                <h1>EasyD20</h1>
            </div>
            <div id="divcadastro">
                <ul id="ullogin">
                    <p id="ualogin">Login</p>
                </ul>
                <form action="PHP/login.php" method="POST">
                    <input type="text" name="login" id="login" placeholder="Nome de usuário ou Email" autofocus required>
                    <br>
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                    <br>
                    <p id="cadastrar"><a href="cadastro.php">Cadastre-se</a></p>
                    <p id="auth" name="auth"><?php
                        if (isset($_SESSION["auth"])) {
                            echo "Login ou senha incorretos";
                        }
                        if (isset($_SESSION["singin"])) {
                            echo "Usuário cadastrado, faça login";
                        }
                        session_destroy();
                    ?></p>
                    <input type="submit" value="Acessar" name="acessar" id="acessar">
                </form>
            </div>
        </div>
    </center>
</body>

</html>