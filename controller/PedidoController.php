<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}

class PedidoController{
    public function abrirTelaPedido() {
        include realpath(__DIR__ . '/../view/pedido/cadastroPedido.php.php');
    }

}

