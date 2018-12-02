<?php 
class Cliente{
	private $id_cliente; //char
	private $nombre;
	private $direccion;
	private $telefono;
	private $email;

	function __construct() { }

	function set_id_cliente($idCliente) { $this->id_cliente = $idCliente; }
	function set_nombre($nombre) { $this->nombre = $nombre; }
	function set_direccion($direccion) { $this->direccion = $direccion; }
	function set_telefono($telefono) { $this->telefono = $telefono; }
	function set_email($email) { $this->email = $email; }

	function get_id_cliente() {return $this->id_cliente; }
	function get_nombre() { return $this->nombre; }
	function get_direccion() { return $this->direccion; }
	function get_telefono() { return $this->telefono; }
	function get_email() { return $this->email; }
}

 ?>