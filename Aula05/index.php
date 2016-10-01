<?php
 	if (! isset($_SESSION)) session_start(); 
 	if (! isset($_SESSION['email'])) {
 		header('Location: pagina5.php');
 	}
 ?>

<html>
<head>

	 <?php require "static/bootstrap.php";?>
		<title>
			Seja bem vindo
		</title>
<body>
	<center>

		<h1>MEU SITE</h1>

		<p>Logado: <?= $_SESSION['email'] ?></p>
		<p>Senha: <?= $_SESSION['senha'] ?></p>
		<a href="logout.php">Sair</a>

	</center>


</body>

</head>
</html>