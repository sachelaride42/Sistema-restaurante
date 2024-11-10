<?php
class Prato{
    private $id;
    private $nome;
    private $preco;
    private $descricao;

    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function salvar(){
        $dsn = "mysql:host=localhost;dbname=restaurantedb";
        $username = 'root';
        $password = 'admin';
        try{
            $db = new PDO($dsn, $username, $password);
            $query = "INSERT INTO pratos (nome, preco, descricao) VALUES (:nome, :preco, :descricao)";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':preco', $this->preco);
            $stmt->bindParam(':descricao', $this->descricao);
            return $stmt->execute();
        }catch(PDOException $e){
            echo "Erro: ao salvar" . $e->getMessage();
            return false;
        }
    }

    public function listar(){
        $dsn = "mysql:host=localhost;dbname=restaurantedb";
        $username = 'root';
        $password = 'admin';
        try{
            $db = new PDO($dsn, $username, $password);
            $query = "SELECT * FROM pratos";
            $stmt = $db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "Erro ao listar: " . $e->getMessage();
        }
    }

    public function getPratoById($id){
        $dsn = "mysql:host=localhost;dbname=restaurantedb";
        $username = 'root';
        $password = 'admin';
        try{
            $db = new PDO($dsn, $username, $password);
            $query = "SELECT * FROM pratos WHERE id = :id";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        }catch(PDOException $e){
            echo "Erro ao listar: " . $e->getMessage();
        }
    }

    public function atualizar($id, $nome, $preco, $descricao){
        $dsn = "mysql:host=localhost;dbname=restaurantedb";
        $username = 'root';
        $password = 'admin';
        try{
            $db = new PDO($dsn, $username, $password);
            $query = "UPDATE pratos SET nome = :nome, preco = :preco, descricao = :descricao where id = :id";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':preco', $preco);
            $stmt->bindParam(':descricao', $descricao);
            return $stmt->execute();
        }catch(PDOException $e){
            echo "Erro ao atualizar: " . $e->getMessage();
        }
    }

    public function deletar($id){
        $dsn = "mysql:host=localhost;dbname=restaurantedb";
        $username = 'root';
        $password = 'admin';
        try{
            $db = new PDO($dsn, $username, $password);
            $query = "DELETE FROM pratos WHERE id = :id";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        }catch(PDOException $e){
            echo "Erro ao deletar: " . $e->getMessage();
        }
    }
}