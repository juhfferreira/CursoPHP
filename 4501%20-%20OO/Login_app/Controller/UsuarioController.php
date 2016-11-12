<?php

	namespace Controller;

	use Model\UsuarioModel;
	use Lib\Entity\UsuarioEntity;
	use View\UsuarioView;

	class UsuarioController{

		private $model;
		private $entidade;

		public function __construct(UsuarioModel $model, UsuarioEntity $usuario){
			$this->model=$model;
			$this->entidade=$usuario;
			$this->view = new UsuarioView();
		}

		public function logarUsuario($dados){
			$this->entidade->setLogin($dados['login']);
			$this->entidade->setSenha($dados['senha']);

			$this->model->buscarUsuario($this->entidade);
			if($retorno){
				$this->view->carregarTela();
			}
		}

	}