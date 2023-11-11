<?php
	class Conexion{
		public static function Conectar(){
			define('servidor', 'localhost');
			define('db', 'PETROLIN');
			define('usuario', 'root');
			define('password', '');
			$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
			try{
				$conexion = new PDO("mysql:host=".servidor."; dbname=".db, usuario, password, $opciones);
				return $conexion;
			}catch (Exception $e){
				die("Error de conexion: ". $e->getMessage());
			}
		}
	}
?>