<?php

	$n1 = 7;
	$n2 = 10;
	$n3 = 19;
	$n4 = 20;
	
	$a = $n1>5 && $n2>5; //e
	$b = $n1>5 || $n2<5; //or
	$c = $n3<15 and $n4!=5; //e
	$d = $n3<15 or $n4!=5; //or

	var_dump($a);
	var_dump($b);
	var_dump($c);
	var_dump($d);