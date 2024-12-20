<?php
class Pedido{
    private $id;
    private $status;// ["Pedido realizado", "Em preparação", "Prato pronto", "Pedido finalizado"];
    private $dataHora;
    private $cliente;
    private $id_pratos;
    private $quantidades;
    private $valor_total;

    public function __construct(){
        $this->dataHora = new DateTime();
    }

    public function setValorTotal($valor_total){
        $this->valor_total = $valor_total;
    }

    public function getValorTotal(){
        return $this->valor_total;
    }

    public function getId(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
    }
    public function getIdPratos(){
        return $this->id_pratos;
    }
    public function setIdPratos($id_pratos){
        $this->id_pratos = $id_pratos;
    }
    public function getQuantidades(){
        return $this->quantidades;
    }

    public function setQuantidades($quantidades){
        $this->quantidades = $quantidades;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }

    public function getDataHora(){
        return $this->dataHora;
    }
    
    public function getCliente(){
        return $this->cliente;
    }
    public function setCliente($cliente){
        $this->cliente = $cliente;
    }

    public function salvar($data){
        $dsn = "mysql:host=localhost;dbname=restaurantedb";
        $username = 'root';
        $password = 'admin';
        try{
            $db = new PDO($dsn, $username, $password);
            $query = "INSERT INTO pedidos (statuss, dataHora, cliente, id_pratos, quantidades, valor_total) VALUES (:statuss, :dataHora, :cliente, :id_pratos, :quantidades, :valor_total)";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':statuss', $this->status);
            $stmt->bindParam(':dataHora', $data);
            $stmt->bindParam(':cliente', $this->cliente);
            $stmt->bindParam(':id_pratos', $this->id_pratos);
            $stmt->bindParam(':quantidades', $this->quantidades);
            $stmt->bindParam(':valor_total', $this->valor_total);
            return $stmt->execute();
        }catch(PDOException $e){
            echo "Erro: ao salvar" . $e->getMessage();
            return false;
        }
    }
    
}