<?php 
include 'php/view/handler/loginHandler.php';
 ?>
<header class="header content">

	<div class="header-video">
		<video controls autoplay loop >
			<source src="recourses/video/video-login.mp4" type="video/mp4" >
		</video>
	</div>

	<!-- Capa transparente -->
	<div class="header-overlay"></div>
	
	<!-- Contenido -->
	<div class="header-content">

		<!-- Formulario -->
		<form action="" class="formulario-login" method="POST">

			<div class="login" >

				<h1 class="titulo">Bienvenido</h1>
				<h2 class="base">Por favor Inicia Sesion </h2>
				
				<form action="php/view/handler/loginHandler.php" method="post">
				
					<div class="contenedor-inputs">
						<input type="text" name="usuario" placeholder="Usuario" class="input-100" required="required">

						<input type="password" name="password" placeholder="Password" class="input-100" required="required">
						
						<input type="submit" value="Iniciar Sesion" class="btn-ingresar">
						
					</div>
					
				</form>

			</div>

		</form>

	</div>
 
</header>
