<?php 
class Cliente{
	private $id_cliente;
	private $nombre;
	private $direccion;
	private $telefono;

	function __construct($idCliente, $nombre, $direccion, $telefono) {
		$this->id_cliente = $idCliente;
		$this->nombre = $nombre;
		$this->direccion = $direccion;
		$this->telefono = $direccion;
	}

	function set_id_cliente($idCliente) { $this->id_cliente = $idCliente; }
	function set_nombre($nombre) { $this->nombre = $nombre; }
	function set_direccion($direccion) { $this->direccion = $direccion; }
	function set_telefono($telefono) { $this->telefono = $telefono; }

	function get_id_cliente() {return $this->id_cliente; }
	function get_nombre() { return $this->nombre; }
	function get_direccion() { return $this->direccion; }
	function get_telefono() { return $this->telefono; }
}

 ?>