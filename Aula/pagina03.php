<?php
	if(isset($_GET['id'])){
		echo "Voce esta acessando a pagina ".$_GET['id'];
	}
	$paginas = array(1,2,3,4,5,6);
?>

<html>
	<head>
		<?php require "bootstrap.php"; ?>
		<title>EPaginacao | METHOD :: GET</title>
	</head>

		<body>
			<?php foreach ($paginas as $pagina): ?>
			<a href="pagina03.php?id=<?= $pagina ?>">
					<?= $pagina ?>
			</a>
			<?php endforeach ?>
		</body>

</html>