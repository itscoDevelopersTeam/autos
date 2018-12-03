<?php 
class Auto {
	private $id_auto;
	private $precio;
	private $cilindrada;
	private $id_modelo;

	function set_id_auto($idAuto) { $this->id_auto = $idAuto; }
	function set_precio($precio) { $this->precio = $precio; }
	function set_cilindrada($cilindrada) { $this->cilindrada = $cilindrada; }
	function set_id_modelo($idModelo) { $this->id_modelo = $idModelo; }

	function get_id_auto() { return $this->id_auto; }
	function get_precio() { return $this->precio; }
	function get_cilindrada() { return $this->cilindrada; }
	function get_id_modelo() { return $this->id_modelo; }
}

?>