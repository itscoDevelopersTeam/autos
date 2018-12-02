<?php
class Personal {
	private $id_personal;
	private $nombre;
	private $direccion;
	private $telefono;
	private $email;
	private $username;
	private $password;
	private $rol;

	function set_id_personal($idPersonal) { $this->id_personal = $idPersonal; }
	function set_nombre($nombre) { $this->nombre = $nombre; }
	function set_direccion($direccion) { $this->direccion = $direccion; }
	function set_telefono($telefono) { $this->telefono = $telefono; }
	function set_email($email) { $this->email = $email; }
	function set_username($username) { $this->username = $username; }
	function set_password($password) { $this->password = $password; }
	function set_rol($rol) { $this->rol = $rol; }

	function get_id_personal() {return $this->id_personal; }
	function get_nombre() { return $this->nombre; }
	function get_direccion() { return $this->direccion; }
	function get_telefono() { return $this->telefono; }
	function get_email() { return $this->email; }
	function get_username() { return $this->username; }
	function get_password() { return $this->password; }
	function get_rol() { return $this->rol; }
}
?>