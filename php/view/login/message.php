<?php 

if(isset($_GET['msj'])) {

	if ($_GET['msj'] == "disconnected") {
		echo("<br><span><p style=color:red>Usted no se ha logueado.</p></span>");
	}

	if ($_GET['msj'] == "incorrect") {
		echo("<br><span><p style=color:red>El username y/o password son incorrectos. Intentélo de nuevo. </p></span>");
	}

	if ($_GET['msj'] == "congratulations") {
		echo("<br><span>Gracias por usar el sistema web. Vuelva pronto.</span>");
	}
}

?>