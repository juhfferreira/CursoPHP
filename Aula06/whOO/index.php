<?php
	require_once "CORE/db_mysql.php";
	require_once "navbar.php";
	require_once "CORE/settings.php";

 	if (! isset($_SESSION)) session_start(); 
 	if (! isset($_SESSION['email'])) {
 		header('Location: '.$URL_PATH.'login.php');
 	}
 ?>

 

<html>
<head>
	
	<? require "static/bootstrap.php"; ?>
	<link rel="stylesheet" type="text/css" href="static/index.css">
	<link href="static/cadastro.css" type="text/css" rel="stylesheet" />
	 <title>Seja bem vindo(a) <?= $_SESSION['nome'] ?> </title>
<body>
	<!-- ==========================================TABELA DE USUARIOS========================================== -->

		<div class="container">
		  <table class="table table-hover table-bordered ">
		  	<thead>
		    <th>ID</th>
		    <th>Nome</th>
		    <th>Email</th>
		    <th>Acoes</th>
		    </thead>
			    <tbody>
			    	<?php

			    		$mysqli_query = mysqli_query($conn, "SELECT * FROM usuarios");

			    	?>

			    	<?php while(($row=mysqli_fetch_assoc($mysqli_query))): ?>
			    		<tr>
			    			<td><?=$row['ID'] ?></td>
			    			<td><?=$row['NOME'] ?></td>
			    			<td><?=$row['EMAIL'] ?></td>
			    			<td><a href="<? $URL_PATH ?>edit_user.php?id=<?=$row['ID'] ?>" class="btn btn-info btn-sm">Detalhes</a>
			    				<a href="<? $URL_PATH ?>CORE/delete.php?id=<?=$row['ID'] ?>" class="btn btn-danger btn-sm">Excluir</a>
			    			</td>
			    		</tr>	
			    	<?php endwhile ?>


			    </tbody>
		      </table>
		
			</div>			    
		
		

</body>

</head>
</html>