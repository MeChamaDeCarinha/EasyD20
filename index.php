<?php

require './Src/Lib/vendor/autoload.php';

$roteador = new CoffeeCode\Router\Router(URL);
$roteador->namespace("Src\Controller");

$roteador->group(null);
$roteador->get("/", "main:loadTemplate");

$roteador->group("login");
$roteador->get("/", "user:loadTemplateLogin");

$roteador->group("signup");
$roteador->get("/", "user:loadTemplateSignup");

$roteador->group("dashboard");
$roteador->get("/", "dashboard:loadTemplate");


$roteador->dispatch();