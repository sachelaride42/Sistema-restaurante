<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Prato</title>
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
            <input id="preco" name="preco" type="number" step="0.01" class="validate" required>
            <label for="preco">Preço</label>
            <span class="helper-text" data-error="Apenas numeros" data-success=""></span>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <textarea id="descricao" name="descricao" class="materialize-textarea" required></textarea>
            <label for="descricao">Descrição</label>
        </div>
    </div>
    <button type="submit" class="btn waves-effect waves-light">Cadastrar
    <i class="material-icons right">send</i>
    </button>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['message'])) {
    echo '<p>' . htmlspecialchars($_SESSION['message']) . '</p>';
    unset($_SESSION['message']);
}
?>


<?php
    $files = get_included_files();
    foreach($files as $file) {
        if(str_contains($file, 'PratoController.php')){
            $contem = true;
        }
        else{
            $contem = false;
        }
    }
    if(!$contem){
        require_once realpath(__DIR__ . '/../../controller/PratoController.php');
    }

    $pc = new PratoController();
    if($pc->listarPratos() != null && $pc->listarPratos()){
?>
<h2 class="row>">Lista de pratos cadastrados</h2>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pc->listarPratos() as $prato) {?>

        <tr>
            <td><?php echo $prato['nome']; ?></td>
            <td><?php echo $prato['preco']; ?></td>
            <td><?php echo $prato['descricao']; ?></td>
            <td><a href="/prato/edit?id=<?php echo $prato['id']; ?>">Editar</a></td>
            <td><a href="/prato/delete?id=<?php echo $prato['id']; ?>">Excluir</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php }else{
    echo "<h2>Nenhum prato cadastrado</h2>";
}?>


    
</body>
</html>