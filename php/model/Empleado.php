<?php
class Empleado {
	private $id_empleado;
	private $nombre;
	private $direccion;
	private $telefono;
	private $rol;

	function __construct($idEmpleado, $nombre, $direccion, $telefono, $rol) {
		$this->id_empleado = $idEmpleado;
		$this->nombre = $nombre;
		$this->direccion = $direccion;
		$this->telefono = $direccion;
		$this->rol = $rol;
	}

	function set_id_empleado($idEmpleado) { $this->id_empleado = $idEmpleado; }
	function set_nombre($nombre) { $this->nombre = $nombre; }
	function set_direccion($direccion) { $this->direccion = $direccion; }
	function set_telefono($telefono) { $this->telefono = $telefono; }
	function set_rol($rol) { $this->rol = $rol; }

	function get_id_empleado() {return $this->id_empleado; }
	function get_nombre() { return $this->nombre; }
	function get_direccion() { return $this->direccion; }
	function get_telefono() { return $this->telefono; }
	function get_rol() { return $this->rol; }
}
 ?>