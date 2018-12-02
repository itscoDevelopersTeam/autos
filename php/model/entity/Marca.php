<?php 
class Marca {
	private $id_marca;	//INT AUTO INCREMENT
	private $nombre;

	function __construct() {

	}

	function set_id_marca($idMarca) { $this->id_marca = $idMarca;}
	function set_nombre($nombre) { $this->nombre = $nombre; }

	function get_id_marca() { return $this->id_marca; }
	function get_nombre() { return $this->nombre; }
}
?>