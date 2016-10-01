<?php
// superglobal vem todos os cabecalhos do http
// $_server faz um vardump
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
	// so vai fazer quando nao vem o to
	if (! isset($_POST['to']) || empty($_POST['to'])) {
		echo "<script>alert('Por favor, informe o campo to')</script>";
	}
	if (! isset($_POST['body']) || empty($_POST['body'])) {
		echo "<script>alert('Por favor, informe o campo body')</script>";
	}
	if (mail($_POST['to'], 'Teste', $_POST['body'])) {
		// para enviar email fazer PHPmailler
		// email do professor 
		// rafael.silva@4linux.com.br rafaeloiveira@gmail.com
		echo "<div class='alert alert-success'>";
		echo "Email enviado com sucesso";
		echo "</div>";
// http://bootsnipp.com/
}
}
?>

<html>
<?php require "static/bootstrap.php";?>
 	<head>
 			<title> EMAIL |METHOD :: GET </title>
 	</head>	
 		<body>
 				<form method="POST" action="pagina4.php">
 					<div class="form-group">
 						<label>To:</label>
 						<input type="text" class="form-control" name="to"required />
 					</div>

 					<div class="form-group">
 						<label>Corpo :</label>
 						<textarea name="body" class="form-control"></textarea>
 					</div>

 					<input type="submit" value="enviar" class="btn btn-primary" />
 				</form>
 		</body>

</html>