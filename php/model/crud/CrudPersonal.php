<?php 
require_once('Conexion.php'); //require_once va hasta la base /autos
	
	class CrudPersonal{

		public function __construct(){}
		
		// método para insertar, recibe como parámetro un objeto de tipo personal
		public function insert( $personal ){
			$db = DataBase::conectar();
			$insert=$db->prepare( 'INSERT INTO PERSONAL values( :id_personal, :nombre, :direccion, :telefono, :email, :username, :password, :rol )' );
			$insert->bindValue('id_personal', $personal->get_id_personal());
			$insert->bindValue('nombre', $personal->get_nombre());
			$insert->bindValue('direccion', $personal->get_direccion());
			$insert->bindValue('telefono', $personal->get_telefono());
			$insert->bindValue('email', $personal->get_email());
			$insert->bindValue('username', $personal->get_username());
			$insert->bindValue('password', $personal->get_password());
			$insert->bindValue('rol', $personal->get_rol());
			$insert->execute();
		}

		// método para eliminar un personal, recibe como parámetro el id del personal
		public function delete( $id ){
			$db = DataBase::conectar();
			$eliminar=$db->prepare( 'DELETE FROM PERSONAL WHERE ID_PERSONAL=:id_personal' );
			$eliminar->bindValue( 'id_personal', $id );
			$eliminar->execute();
		}

		// método para actualizar un personal, recibe como parámetro el personal
		public function update( $personal ){
			$db = DataBase::conectar();
			$actualizar=$db->prepare('UPDATE PERSONAL SET NOMBRE=:nombre, DIRECCION=:direccion, TELEFONO=:telefono, EMAIL=:email, USERNAME=:username, PASSWORD=:password, ID_ROL=:rol WHERE ID_PERSONAL=:id_personal');

			$actualizar->bindValue('id_personal', $personal->get_id_personal());
			$actualizar->bindValue('nombre', $personal->get_nombre());
			$actualizar->bindValue('direccion', $personal->get_direccion());
			$actualizar->bindValue('telefono', $personal->get_telefono());
			$actualizar->bindValue('email', $personal->get_email());
			$actualizar->bindValue('username', $personal->get_username());
			$actualizar->bindValue('password', $personal->get_password());
			$actualizar->bindValue('rol', $personal->get_rol());
			$actualizar->execute();
		}

		// método para mostrar todos los personals
		public function select_all(){
			$db = DataBase::conectar();
			$listaPersonal=[];
			$select=$db->query('SELECT * FROM PERSONAL');

			foreach($select->fetchAll() as $personal){
				$myPersonal= new Personal();
				$myPersonal->set_id_personal($personal['ID_PERSONAL']);
				$myPersonal->set_nombre($personal['NOMBRE']);
				$myPersonal->set_direccion($personal['DIRECCION']);
				$myPersonal->set_telefono($personal['TELEFONO']);
				$myPersonal->set_email($personal['EMAIL']);
				$myPersonal->set_username($personal['USERNAME']);
				$myPersonal->set_password($personal['PASSWORD']);
				$myPersonal->set_rol($personal['ID_ROL']);
				$listaPersonal[]=$myPersonal;
			}
			return $listaPersonal;
		}

		// método para buscar un personal, recibe como parámetro el id del personal
		public function select( $id ){
			$db = DataBase::conectar();
			$select=$db->prepare('SELECT * FROM PERSONAL WHERE ID_PERSONAL=:id_personal');
			$select->bindValue('id_personal', $id);
			$select->execute();

			$personal=$select->fetch();
			$myPersonal= new Personal();
			$myPersonal->set_id_personal($personal['ID_PERSONAL']);
			$myPersonal->set_nombre($personal['NOMBRE']);
			$myPersonal->set_direccion($personal['DIRECCION']);
			$myPersonal->set_telefono($personal['TELEFONO']);
			$myPersonal->set_email($personal['EMAIL']);
			$myPersonal->set_username($personal['USERNAME']);
			$myPersonal->set_password($personal['PASSWORD']);
			$myPersonal->set_rol($personal['ID_ROL']);
			return $myPersonal;
		}

		// método para buscar un personal, recibe como parámetro el user y pass del personal en formulario
		public function select_login( $user, $pass ){
			
			$db = DataBase::conectar();
			$select = $db->prepare('SELECT * FROM PERSONAL WHERE USERNAME=:username AND PASSWORD=:password');

			$select->bindValue('username', $user);
			$select->bindValue('password', $pass);
			$select->execute();

			$personal = $select->fetch();
			$myPersonal = new Personal();

			$myPersonal->set_id_personal($personal['ID_PERSONAL']);
			$myPersonal->set_nombre($personal['NOMBRE']);
			$myPersonal->set_direccion($personal['DIRECCION']);
			$myPersonal->set_telefono($personal['TELEFONO']);
			$myPersonal->set_email($personal['EMAIL']);
			$myPersonal->set_username($personal['USERNAME']);
			$myPersonal->set_password($personal['PASSWORD']);
			$myPersonal->set_rol($personal['ID_ROL']);

			return $myPersonal;
		}

	}
 ?>