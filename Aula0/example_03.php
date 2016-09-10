<?php
		
		$a = 10;
		$b = 3;

		echo $a % $b."\n\n"; //mod % printa o resto da divisao

		//limitando
		$random = rand(); //funcao que gera um numero aleatorio
		$resultado = $random %100;

		echo "($random)=>$resultado"."\n";


	    //Impar e par
		$random = rand(); //funcao que gera um numero aleatorio
		$resultado = $random %2;

		echo "($random)=>$resultado"."\n";