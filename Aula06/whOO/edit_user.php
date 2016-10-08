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
        	<center><h1><b>whOO</b></h1><h4>Detalhes do usuario <?=$row['NOME'] ?></h4></center><br />
					<form method="GET" action="<?= $URL_PATH ?>edit_user.php">
					<div class="form-group">
					    <label for="exampleInputName">Nome</label>
					    <input type="text" name="nome" class="form-control" id="exampleInputName" value="<?=$row['NOME'] ?>" readonly>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">E-mail</label>
					    <input type="email" name="email" class="form-control" id="exampleInputEmail1"  value="<?=$row['EMAIL'] ?>" readonly>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Senha</label>
					    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" value="*******" readonly>
					  </div>
					   
					  <div class="panel-footer panel-custom">
					  	<span class="pull-right">
                       <a href="<? $URL_PATH ?>edit.php?id=<?=$row['ID'] ?>" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn  btn-warning">Editar</i></a>
						<a href="<? $URL_PATH ?>CORE/delete.php?id=<?=$row['ID'] ?>" class="btn btn-danger ">Excluir</a>
                        </span>
                    </div>
					</form>
		</div>
		</div>
		<!-- ==========================================/CADASTRO========================================== -->

	</body>
</html>



