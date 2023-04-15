<?php
// Verificamos si la cookie existe
if(isset($_COOKIE["miCookie"])) {
	$numero = $_COOKIE["miCookie"];
	
	// Calculamos la sumatoria
	$sumatoria = 0;
	for($i=1; $i<=$numero; $i++) {
		$sumatoria += $i;
	}
	
	// Mostramos el resultado
	echo "La sumatoria de los números del 1 al $numero es: $sumatoria";
} else {
	echo "No se ha ingresado un número";
}
?>
