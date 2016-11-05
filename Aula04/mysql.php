<?php
	class ConnMySQL{
		
		private static $conn;
		
		public static function conectar(){
			self::$conn = new PDO('mysql:dbname=AulaPDO;host=;localhost','root','123456');
			return self::$conn;
		}
	}


	