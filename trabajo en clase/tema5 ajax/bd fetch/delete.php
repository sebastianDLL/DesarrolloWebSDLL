<?php
$id = $_GET['id'];
include('conexion.php');

$sql = "DELETE FROM personas WHERE id=$id";
//echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se elimino el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
<script>
    setTimeout(function() {
        cargarContenido('read.php');
    }, 5000);
</script>