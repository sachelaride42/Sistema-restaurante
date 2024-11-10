<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once 'modelos/classePrato.php';
class PratoController
{
    public function abrirTelaCadastro() {
        include realpath(__DIR__ . '/../view/prato/cadastro.php');
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

                if($prato->salvar()){
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

    public function geraAtualizarPrato()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
            $prato = new Prato();
            $dados = $prato->getPratoById($id);
            $_SESSION["dadosPrato"] = $dados;
            header('Location: /view/prato/atualizarPrato.php');
        }
    }

    public function updatePrato(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT);
                $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $prato = new Prato();
                $prato->atualizar(intval($_SESSION["dadosPrato"]["id"]), $nome, $preco, $descricao);
                header('Location: /prato/show');
                unset($_SESSION["dadosPrato"]);
        }

    }


    public function listarPratos() {
        $prato = new Prato();
        return $prato->listar();
    }

    public function deletarPrato(){
        echo "Método de solicitação: " . $_SERVER['REQUEST_METHOD'] . "<br>";

        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $prato = new Prato();
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
            $prato->deletar($id);
            header('Location: /view/prato/cadastro.php');
            exit();
        }
    }


}