<?php 
	if(isset($_GET['id'])) {
		echo "voce esta acessando a pagina: " . $_GET['id'];
	}
	$paginas = array(1, 2, 3, 4, 5, 6);
?>



<html>
<?php require "static/bootstrap.php";?>
 	<head>
 			<title> METHOD :: GET </title>
 	</head>	
 		<body>
 				<?php foreach ($paginas as $pagina): ?>
 					<a href="pagina3.php?id=<?= $pagina ?>">
 					
 					<?=$pagina ?>
 				</a>

				<?php endforeach ?> 				
				
 		</body>
</html>