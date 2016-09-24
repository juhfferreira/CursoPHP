<?php

	//Usuario Hard Coded


	*if($_SERVER['REQUEST_METHOD']=='POST'){
		if(!isset($_POST['user']) || empty($_POST['user'])) {
			echo "<script>alert('Por favor, informe o campo USUARIO')</script>";
		}
	}

	if($_SERVER['REQUEST_METHOD']=='POST'){
		if(!isset($_POST['password']) || empty($_POST['password'])) {
			echo "<script>alert('Por favor, informe o campo SENHA')</script>";
		}

	}
	*/

	
?>

<html>
	<head>
		<?php require "bootstrap.php"; ?>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="static/style.css">
		<!-- JavaScript -->
		<script src="static/scripts.js"></script>
		
		<title></title>
	</head>
	<body>

			<div class="container">
				<div class="login-container">
            		<div id="output">

            		</div>
            			<div class="avatar"><img src=""></div>
            				<div class="form-box">
                				<form action="index.php" method="POST">
				                    <input name="user" type="text" placeholder="usuario">
				                    <input type="password" placeholder="senha">
				                    <button class="btn btn-info btn-block login" type="submit">Login</button>
                				</form>
            				</div>
       					 </div>
        
			</div>

	</body>	
</html>