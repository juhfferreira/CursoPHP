<?php

	class calculadoraMedia{

		public $nota1;
		public $nota2;
		const APROVADO = 7;
		const REPROVADO = 3;

		public function media(){
			return ($this->nota1 + $this->nota2)/2;
		}
	}

	$obj = new calculadoraMedia();
	$obj->nota1=6;
	$obj->nota2=8;
	$media = $obj->media();

	if($media >= calculadoraMedia::APROVADO){
			echo "Aluno aprovado com nota {$media}";
		}else if($media <= calculadoraMedia::REPROVADO){
			echo "Aluno reporvado com nota {$media}";
		}else{
			echo "Aluno em recuperacao com nota {$media}";
		}


