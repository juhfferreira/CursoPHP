<?php

	//Prepared Statment
	$s = "INSERT (nome, senha) VALUES (%s, %s)";
	$query = sprintf($s, htmlspecialchars('juliana'), '*******');

	//mysql_query($query);
	echo $query;

	# echo htmlspecialchars("\<tr\>AS\</tr\>");
	/* Sempre utilizar o htmlspecialchars para entradas do usuario*/