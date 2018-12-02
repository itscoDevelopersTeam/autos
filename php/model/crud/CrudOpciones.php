<?php 
require_once('Conexion.php');
	
	class CrudOpciones{

		public function __construct(){}
		
		// método para insertar, recibe como parámetro un objeto de tipo opcion
		public function insert( $opcion ){
			$db = DataBase::conectar();
			$insert=$db->prepare( 'INSERT INTO OPCIONES values( :id_opcion, :nombre, :descripcion, :precio )' );
			
			$insert->bindValue('id_opcion', $opcion->get_id_opcion());
			$insert->bindValue('nombre', $opcion->get_nombre());
			$insert->bindValue('descripcion', $opcion->get_descripcion());
			$insert->bindValue('precio', $opcion->get_precio());
			$insert->execute();
		}

		// método para eliminar un opcion, recibe como parámetro el id del opcion
		public function delete( $id ){ 
			$db = DataBase::conectar(); 
			$eliminar=$db->prepare( 'DELETE FROM OPCIONES WHERE ID_OPCIONES=:id_opcion' );
			$eliminar->bindValue( 'id_opcion', $id );
			$eliminar->execute();
		}

		// método para actualizar un opcion, recibe como parámetro el opcion
		public function update( $opcion ){
			$db = DataBase::conectar();
			$actualizar=$db->prepare('UPDATE OPCIONES SET NOMBRE=:nombre, DESCRIPCION=:descripcion, PRECIO=:precio  WHERE ID_OPCIONES=:id_opcion');
			$actualizar->bindValue('id_opcion',$opcion->get_id_opcion());
			$actualizar->bindValue('nombre',$opcion->get_nombre());
			$actualizar->bindValue('descripcion',$opcion->get_descripcion());
			$actualizar->bindValue('precio',$opcion->get_precio());
			$actualizar->execute();
		}

		// método para mostrar todos los opcions
		public function select_all(){
			$db = DataBase::conectar();
			$listaOpciones=[];
			$select=$db->query('SELECT * FROM OPCIONES');

			foreach($select->fetchAll() as $opcion){
				$myOpcion= new Opcion();
				$myOpcion->set_id_opcion($opcion['ID_OPCIONES']);
				$myOpcion->set_nombre($opcion['NOMBRE']);
				$myOpcion->set_descripcion($opcion['DESCRIPCION']);
				$myOpcion->set_precio($opcion['PRECIO']);
				$listaOpciones[]=$myOpcion;
			}
			return $listaOpciones;
		}

		// método para buscar un opcion, recibe como parámetro el id del opcion
		public function select( $nombre ){
			$db = DataBase::conectar();
			$select=$db->prepare('SELECT * FROM OPCIONES WHERE NOMBRE=:nombre');
			$select->bindValue('nombre', $nombre);
			$select->execute();

			$opcion=$select->fetch();
			$myOpcion= new Opcion();
			$myOpcion->set_id_opcion($opcion['ID_OPCIONES']);
			$myOpcion->set_nombre($opcion['NOMBRE']);
			$myOpcion->set_descripcion($opcion['DESCRIPCION']);
			$myOpcion->set_precio($opcion['PRECIO']);
			return $myOpcion;
		}
	}
 ?>