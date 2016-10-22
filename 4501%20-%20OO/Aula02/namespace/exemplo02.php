<?php

	require("Bradesco.php");
	require("Itau.php");

	//Primeira forma de utilizar a namespace =====> NAMESPACE\ClasseDesejada
	$bradesco = new Bradesco\Conta();
	echo "Banco: {$bradesco->getBanco()}<hr />";

	$itau = new Itau\Conta();
	echo "Banco: {$itau->getBanco()}<hr />";


	//Segunda forma de utilizar a namespace =====> colocar use NAMESPACE\Classe as APELIDO

	use Itau\Conta as ContaItau;
	$itau = new ContaItau();
	echo "Banco: {$itau->getBanco()}<hr />";
