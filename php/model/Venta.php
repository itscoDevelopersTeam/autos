<?php 
class Venta {
	private $id_venta;
	private $fecha_venta;
	private $total_venta;
	private $id_empleado;
	private $id_cliente;
	private $id_auto;

	function set_id_venta($idVenta) { $this->id_venta = $idVenta; }
	function set_fecha_venta($fechaVenta) { $this->fecha_venta = $fechaVenta; }
	function set_total_venta($totalVenta) { $this->total_venta = $totalVenta; }
	function set_id_empleado($idEmpleado) { $this->id_empleado = $idEmpleado; }
	function set_id_cliente($idCliente) { $this->idCliente = $idCliente; }
	function set_id_auto($idAuto) { $this->id_auto = $idAuto; }

	function get_id_venta() { return $this->id_venta; }
	function get_fecha_venta() { return $this->fecha_venta; }
	function get_total_venta() { return $this->total_venta; }
	function get_id_empleado() { return $this->id_empleado; }
	function get_id_cliente() { return $this->id_cliente; }
	function get_id_auto() { return $this->id_auto; }
}

 ?>