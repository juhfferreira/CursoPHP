<?php 
	require "static/bootstrap.php";
	
?>
	
<html>
	<head>
		<link href="static/cadastro.css" type="text/css" rel="stylesheet" />
		<title>Cadastro de Usuarios</title>

	</head>
	<body>


		<!-- ==========================================CADASTRO========================================== -->
		
		<div class="container">
        <div class="card card-container">
        	<center><h3>>Cadastro de Usuarios</h3></center><br />
					<form method="POST" action="../Control/cadastrar.php">
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