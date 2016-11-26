<?php
		//carregando por meio de uma variavel
		$dom = new DOMDocument();
		$xml=file_get_contents('cursos.xml');
		$dom->loadXML($xml);
		var_dump($dom);	
		//carregando por meio de uma variavel
		$dom->load('cursos.xml');
		var_dump($dom);	
