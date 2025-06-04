<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
          integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
          crossorigin="anonymous" defer></script>
</head>
<body class="bg-light body1">

  <div class="container d-flex justify-content-center align-items-center min-vh-100 mt-5 login">
    <div class="card shadow-sm p-0  border-0">
      
      <header class=" text-white p-4 text-center fundopreto ">
        <h2>Página de Login</h2>
      </header>

      <div class="p-4 ">
        <form action=response.php method="POST">
          <div class="form-group ">
            <label for="username">Nome de Usuário</label>
            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Seu nome de usuário">
          </div>
          <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" class="form-control"name="senha" id="senha"  placeholder="Senha">
          </div>
          <button type="submit" class="btn btn-outline-dark btn-block">Entrar</button>
        </form>
      </div>

      <footer class="text-white p-3 text-center fundopreto">
        Todos os direitos reservados.
      </footer>

    </div>

    <?php
    if (isset($_GET['return'])) {
      echo '
      <div class="row justify-content-end fixed-bottom">
        <div class="col-12 col-sm-6 col-md-4 ml-2 mr-2">
          <div class="alert alert-warning p-3">
            <h4 class="text-center">'
              . $_GET['return'] .
            '</h4>
          </div>
        </div>
      </div>
      ';
    }
    ?>

  </div>

</body>
</html>
