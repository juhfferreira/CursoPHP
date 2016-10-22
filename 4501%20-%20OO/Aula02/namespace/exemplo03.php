<?php

		namespace Bradesco;
		class Conta{

		protected $banco = "Bradesco";

			public function getBanco(){

				return $this->banco;
			}
		}


		namespace Itau;
		class Conta{

		protected $banco = "Itau";

			public function getBanco(){
				return $this->banco;
			}
		}


		$bradesco = new \Bradesco\Conta();
		echo "Banco: {$bradesco->getBanco()} <hr />";

		//OU//

		/*use \Bradesco\Conta as ContaBradesco;
		$bradesco = new ContaBradesco();
		echo "Banco: {$bradesco->getBanco()} <hr />";*/

		$itau = new Conta();
		echo "Banco: {$itau->getBanco()} <hr />";