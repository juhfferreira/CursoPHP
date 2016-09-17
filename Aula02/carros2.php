<html>

	<head>
		<title>Meus Carros</title>
	</head>

	<body>
			<h1><br>Meus Carros</h1>
				<thead>
				<th></th>
			    <th></th>
				</thead>	
				<tbody>
					<?php 
					require "array/dono_carros.php";
					require "array/carros_db.php";
					foreach ($array as $chave => $valor) {
						echo "$chave ===> $valor<br>";
					}
					echo "<hr>";
					foreach ($carros as $carro) {
						echo "$carro<br>";
					}
				?>
				</tbody>
		</body>

</html>