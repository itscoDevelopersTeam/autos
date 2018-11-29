/* Inicio Validad campos */
function validarCampos(){ 

	// Vamos a validar el Numero de Control mediante un expresion regular
	var nocontrol = document.forms["forma"]["nocontrol"].value;
	var nombre = document.forms["forma"]["nombre"].value;
	var apellidos = document.forms["forma"]["apellidos"].value;
	var edad = document.forms["forma"]["edad"].value;

	var nombrevalido =  /^([A-Za-z ÑÁÉÍÓÚñáéíóú]{2,32})$/;
	var apellidosvalido =  /^([A-Za-z ÑÁÉÍÓÚñáéíóú]{2,64})$/;
	var nocontrolvalido = /^([E][0-9]){8}$/; /*E15500182*/

	if(nocontrol=="" || nombre=="" || apellidos=="" || edad==""){

 		document.getElementById("resultado").innerHTML = "No puede haber campos vacios";
		return false;

	}

	// Si x no es un número o menor que 17 o mayor que 65
	if (isNaN(edad) || edad < 17 || edad > 65) {
 		document.getElementById("resultado").innerHTML = "La Edad no es Valida";
		return false;
	}

	if (!nocontrolvalido.test(nocontrol)){
 		document.getElementById("resultado").innerHTML = "El No. de Control no es Valido";
		return false;
	}

	if (!nombrevalido.test(nombre)){
 		document.getElementById("resultado").innerHTML = "El nombre no es Valido";
		return false;
	}

	if (!apellidosvalido.test(apellidos)){
 		document.getElementById("resultado").innerHTML = "El apellido no es Valido";
		return false;
	}

    return true;
} /*Fin Validad Campos */

function salirInput(elemento){
	elemento.style.background = '#fff';
	elemento.style.color = 'black';
	elemento.style.fontWeight = 'normal'; 
	elemento.style.fontSize = 'initial';
}

function entrarInput(elemento){
	elemento.style.background = 'red';
	elemento.style.color = 'white';
	elemento.style.fontWeight = 'bold'; 
	elemento.style.fontSize = '20px'
}

function tabular(e, obj) { 
	tecla = (document.all) ? e.keyCode : e.which; 
	if( tecla != 13 ) return; 
	frm = obj.form; 
	for( i = 0; i < frm.elements.length; i++ ) {
		if(frm.elements[i] == obj) { 
			if (i == frm.elements.length-1) i=-1; 
			break 
		} 
	
	frm.elements[i+1].focus(); 
	}
	return false; 
}

