<?php
	/*criando uma classe Usuario (modelo de usuario)
	 * o Nome da Classe deve ser sempre com a primeira letra maiuscula*/
	class Usuario {
		//estrutura=visibilidade nomeDoAtributo 
		public $email; 
		public $senha;
		//METODOS DA CLASSE USUARIO
		//estrutura=visibilidade function nomeDoMetodo
		public function cadastrarUsuario(){
			/*$this->email="email@4linux.com.br";
			$this->senha="123456";*/
			echo "<h1>Cadastrando Usuario...</h1>";
			echo "<br />";
			echo $this->email;
			echo "<br />";
			echo $this->senha;
			echo "<hr />";
		}
		public function atualizarUsuario(){
			
		}
	}
	
	/*INSTANCIANDO UM OBJETO DO TIPO USUARIO (Criando um usuario)
	 * eh necessaria a palavra new para instanciar o objeto*/
	$usuario = new Usuario();
	//Chamando o metodo da classe no objeto
	$usuario->email="email@4linux.com.br";
	$usuario->senha="123456";
	$usuario->cadastrarUsuario();
	
	//Instanciando um novo objeto
	$usuario2 = new Usuario();
	$usuario2->email="email2@4linux.com.br";
	$usuario2->senha="654321";
	$usuario2->cadastrarUsuario();

?>

<html>
	<head>
		<title>Criando Classes</title>
	</head>

	<body>

			
	</body>

</html>


	