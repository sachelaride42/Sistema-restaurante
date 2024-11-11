<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
require_once '../model/classePedido.php';
require_once '../model/classePrato.php';
class PedidoController{
    public function abrirTelaPedido() {
        include realpath(__DIR__ . '/../view/pedido/cadastroPedido.php');
    }

    public function cadastrarPedido() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $pedido = new Pedido();
            $status = $_POST['status'];
            $cliente = $_POST['cliente'];
            $valor = 0;
            $ids_recebidos = $_POST['id_prato'];
            foreach($ids_recebidos as $key => $value) {
                $prato = new Prato();
                $id_pratos = $value . ",";
                $quantidades = $_POST['quantidade'][$value] . ",";
                $valor = $valor + ($_POST['quantidade'][$value] * $prato->getPratoById($value)['preco']);
            }
            $pedido->setStatus($status);
            $pedido->setCliente($cliente);
            $pedido->setIdPratos(rtrim($id_pratos, ","));
            $pedido->setQuantidades(rtrim($quantidades,","));
            $pedido->setValorTotal($valor);
            $pedido->salvar();  //IMPLEMENTAR ESSE

        }
    }

}

