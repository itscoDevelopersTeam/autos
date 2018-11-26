<?php 
require_once('conexion.php');
	
	class CrudCliente{

		public function __construct(){}
		
		// método para insertar, recibe como parámetro un objeto de tipo cliente
		public function insert( $cliente ){
			$db = DataBase::conectar();
			$insert=$db->prepare( 'INSERT INTO CLIENTES values( :id_cliente, :nombre, :direccion, :telefono )' );
			$insert->bindValue('id_cliente', $cliente->get_id_cliente());
			$insert->bindValue('nombre', $cliente->get_nombre());
			$insert->bindValue('direccion', $cliente->get_direccion());
			$insert->bindValue('telefono', $cliente->get_telefono());
			$insert->execute();
		}

		// método para eliminar un cliente, recibe como parámetro el id del cliente
		public function delete( $id ){
			$db = DataBase::conectar();
			$eliminar=$db->prepare( 'DELETE FROM CLIENTES WHERE ID_CLIENTE=:id_cliente' );
			$eliminar->bindValue( 'id_cliente', $id );
			$eliminar->execute();
		}

		// método para actualizar un cliente, recibe como parámetro el cliente
		public function update( $cliente ){
			$db = DataBase::conectar();
			$actualizar=$db->prepare('UPDATE CLIENTES SET NOMBRE=:nombre, DIRECCION=:direccion,TELEFONO=:telefono  WHERE ID_CLIENTE=:id_cliente');
			$actualizar->bindValue('id_cliente',$cliente->get_id_cliente());
			$actualizar->bindValue('nombre',$cliente->get_nombre());
			$actualizar->bindValue('direccion',$cliente->get_direccion());
			$actualizar->bindValue('telefono',$cliente->get_telefono());
			$actualizar->execute();
		}

		// método para mostrar todos los clientes
		public function select_all(){
			$db = DataBase::conectar();
			$listaClientes=[];
			$select=$db->query('SELECT * FROM CLIENTES');

			foreach($select->fetchAll() as $cliente){
				$myCliente= new Cliente();
				$myCliente->set_id_cliente($cliente['ID_CLIENTE']);
				$myCliente->set_nombre($cliente['NOMBRE']);
				$myCliente->set_direccion($cliente['DIRECCION']);
				$myCliente->set_telefono($cliente['TELEFONO']);
				$listaClientes[]=$myCliente;
			}
			return $listaClientes;
		}

		// método para buscar un cliente, recibe como parámetro el id del cliente
		public function select( $id ){
			$db = DataBase::conectar();
			$select=$db->prepare('SELECT * FROM CLIENTES WHERE ID_CLIENTE=:id_cliente');
			$select->bindValue('id_cliente', $id);
			$select->execute();

			$cliente=$select->fetch();
			$myCliente= new Cliente();
			$myCliente->set_id_cliente($cliente['ID_CLIENTE']);
			$myCliente->set_nombre($cliente['NOMBRE']);
			$myCliente->set_direccion($cliente['DIRECCION']);
			$myCliente->set_telefono($cliente['TELEFONO']);
			return $myCliente;
		}
	}
 ?>