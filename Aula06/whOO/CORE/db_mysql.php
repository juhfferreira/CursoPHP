<?php

require "settings.php";

//CONECTORES pag 113

	//CONECTANDO AO BANCO DE DADOS
	//STRING, ARRAY, INT, FLOAT, DOUBLE, RESOURCE
	$conn = mysqli_connect(
			$DB_HOSTNAME,
			$DB_USUARIO,
			$DB_SENHA,
			$DB_DATABASE
			) or die ('Nao foi possivel se conectar ao BANCO DE DADOS');



