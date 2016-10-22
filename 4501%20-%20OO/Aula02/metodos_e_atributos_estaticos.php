<?php

	class usuario{

		public static $tipoUsuario = "Administrativo";
		private $nome;
		private $email;

		//SETTERS
		
		public function setNome($valor){
			$this->nome = $valor;
		}

		public function setEmail($valor){
			$this->email = $valor;
		}

		//GETTERS

		public function getNome(){
			return $this->nome;
		}

		public function getEmail(){
			return $this->email;
		}

		public static function mostrarTipoUsuario(){
			return self::$tipoUsuario;
		}

	}
	
	$usuario = new Usuario();
	$usuario->setNome("Juliana Ferreira");
	$usuario->setEmail("juhfferreira@gmail.com");

	echo "Nome: {$usuario->getNome()}";
	echo "<hr />";
	echo "Email: {$usuario->getEmail()}";
	echo "<hr />";
	echo "Tipo de Usuario: ".Usuario::mostrarTipoUsuario();

