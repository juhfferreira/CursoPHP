<?php
	
		function soma($a, $b){
		$a+=$b;
		return $a; 		
		}
		
		function subtracao($a, $b){
		$a-=$b;
		return $a; 		
		}
		
		function multiplicacao($a, $b){
		$a*=$b;
		return $a; 		
		}
		
		function divisao($a, $b){
			if($b!=0){
				$a/=$b;
				} else {
				$a = "Não existe divisão por zero";				
				}
		return $a;
		}
						
		
		echo "\n\n";		
		echo "\tEscolha uma das opções abaixo\n\n";
		echo "\t[1] SOMA \n\t[2] SUBTRAÇÃO \n\t[3] MULTIPLICAÇÃO \n\t[4] DIVISÃO\n\t[5] SAIR\n";
		echo "\n\t\t>> ";
			$opt=readline();
		
		
		
		while($opt!=5){
			
			switch($opt) {
					
						case 1:
					
						echo "\n\t Digite o primeiro valor: ";
						$a=readline();
						echo "\n\t Digite o segundo valor: ";
						$b=readline();
						$a= soma($a, $b);
						echo "\n\t A soma dos valores é: $a\n";
						
						break;
					
						case 2:
					
						echo "\n\t Digite o primeiro valor: ";
						$a=readline();
						echo "\n\t Digite o segundo valor: ";
						$b=readline();
						$a= subtracao($a, $b);
						echo "\n\t O resultado da subtração dos valores é: $a\n";		
							
						break;
					
						case 3:
					
						echo "\n\t Digite o primeiro valor: ";
						$a=readline();
						echo "\n\t Digite o segundo valor: ";
						$b=readline();
						$a= multiplicacao($a, $b);
						echo "\n\t O resultado da multiplicação dos valores é: $a\n";						
						
						break;
					
						case 4:

						echo "\n\t Digite o primeiro valor: ";
						$a=readline();
						echo "\n\t Digite o segundo valor: ";
						$b=readline();
						$a=divisao($a, $b);
							echo "\n\t O resultado da divisão dos valores é: $a\n";
						break;
					
						default:
						echo "Opção inválida";
			}
			sleep(1);
			echo "\n\t*===========================//===========================*";
			echo "\n";		
			echo "\tEscolha uma das opções abaixo\n\n";
			echo "\t[1] SOMA \n\t[2] SUBTRAÇÃO \n\t[3] MULTIPLICAÇÃO \n\t[4] DIVISÃO\n\t[5] SAIR\n";
			echo "\n\t\t>> ";
			$opt=readline();
		}
