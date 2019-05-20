
<?php
  
  session_start();
  if((!isset ($_SESSION['email_s']) == true) and (!isset ($_SESSION['senha_s']) == true))
  {
    unset($_SESSION['email_s']);
    unset($_SESSION['senha_s']);
    unset($_SESSION['nome_s']);
    header('location:acesso.php');
  }

  $email_s = $_SESSION['email_s'];
  $senha_s = $_SESSION['senha_s'];
  $nome_s  = $_SESSION['nome_s'];

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Acesso feito por <?php echo $nome_s; ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/cover/">

    <!-- Bootstrap core CSS -->
<link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  

    <style>

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="estilopainel.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

  <main role="main" class="inner cover">
    <h1 class="cover-heading">Bem Vindo, <?php echo $nome_s;  ?></h1>
    <p class="lead"></p>
    <p class="lead">
      <a href="destruirsessao.php" class="btn btn-lg btn-secondary">Sair</a>
    </p>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    </div>
  </footer>
</div>
</body>
</html>
