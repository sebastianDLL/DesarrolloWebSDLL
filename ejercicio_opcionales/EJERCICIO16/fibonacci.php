<?php
// Verificamos si la cookie existe
if(isset($_COOKIE["miCookie"])) {
	$numero = $_COOKIE["miCookie"];
	
	// Calculamos la serie de Fibonacci
	$fibonacci = array(0, 1);
	for($i=2; $i<=$numero; $i++) {
		$fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
	}
	
	// Mostramos el resultado
	echo "Los $numero primeros números de la serie de Fibonacci son: ";
	for($i=0; $i<=$numero; $i++) {
		echo $fibonacci[$i] . " ";
	}
} else {
	echo "No se ha ingresado un número";
}
?>
