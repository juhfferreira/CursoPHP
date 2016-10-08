<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		if(!isset($_POST['to']) || empty($_POST['to'])) {
			echo "<script>alert('Por favor, informe o campo PARA')</script>";
		}
	}

	if($_SERVER['REQUEST_METHOD']=='POST'){
		if(!isset($_POST['body']) || empty($_POST['body'])) {
			echo "<script>alert('Por favor, informe o campo CORPO')</script>";
		}

		if(mail($_POST['to'], 'Teste', $_POST['body'])){
			echo "<div class='alert alert-success'>";
			echo "Email enviado com sucesso";
			echo "</div>";
		}
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
				<form method="POST" action="pagina04.php">
					<div class="form-horizontal" class="col-sm-2 control-label">
						<label>Para:</label>
						<input type="text" class="form-control" name="to" />
					</div>
					<br />
					<div class="form-horizontal" class="col-sm-2 control-label">
						<label>Corpo:</label>
						<textarea name="body" class="form-control"></textarea>
					</div>
					<br />
					<input class="btn btn-info"type="submit" value="ENVIAR" />
				</form>
			</div>
		</div>
		</body>

</html>