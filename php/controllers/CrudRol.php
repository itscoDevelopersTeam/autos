<?php 
require_once('Conexion.php');

class CrudRol {
	
	function insert($rol) {
		$db = DataBase::conectar();
		$query = 'INSERT INTO ROLES VALUES(:nombre, :descripcion)';
		$insert = $db->prepare($query);
		$insert->bindValue('nombre', $rol->get_nombre());
		$insert->bindValue('descripcion', $rol->get_descripcion());
		$insert->execute();
	}

	function delete($idRol) {
		$db = DataBase::conectar();
		$delete=$db->prepare( 'DELETE FROM ROLES WHERE ID_ROL=:id_rol' );
		$delete->bindValue('id_rol', $idRol);
		$delete->execute();
	}

	function select_all(){
		$db = DataBase::conectar();
		$listaRoles=[];
		$select=$db->query('SELECT * FROM ROLES');

		foreach($select->fetchAll() as $rol){
			$myRol= new Rol();
			$myRol->set_id_rol($rol['ID_ROL']);
			$myRol->set_nombre($rol['NOMBRE']);
			$myRol->set_descripcion($rol['DESCRIPCION']);
			$listaRoles[] = $myRol;
		}
		return $listaRoles;
	}
}

 ?>