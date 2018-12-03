<?php 
require_once('Conexion.php');
	
	class CrudAuto{

		public function __construct(){}
		
		// método para insertar, recibe como parámetro un objeto de tipo auto
		public function insert( $auto ){
			$db = DataBase::conectar();
			$insert=$db->prepare( 'INSERT INTO AUTOS values( :id_auto, :precio, :cilindrada, :id_modelo )' );
			$insert->bindValue('id_auto', $auto->get_id_auto());
			$insert->bindValue('precio', $auto->get_precio());
			$insert->bindValue('cilindrada', $auto->get_cilindrada());
			$insert->bindValue('id_modelo', $auto->get_id_modelo());
			$insert->execute();
		}

		// método para eliminar un auto, recibe como parámetro el id del auto
		public function delete( $id ){
			$db = DataBase::conectar();
			$eliminar=$db->prepare( 'DELETE FROM AUTOS WHERE ID_AUTO=:id_auto' );
			$eliminar->bindValue( 'id_auto', $id );
			$eliminar->execute();
		}

		// método para actualizar un auto, recibe como parámetro el auto
		public function update( $auto ){
			$db = DataBase::conectar();
			$actualizar=$db->prepare('UPDATE AUTOS SET PRECIO=:precio, CILINDRADA=:cilindrada, ID_MODELO=:id_modelo  WHERE ID_AUTO=:id_auto');
			$actualizar->bindValue('id_auto',$auto->get_id_auto());
			$actualizar->bindValue('precio',$auto->get_precio());
			$actualizar->bindValue('cilindrada',$auto->get_cilindrada());
			$actualizar->bindValue('id_modelo',$auto->get_id_modelo());
			$actualizar->execute();
		}

		// método para mostrar todos los autos
		public function select_all(){
			$db = DataBase::conectar();
			$listaAutos=[];
			$select=$db->query('SELECT * FROM AUTOS');

			foreach($select->fetchAll() as $auto){
				$myAutos= new Auto();
				$myAutos->set_id_auto($auto['ID_AUTO']);
				$myAutos->set_precio($auto['PRECIO']);
				$myAutos->set_cilindrada($auto['CILINDRADA']);
				$myAutos->set_id_modelo($auto['ID_MODELO']);
				$listaAutos[]=$myAutos;
			}
			return $listaAutos;
		}

		// método para buscar un auto, recibe como parámetro el id del auto
		public function select( $id ){
			$db = DataBase::conectar();
			$select=$db->prepare('SELECT * FROM AUTOS WHERE ID_AUTO=:id_auto');
			$select->bindValue('id_auto', $id);
			$select->execute();

			$auto=$select->fetch();
			$myAutos= new Auto();
			$myAutos->set_id_auto($auto['ID_AUTO']);
			$myAutos->set_precio($auto['PRECIO']);
			$myAutos->set_cilindrada($auto['CILINDRADA']);
			$myAutos->set_id_modelo($auto['ID_MODELO']);

			return $myAutos;
		}
	}
 ?>