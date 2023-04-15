<?php
// Verificamos si la cookie existe
if(isset($_COOKIE["miCookie"])) {
	$numero = $_COOKIE["miCookie"];
	
	// Calculamos el factorial
	$factorial = 1;
	for($i=1; $i<=$numero; $i++) {
		$factorial *= $i;
	}
	
	// Mostramos el resultado
	echo "El factorial de $numero es: $factorial";
} else {
	echo "No se ha ingresado un número";
}
?>
