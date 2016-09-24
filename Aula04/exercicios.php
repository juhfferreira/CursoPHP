<?php

	//TODO: Funcao fatorial

	function fatorial($numero){

		for($i=$numero; $i>0;$i--){
			$fatorial=$numero*$i;
			}
		return $fatorial;
	}

	$b = fatorial(5);
	echo $b;