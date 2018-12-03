<?php 
include 'php/controller/session/autentificado.php';
?>

<header class="header content">

	<!-- Fondo video -->
	<div class="header-video">
		<video controls autoplay loop >
			<source src="recourses/video/video-login.mp4" type="video/mp4" >	
		</video>
	</div>
	
	<!-- Capa transparencia -->
	<div class="header-overlay"></div>
	
	<div class="header-content">
	
		<!-- Formulario falso -->
		<form action="php/controller/ControllerLogin.php" class="formulario-login" method="post">
			<div class="login" >
				<h1 class="titulo">Bienvenido</h1>
				<hr color="#C0392B" noshade="noshade">
				<h2 class="base">Por favor Inicia Sesion </h2>

				<!-- Mensajes de session -->
				<center>
				  <?php include("php/controller/session/message.php") ?>
				</center>
				
				<!-- Inicio Formulario login -->
				<form action="" method="POST"> 
						<div class="contenedor-inputs">

							<!-- input username -->
							<input id="inputUser" type="text" name="inputUser" placeholder="Usuario" class="input-100" required="required">

							<!-- input password -->
							<input id="inputPassword" type="password" name="inputPassword" placeholder="Password" class="input-100" required>

							<!-- Indicador -->
  							<input type='hidden' name='login' value='login'>
							
							<!-- Boton iniciar sesion -->
							<input type="submit" value="Iniciar Sesion" class="btn-ingresar">

						</div>
				</form> <!-- Fin Formulario login -->
			</div>
		</form><!-- Fin Formulario falso -->
	</div>
</header>