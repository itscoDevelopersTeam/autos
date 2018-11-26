<?php 
class Marca {
	private $id_marca;	//Variable de cadena de caracteres

	function __construct($idMarca) {
		$this->id_marca = $idMarca;
	}

	function set_id_marca($idMarca) { $this->id_marca = $idMarca;}
	function get_id_marca($idMarca) { return $this->id_marca; }
}

 ?>