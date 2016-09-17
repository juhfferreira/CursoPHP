<?php
	
	function _merge($chaves, $valores){
		//TODO: retornar um array associativo
		//   	com as chaves e valores
		$resultado= array();

			for($i=0, $n=count($chaves); $i<$n; $i++){
			$chave=$chaves[$i];
			$valor=$valores[$i];

			$resultado[$chave]=$valor;
			}
		return $resultado;
	}

$c=array('rafael', 'lucas', 'joana', 'vivane');
$v=array('maca', 'banana', 'pera', 'morango');

$resultado= _merge($c, $v);


