<?php 
session_start();
if (isset($_SESSION['status'])) {
  header('Location: php/view/main.php');
}
?>