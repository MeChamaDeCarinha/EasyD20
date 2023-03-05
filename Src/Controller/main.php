<?php

namespace Src\Controller;

class main {
    public function init() {
        $carregador = new \Twig\Loader\FilesystemLoader("./Src/View");
        $ambiente = new \Twig\Environment($carregador);

        echo $ambiente->render("main.html");
    }
}