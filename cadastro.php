<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyD20 - Cadastro</title>
    <link rel="stylesheet" href="CSS/principal.css">
    <style>
        <?php
            if (!isset($_SESSION)) {
                session_start();
            }
            if (isset($_SESSION['nome'])) {
                echo "#auth{right: 112px;}";
            }
            else if(isset($_SESSION['email'])){
                echo "#auth{right: 135px}";
            }
            else if(isset($_SESSION['senha'])){
                echo "#auth{right: 66px}";
            }
        ?>
    </style>
</head>

<body>
    <center>
        <div id=central>
            <div id="divlogo">
                <img id="logo" src="Images/logo.png">
                <h1>EasyD20</h1>
            </div>
            <div id="divcadastro">
            <ul id="ulcadastro"><p id="uacadastro">Cadastro</p></ul>
                <form action="PHP/singin.php" method="POST">
                    <input type="text" name="nome" id="nome" placeholder="Nome de usuário" autofocus required>
                    <br>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <br>
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                    <br>
                    <p id="logar"><a href="index.php">Faça login</a></p>
                    <p id="auth" name="auth"><?php
                        if (isset($_SESSION['nome'])) {
                            echo "Nome de usuário já em uso";
                        }
                        else if(isset($_SESSION['email'])){
                            echo "Email já está em uso";
                        }
                        else if(isset($_SESSION['senha'])){
                            echo "A senha deve conter pelo menos 8 dígitos";
                        }
                        session_destroy();
                    ?></p>
                    <input type="submit" value="Cadastrar" name="acessar" id="acessar">
                </form>
            </div>
        </div>
    </center>
</body>

</html>