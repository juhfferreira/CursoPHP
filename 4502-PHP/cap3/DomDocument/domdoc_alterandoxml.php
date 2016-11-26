<?php

	$dom=new DOMDocument();
	$dom->load('cursos.xml');

	$categoria=$dom->getElementsByTagName('categoria');
	$categorias=item(1)->nodeValue='PHP Enterprise';

	$dom->save('cursos.xml');

	header('Content-type: text/xml');

	echo($dom->saveXML());