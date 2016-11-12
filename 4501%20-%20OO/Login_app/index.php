<html>
<head>
	<link rel="stylesheet" href="static/index.css">
	<? require_once "static/bootstrap.php"; ?>

	<title>Login</title>
				<body>
						<div id="fullscreen_bg" class="fullscreen_bg"/>

						<div class="container">

							<form class="form-signin" action="home.php" method='POST'>
								<h1 class="form-signin-heading text-muted"><img src="static/login (1).png"></img></h1>
								<input type="text" class="form-control" placeholder="usuario" id='login' name='login'required="" autofocus="">
								<input type="password" class="form-control" placeholder="senha" id='senha' name='senha' required="">
								<button class="btn btn-lg btn-danger btn-block" type="submit">
									Entrar
								</button>
							</form>

						</div>
			</body>
</head>
</html>