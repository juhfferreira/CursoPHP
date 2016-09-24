<?php
	if(isset( $_GET['username'])){
		echo "Seja bem vindo, ".$_GET['username'];
	}else{
		echo"<div class='alert alert-danger'>";
		echo"Voce precisa especificar o 'username'";
		echo"</div>";
	}
	
?>


<html>
	<head>
		<?php require "bootstrap.php"; ?>
		<title>Email | METHOD :: POST</title>
	</head>

		<body>
			
		<div class="panel panel-default">
  			<div class="panel-body">
				<form class="form-inline" method="GET" action="pagina02.php">
					<div class="form-group">
						<label>Nome:</label>
						<input type="text" class="form-control" name="username" />
					</div>
					<input class="btn btn-info"type="submit" value="ENVIAR" />
				</form>
			</div>
		</div>
		</body>

</html>