<?php

	class Conta{

		public $titular;
		public $saldo=0;

		public function depositar($valor){
			$this->saldo+=$valor;
			echo "<h1>Valor depositado: </h1>";
			echo $this->saldo;

		}

		public function sacar($valor){
			echo "<h3>Valor sacado: </h1>";
			echo $valor;
			$this->saldo-=$valor;
			echo "<h2>Saldo: </h2>";
			echo $this->saldo;
		}
	}

	//Criando classes que herdam caracteristicas da Classe CONTA
	class ContaCorrente extends Conta{

		public function mostraConta(){
			echo "<h1>Conta Corrente---</h1>";
		}


	}

	class ContaPoupanca extends Conta{

		public function mostraConta(){
			echo "<h1>Conta Poupanca---</h1>";
		}

	}
	//fim

	/*$conta1 = new Conta();
	$conta1->titular="Titular da Conta 1";
	$valor=500.00;
	$conta1->depositar($valor);
	echo "<hr />";
	$conta1->sacar($valor);*/

	
	$contaCorrente = new ContaCorrente();
	$contaCorrente->titular="Juliana Ferreira";
	$contaCorrente->mostraConta();
	$contaCorrente->depositar(600);
	

	
	$contaPoupanca = new ContaPoupanca();
	$contaPoupanca->titular="Juliana";
	$contaPoupanca->mostraConta();
	$contaPoupanca->depositar(600);
	

