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
  <h2>Cadastro de Pedidos</h2>
  <div class="row">
    <form class="col s12">
        <div class="input-field col s6">
            <input id="cliente" type="text" class="validate">
            <label for="cliente">Nome do Cliente</label>
        </div>
        <div class="input-field col s6">             
            <select class="browser-default">
                <option value="" disabled selected>Status do Pedido</option>
                <option value="1" >Pedido realizado</option>
                <option value="2"disabled selected>Em preparação</option>
                <option value="3"disabled selected>Prato pronto</option>
                <option value="4"disabled selected>Pedido finalizado</option>
            </select>
        </div>

        
        <div class="row">  
        <table class="col 12s">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
        </div>
        <button type="submit" class="btn waves-effect waves-light">Gerar Pedido
    <i class="material-icons right">send</i>
    </button>
    </form>
  </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>