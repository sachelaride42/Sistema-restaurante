<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
  <h2>Cadastro de Funcionarios</h2>
  <div>
    <div class="row">
        <form class="col s12">
            <div class="row">
                <div class="input-fild col s6">
                    <input id="nome" type="text" class="validate">
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s6">             
                    <select class="browser-default">
                        <option value="" disabled selected>Selecione o Cargo</option>
                        <option value="1">Gerente</option>
                        <option value="2">Garçom</option>
                        <option value="3">Cozinheiro</option>
                        <option value="4">Caixa</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="input-fild col s6">
                    <input id="login" type="text" class="validate">
                    <label for="login">Login</label>
                </div>
                <div class="input-fild col s6">
                    <input id="senha" type="password" class="validate">
                    <label for="senha">Senha</label>
                </div>
            </div>
            <button type="submit" class="btn waves-effect waves-light">Cadastrar
                <i class="material-icons right">add</i>
            </button>
        </form>
    </div>
  </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>