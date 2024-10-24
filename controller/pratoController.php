<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once 'modelos/classePrato.php';
class pratoController
{
    public function abrirTelaCadastro() {
        include 'view/prato/cadastro.php';
    }

    public function cadastrarPrato() {
        echo "Método de solicitação: " . $_SERVER['REQUEST_METHOD'] . "<br>";

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo "Recebi o POST";
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT);
            $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            echo "Sanitizou corretamente";
            if($nome && $preco && $descricao){
                $prato = new Prato();
                $prato->setNome($nome);
                $prato->setPreco($preco);
                $prato->setDescricao($descricao);

                if($prato->salvar()){ //para implementar depois na classe Prato
                    $_SESSION['message'] = "Prato cadastrado com sucesso!";
                }else{
                    $_SESSION['message'] = "Erro ao cadastrar o prato!";
                }
            }
            else{
                $_SESSION['message'] = "Método não é POST";
            }
            header('Location: /view/prato/cadastro.php');
            exit();
        }
    }

}