<?php

	function fatorial($numero){
		$fatorial = 1;
		while ($numero>0){
			$fatorial*=$numero;
			$numero--;
		}
		return $fatorial;
	}
		echo "Digite um valor: ";
		$valor = readline();
		$fatorial = fatorial($valor);
		echo "\n>> ".$fatorial."\n\n";
