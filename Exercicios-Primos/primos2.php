<?php
	//OTIMIZAR PARA O PRIMOS3.PHP
	//Arquivo: primos.php
	//Calcular a qtdade de primos

/**
*Funcao que retorna TRUE se o numero for primo
**/

function eh_primo($numero){
	if($numero == 2)
		return true;

	if($numero %2 == 0)
		return false;
	
		$counter=0;
		for($j=1; $j<=$numero; $j++){
			if($numero % $j == 0){
				$counter+=1;
			}
			if($counter>2)
				return false;
		}
		return $counter==2;		
}

/**
*Funcao que testa os numeros ate o numero max passado pelo user
**/

function prime($ultimo_valor){
	for ($i=2; $i<=$ultimo_valor; $i++){
		if(eh_primo($i)){
			echo " ".$i;
		}	
	}
}

echo "Digite um valor> ";
$a=readline();
echo "Primos:";
prime($a);
