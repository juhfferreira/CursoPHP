<?php
	abstract class AbstractConta{
		public $titular;
		public $saldo = 0;

		public function depositar($valor){
			$this->saldo+=$valor;
			echo "Valor depositado: ".$this->saldo."<br />";
	
		}

		public function sacar($valor){
			echo "<br />Saque: ".$valor;
			$this->saldo-=$valor;
	
		}

		public function verSaldo(){
			echo "<br />Saldo atual: ".$this->saldo."<br />";
		}
		//Metodo abstrato
		public abstract function mostrarTipoDeConta();

	}


	//Classe abstrata POUPANCA
	class ContaPoupanca extends AbstractConta{
		public $juros = 0.5;
		public function calcularJuros(){
			echo "Valor do juros: ".$this->saldo * $this->juros;
			$this->saldo*= 1+($this->juros);
			echo "<br/> Saldo Atual com o juros: ".$this->saldo;
		}

		//implementando o metodo abstrato mostrarTipoDeConta
		public function mostrarTipoDeConta(){

			echo "Sou uma conta Poupanca!!!<br /> <br />";

		}
	}

	//Classe abstrata CORRENTE
	class ContaCorrente extends AbstractConta{
		public function mostrarTipoDeConta(){
			echo "<br /><br />Sou uma conta Corrente!!!<br /> <br />";
		}
	}

	$conta1 = new ContaPoupanca();
	$conta1->mostrarTipoDeConta();
	$conta1->depositar(300);
	$conta1->calcularJuros();
	$conta1->sacar(500);
	$conta1->verSaldo();

	$conta2 = new ContaCorrente();
	$conta2->mostrarTipoDeConta();

