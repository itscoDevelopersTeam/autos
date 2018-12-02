<?php

//incluye la clase Personal y CrudPersonal
include '../model/crud/CrudPersonal.php';
include '../model/entity/Personal.php';
 
// Instancias de las clases CrudPersonal y Personal
$crudPersonal= new CrudPersonal();
$personal= new Personal();
 
	// si el elemento insertar no viene nulo llama al CrudPersonal e inserta un Personal
	if ( isset( $_POST['login'] ) ) {

		$user = $_POST['inputUser'];
		$pass = $_POST['inputPassword'];

		//llama a la función select_login definida en el CrudPersonal
		$personal = $crudPersonal->select_login( $user, $pass );

		// Comprueba username y password del form y la BD
		if ($user == $personal->get_username() && $pass == $personal->get_password() ) {

			session_start();
			$_SESSION['status'] = true;
			$_SESSION['id_personal'] = $personal->get_id_personal();
			$_SESSION['nombre'] = $personal->get_nombre();
			$_SESSION['direccion'] = $personal->get_direccion();
			$_SESSION['telefono'] = $personal->get_telefono();
			$_SESSION['email'] = $personal->get_email();
			$_SESSION['username'] = $personal->get_username();
			$_SESSION['password'] = $personal->get_password();
			$_SESSION['rol'] = $personal->get_rol();

			header('Location: ../view/main.php');
		}
		else{
			header('Location: ../../index.php?msj=incorrect');
		}
	}
?>