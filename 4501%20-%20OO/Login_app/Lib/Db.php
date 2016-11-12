<?php

	namespace Lib;
	use PDO;

	class Db{
		private $db;

		public function getConn(){
			$this->db = new PDO('mysql:dbname=AulaPDO;host=localhost;','root','123456');

			return $this->db;
		}


	}
