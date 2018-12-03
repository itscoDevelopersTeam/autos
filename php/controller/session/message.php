<?php 

if( isset($_GET['msj']) ) {

	if ($_GET['msj'] == "disconnected") {
		echo("<span><p style=color:#C0392B>Usted no se ha logueado.</p></span>");
	}

	if ($_GET['msj'] == "incorrect") {
		echo("<span><p style=color:#C0392B>El usuario y/o password son incorrectos. Intentélo de nuevo. </p></span>");
	}

	if ($_GET['msj'] == "congratulations") {
		echo("<span>Gracias por usar el sistema web. Vuelva pronto.</span>");
	}

	if ($_GET['msj'] == "Registro_OK") {
		echo("<span><p style=color:#C0392B>Personal añadido con éxito.</p></span>");
	}
}

?>