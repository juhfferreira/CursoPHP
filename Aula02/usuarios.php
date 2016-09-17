<html>

	<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="estilos.css">
		<?php require "array/usuarios.php"; ?>
		<title>Usuarios</title>
	</head>

	<body>
		<div class="container">
		<div class="panel panel-default">
		<table class="table table-striped">
			<thead>
				<th>Nome</th>
				<th>Login</th>
				<th>Acoes</th>
			</thead>
			<tbody>
					<!--//for($i=0, $n=count($users); $i<$n; $i++): 
					//$user=$users[$i];
					//echo $user['name'];
					//
					-->
				<?php foreach($users as $u): ?>
				<tr>
					<td><?= $u['name'] ?></td>
					<td><?= $u['login'] ?></td>
					<td>
					<div class="btn-group">
						<button type="button" class="btn btn-primary">editar</button>
						<button type="button" class="btn btn-danger">excluir</button>
					</div>
					</td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</body>	

</html>