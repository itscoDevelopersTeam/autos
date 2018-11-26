<?php 
require_once('Conexion.php');
	
	class CrudEmpleado{

		public function __construct(){}
		
		// método para insertar, recibe como parámetro un objeto de tipo empleado
		public function insert( $empleado ){
			$db = DataBase::conectar();
			$insert=$db->prepare( 'INSERT INTO EMPLEADOS values( :id_empleado, :nombre, :direccion, :telefono )' );
			$insert->bindValue('id_empleado', $empleado->get_id_empleado());
			$insert->bindValue('nombre', $empleado->get_nombre());
			$insert->bindValue('direccion', $empleado->get_direccion());
			$insert->bindValue('telefono', $empleado->get_telefono());
			$insert->execute();
		}

		// método para eliminar un empleado, recibe como parámetro el id del empleado
		public function delete( $id ){
			$db = DataBase::conectar();
			$eliminar=$db->prepare( 'DELETE FROM EMPLEADOS WHERE ID_EMPLEADO=:id_empleado' );
			$eliminar->bindValue( 'id_empleado', $id );
			$eliminar->execute();
		}

		// método para actualizar un empleado, recibe como parámetro el empleado
		public function update( $empleado ){
			$db = DataBase::conectar();
			$actualizar=$db->prepare('UPDATE EMPLEADOS SET NOMBRE=:nombre, DIRECCION=:direccion,TELEFONO=:telefono  WHERE ID_EMPLEADO=:id_empleado');
			$actualizar->bindValue('id_empleado',$empleado->get_id_empleado());
			$actualizar->bindValue('nombre',$empleado->get_nombre());
			$actualizar->bindValue('direccion',$empleado->get_direccion());
			$actualizar->bindValue('telefono',$empleado->get_telefono());
			$actualizar->execute();
		}

		// método para mostrar todos los empleados
		public function select_all(){
			$db = DataBase::conectar();
			$listaClientes=[];
			$select=$db->query('SELECT * FROM EMPLEADOS');

			foreach($select->fetchAll() as $empleado){
				$myEmpleado= new Cliente();
				$myEmpleado->set_id_empleado($empleado['ID_EMPLEADO']);
				$myEmpleado->set_nombre($empleado['NOMBRE']);
				$myEmpleado->set_direccion($empleado['DIRECCION']);
				$myEmpleado->set_telefono($empleado['TELEFONO']);
				$listaClientes[]=$myEmpleado;
			}
			return $listaClientes;
		}

		// método para buscar un empleado, recibe como parámetro el id del empleado
		public function select( $id ){
			$db = DataBase::conectar();
			$select=$db->prepare('SELECT * FROM EMPLEADOS WHERE ID_EMPLEADO=:id_empleado');
			$select->bindValue('id_empleado', $id);
			$select->execute();

			$empleado=$select->fetch();
			$myEmpleado= new Cliente();
			$myEmpleado->set_id_empleado($empleado['ID_EMPLEADO']);
			$myEmpleado->set_nombre($empleado['NOMBRE']);
			$myEmpleado->set_direccion($empleado['DIRECCION']);
			$myEmpleado->set_telefono($empleado['TELEFONO']);
			return $myEmpleado;
		}
	}
 ?>