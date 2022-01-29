<?php 
	class Conexion{

		private $DB_HOST = "localhost";
		private $DB_USER = "root";
		private $DB_PASS = "";
		private $DB  	 = "prueba_tecnica_dev";

		public function connect(){
			$conDB = new  mysqli( $this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB );
			$conDB->query("SET NAMES 'utf8'");
			if ($conDB->connect_errno) {
				echo "Fallo al conectar a MySQL: (" . $conDB->connect_errno . ") " . $conDB->connect_error;
			}
			return $conDB;
		}

		public function disconnect(){
			
		}
	}
 ?>