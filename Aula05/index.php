<?php if(!isset($_SESSION)) session_start(); ?>
<html>
	<head>
		<?php require "bootstrap.php"; ?>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="static/style.css">
		<!-- JavaScript -->
		<script src="static/scripts.js"></script>
		
		<title><?= $_SESSION['nome'] ?> | MEU SITE</title>
	</head>
	<body>
		Blabla
		<a href="logout.php">Sair</a>
	</body>

</html>