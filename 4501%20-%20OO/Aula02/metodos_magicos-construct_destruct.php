<?php

	class Usuario{
		private $nome;
		private $email;

		//**********Passagem por Atributos**********//
		/*public function __construct($nome, $email){
			$this->nome=$nome;
			$this->email=$email;
		}*/

		//**********Passagem por Array**********//
		public function __construct(array $dados){
			//foreach dados como CHAVE => VALOR ex: NOME => JULIANA como na passagem dos dados
			foreach($dados as $index => $value){
				$this->$index = $value;
			}
		}


		public function getNome(){
			return $this->nome;
		}

		public function getEmail(){
			return $this->email;
		}

		public function __destruct(){
			echo "<hr /> Objeto Destruido<hr /> ";
		}

	}

	//**********Passagem por Atributos**********//
	/*$usuario = new Usuario("Nome Usuario", "email@4linux");
		echo $usuario->getNome();
		echo "<hr />";
		echo $usuario->getEmail();*/


	//**********Passagem por Array**********//
	$dados = array('nome' => "Juliana", 'email' => "juliana@gmail");
	$usuario = new Usuario($dados);
		echo $usuario->getNome();
		echo "<hr />";
		echo $usuario->getEmail();