<?php

	require "../CORE/db_mysql.php";
	$query= mysqli_query($conn, 'SELECT*FROM usuarios');
	//$resultado= $query::fetch_all(MYSQLI_ASSOC);

	while(($row=mysqli_fetch_assoc($query))){
		var_dump($row);
		echo "<hr>";
	}

	