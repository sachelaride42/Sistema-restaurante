<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="nav-wrapper indigo darken-1">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="\..\View\login\telaLogin.php">Retornar</a></li>
            </ul>
        </div>
  </nav>
    <div class="row">
    <h2 class="col s12">Cadastro de Pedidos</h2>

    <form class="col s12">
        <div class="input-field col s6">
            <input id="cliente" type="text" name="cliente" class="validate">
            <label for="cliente">Nome do Cliente</label>
        </div>
        <div class="input-field col s6">
            <select name="status" class="browser-default">
                <option value="" disabled selected>Status do Pedido</option>
                <option value="1" >Pedido realizado</option>
                <option value="2" disabled selected>Em preparação</option>
                <option value="3" disabled selected>Prato pronto</option>
                <option value="4" disabled selected>Pedido finalizado</option>
            </select>
        </div>
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
        <h2 class="col s12">Lista de pratos</h2>
        <table>
            <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Adicionar</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($pc->listarPratos() as $prato) {?>

                <tr>
                    <td><?php echo $prato['nome']; ?></td>
                    <td><?php echo $prato['preco']; ?></td>
                    <td><?php echo $prato['descricao']; ?></td>
                    <td><input type="number" name="quantidade[]"></td>
                    <td><label><input class="filled-in" type="checkbox" name="id_prato[]" value="<?php echo $prato['id'];?>"><span>Adicionar</span></label></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php }else{
            echo "<h2>Nenhum prato cadastrado</h2>";
        }?>

        <br>
        <div class="col s4 offset-s8">
            <button type="submit" class="btn waves-effect waves-light">Gerar Pedido
            <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>