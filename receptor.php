<?php
	
	include('usuario.class.php');
	include('conexao.php');

	// Recebendo dados via post do arquivo acesso.php
	$email = $_POST['email'];
	$senha = $_POST['senha'];



	// Cria um acesso a classe Usuario
	$usuario = new usuario();

	// Declara as variaveis para identificar os usuarios.
	$usuario->email = $email;
	$usuario->senha = $senha;
	$usuario->sql   = $con;


	$retorno_s = $usuario->verificarusuario();

	// Verifica se existe um usuario com os dados aparesentados.
	if($retorno_s == 1) {

	// Inicia Sessão para gravar dados do usuário.	
	session_start();

	$_SESSION['email_s'] = $usuario->getemail();
	$_SESSION['senha_s'] = $usuario->getsenha();
	$_SESSION['nome_s']  = $usuario->getnome();
	
	header("Location:index.php");
	}else {
		header('location:acesso.php');
	}
?>