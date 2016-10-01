<?php 
	require_once "CORE/settings.php";
	require_once "navbar.php";
	require "static/bootstrap.php";

	if (! isset($_SESSION)) session_start(); 
 	if (! isset($_SESSION['email'])) {
 		header('Location: '.$URL_PATH.'login.php');
 	}
?>
	
<html>
	<head>
		<link href="static/cadastro.css" type="text/css" rel="stylesheet" />
		<title>whOO || Cadastro de Usuarios</title>

	</head>
	<body>


		<!-- ==========================================CADASTRO========================================== -->
		<br />
		<br />
		<br />
		<div class="container">
        <div class="card card-container">
        	<center><h1><b>whOO</b></h1><h3>Cadastro de Usuarios</h3></center><br />
					<form method="POST" action="<?= $URL_PATH ?>CORE/cadastro.php">
					<div class="form-group">
					    <label for="exampleInputName">Nome</label>
					    <input type="text" name="nome" class="form-control" id="exampleInputName" placeholder="Nome">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">E-mail</label>
					    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Senha</label>
					    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
					  </div>
					   
					  <button type="submit" class="btn btn-block btn-primary btn-info">Cadastrar</button>
					</form>
		</div>
		</div>
		<!-- ==========================================/CADASTRO========================================== -->

	</body>
</html>



