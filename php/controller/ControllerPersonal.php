<?php

//incluye la clase Personal y CrudPersonal
include '../model/crud/CrudPersonal.php';
include '../model/entity/Personal.php';
 
// Instancias de las clases CrudPersonal y Personal
$crudPersonal= new CrudPersonal();
$personal= new Personal();
 
	// Si el elemento insertar no viene nulo llama al CrudPersonal e inserta un Personal, 
	// login viene del indicador en el formulario
	if ( isset( $_POST['registro'] ) ) {

		$personal->set_id_personal( $_POST['inputIdPersonal'] );
		$personal->set_nombre( $_POST['inputNombre'] );
		$personal->set_direccion( $_POST['inputDireccion'] );
		$personal->set_telefono( $_POST['inputTelefono'] );
		$personal->set_email( $_POST['inputEmail'] );
		$personal->set_username( $_POST['inputUser'] );
		$personal->set_password( $_POST['inputPassword'] );
		$personal->set_rol( $_POST['inputRol'] );

		//llama a la función insert definida en el CrudPersonal
		$crudPersonal->insert( $personal );

		header('Location: ../view/admin/personal/Registro.php?msj=Registro_OK');
	}
?>