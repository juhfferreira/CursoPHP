<?php

require "../CORE/db_mysql.php";

$query = mysqli_query($conn, 'SELECT * FROM usuarios');

$resultado = mysqli_fetch_assoc($query);

//var_dump($resultado);

echo "Bem-vindo(a), usuario(a) ".$resultado['NOME']."!!";



	