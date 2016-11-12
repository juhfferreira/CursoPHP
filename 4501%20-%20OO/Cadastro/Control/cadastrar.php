<?php 
	require_once "../Model/user.php";
	 	//define as variaveis do formulario

	if ($_POST['nome']==NULL or $_POST['email'] =null or $_POST['senha']==null){
		echo "Erro, digite os campos corretamente";
	}else{

 	$nome= htmlspecialchars($_POST['nome']);
 	$email= htmlspecialchars($_POST['email']);
 	$senha= htmlspecialchars($_POST['senha']);
 	//define senha segura ;D
 	$sec_senha=sha1('itsatrap+'.$senha); //salt


	
	$usuario = new User();
	$usuario->nome=$nome;
	$usuario->email=$email;
	$usuario->senha=$sec_senha;
	$usuario->cadastrarUser();

	}