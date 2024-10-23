
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pratos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <h2>Cadastro de Pratos</h2>
    <conteneir>
        <div class="row">
            <form class="clo s12" action="/prato/store" method="POST">
            <div class="row">
        <div class="input-field col s6">
          <input id="nome" type="text" class="validate">
          <label for="first_name">Nome do Prato</label>
        </div>
        <div class="input-field col s6">
          <input id="preco" type="number" step="0.01" class="validate">
          <label for="preco">Preço do Prato</label>
          <span class="helper-text" data-error="Apenas numeros" data-success=""></span>
        </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                    <textarea id="descricao" class="materialize-textarea" placeholder="Descição do Prato"></textarea>
                    <label for="descricao">Descição do Prato</label>
                    </div>
                </div>
            </div>
        </div>
            <input type="submit" class="btn"></input>
            </form>
        </div>
        <?php
        session_start();
        if (isset($_SESSION['message'])) {
            echo '<p>' . htmlspecialchars($_SESSION['message']) . '</p>';
            unset($_SESSION['message']); // Certifique-se de limpar a mensagem após mostrar
        }
        ?>
    </conteneir>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>