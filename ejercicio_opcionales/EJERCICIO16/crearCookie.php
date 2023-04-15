<?php
// Obtenemos el número ingresado por el usuario
if(isset($_POST["numero"])) {
	$numero = $_POST["numero"];
	
	// Creamos la cookie con el número ingresado por el usuario
	setcookie("miCookie", $numero, time() + 3600);
}

// Mostramos el menú
echo "<!DOCTYPE html>
<html>
<head>
	<title>Menú con Cookies</title>
</head>
<body>
	<h2>Menú</h2>
	<a href='sumatoria.php'>Sumatoria</a>
	<a href='factorial.php'>Factorial</a>
	<a href='fibonacci.php'>Fibonacci</a>
	<a href='dividir.php'>Dividir</a>
</body>
</html>";
?>
