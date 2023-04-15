<!DOCTYPE html>
<html>
<head>
	<title>Formulario de autenticación</title>
</head>
<body>
	<form action="autenticar.php" method="POST">
		<label for="usuario">Usuario:</label>
		<input type="text" id="usuario" name="usuario" required>
		<br>
		<label for="contrasena">Contraseña:</label>
		<input type="password" id="contrasena" name="contrasena" required>
		<br>
		<input type="submit" value="Ingresar">
	</form>
</body>
</html>
