<?php
	
	$a = 10;
	$b = 10;
	$p = 3.7;

	$resultado = $a + $b;

	//Pegar a variavel resultado e diminuir a porcentagem
	//Primeira forma
	$resultado = $resultado - $p;
	//Segunda forma : funciona com operacoes e concatenacao
	$resultado -= $p;

	echo $resultado."\n";
