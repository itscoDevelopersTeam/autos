<?php
include 'php/controllers/CrudRol.php';
include 'php/model/Rol.php';

	$rol = new Rol();
	$crud_rol = new CrudRol;
	$listaRoles = $crud_rol->select_all();


	foreach ($listaRoles as $rol) {	
		echo  '<option>'.$rol->get_nombre().'</option>';
	}

 ?>