<?php
session_start();

if ($_POST['usuario'] == 'admin' && $_POST['contrasena'] == 'admin') {
	$_SESSION['usuario'] = 'admin';
} else {
	$_SESSION['usuario'] = 'usuario';
}

echo "El usuario es: " . $_SESSION['usuario'] . "<br>";

if ($_SESSION['usuario'] == 'admin') {
	echo "<a href='acceso.php'>Acceder al menú</a>";
} else {
	echo "<a href='listar.php'>Listar elementos</a>";
}
?>
