<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Prato</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<h2 class="row">Cadastro de Pratos</h2>
<form class="col s12" action="/prato/store" method="POST">
    <div class="row">
        <div class="input-field col s12">
            <input id="nome" name="nome" type="text" class="validate" required>
            <label for="nome">Nome do Prato</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="preco" name="preco" type="text" class="validate" required>
            <label for="preco">Preço</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <textarea id="descricao" name="descricao" class="materialize-textarea" required></textarea>
            <label for="descricao">Descrição</label>
        </div>
    </div>
    <button type="submit" class="btn waves-effect waves-light">Cadastrar</button>
</form>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['message'])) {
    echo '<p>' . htmlspecialchars($_SESSION['message']) . '</p>';
    unset($_SESSION['message']); // Certifique-se de limpar a mensagem após mostrar
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>