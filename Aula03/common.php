<?php

	//Arquivo que contem todas as funcoes que serao utilizada
	//soma
	function soma($a, $b){
		return $a+$b;
	}
	//
	function my_filter($lista, $func){
		$nova_lista=array();

		foreach ($lista as $element) {
				if($func($element)==true)
					$nova_lista[]=$element;
		}
		return $nova_lista;
	}
	//Desenvolver uma funcao que recebe uma funcao anonima com vlr N
	//Caldula o tempo que a funcao demora para executar
	//DICA:
	//	tempo_inicial=0;
	//	$func($n);
	// 	tempo_final =1;
	// 	return tempo_final - tempo_inicial;
	//Fazer uma funcao que calcula o tempo de processamento de outra funcao