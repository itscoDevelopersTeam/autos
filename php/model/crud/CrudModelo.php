<?php 
require_once('Conexion.php');
	
	class CrudModelo{

		public function __construct(){}
		
		// método para insertar, recibe como parámetro un objeto de tipo modelo
		public function insert( $modelo ){
			$db = DataBase::conectar();
			$insert=$db->prepare( 'INSERT INTO MODELOS values( :id_modelo, :nombre, :id_marca )' );
			$insert->bindValue('id_modelo', $modelo->get_id_modelo());
			$insert->bindValue('id_marca', $modelo->get_id_marca());
			$insert->bindValue('nombre', $modelo->get_nombre());
			$insert->execute();
		}

		// método para eliminar un modelo, recibe como parámetro el id del modelo
		public function delete( $id ){
			$db = DataBase::conectar();
			$eliminar=$db->prepare( 'DELETE FROM MODELOS WHERE ID_MODELO=:id_modelo' );
			$eliminar->bindValue( 'id_modelo', $id );
			$eliminar->execute();
		}

		// método para actualizar un modelo, recibe como parámetro el modelo
		public function update( $modelo ){
			$db = DataBase::conectar();
			$actualizar=$db->prepare('UPDATE MODELOS SET ID_MARCA=:id_marca, NOMBRE=:nombre  WHERE ID_MODELO=:id_modelo');
			$actualizar->bindValue('id_marca',$modelo->get_id_marca());
			$actualizar->bindValue('nombre',$modelo->get_nombre());			
			$actualizar->execute();
		}

		// método para mostrar todos los modelos
		public function select_all(){
			$db = DataBase::conectar();
			$listaModelos=[];
			$select=$db->query('SELECT * FROM MODELOS');

			foreach($select->fetchAll() as $modelo){
				$myModelo = new Modelo();
				$myModelo->set_id_modelo($modelo['ID_MODELO']);
				$myModelo->set_id_marca($modelo['ID_MARCA']);
				$myModelo->set_nombre($modelo['NOMBRE']);
				$listaModelos[]=$myModelo;
			}
			return $listaModelos;
		}

		// método para buscar un modelo, recibe como parámetro el id del modelo
		public function select( $id ){
			$db = DataBase::conectar();
			$select=$db->prepare('SELECT * FROM MODELOS WHERE ID_MODELO=:id_modelo');
			$select->bindValue('id_modelo', $id);
			$select->execute();

			$modelo=$select->fetch();
			$myModelo= new Modelo();
			$myModelo->set_id_modelo($modelo['ID_MODELO']);
			$myModelo->set_id_marca($modelo['ID_MARCA']);
			$myModelo->set_nombre($modelo['NOMBRE']);
			return $myModelo;
		}
	}
 ?>