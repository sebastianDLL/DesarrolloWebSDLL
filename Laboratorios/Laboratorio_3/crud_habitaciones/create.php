<?php
include("conexion.php");
// Crear un registro en la tabla tipo_habitaciones
$nro= $_POST['nro'];
$idtipohabitacion = $_POST['idtipohabitacion'];
$banoprivado= $_POST['banoprivado'];
$espacio = $_POST['espacio'];
$precio= $_POST['precio'];

$sql = "INSERT INTO habitaciones (nro,idtipohabitacion,banoprivado,espacio,precio) VALUES ('$nro','$idtipohabitacion','$banoprivado','$espacio','$precio')";

if ($con->query($sql) === TRUE) {
  echo "Registro creado correctamente";
} else {
  echo "Error al crear el registro: " . $con->error;
}?>

<meta http-equiv="refresh" content="3; url=read.php" />