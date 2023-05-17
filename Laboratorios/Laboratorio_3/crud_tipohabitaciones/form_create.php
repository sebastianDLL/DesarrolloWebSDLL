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

    <form action="create.php" method="POST" enctype="multipart/form-data"
>
        <div>
            <label for="descripcion">DESCRIPCION:</label>
            <input type="text" name="descripcion">
        </div>
        <div>
            <label for="numero camas">NUMERO CAMAS:</label>
            <input type="number" name="nro_camas">
        </div>
        <input type="submit" value="Crear">



    </form>

</body>

</html>