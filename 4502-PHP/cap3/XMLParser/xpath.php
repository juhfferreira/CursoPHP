<?php

	$xml = new SimpleXMLElement('cursos.xml', null, true);
	$consulta=$xml->xpath("/cursos/curso[@preco > '1000']");

	echo '<pre>';
	print_r($consulta);

