<?php 
	$simpleXML=new SimpleXMLElement('cursos.xml', null, true);
	$attrs=$simpleXML->curso[0]->attributes();
	
	$attrs->preco->='900';
	$simpleXML->saveXML('cursos.xml');

	header('Content-type: text/xml');

	echo $simpleXML->asXML();