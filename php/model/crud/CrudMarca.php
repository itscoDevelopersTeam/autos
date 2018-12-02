<?php 
require_once('Conexion.php');
	
	class CrudMarca{

		public function __construct(){

		}
		
		// método para insertar, recibe como parámetro un objeto de tipo marca
		public function insert( $marca ){
			$db = DataBase::conectar();
			$insert=$db->prepare( 'INSERT INTO MARCAS values(:id_marca, :nombre)' );
			$insert->bindValue('id_marca', $marca->get_id_marca());
			$insert->bindValue('nombre', $marca->get_nombre());
			$insert->execute();
		}

		// método para eliminar un marca, recibe como parámetro el id del marca
		public function delete( $id ){
			$db = DataBase::conectar();
			$eliminar=$db->prepare( 'DELETE FROM MARCAS WHERE ID_MARCA=:id_marca' );
			$eliminar->bindValue( 'id_marca', $id );
			$eliminar->execute();
		}

		// método para actualizar un marca, recibe como parámetro el marca
		public function update( $marca ){
			$db = DataBase::conectar();
			$actualizar=$db->prepare('UPDATE MARCAS SET NOMBRE=:nombre WHERE ID_MARCA=:id_marca');
			$actualizar->bindValue('id_marca',$marca->get_id_marca());
			$actualizar->bindValue('nombre',$marca->get_nombre());
			$actualizar->execute();
		}

		// método para mostrar todos los marcas
		public function select_all(){

			$db = DataBase::conectar();
			$listaMarcas=[];
			$select=$db->query('SELECT * FROM MARCAS');

			foreach($select->fetchAll() as $marca){
				$myMarca= new Marca();
				$myMarca->set_id_marca($marca['ID_MARCA']);
				$myMarca->set_nombre($marca['NOMBRE']);
				$listaMarcas[]=$myMarca;
			}
			return $listaMarcas;
		}

		// método para buscar un marca, recibe como parámetro el id del marca
		public function select( $id ){

			$db = DataBase::conectar();
			$select=$db->prepare('SELECT * FROM MARCAS WHERE ID_MARCA=:id_marca');
			$select->bindValue('id_marca', $id);
			$select->execute();

			$marca=$select->fetch();
			$myMarca= new Marca();
			$myMarca->set_id_marca($marca['ID_MARCA']);
			$myMarca->set_nombre($marca['NOMBRE']);
			return $myMarca;
		}
	}
 ?>