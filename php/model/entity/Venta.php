<?php 
class Venta {
	private $id_auto;
	private $id_personal;
	private $id_cliente;
	private $matricula;
	private $fecha_venta;
	private $total_venta;
	
	

	function set_id_auto($idAuto) { $this->id_auto = $idAuto; }
	function set_id_personal($idPersonal) { $this->id_personal = $idPersonal; }
	function set_id_cliente($idCliente) { $this->id_cliente = $idCliente; }
	function set_matricula($matricula) { $this->matricula = $matricula; }
	function set_fecha_venta($fechaVenta) { $this->fecha_venta = $fechaVenta; }
	function set_total_venta($totalVenta) { $this->total_venta = $totalVenta; }
	

	function get_id_auto() { return $this->id_auto; }
	function get_id_personal() { return $this->id_personal; }
	function get_id_cliente() { return $this->id_cliente; }
	function get_matricula() { return $this->matricula; }
	function get_fecha_venta() { return $this->fecha_venta; }
	function get_total_venta() { return $this->total_venta; }
	
	
}

?>