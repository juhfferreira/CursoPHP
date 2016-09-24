<?php

	//funcoes de array

	$keys = array('primeiro', 'segundo', 'terceiro');
	$values = array('Hamilton', 'Rubinho', 'Alonso');

	//combina os arrays keys=>values
	echo "<h2>array_combine(array keys, array values)</h2>";
	$new_array = array_combine($keys, $values);
	var_dump($new_array);
	echo "<hr>";
	//pega o array, transforma os valores em chaves e retorna a quantidade de chaves encontradas
	echo "<h2>array_count_values(values)</h2>";
	$array = array_count_values($values);
	var_dump($array);
	echo "<hr>";
	//compara vetores e mostra as diferencas
	echo "<h2>array_diff(array1, array2)</h2>";
	$array1 = array('um', 'dois', 'tres', 'quatro', 'sete');
	$array2 = array('um', 'dois', 'tres', 'cinco', 'seis');
	$new_array = array_diff($array1, $array2);
	var_dump($new_array);
	echo "<hr>";
	//compara vetores e mostra as diferencas
	echo "<h2>array_merge(array1, array2)</h2>";
	$array1 = array("cor" => "azul", 1, 2, 6, 8);
	$array2 = array("cor" => "rosa", 1,"a", "2", "6", 8, 10, 12);
	$new_array = array_merge($array1, $array2);
	var_dump($new_array);
	echo "<hr>";
	//compara vetores e mostra as diferencas
	echo "<h2>array_sum(array1, array2)</h2>";
	$resultados = array(1, 2, 3, 4, 5, 6, 7);
	$new_array = array_sum($resultados);
	var_dump($new_array);
	echo "<hr>";

