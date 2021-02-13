<?php

use Alura\Cursos\Controller\InterfaceControladorRequisicao;

require __DIR__ . '/../vendor/autoload.php';
$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $rotas)) {
    echo "Erro 404";
    exit();
}

$classeControladora = $rotas[$caminho];

/** @var InterfaceControladorRequisicao $controlador  */
$controlador = new $classeControladora();
$controlador->processaRequisicao();