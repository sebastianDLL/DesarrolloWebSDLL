<?php
include("conexion.php");
// Crear un registro en la tabla tipo_habitaciones
$descripcion = $_POST['descripcion'];
$numero_camas = $_POST['nro_camas'];

$sql = "INSERT INTO tipo_habitaciones (descripcion, numero_camas) VALUES ('$descripcion', $numero_camas)";

if ($con->query($sql) === TRUE) {
  echo "Registro creado correctamente";
} else {
  echo "Error al crear el registro: " . $con->error;
}?>

<meta http-equiv="refresh" content="3; url=read.php" />