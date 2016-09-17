<html>

	<head>
		<link rel="stylesheet" href="estilos.css">
		<title>Index</title>
	</head>

	<body>
		<h1>
			<?php echo "Seja bem vindo"; ?>
		</h1>
		<table border="2">
			<thead>
				<th>Coluna 1</th>
				<th>Coluna 2</th>
			</thead>	
				<tbody>
				<?php for($i=0; $i<10; $i++){
					echo "<tr>";
					echo "<td>Coluna{$i}.1</td>";
					echo "<td>Coluna{$i}.2</td>";
					echo "</tr>";
				}
				?>
				</tbody>
			
		</table>
	</body>

</html>