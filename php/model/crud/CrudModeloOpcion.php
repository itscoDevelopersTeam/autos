<?php 
require_once('Conexion.php');
	

	class CrudModeloOpcion{

		public function __construct(){}
		
		// método para insertar, recibe como parámetro un objeto de tipo opcion
		public function insert( $modeloOpcion ){
			$db = DataBase::conectar();
			$insert=$db->prepare( 'INSERT INTO MODELO_OPCIONES values( :id_modelo, :id_opcion )' );
			$insert->bindValue('id_modelo', $modeloOpcion->get_id_modelo());
			$insert->bindValue('id_opcion', $modeloOpcion->get_id_opcion());
			$insert->execute();
		}

		// método para eliminar un opcion, recibe como parámetro el id del opcion
		public function delete( $modeloOpcion ){
			$db = DataBase::conectar();
			$eliminar=$db->prepare( 'DELETE FROM MODELO_OPCIONES WHERE ID_MODELO=:id_modelo AND ID_OPCIONES=:id_opciones' );
			$eliminar->bindValue( 'id_modelo', $modeloOpcion->get_id_modelo() );
			$eliminar->bindValue( 'id_opciones', $modeloOpcion->get_id_opcion() );
			$eliminar->execute();
		}

		// método para actualizar un opcion, recibe como parámetro el opcion
		public function update( $modeloOpcionOld, $modeloOpcionNew){
			$db = DataBase::conectar();
			$actualizar = $db->prepare('UPDATE MODELO_OPCIONES SET ID_MODELO=:id_modelo_new, ID_OPCIONES=:id_opcion_new WHERE ID_MODELO=:id_modelo_old AND ID_OPCIONES=:id_opcion_old');

			$actualizar->bindValue('id_opcion_old',$modeloOpcionOld->get_id_opcion());
			$actualizar->bindValue('id_modelo_old',$modeloOpcionOld->get_id_modelo());

			$actualizar->bindValue('id_opcion_new',$modeloOpcionNew->get_id_opcion());
			$actualizar->bindValue('id_modelo_new',$modeloOpcionNew->get_id_modelo());

			$actualizar->execute();
		}

		// método para mostrar todos los opcions
		public function select_all(){
			$db = DataBase::conectar();
			$listaModeloOpciones=[];
			$select = $db->query('SELECT * FROM MODELO_OPCIONES');

			foreach( $select->fetchAll() as $modeloOpcion){
				$myModeloOpcion= new ModeloOpcion();
				$myModeloOpcion->set_id_modelo( $modeloOpcion['ID_MODELO'] );
				$myModeloOpcion->set_id_opcion( $modeloOpcion['ID_OPCIONES'] );
				$listaModeloOpciones[] = $myModeloOpcion;
			}
			return $listaModeloOpciones;
		}

		// // método para buscar un opcion, recibe como parámetro el id del opcion
		// public function select( $id ){
		// 	$db = DataBase::conectar();
		// 	$select=$db->prepare('SELECT * FROM MODELO_OPCIONES WHERE ID_MODELO_OPCIONES=:id_modelo_opcion');
		// 	$select->bindValue('id_modelo_opcion', $id);
		// 	$select->execute();

		// 	$modeloOpcion=$select->fetch();
		// 	$myModeloOpcion= new ModeloOpcion();
		// 	$myModeloOpcion->set_id_modelo_opcion($opcion['ID_MODELO_OPCIONES']);
		// 	$myModeloOpcion->set_id_opcion($opcion['ID_OPCIONES']);
		// 	$myModeloOpcion->set_id_modelo($opcion['ID_MODELO']);
		// 	return $myModeloOpcion;
		// }
	}
 ?>