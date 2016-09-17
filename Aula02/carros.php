<html>

	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="estilos.css">
		<title>Meus Carros</title>
	</head>

	<body>

		<div class="container">
			<h1><br>Meus Carros</h1>
		<div class="panel panel-default">
		<table class="table table-hover">
			<thead>
				<th>ID</th>
				<th>Modelo</th>
			</thead>	
				<tbody>
					
				<?php 
					require "array/carros_db.php";
					for($i=0; $i<count($carros); $i++){
					echo "<tr>";
					echo "<td>#${i}</td>";
					echo "<td>".$carros[$i]."</td>";
					echo "</tr>";
				}
				?>
				</tbody>
			</div>
			</div>
		</table>
	</body>

</html>