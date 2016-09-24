<?php

	//

	$kills_a = array("PHP", "Test Driven Development", "Scrum");
	$kills_b = "PHP, Test Driven Development, Scrum";
	
	echo "<h2>Implode(glue, pieces)</h2>";
	$value = implode($kills_a, ',');
	var_dump($value);
	echo "<hr>";

	echo "<h2>Explode(delimiter, string)</h2>";
	$value = explode(',', $kills_b);
	var_dump($value);
	echo "<hr>";
