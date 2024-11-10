<?php
if (session_status() === PHP_SESSION_NONE) {
session_start();
}?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Prato</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<nav>
    <div class="nav-wrapper indigo darken-1">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        </ul>
    </div>
</nav>
<h2 class="row">Atualizar pratos</h2>
<form class="col s12" action="/prato/update" method="POST">
    <div class="row">
        <div class="input-field col s12">
            <input id="nome" name="nome" type="text" class="validate" value="<?php echo $_SESSION["dadosPrato"]["nome"] ?>" required>
            <label for="nome">Nome do Prato</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="preco" name="preco" type="number" step="0.01" class="validate" value="<?php echo $_SESSION["dadosPrato"]["preco"] ?>" required>
            <label for="preco">Preço</label>
            <span class="helper-text" data-error="Apenas numeros" data-success=""></span>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <textarea id="descricao" name="descricao" class="materialize-textarea" required><?php echo $_SESSION["dadosPrato"]["descricao"] ?></textarea>
            <label for="descricao">Descrição</label>
        </div>
    </div>
    <button type="submit" class="btn waves-effect waves-light">Atualizar
        <i class="material-icons right">send</i>
    </button>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>