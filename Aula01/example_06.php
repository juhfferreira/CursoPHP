<?php
	
	echo "\n+=================FOR 1=================+\n";

	for ($i=0; $i<=20; $i++){
		echo "Contador $i\n";
	}

    echo "\n+=================FOR 2=================+\n";

	for ($i=20; $i>=0; $i--){
		echo "Contador $i\n";
	}

	echo "\n+=================FOR ARRAY=================+\n";
	$times = ["Corinthians", "Santos", "Palmeiras", "Sao Paulo"];

	for ($i=0; $i<count($times); $i++){
		//echo "($i+1).": ".$times[$i];

		$string = sprintf("%d | %s", ($i+1), $times[$i]);
		echo "$string\n";
	}
	//sprintf(string, param1, param2,...)
	
	echo "\n+=================FOR PERCORRE STRING=================+\n";

	$nome = "Juliana";
	
		for($i=0, $n= strlen($nome); $i<$n; $i++){
		echo $nome[$i]."\n";
	

	echo "\n+=================FOR CONTINUE=================+\n";

		//CONTINUE
		//pula a 4a iteracao e volta pro for
		for($i=0; $i<20; $i++){
			if($i==3){
				continue;
			}
			echo "Contador: $i\n";
		}

	echo "\n+=================FOR BREAK=================+\n";
		//BREAK
		//para na 3a iteracao
		for($i=0; $i<20; $i++){
			if($i==3){
				break;
			}
			echo "Contador: $i\n";
		}

		echo "\n+=================FOR CONTINUE=================+\n";

			for($i=1; $i<100; $i++){
			if(($i %2)==0){
				continue;
			}
			echo "$i\n";
		}


