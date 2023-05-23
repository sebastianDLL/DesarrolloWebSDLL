<?php
include('conexion.php');
$descripcion = $_POST['descripcion'];
$num_camas = $_POST['numero_camas'];
$id = $_POST['id'];

    $sql = "UPDATE tipo_habitaciones SET  descripcion='$descripcion',numero_camas='$num_camas'
    WHERE id=$id";


echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=read.php" />