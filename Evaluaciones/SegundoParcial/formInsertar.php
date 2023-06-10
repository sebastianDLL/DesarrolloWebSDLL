<?php

include('conexion.php');
$sql = "SELECT id,imagen,titulo,autor from libros";

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

    <form action="javascript:crearLibro()" method="POST" enctype="multipart/form-data" id="formInsertar">
        <div>
            <label for="titulo">titulo:</label>
            <input type="text" name="titulo">
        </div>
        <div>
            <label for="autor">Autor:</label>
            <input type="text" name="autor">
         </div>
         <div>
            <label for="archivo">imagen:</label>
            <input type="file" name="imagen">
         </div>
            <input type="submit" value="Crear ">



    </form>

</body>

</html>