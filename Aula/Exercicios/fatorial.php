<?php
	
	$resultado = null;

	function fatorial($numero){
		if($numero != null){
			$resultado=1;
			while ($numero>0){
				$resultado*=$numero;
				$numero--;
			}
			return $resultado;
		}
	}

	if (isset($_GET['value'])) {
		$resultado = fatorial($_GET['value']);
	}

?>

<html>
	<head>
		<?php require "bootstrap.php"; ?>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Calcular Fatorial</title>
	</head>

		<body>
		<div class="container">
		<div class="login-container">
			<div class="panel panel-default">
  				<div class="panel-body">
  							<form action="fatorial.php" method="GET">
							<input class="form-control" type="number" name="value" />
							<br />
							<input class="btn btn-info"type="submit" value="CALCULAR O FATORIAL" />
					</form>
			
			
				<p class="bg-danger">
				Resposta:
				<?php if ($resultado != null): ?>
					<?= $resultado ?>
				<?php endif ?>
				</p>
		</div>
		</div>
		</div>
		</div>
		</body>

</html>