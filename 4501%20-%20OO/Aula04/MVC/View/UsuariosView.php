<?php
		
	

		class UsuariosView{

			private $mod;


			public function __construct($mod){
				$this->mod = $mod;
			}

			public function mostrarDados(UsuariosModel $usuarios){
				echo "Nome do Usuario: {$usuarios->getNome()}";
				echo "Email do Usuario: {$usuarios->getEmail()}";
				echo "Senha do Usuario: {$usuarios->getSenha()}";
			}
		}

