<?php


	
class usuario {


	public $nome;
	public $email;
	public $senha;
	public $sql;




	function verificarusuario (){
		$sql   = $this->sql;
		$email = $this->email;
		$senha = $this->senha;
		

		$query = $sql->prepare("SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha' ");
		$query->execute();

		$contador = $query->rowCount();

		return $contador;


	}

	function getnome(){

		$sql   = $this->sql;
		$email = $this->email;
		$senha = $this->senha;

		$query = $sql->prepare("SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha' ");
		$query->execute();


		$rows = $query->fetch();
		return $rows['nome'];
		

		
	}

	function getemail(){

		$email = $this->email;
		return $email;
	}

	function getsenha(){

		$senha = $this->senha;
		return $senha;
	}
}