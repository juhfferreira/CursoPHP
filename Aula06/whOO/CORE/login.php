<?php
require_once "db_mysql.php"; 
require "settings.php";
// campos obrigatoris de login
$requireds = array('email','senha');

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
	
	// atribuicao das variveis do login
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$sec_senha=sha1('itsatrap+'.$senha);

	$sql="SELECT * FROM usuarios 
		  WHERE EMAIL='%s'
		  AND SENHA='%s'";

 	$query=sprintf($sql, $email, $sec_senha);
 	$mysqli_query= mysqli_query($conn, $query);
 	$row=mysqli_fetch_assoc($mysqli_query); 

	// comparar a senha do usuario
	
	if ($row){
		// @session_start
		if(! isset($_SESSION)) session_start();
		// definir os dados persistindo entre as paginas
		$_SESSION['email'] = $row['EMAIL'];
		$_SESSION['nome'] = $row['NOME'];
		$_SESSION['id'] = $row['ID'];
		header('Location: '.$URL_PATH.'index.php');
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