<?php 
include('permiso.php');
include('conexion.php');

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];


$archivo_original=$_FILES['imagen']['name'];
$arreglo=explode(".",$archivo_original);
$extension=$arreglo[1];
$imagen=uniqid().'.'.$extension;
copy($_FILES['imagen']['tmp_name'],'images/'.$imagen);

$sql="INSERT into productos (nombre,descripcion,precio,stock,imagen)
VALUES ('$nombre','$descripcion',$precio,$stock,'$imagen')";

echo $sql;

if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
