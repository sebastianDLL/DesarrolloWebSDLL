<?php
include('conexion.php');
$sql = "SELECT id,descripcion,numero_camas FROM tipo_habitaciones";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
<table>
    <tr>
        <th>Descripcion Habitacion</th>
        <th>Numero Camas</th>
    </tr>
    <?php while ($row = $resultado->fetch_assoc()) {
    ?>
        <tr>
            <td><?php echo $row['descripcion'] ?> </td>
            <td><?php echo $row['numero_camas'] ?></td>
            <td>
                <a href="form_update.php?id=<?php echo $row['id']; ?>">Editar</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                
            </td>  
        </tr>
    <?php } ?>
</table>
<?php
}
?>
<a href="form_create.php">Insertar</a>
<?php
$con->close();
?>