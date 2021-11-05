<?php

require_once './vendor/autoload.php';

$loader = new \Twig\Loader\ArrayLoader([
    'index' => 'Hola desde docker-compose {{ name }}!',
]);
$twig = new \Twig\Environment($loader);

echo $twig->render('index', ['name' => 'chuso']);