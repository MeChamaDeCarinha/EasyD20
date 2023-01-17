<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyD20</title>
    <link rel="stylesheet" href="CSS/main.css">
</head>

<body>
    <center>
        <div id=central>
            <div id="divlogo">
                <img id="logo" src="Images/Logo.png">
                <h1>EasyD20</h1>
            </div>
            <div id="divcadastro">
            <ul id="ulcadastro"><p id="uacadastro">Cadastro</p></ul>
                <form action="" method="POST">
                    <input type="text" name="nome" id="nome" placeholder="Nome de usuário" autofocus required>
                    <br>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <br>
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                    <br>
                    <p id="logar"><a href="index.php">Faça login</a></p>
                    <input type="submit" value="Cadastrar" name="acessar" id="acessar">
                </form>
            </div>
        </div>
    </center>
</body>

</html>