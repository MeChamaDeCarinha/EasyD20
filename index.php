<?php

require './Src/Lib/vendor/autoload.php';

$roteador = new CoffeeCode\Router\Router(URL);
$roteador->namespace("Src\Controller");

$roteador->group(null);
$roteador->get("/", "main:init");

$roteador->dispatch();