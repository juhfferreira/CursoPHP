<?php 
	require_once "CORE/db_mysql.php"; 
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
		<?php 
		//Recuperar o ID do usuario selecionado
		$id=htmlspecialchars($_GET['id']);
		//Construindo a consulta do ID passado
		$sql = "SELECT * FROM usuarios WHERE ID='%d'"; 
		//Moldar a query do banco com os valores
		$query=sprintf($sql, $id);
		$mysqli_query= mysqli_query($conn, $query);
		$row=mysqli_fetch_assoc($mysqli_query); 

		?>

		<!-- ==========================================CADASTRO========================================== -->
		
		<div class="container">
        <div class="card card-container">
        	<center><h1><b>whOO</b></h1><h4>Editando usuario <?=$row['NOME'] ?></h4></center><br />
					<form method="POST" action="<?= $URL_PATH ?>CORE/update.php?id='<?= $id ?>'">
					<div class="form-group">
					    <label for="exampleInputName">Nome</label>
					    <input type="text" name="nome" class="form-control" id="exampleInputName" value="<?=$row['NOME'] ?>" >
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">E-mail</label>
					    <input type="email" name="email" class="form-control" id="exampleInputEmail1"  value="<?=$row['EMAIL'] ?>" >
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Senha</label>
					    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" value="*******" >
					  </div>
					   
					  <div class="panel-footer panel-custom">
					  	
                            <button type="submit" class="btn btn-block btn-sm btn-primary btn-info">Salvar</button>
                    </div>
					</form>
		</div>
		</div>
		<!-- ==========================================/CADASTRO========================================== -->

	</body>
</html>



