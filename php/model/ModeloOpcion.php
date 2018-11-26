<?php 
class ModeloOpcion {
	private $id_modelo_opcion;
	private $id_opcion;
	private $id_modelo;

	function __construct() {}

	function __construct($idOpcion, $idModelo) {
		$this->id_opcion = $idOpcion;
		$this->id_modelo = $idModelo;
	}

	function set_id_modelo_opcion($idModeloOpcion) { $this->id_modelo_opcion = $idModeloOpcion; }
	function set_id_opcion($idOpcion) { $this->id_opcion = $idOpcion; }
	function set_id_modelo($idModelo) { $this->id_modelo = $idModelo; }

	function get_id_modelo_opcion() { return $this->id_modelo_opcion; }
	function  get_id_opcion() { return $this->id_opcion; }
	function get_id_modelo() { return $this->id_modelo; }
}

 ?>