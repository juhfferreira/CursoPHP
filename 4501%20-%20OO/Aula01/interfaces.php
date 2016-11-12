<?php

	interface InterfaceTV{
		public function ligar();
		public function aumentarVolume();
		public function abaixarVolume();
		public function proximoCanal();
		public function desligar();
	}

	class TV implements InterfaceTV{

		public $volume = 10;
		public $canal = 5;
		public $status = 'OFF';


		public function ligar(){
			$this->status = 'ON';
		}

		public function aumentarVolume(){
			++$this->volume;
			echo "Volume aumentado para: <b>{$this->volume}</b>";
		}

		public function abaixarVolume(){
			--$this->volume;
			echo "Volume abaixado para: <b>{$this->volume}</b>";
		}

		public function proximoCanal(){
			++$this->canal;
			echo "TV  <b>{$this->status}</b>";
		}

		public function desligar(){
			$this->status = 'OFF';
			echo "TV  <b>{$this->status}</b>";
		}


	}

	$tv = new TV();
	$tv->ligar();
	echo "<br />";
	$tv->proximoCanal();
	echo "<br />";
	$tv->aumentarVolume();
	echo "<br />";
	$tv->abaixarVolume();
	echo "<br />";
	$tv->desligar();

