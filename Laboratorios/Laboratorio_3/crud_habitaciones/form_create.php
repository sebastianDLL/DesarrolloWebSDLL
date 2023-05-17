<?php 
include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="create.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="nro">numero:</label>
            <input type="number" name="nro">
        </div>
        <div>
            <label for="idtipohabitacion">tipo habitacion:</label>
            <input type="number" name="idtipohabitacion">
        </div>
        <div>
            <label for="banoprivado">baño:</label>
            <input type="number" name="banoprivado">
        </div>
        <div>
            <label for="espacio">espacio:</label>
            <input type="floatval" name="espacio">
        </div>
        <div>
            <label for="precio">precio:</label>
            <input type="floatval" name="precio">
        </div>
        <input type="submit" value="Crear">
    </form>

</body>
</html>