<?php
session_start();

echo "El usuario es: " . $_SESSION['usuario'] . "<br>";

if ($_SESSION['usuario'] == 'admin') {
	echo "<ul>
			<li><a href='crear.php'>Crear elemento</a></li>
			<li><a href='listar.php'>Listar elementos</a></li>
			<li><a href='borrar.php'>Borrar elemento</a></li>
			<li><a href='salir.php'>Salir</a></li>
		  </ul>";
} else {
	echo "<ul>
			<li><a href='listar.php'>Listar elementos</a></li>
		  </ul>";
}
?>
