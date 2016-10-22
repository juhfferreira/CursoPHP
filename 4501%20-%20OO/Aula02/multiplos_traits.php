<?php 
	
	trait CRUDUsuario{
		public function cadastrarUsuario(){
			echo "<hr /> Cadastrando Usuario....<hr />";
		}

		public function deletarUsuario(){
			echo "Deletando Usuario....<hr />";
		}

		//funcao com o mesmo nome da trait Validacoes
		public function validarCPF(){
			echo "Validando CPF na Trait....<hr />";
		}
	}

	trait Validacoes{
		//funcao com o mesmo nome da trait CRUDUsuario
		public function validarCPF(){
			echo "Validando CPF na Trait....<hr />";
		}

		public function validarEmail(){
			echo "Validando Email...<hr />";
		}
	}

	class Usuario{
		use CRUDUsuario, Validacoes{
		//ha duas funcoes com o mesmo nome nas duas traits, para evitar conflito devemos fazer o seguinte:
		Validacoes::validarCPF insteadof CRUDUsuario;
		}
	}

	$obj = new Usuario();
	$obj->cadastrarUsuario();
	$obj->deletarUsuario();
	$obj->validarCPF();
	$obj->validarEmail();
