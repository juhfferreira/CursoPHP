<?php

class User {
	public $nome;
	public $email;
	public $senha;

	public function cadastrarUser(){
		if($this->nome && $this->email && $this->senha = null){
			echo "erro";
		}else {
		echo "Usuario ".$this->nome." cadastrado com sucesso!!!!";
		}
	}
	
}