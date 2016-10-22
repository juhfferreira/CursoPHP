<?php
	
	namespace Bradesco;
	class Conta{
			protected $titular;
			protected $saldo;
			protected $banco;


			public function depositar($valor){
				$this->saldo+=$valor;
			}

			//SALDO

			public function getSaldo(){
				return $this->saldo;
			}

			public function setSaldo($valor){
				$this->saldo=$valor;
			}

			//TITULAR

			public function getTitular(){
				return $this->titular;
			}

			public function setTitular($valor){
				$this->titular=$valor;
			}

			//BANCO

			public function getBanco(){
				return $this->banco;
			}

			public function setBanco($valor){
				$this->banco=$valor;				
			}


		}

	class ContaBradesco extends Conta{
		public function _construct(){
			$this->setBanco("Bradesco");
		}

	}

	namespace Itau;

	class ContaItau extends Conta{
		public function _construct(){
			$this->setBanco("Itau");
		}

	}

	$bradesco = New ContaBradesco();
	echo "Banco: {$bradesco->getBanco()}<hr />";

	$itau = New ContaItau();
	echo "Banco: {$itau->getBanco()}<hr />";
