<?php
	if (isset($_GET['username'])) {
		echo "seja bem vindo. " . $_GET ['username'];
	} 
	else {
		echo "<div class='Alert alert-danger'>";
		echo "Voce precisa especificar o 'username'";
		echo "</div>";
	}
	echo $_GET['username'];
?>

<html>
<?php require "static/bootstrap.php";?>
 	<head>
 			<title> EMAIL |METHOD :: GET </title>
 	</head>	
 		<body>
 				<form method="GET" action="pagina2.php">
 					<div class="form-group">
 						<label>Nome:</label>
 						<input type="text" class="form-control" name="username"/>
 					</div>

 					<input type="submit" value="enviar" class="btn btn-primary" />
 				</form>
 		</body>

</html>