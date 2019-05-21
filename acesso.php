
<?php

 session_start();
  if((isset ($_SESSION['email_s']) == true) and (isset ($_SESSION['senha_s']) == true))
  {
    header('location:index.php');
  }

  ?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Exemplo Programação, Login.</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="estiloacesso.css" rel="stylesheet">

  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="receptor.php">
      <img class="mb-4" src="images/logo.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="email" name="email" class="form-control" placeholder="Seu email" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" name="senha" class="form-control" placeholder="Senha" required>
      <input type="submit" name="" class="btn btn-lg btn-primary btn-block" value="Login"> 
      <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
    </form>
  </body>
</html>
