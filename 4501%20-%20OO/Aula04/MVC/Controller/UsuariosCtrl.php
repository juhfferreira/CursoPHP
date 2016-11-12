<?php

	require('../Model/UsuariosModel.php');
	require('../View/UsuariosView.php');

	class UsuariosCtrl{
		private $mod;
		private $view;

		public function __construct(){
			$this->mod = new Usuarios('Nome', 'Email', 'Senha');
			$this->view = new UsuariosView();
		}


		public function getObj(){
			return $this->mod;
		}

	}

	$ctrl = new UsuariosCtrl();
	$ctrl->view->mostrarDados($ctrl->mod);