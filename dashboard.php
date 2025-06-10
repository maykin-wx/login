<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php?return=Acesso não autorizado. Faça login.");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
          integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
          crossorigin="anonymous" defer></script>
</head>
<body>
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-6">
            <div class="alert alert-success text-center">
                <h3>Dashboard do Sistema</h3>
                <h4 class="alert-heading mt-3">
                    Seja bem-vindo ao sistema <?php echo $_SESSION['usuario']; ?>!
                </h4>

        
                <div class="mt-4">
                    <a href="logout.php" class="btn btn-danger btn-block">Sair</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
