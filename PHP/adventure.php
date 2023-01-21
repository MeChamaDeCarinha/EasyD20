<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <div id="geral">
            <h1>Não participa de nenhuma aventura?</h1>
            <form action="PHP/adventure.php" method="POST">
                <input type="text" name="codigo" id="codigo" placeholder="Insira o código" autocomplete="off">
                <br>
                <input type="submit" name="enviar" id="enviar" value="→">
                <br>
                <label for="criar" name="labelc" id="labelc">Ou</label>
                <br>
                <input type="button" name="criar" id="criar" value="Crie">
            </form>
        </div>
    </center>
</body>

</html>