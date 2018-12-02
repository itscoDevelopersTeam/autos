<?php
class Modelo {
	private $id_modelo;
	private $nombre;
	private $id_marca;
	
	function __construct() {
		
	}

	function set_id_modelo($idModelo) { $this->id_modelo = $idModelo; }
	function set_nombre($nombre) { $this->nombre = $nombre; }
	function set_id_marca($idMarca) { $this->id_marca = $idMarca; }

	function get_id_modelo() { return $this->id_modelo; }
	function get_nombre() { return $this->nombre; }
	function get_id_marca() { return $this->id_marca; }
}
 ?>