<?php
class Pedido{
    private $id;
    private $status;// ["Pedido realizado", "Em preparação", "Prato pronto", "Pedido finalizado"];
    private $dataHora;
    private $cliente;
    private $id_pratos;
    private $quantidades;
    private $valor_total;



    public function __construct($cliente, $id_pratos, $quantidades, $valor_total){
        $this->status = "Pedido realizado";
        $data = new DateTime();
        $this->dataHora = $data->format('d-m-Y H:i:s');
        $this->cliente = $cliente;
    }

    private function calcularValorTotal(){

    }

    public function getId(){
        return $this->id;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus(String $status){
        $this->status = $status;
    }

    public function getDataHora(){
        return $this->dataHora;
    }
    
    public function getCliente(){
        return $this->cliente;
    }
    
}