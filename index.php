<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require 'controller/PratoController.php';

$route = $_SERVER['REQUEST_URI'];
$parsedURL = parse_url($route);
$route = $parsedURL['path'];
$method = $_SERVER['REQUEST_METHOD'];

switch ($route) {
    case '/prato/create':
        $controller = new pratoController();
        $controller->abrirTelaCadastro();
        break;
    case '/prato/store':
        $controller = new pratoController();
        $controller->cadastrarPrato();
        break;
    case '/prato/delete':
        $controller = new pratoController();
        $controller->deletarPrato();
        break;
    default:
        echo 'Página não encontrada';
        break;
}