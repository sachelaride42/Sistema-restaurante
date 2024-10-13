<?php
class Cliente{
    private $id;
    private $nome;
    private $telefone;

    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome(String $nome){
        $this->nome = $nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone(String $telefone){
        $this->telefone = $telefone;
    }
}