<?php 

session_start();

if (isset($_SESSION['status'])) {
	echo "En linea";
	$nombre = $_SESSION['username'];
	$email = $_SESSION['email'];
	echo("<h1>Bienvenido $nombre con el email $email</h1>");
}
else{
	header("Location: ../../index.php?msj=disconnected");
}

 ?>

 <!DOCTYPE html>

 <html lang="es"> 
	 <head>
	 	<meta charset="utf-8">
	 	<title>Saludo</title>
	 </head>
	 <body>
	 	<a href="../controller/session/logout.php">Cerrar sesión</a>
	 </body>
 </html>