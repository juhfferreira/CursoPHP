<?php

	class Conta{
		private $titular;
		private $saldo;

		public function getTitular(){
			return $this->titular;
		}

		public function getSaldo(){
			return $this->saldo;
		}

		public function setTitular($nome){
			$this->titular=$nome;
		}

		public function depositar($valor){
			$this->saldo += $valor;
		}

		public function verSaldo(){
			return $this->saldo;
		}

		public function sacar($valor){
			if($valor > $this->saldo){
				throw new Exception("Saldo Insuficiente", 1000);
			}else{
				$this->saldo -= $valor;
			}
		}

		
	}

	try{
		//Aqui fica o bloco de codigo que sera executado
		$conta = new Conta();
		$conta->setTitular("Juliana Ferreira");
		$conta->depositar(100);
		$conta->sacar(200);
	}catch(Exception $e){
		//Aqui lancamos a excecao e o tratamento do erro
		echo "ERRO {$e->getCode()} 
			   <b>{$e->getMessage()}</b> <hr />";
	}finally{
		echo  "Saldo atual: {$conta->verSaldo()}";
	}