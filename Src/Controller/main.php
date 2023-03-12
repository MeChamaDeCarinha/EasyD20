<?php

namespace Src\Controller;

class main {
    public function loadTemplate() {
        $carregador = new \Twig\Loader\FilesystemLoader("./Src/View");
        $ambiente = new \Twig\Environment($carregador);

        $dados = array(
            "url" => URL
        );

        echo $ambiente->render("main.html", $dados);
    }
}