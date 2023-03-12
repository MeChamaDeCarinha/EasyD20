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
}