<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="nav-wrapper indigo darken-1">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med">
                <li><a href="\..\View\cadastro\telaCadastroFuncionario.php">Cadastro</a></li>
                <li><a href="\..\View\pedido\cadastroPedido.php">Pedidos</a></li>
            </ul>

        </div>
    </nav>

    <div>
    <h2>Login</h2>
    <form class="col s12" action="" method="">
        <div class="row">
            <div class="input-field col s6" >
                <input id="login" type="text" class="validade">
                <label for="login">Login</label>
            </div>
        </div>
        <div class="row ">
            <div class="input-field col s6">
                <input id="password" type="password" class="validade">
                <label for="password">Senha</label>
            </div>
        </div>
        <button type="submit" class="btn waves-effect waves-light">Entrar
            <i class="material-icons right">send</i>
        </button>
    </form>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>