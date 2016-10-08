<?php

	$user = array(
		"email" => 'admin@localhost.com',
		"senha" => '123',
		"nome" => 'administrador'
		);

	//campos obrigatorios de login
	$requireds = array('email', 'senha');

	//Validar a chamada ao URL (via POST)
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		//Validar os campos do $_POST
			foreach ($requireds as $e) {
				if (!array_key_exists($e, $_POST)) {
					header('Location: login.php?error=missing_field');
				}
			}
			$login=$_POST['email'];
			$senha=$_POST['senha'];
			//comparar login/senha do user
			if($login == $user['email'] && $senha == $user['senha']){
				//@session_start();
				if(!isset($_SESSION)) session_start();

				//definir os dados persistindo entre paginas
				$_SESSION['email'] = $login;
				$_SESSION['senha'] = $senha;
				$_SESSION['nome'] = $user['name'];

				header('Location: /')
			}else{
				header('Location: login.php?error=invalid_login');
			}

	}else{
		header('Location: login.php');
	}