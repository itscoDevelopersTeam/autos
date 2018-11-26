<?php 
class Rol {	
	private $id_rol;
	private $nombre;
	private $descripcion;

	function __construct() {

	}

	function set_id_rol($idRol) { $this->id_rol = $idRol; }
	function set_nombre($nombre) { $this->nombre = $nombre; }
	function set_descripcion($descripcion) { $this->descripcion = $descripcion; }

	function get_id_rol() { return $this->id_rol; }
	function get_nombre() { return $this->nombre; }
	function get_descripcion() { return $this->descripcion; }
}

 ?>