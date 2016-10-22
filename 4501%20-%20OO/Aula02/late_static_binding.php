<?php

	class Pai{
		protected static $nome = "Classe Pai";

		public static function getNome(){
			//retunr self::$nome ====> quando queremos acessar a classe filha, com o uso do self isso 
			//se torna um problema pois a funcao estara apontando para a classe pai, por isso usamos no lugar de self o static
			//===>
			return static::$nome;
		}
	}

	class Filha extends Pai{
		protected static $nome="Classe Filha";
	}

	echo Filha::getNome();
	echo "<hr />";
	echo Pai::getNome();
	