<?php

	fucntion autoload($classe){

		$arq = $classe.'.php';
		if(file_exists($arq)){
			require($arq);
		}else{
			echo 'Essa classe nao existe';
		}
	}

	spl_autoload_register('autoload');