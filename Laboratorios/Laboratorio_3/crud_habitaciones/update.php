<?php
include('conexion.php');
$nro = $_POST['nro'];
$idtipohabitacion = $_POST['idtipohabitacion'];
$banoprivado = $_POST['banoprivado'];
$espacio = $_POST['espacio'];
$precio = $_POST['precio'];
$id = $_POST['id'];

    $sql = "UPDATE habitaciones SET  nro='$nro',idtipohabitacion ='$idtipohabitacion',banoprivado='$banoprivado'
    ,espacio='$espacio',precio='$precio' WHERE id=$id";


echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=read.php" />