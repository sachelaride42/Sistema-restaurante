<?php
include_once 'modelos/classePrato.php';
class pratoController
{
    public function abrirTelaCadastro() {
        include 'views/prato/cadastro.php';
    }

    public function cadastrarPrato() {
        session_start();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT);
            $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if($nome && $preco && $descricao){
                $prato = new Prato();
                $prato->setNome($nome);
                $prato->setPreco($preco);
                $prato->setDescricao($descricao);

                if($prato->salvar()){ //para implementar depois na classe Prato
                    $_SESSION['msg'] = "Prato cadastrado com sucesso!";
                }else{
                    $_SESSION['msg'] = "Erro ao cadastrar o prato!";
                }
            }
            else{
                $_SESSION['msg'] = "Dados inválidos";
            }
            header('Location: /view/prato/cadastro.php');
            exit();
        }
    }

}