<?php
	
	//A diferenca esta no tratamento de erro
	include "example_0.php"; //Se o arquivo nao for encontrado: Da erro warning e continua a execucao do arquivo
	echo "\t**=================================**\n";
	require "example_0.php"; //Se o arquivo nao for encontrado: Erro fatal, a execucao eh interrompida
	echo "\t**=================================**\n";