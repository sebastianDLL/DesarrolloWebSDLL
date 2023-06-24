<?php

include('conexion.php');
$sql = "SELECT id,nombre,descripcion,precio,stock,imagen FROM productos ";

$resultado = $con->query($sql);
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

    <form action="javascript:crearProducto()" method="POST" enctype="multipart/form-data" id="formInsertar">
    <div>
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen">
         </div>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion">
         </div>
         <div>
            <label for="precio">Precio:</label>
            <input type="number" name="precio">
         </div>
         <div>
            <label for="stock">Stock:</label>
            <input type="number" name="stock">
         </div>
            <input type="submit" value="registrar ">
    </form>
</body>
</html>