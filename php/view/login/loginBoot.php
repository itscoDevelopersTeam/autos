<?php 
session_start();
if (isset($_SESSION['status'])) {
  header('Location: php/view/main.php');
}
 ?>

<!-- Formulario de Bootstrap -->
<form action="php/controller/ControllerPersonal.php" class="form-signin" method="POST">
  <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Inicia sesion</h1>

  <!-- Input Email -->
  <label for="inputUser" class="sr-only">Email address</label>
  <input type="text" id="inputUser" name="inputUser" class="form-control" placeholder="Username" required autofocus>

  <!-- Input Password -->
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>

  <!-- Indicador -->
  <input type='hidden' name='login' value='login'>

  <!-- Botón Inicio de session -->
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="">Sign in</button>

  <!-- Mensajes de session -->
  <center>
      <?php include("message.php") ?>
  </center><br>

  <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
</form>  