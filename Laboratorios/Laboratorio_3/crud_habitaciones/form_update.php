<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    include('conexion.php');
    $sql = "SELECT nro,idtipohabitacion,banoprivado,espacio,precio from habitaciones where id=$id";
    $resultado = $con->query($sql);
    $row = $resultado->fetch_assoc();
    ?>
    <form action="update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?> ">
        
        <div>
            <label for="nro">numero:</label>
            <input type="text" name="nro" value="<?php echo $row['nro']; ?>">
        </div>
        <div>
            <label for="idtipohabitacion">tipo_habitacion:</label>
            <input type="text" name="idtipohabitacion" value="<?php echo $row['idtipohabitacion']; ?>">
        </div>
        <div>
            <label for="banoprivado">baño privado:</label>
            <input type="text" name="banoprivado" value="<?php echo $row['banoprivado']; ?>">
        </div>
        <div>
            <label for="espacio">espacio:</label>
            <input type="floatval" name="espacio" value="<?php echo $row['espacio']; ?>">
        </div>
        <div>
            <label for="precio">precio:</label>
            <input type="floatval" name="precio" value="<?php echo $row['precio']; ?>">
        </div>
    
        <input type="submit" value="Actualizar">
    </form>

</body>

</html>