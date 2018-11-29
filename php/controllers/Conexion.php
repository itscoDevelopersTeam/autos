<?php
	class DataBase{
		private static $conexion = NULL;
		private static $dbHost = "localhost";
		private static $dbName = "automoviles";
		private static $user = "miranda";
		private static $password = "psgsql";

		private function __construct (){}

		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;

			self::$conexion= new PDO("mysql:host=$dbHost;dbname=$dbName", $user, $password, $pdo_options);
			return self::$conexion;
		}		
	} 
?>