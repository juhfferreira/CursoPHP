<?php require "common.php" ?>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="estilos.css">
	<title>Pagina 1</title>

</head>

	<body>
		<div class="container">
		<div class="panel panel-default">
		<?php 

			function soma_test($a, $b, $resultado){
				echo "a=$a, b=$b, resultado=$resultado <br />";
				return $resultado==soma($a, $b);
			}

			if(soma_test(1,2,3))
				echo "TESTE OK";
			else 
				echo "TESTE FAIL";

			$minha_func=function($valor){
				return $valor+10;
			};

			echo $minha_func(15)."<br>";

		?>
	</div>
	</div>
	</body>

</html>
	
	