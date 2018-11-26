<?php 
class Opcion {
	private $id_opcion;
	private $nombre;
	private $descripcion;
	
	function __construct() {

	}

	function set_id_opcion($idOpcion) { $this->id_opcion = $id_opcion; }
	function set_nombre($nombre) { $this->nombre = $nombre; }
	function set_descripcion($descripcion) { $this->descripcion = $descripcion; }

	function get_id_opcion() { return $this->id_opcion; }
	function get_nombre() { return $this->nombre; }
	function get_descripcion() { return $this->descripcion; }
}
 ?>