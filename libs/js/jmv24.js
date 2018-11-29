$(document).ready(
	function(){
		$("#btnEnviar").click(function(){

			var regreso = true;
			var mensaje = "<b>Error Integridad de datos!</b><br>";
			// Validamos el numero de Control
			var noctrolreg =  /^([E][0-9]{8})$/;
			if( $("#nocontrol").val() == "" || 	!noctrolreg.test( $("#nocontrol").val() ) ){
						mensaje = mensaje + "No. de Control<br>";
		                regreso = false;
				} 

			// Validamos el nombre
			var nombreusuarioreg =  /^([A-Za-z ÑÁÉÍÓÚñáéíóú]{2,32})$/;
			if( $("#nombre").val() == "" || 
					!nombreusuarioreg.test($("#nombre").val())){
						mensaje = mensaje + "Nombre <br>";
		                regreso = false;
				}

			// Validamos los apellidos
			var apellidosusuarioreg =  /^([A-Za-z ÑÁÉÍÓÚñáéíóú]{2,64})$/;
			if( $("#apellidos").val() == "" || 
					!apellidosusuarioreg.test($("#apellidos").val())){
						mensaje = mensaje + "Apellidos <br>";
		                regreso = false;
				} 

			// Validamos Edad
			if(!($("#edad").val() >17 && $("#edad").val()<65)){

						mensaje = mensaje + "Edad <br>";
		                regreso = false;
			}
			
			// Si paso las validaciones enviamos el formulario	
			if(regreso){
				$("#msgError").html("<b>Felicidades (: </b><br>");
				return true;
			} else {
				$("#msgError").html(mensaje);
				return false;				
			}
		});
	});
