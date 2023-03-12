<?php

namespace Src\Controller;

class user {
    public function loadTemplateLogin() {
        $carregador = new \Twig\Loader\FilesystemLoader("./Src/View");
        $ambiente = new \Twig\Environment($carregador);

        $dados = array(
            "url" => URL,
            "action" => "Login"
        );

        echo $ambiente->render("login.html", $dados);
    }

    public function loadTemplateSignup() {
        $carregador = new \Twig\Loader\FilesystemLoader("./Src/View");
        $ambiente = new \Twig\Environment($carregador);

        $dados = array(
            "url" => URL,
            "action" => "Cadastre-se"
        );

        echo $ambiente->render("login.html", $dados);
    }

    public function login($dados){
        $nome = filter_var($dados['name'], FILTER_SANITIZE_STRING);
        $senha = filter_var($dados['password'], FILTER_SANITIZE_STRING);

        $banco = \Src\Lib\Database::conect();

        $sql = "select * from usuario where nome = '$nome' or email = '$nome'";

        $resultado = mysqli_query($banco, $sql);

        $usuario = mysqli_fetch_assoc($resultado);


        if(mysqli_num_rows($resultado) > 0){
            if(password_verify($senha, $usuario['senha'])){
                if(!isset($_SESSION)){
                    session_start();
                }
        
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
    
                header("Location: " . URL . "/dashboard");
            }
        }
        else{
            $carregador = new \Twig\Loader\FilesystemLoader("./Src/View");
            $ambiente = new \Twig\Environment($carregador);

            $dados = array(
                "url" => URL,
                "alert" => "Login ou senha incorretos",
                "action" => "Login"
            );
    
            echo $ambiente->render("login.html", $dados);
        }
    }

    public function signup($dados){
        $carregador = new \Twig\Loader\FilesystemLoader("./Src/View");
        $ambiente = new \Twig\Environment($carregador);

        $nome = filter_var($dados['name'], FILTER_SANITIZE_STRING);
        $email = $dados['email'];
        $senha = filter_var($dados['password'], FILTER_SANITIZE_STRING);

        $banco = \Src\Lib\Database::conect();

        $sql = "select * from usuario where nome = '$nome'";

        $resultado = mysqli_query($banco, $sql);

        if(mysqli_num_rows($resultado) != 0){
            $dados = array(
                "url" => URL,
                "alert" => "Esse nome já está em uso",
                "action" => "Cadastre-se"
            );
    
            echo $ambiente->render("login.html", $dados);

            die();
        }

        $sql = "select * from usuario where email = '$email'";

        $resultado = mysqli_query($banco, $sql);

        if(mysqli_num_rows($resultado) != 0){
            $dados = array(
                "url" => URL,
                "alert" => "Esse email já está em uso",
                "action" => "Cadastre-se"
            );
    
            echo $ambiente->render("login.html", $dados);

            die();
        }

        if(strlen($senha) < 8){
            $dados = array(
                "url" => URL,
                "alert" => "Senha inválida",
                "action" => "Cadastre-se"
            );
    
            echo $ambiente->render("login.html", $dados);

            die();
        }

        $senha = password_hash($senha, PASSWORD_DEFAULT);
    
        $sql = "insert into usuario(`nome`, `email`, `senha`) values ('$nome', '$email', '$senha')";

        mysqli_query($banco, $sql);

        $dados = array(
            "url" => URL,
            "alert" => "Faça login para acessar sua conta",
            "action" => "Login"
        );

        echo $ambiente->render("login.html", $dados);
    }
}