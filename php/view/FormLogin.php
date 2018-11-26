<?php 
	include '../controllers/CrudRol.php';
	include '../model/Rol.php';
	include '../controllers/sessiones/SessionLogin.php';

	$rol = new Rol();
	$crud_rol = new CrudRol;
	$listaRoles = $crud_rol->select_all();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Uso de formularios</title>
	<meta charset="UTF-8">
    <meta name="author" content="José M. Miranda">
    <meta name="description" content="Programacion Web HTML">
    <meta name="keywords" content="HTML, CSS, JS , PHP, MySql">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<center>
		<h1>Registro de Empleados</h1>
		<hr width="600">

	<form action="" method="POST">
		<br>
		<table>
			<tr>
				<td>DNI (10): </td>
				<td>
					<input type="text" name="dni" id="dni" size="45">
				</td>
			</tr>
			<tr>
				<td>Nombre completo: </td>
				<td>
					<input type="text" name="nombre" id="nombre" size="45">
				</td>
			</tr>
			<tr>
				<td>Direccion: </td>
				<td>
					<input type="text" name="direccion" id="direccion" size="45">
				</td>
			</tr>
			<tr>
				<td>Teléfono: </td>
				<td>
					<input type="numeric" name="telefono" id="telefono" size="45">
				</td>
			</tr>
			<tr>
				<td>Rol: </td>
				<td>
					<select >
						<?php foreach ($listaRoles as $rol) {	
								echo  '<option>'.$rol->get_nombre().'</option>';
							  }
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td align="right" colspan="2">
					<input type="submit" name="btnEnviar" id="btnEnviar" value="Solicitar registro">
				</td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>