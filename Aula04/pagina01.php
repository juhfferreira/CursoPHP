<?php
/*<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="estilos.css">
	<title>Pagina 1</title>

</head>

	<body>*/




	$string = "Juliana";
	//str to upper (string to upper case)
	echo "<h2>strtoupper($string)</h2><br />";
	echo strtoupper($string);
	echo "<hr>";
	//lowercase
	echo "<h2>strtolower($string)</h2><br />";
	echo strtolower($string);
	echo "<hr>";
	//primeira letra maiuscula
	echo "<h2>ucfirst($string)</h2><br />";
	echo ucfirst($string);
	echo "<hr>";
	//repete o valor x vezes
	echo "<h2>str_repeat(string, multiplicador)</h2><br />";
	echo str_repeat($string, 10);
	echo "<hr>";
	//procura um valor numa variavel e substitui por um novo valor
	echo "<h2>str_replace(search, novo_valor, valor)</h2><br />";
	echo str_replace("Ju", "Xu", $string);
	echo "<hr>";
	//retorna certa parte de uma string de acordo com as posicoes dadas
	echo "<h2>substr(string, posicao)</h2><br />";
	echo "Substr: ".substr("ABCDEFGHIJ", 3, 6);
	echo "<hr>";
	//retorna a posicao do caractere desejado
	echo "<h2>strpos(valor, pesquisa)</h2><br />";
	echo strpos("0123456789", '7')."<br />";
	echo strpos("0123456789", '9')."<br />";
	echo strpos("0123456789", 'A')."<br />";
	echo "<hr>";
	//retorna uma string a partir do caractere inserido
	echo "<h2>strstr(valor, pesquisa)</h2><br />";
	echo strstr('meu.nome@4linuxemelhor', '@');
	echo "<hr>";
	//elimina caracteres em branco
	echo "<h2>trim(string)</h2><br />";
	$s = '    SEJA BEM VINDO    ';
	var_dump($s);
	echo var_dump(trim($s));
	echo "<hr>";
	//



	//</body>

//</html>