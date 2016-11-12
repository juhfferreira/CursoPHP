<?php

	require_once "classes_abstrata.php";

	//Eh incluso o final no inicio da assinatura da classe
	final class ContaPoupanca1 extends AbstractConta{
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


	//a contaPoupanca nao podera ser extendida (erro fatal)
	class ContaPoupancaPremium extends ContaPoupanca1{

	}