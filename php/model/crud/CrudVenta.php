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
		public function delete( $id ){
			$db = DataBase::conectar();
			$eliminar=$db->prepare( 'DELETE FROM VENTAS WHERE ID_AUTO=:id_auto' );
			$eliminar->bindValue( 'id_auto', $id );
			$eliminar->execute();
		}

		// método para actualizar un venta, recibe como parámetro el venta
		public function update( $venta ) {
			$db = DataBase::conectar();
			$actualizar=$db->prepare('UPDATE VENTAS SET NOMBRE=:id_personal, DIRECCION=:id_cliente, TELEFONO=:matricula, EMAIL=:fecha_venta, USERNAME=:total_venta, PASSWORD=password, ID_ROL=:rol WHERE ID_AUTO=:id_auto');
			$actualizar->bindValue('id_auto',$venta->get_id_auto());
			$actualizar->bindValue('id_personal',$venta->get_id_personal());
			$actualizar->bindValue('id_cliente',$venta->get_id_cliente());
			$actualizar->bindValue('matricula',$venta->get_matricula());
			$actualizar->bindValue('fecha_venta',$venta->get_fecha_venta());
			$actualizar->bindValue('total_venta',$venta->get_total_venta());
			$actualizar->execute();
		}

		// método para mostrar todos los ventas
		public function select_all(){
			$db = DataBase::conectar();
			$listaVentas=[];
			$select=$db->query('SELECT * FROM VENTAS');

			foreach($select->fetchAll() as $venta){
				$myVenta= new Personal();
				$myVenta->set_id_auto($venta['ID_AUTO']);
				$myVenta->set_id_personal($venta['NOMBRE']);
				$myVenta->set_id_cliente($venta['DIRECCION']);
				$myVenta->set_matricula($venta['TELEFONO']);
				$myVenta->set_matricula($venta['EMAIL']);
				$myVenta->set_matricula($venta['USERNAME']);
				$myVenta->set_matricula($venta['PASSWORD']);
				$myVenta->set_matricula($venta['ID_ROL']);
				$listaVentas[]=$myVenta;
			}
			return $listaVentas;
		}

		// método para buscar un venta, recibe como parámetro el id del venta
		public function select( $id ){
			$db = DataBase::conectar();
			$select=$db->prepare('SELECT * FROM VENTAS WHERE ID_AUTO=:id_auto');
			$select->bindValue('id_auto', $id);
			$select->execute();

			$venta=$select->fetch();
			$myVenta= new Personal();
			$myVenta->set_id_auto($venta['ID_AUTO']);
			$myVenta->set_id_personal($venta['NOMBRE']);
			$myVenta->set_id_cliente($venta['DIRECCION']);
			$myVenta->set_matricula($venta['TELEFONO']);
			$myVenta->set_matricula($venta['EMAIL']);
			$myVenta->set_matricula($venta['USERNAME']);
			$myVenta->set_matricula($venta['PASSWORD']);
			$myVenta->set_matricula($venta['ID_ROL']);
			return $myVenta;
		}
	}
 ?>