<?php

require "settings.php";
// usuario hard coded
$user = array(
		"email" => 'admin@gmail.com',
		"senha" => '123456',
		"nome"  => 'administrador',
	);
// campos obrigatoris de login
$requireds = array('email','senha');
// UFAA: SO PHP AQUI ;D
// TODO: LOGIN
//validar a chamada a URL (via POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	// validar os campos do $_POST
	foreach ($requireds as $e) {
		// valida se o campo foi definido no html
		if (! array_key_exists($e, $_POST)){
			header('Location:'.$URL_PATH.'login.php?error=missing_field');
		}
		// valida se o campo nao possui um valor vazio
		if (empty($_POST[$e])){
			header('Location:'.$URL_PATH.'login.php?error=missing_field');
		}
	}
	
	// atribuicao das variveis do logi
	$login = $_POST['email'];
	$senha = $_POST['senha'];
	
	// comparar a senha do usuario
	
	if ($login == $user['email'] && $senha == $user['senha']){
		// @session_start
		if(! isset($_SESSION)) session_start();
		// definir os dados persistindo entre as paginas
		$_SESSION['email'] = $login;
		$_SESSION['senha'] = $senha;
		$_SESSION['nome'] = $user['nome'];
		header('location: '.$URL_PATH.'index.php');
	}
	else
		{	
			header('Location:'.$URL_PATH.'login.php?error=invalid_login');
		}
}
else {
	// so far we go
	header('Location:'.$URL_PATH.'login.php');
}