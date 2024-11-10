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
    case "/prato/show":
        $controller = new PratoController();
        $controller->abrirTelaCadastro();
        break;
    case '/prato/create':
        $controller = new PratoController();
        $controller->cadastrarPrato();
        break;
    case '/prato/delete':
        $controller = new PratoController();
        $controller->deletarPrato();
        break;
    case '/prato/edit':
        $controller = new PratoController();
        $controller->geraAtualizarPrato();
    case '/prato/update':
        $controller = new PratoController();
        $controller->updatePrato();
    case '/pedido/abrirPedido':
        $controller = new PedidoController();
        $controller->abrirTelaPedido();
    default:
        echo 'Página não encontrada';
        break;
}