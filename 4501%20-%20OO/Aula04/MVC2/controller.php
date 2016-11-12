<?php
	require('entity.php');

class Controller{
		private $model;
		private $entity;

		public function __construct(Model $model){
			$this->model = $model;
			$this->entity=new Usuarios();
		}

		public function Cadastrar($dados){
			$this->entity->setNome($dados['nome']);
			$this->entity->setNome($dados['email']);
			$this->entity->setNome($dados['senha']);

			return $this->model->salvar($this->entity);
			}

		public function Atualizar($dados, $id){
			$this->entity->setId($id);
			$this->entity->setNome($dados['nome']);
			$this->entity->setNome($dados['email']);
			$this->entity->setNome($dados['password']);

			return $this->model->editar($this->entity);
			}
	}