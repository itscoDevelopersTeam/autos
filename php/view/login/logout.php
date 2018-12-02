<?php 
session_start();
if($_SESSION) {
	session_destroy();
	header("Location: ../../../index.php?msj=congratulations");
}
else
	header("Location: ../../../index.php?msj=disconnected");

 ?>