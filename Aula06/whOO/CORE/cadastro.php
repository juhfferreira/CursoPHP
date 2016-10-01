<?php 
	require_once "settings.php";
	require_once "db_mysql.php";
	
	if (! isset($_SESSION)) session_start(); 
 	if (! isset($_SESSION['email'])) {
 		header('Location: '.$URL_PATH.'login.php');
 	}


 	//define as variaveis do formulario
 	$nome= htmlspecialchars($_POST['nome']);
 	$email= htmlspecialchars($_POST['email']);
 	$senha= htmlspecialchars($_POST['senha']);

 	//define senha segura ;D
 	$sec_senha=sha1('itsatrap+'.$senha); //salt
	
	//query (INSERT)
	$sql= "INSERT INTO usuarios (NOME, EMAIL, SENHA)
		   VALUES ('%s', '%s', '%s')";

	$query=sprintf($sql, $nome, $email, $sec_senha);

	//executa comando no banco
	$result= mysqli_query($conn, $query);

	if($result){
		header('Location: '.$URL_PATH.'index.php');
	} else{
		echo "ERRO AO CADASTRAR. ".$conn->error;
	}

