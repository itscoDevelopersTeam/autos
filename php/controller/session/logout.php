<?php 
session_start();

if(isset($_SESSION['status'])) {
	session_destroy();
	header("Location: ../../../index.php?msj=congratulations");
}
else
	header("Location: ../../../index.php?msj=disconnected");

 ?>