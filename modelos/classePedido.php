<?php
include'classeCliente';
class Pedido{
    private $id;
    private $status;// ["Pedido realizado", "Em preparação", "Prato pronto", "Pedido finalizado"];
    private $dataHora;
    private $cliente;

    public function __construct(Cliente $cliente){
        $this->status = "Pedido realizado";
        $this->dataHora = new DateTime();
        $this->cliente = $cliente;
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