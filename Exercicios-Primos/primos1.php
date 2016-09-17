<?php

	//Arquivo: primos.php
	//Calcular a qtdade de primos

/**
*Funcao para calcular os valores primos 
*Ate o ultimo_valor que eh passado por
*parametro desta funcao
*/

function prime($ultimo_valor){

	for ($i=2; $i<=$ultimo_valor; $i++){
		if($i!=2){
			if($i %2 ==0)
				continue;
			}	
			//echo "\nValor: $i\n";
		$counter=0;
		//echo "Validando: ";
		for($j=1; $j<=$i; $j++){
			//echo "$j ";
			if($i % $j == 0){
				$counter+=1;
			}
		}
		//echo "\n";
		
		if($counter==2){
			echo " [$i]";
		}
	}
}

echo "Digite um valor> ";
$a=readline();
echo "Primos:";
prime($a);
