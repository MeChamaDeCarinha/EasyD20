<?php

namespace Src\Controller;

class dashboard {
    public function loadTemplate() {
        $carregador = new \Twig\Loader\FilesystemLoader("./Src/View");
        $ambiente = new \Twig\Environment($carregador);

        echo $ambiente->render("dashboard.html");
    }
}