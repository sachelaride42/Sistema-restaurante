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
        return true;
    }

}