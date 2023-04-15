<!DOCTYPE html>
<html>
<head>
	<title>Cadena</title>
</head>
<body>

<?php
$cadena = $_GET['cadena'];
echo "La cadena introducida es: $cadena<br>";

if (strpos($cadena, 'script') !== false) {
	echo "La cadena tiene la palabra script<br>";
	$cadena_sin_script = str_replace('script', '', $cadena);
	echo "La cadena sin la palabra script es: $cadena_sin_script";
} else {
	echo "La cadena no tiene la palabra script ni la palabra SCRIPT";
}
?>

</body>
</html> 
