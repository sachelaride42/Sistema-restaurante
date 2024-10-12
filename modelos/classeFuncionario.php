<?php
class Funcionario{
    protected $id;
    protected $nome;
    protected $usuario;
    protected $senha;

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome(String $nome){
        $this->nome = $nome;
    }

    public function getUsuario(){
        return $this->usuario;
    }
    public function setUsuario(String $usuario){
        $this->nome = $usuario;
    }

    public function getSenha(){
        return $this->senha;
    }
    public function setSenha(String $senha){
        $this->senha = $senha;
    }


}