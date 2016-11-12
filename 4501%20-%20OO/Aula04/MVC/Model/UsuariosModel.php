<?php
	
		require("../db/db.php");
		

		class Usuarios{

			private $id;
			private $nome;
			private $email;
			private $senha;

			private $db;

			public function __construct($nome, $email, $senha, $id=null){
				$this->db = Conn::conectar();
				$this->nome = $nome;
				$this->email = $email;
				$this->senha = sha1('itsatrap+'.$senha);

				$this->id = $id;
				//var_dump($this->db);
			}

			public function getID(){
				return $this->id;
			}

			public function setID(){
				$this->id = $valor;
			}


			public function getNome(){
				return $this->nome;
			}

			public function setNome(){
				$this->nome = $valor;
			}

			public function getEmail(){
				return $this->email;
			}

			public function setEmail(){
				$this->email = $valor;
			}

			public function getSenha(){
				return $this->senha;
			}


			public function setSenha(){
				$this->senha = $valor;
			}
		}


		$mod = new Usuarios('Nome', 'Email', 'Senha');
		//var_dump($mod);