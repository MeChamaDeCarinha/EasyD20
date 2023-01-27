<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyD20 - Aventuras</title>
    <link rel="stylesheet" href="../../CSS/aventura/cards.css">
</head>

<body>
    <center>
        <div>
            <h1 id="h1aventuras">Selecione uma aventura:</h1>
            <?php 
                if(isset($_SESSION['alerta'])){
                    $alerta = $_SESSION['alerta'];
                    echo "<h2 id='alerta'>$alerta</h2>";
                    $_SESSION['alerta'] = false;
                }
            ?>
            <table id="tabela">
                <tr>
                    <?php
                        require "../conexao.php";
                        require "functions.php";

                        $idjogador = $_SESSION['id'];
                        $sql = "select * from participantes where cod_usuario = $id";
                        $resultado = mysqli_query($con, $sql);
                        $n = 1;
                        while($participando = mysqli_fetch_assoc($resultado)){
                            $jogadores = "";
                            $idaventura = $participando['cod_aventura'];

                            $sql = "select * from aventura where id = $idaventura";
                            
                            $aventura = mysqli_fetch_assoc(mysqli_query($con, $sql));
                            $nome = $aventura['nome'];
                            $desc = $aventura['descricao'];
                            $idimg = $aventura['imagem'];

                            $sqlpartic = "select * from participantes where cod_aventura = $idaventura";
                            $quantidade = mysqli_num_rows(mysqli_query($con, $sqlpartic));
                            $resultadopartic = mysqli_query($con, $sqlpartic);

                            while($jogador = mysqli_fetch_assoc($resultadopartic)){
                                $idjog = $jogador['cod_usuario'];

                                $sqlnome = "select * from usuario where id = $idjog";

                                $jog = mysqli_fetch_assoc(mysqli_query($con, $sqlnome));

                                $nomejog = $jog['nome'];

                                $jogadores = $jogadores . ", $nomejog";
                                $jogadores = substr($jogadores, 1, strlen($jogadores));
                            }
                            
                            if($n % 2 != 0) {
                                echo "<tr>";
                            }
                            echo "<td>";
                            echo "<div id='aventura'>";
                            echo "<img id='bgaventura' src='../../Images/aventura/background.png'>";
                            echo "<h1 id='nome'>$nome</h1>";
                            echo "<img id='imgaventura' src='../../Images/aventura/cards/" . imgdef($idimg) . "'>";
                            echo "<p id='desc'>$desc</p>";
                            echo "<img id='imgjogadores' src='../../Images/perfil/icone.png'>";
                            echo "<p id='jogadores'>$jogadores</p>";
                            echo "<p id='quantidade'>$quantidade</p>";
                            echo "<a id='expandir' href='detalharAVT.php/?id_aventura=$idaventura'>⋯</a>";
                            echo "<a id='selecionar' href=''>→</a>";
                            echo "</div>";
                            echo "</td>";
                            if($n % 2 == 0) {
                                echo "</tr>";
                            }
                            $n++;
                        }
                    ?>
                </tr>
            </table>
        </div>
    </center>
</body>

</html>