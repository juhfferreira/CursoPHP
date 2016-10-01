<?php 
	require "../CORE/db_mysql.php"; 
	require "../static/bootstrap.php";

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		//CADASTRO QUANDO A REQUISICAO FOR POST

			$NOME = htmlspecialchars($_POST['nome']);
			$EMAIL = htmlspecialchars($_POST['email']);
			$SENHA = htmlspecialchars($_POST['senha']);

			/*echo "Nome: ".$NOME."<br />";
			echo "Email: ".$EMAIL."<br />";
			echo "Senha: ".$SENHA."<br />";*/

			//montar a query do BD
			$string="INSERT INTO usuarios (NOME, EMAIL, SENHA)
					 VALUES ('%s', '%s', '%s')";
			$sql = sprintf($string, $NOME, $EMAIL, $SENHA);
			echo "QUERY: ".$sql."<br />";
			$result = mysqli_query($conn, $sql);

			if($result){
				echo "Cadastro realizado com sucesso";
			}else{
				echo "Nao foi possivel realizar o cadastro".$conn->error;
			}
	}
?>
<html>
	<head>
		<link href="../static/pagina5.css" type="text/css" rel="stylesheet" />
		<title>Teste de Cadastro</title>

	</head>
	<body>
		
		<div class="container">
        <div class="card card-container">
        	<center><h1><b>whOO</b></h1></center><br />
			<form method="POST" action="teste_cadastro.php" >
				<b>Nome</b><br />
				<input class="form-control" type="text" name="nome" placehold="NOME" >
				<br />
				<b>Email</b><br />
				<input class="form-control"  type="email" name="email" placehold="EMAIL">
				<br />
				<b>Senha</b><br />
				<input class="form-control"  type="password" name="senha" placehold="SENHA">
				<br />
				<br />
				<center><input class="btn btn-block btn-primary btn-info" type="submit" value="Cadastrar">
				
				
			</form>
		</div>
		</div>


	</body>
</html>



