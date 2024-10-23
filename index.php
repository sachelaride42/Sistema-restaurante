<?php
// Exibir erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

function route($uri) {
    switch ($uri) {
        case '/prato/create':
            require_once 'controller/pratoController.php';
            $controller = new PratoController();
            $controller->abrirTelaCadastro();
            break;
        case '/prato/store':
            require_once 'controller/pratoController.php';
            $controller = new PratoController();
            $controller->cadastrarPrato();
            break;
        default:
            echo 'Página não encontrada';
            break;
    }
}

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
route($uri);