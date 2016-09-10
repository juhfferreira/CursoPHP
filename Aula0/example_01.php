<?php

	// TODO: Colocar a conexao ao banco de dados AQUI.
	
	$string = 'String';
	$inteiro = 10;
	$float = 10.2;

	//Array dentro de outro array
	//Forma UM (para testar)
	$sub_array = ["Azul", "Amarelo", "Rosa"];
	$array = [$sub_array, 5, 15, 5.5];

	//Forma DOIS (para versao final)
	$array2 = [["Azul", "Amarelo", "Rosa"], 5,15];	

	var_dump($array2); //Mostra o tipo, posicao e conteudo da variavel
	echo "\n".$array[1]."\n"; //printa o conteudo da posicao 1 do array