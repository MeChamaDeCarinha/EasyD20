<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EasyD20</title>
        <link rel="stylesheet" href="Base.css">
        <style>
            #logo{
                position: relative;
                top: 30px;
            }

            #email{
                position: relative;
                top: 25px;
            }

            #senha{
                position: relative;
                top: 35px;
            }

            #cadastro{
                position: fixed;
                top: 90%;
                left: 42%;
            }

            input {
                font-family: 'Calibri Light', 'Gill Sans', 'Open Sans';
                text-align: left;
                font-size: 20px;
                border: 15px;
                border-radius: 25px;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 25px;
                padding-right: 25px;
                box-sizing: border-box;
            }


        </style>
    </head>
    <body>
        <center>
            <img id="logo" src="Images/Logo.png" height="100px">
            <h1>EasyD20</h1>
            <form action="" method="POST">
                <input type="email" name="email" id="email" placeholder="Email" size="40px">
                <br>
                <input type="password" name="senha" id="senha" placeholder="Senha" size="40px">
                <br>
                <input type="submit" value="Acessar" style="background-color: #C6C6C6;padding:5px; text-align:center; width:150px; height:50px; position:relative; top:70px;">
                <p id="cadastro">Não tem login? <a href="">Crie o seu aqui!</a></p>
            </form>
        </center>     
    </body>
</html>