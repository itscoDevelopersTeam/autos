<?php 
require_once('Conexion.php');
	
	class CrudVenta{

		public function __construct(){}
		
		// método para insertar, recibe como parámetro un objeto de tipo venta
		public function insert( $venta ){
			$db = DataBase::conectar();
			$insert=$db->prepare( 'INSERT INTO VENTAS values( :id_auto, :id_personal, :id_cliente, :matricula, :fecha_venta, :total_venta )' );
			$insert->bindValue('id_auto', $venta->get_id_auto());
			$insert->bindValue('id_personal', $venta->get_id_personal());
			$insert->bindValue('id_cliente', $venta->get_id_cliente());
			$insert->bindValue('matricula', $venta->get_matricula());
			$insert->bindValue('fecha_venta', $venta->get_fecha_venta());
			$insert->bindValue('total_venta', $venta->get_total_venta());
			$insert->execute();
		}

		// método para eliminar un venta, recibe como parámetro el id del venta
		public function delete( $venta ){
			$db = DataBase::conectar();
			$eliminar = $db->prepare( 'DELETE FROM VENTAS WHERE ID_AUTO=:id_auto AND ID_PERSONAL=:id_personal AND ID_CLIENTE=:id_cliente' );
			$eliminar->bindValue('id_auto', $venta->get_id_auto());
			$eliminar->bindValue('id_personal', $venta->get_id_personal());
			$eliminar->bindValue('id_cliente', $venta->get_id_cliente());
			$eliminar->execute();
		}

		// método para actualizar un venta, recibe como parámetro el venta
		public function update( $ventaOld, $ventaNew ) {
			$db = DataBase::conectar();
			$actualizar = $db->prepare('UPDATE VENTAS SET ID_AUTO=:id_auto, ID_PERSONAL=:id_personal, ID_CLIENTE=:id_cliente, MATRICULA=:matricula, FECHA_VENTA=:fecha_venta, TOTAL_VENTA=:total_venta WHERE ID_AUTO=:id_auto_old AND ID_PERSONAL=:id_personal_old AND ID_CLIENTE=:id_cliente_old');
			$actualizar->bindValue('id_auto_old', $ventaOld->get_id_auto());
			$actualizar->bindValue('id_personal_old', $ventaOld->get_id_personal());
			$actualizar->bindValue('id_cliente_old', $ventaOld->get_id_cliente());

			$actualizar->bindValue('id_auto', $ventaNew->get_id_auto());
			$actualizar->bindValue('id_personal', $ventaNew->get_id_personal());
			$actualizar->bindValue('id_cliente', $ventaNew->get_id_cliente());
			$actualizar->bindValue('matricula', $ventaNew->get_matricula());
			$actualizar->bindValue('fecha_venta', $ventaNew->get_fecha_venta());
			$actualizar->bindValue('total_venta', $ventaNew->get_total_venta());

			$actualizar->execute();
		}

		// método para mostrar todos los ventas
		public function select_all(){
			$db = DataBase::conectar();
			$listaVentas=[];
			$select = $db->query('SELECT * FROM VENTAS');

			foreach($select->fetchAll() as $venta){
				$myVenta= new Venta();
				$myVenta->set_id_auto($venta['ID_AUTO']);
				$myVenta->set_id_personal($venta['ID_PERSONAL']);
				$myVenta->set_id_cliente($venta['ID_CLIENTE']);
				$myVenta->set_matricula($venta['MATRICULA']);
				$myVenta->set_fecha_venta($venta['FECHA_VENTA']);
				$myVenta->set_total_venta($venta['TOTAL_VENTA']);
				$listaVentas[]=$myVenta;
			}
			return $listaVentas;
		}

		// método para buscar un venta, recibe como parámetro el id del venta
		public function select( $venta ){
			$db = DataBase::conectar();
			$select = $db->prepare('SELECT * FROM VENTAS WHERE ID_AUTO=:id_auto AND ID_PERSONAL=:id_personal AND ID_CLIENTE=:id_cliente');
			$select->bindValue('id_auto', $venta->get_id_auto());
			$select->bindValue('id_personal', $venta->get_id_personal());
			$select->bindValue('id_cliente', $venta->get_id_cliente());
			$select->execute();

			$res = $select->fetch();
			$myVenta = new Venta();
			$myVenta->set_id_auto($res['ID_AUTO']);
			$myVenta->set_id_personal($res['ID_PERSONAL']);
			$myVenta->set_id_cliente($res['ID_CLIENTE']);
			$myVenta->set_matricula($res['MATRICULA']);
			$myVenta->set_fecha_venta($res['FECHA_VENTA']);
			$myVenta->set_total_venta($res['TOTAL_VENTA']);
			return $myVenta;
		}
	}
 ?>