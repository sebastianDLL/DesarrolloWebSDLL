<?php
include("conexion.php");
// Leer registros de la tabla habitaciones
$sql = "SELECT * FROM habitaciones";
$resultado = $con->query($sql);

if ($resultado->num_rows > 0) {
?>
  <table>
    <tr>
      <th>numero</th>
      <th>tipohabitacion</th>
      <th>baño privado</th>
      <th>espacio</th>
      <th>precio</th>
      <th>Operaciones</th>
    </tr>
    <?php while ($row = $resultado->fetch_assoc()) {
    ?>
      <tr>
        <td><?php echo $row['nro'] ?></td>
        <td><?php echo $row['idtipohabitacion'] ?></td>
        <td><?php echo $row['banoprivado'] ?></td>
        <td><?php echo $row['espacio'] ?></td>
        <td><?php echo $row['precio'] ?></td>
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
<a href="form_create.php">INSERTAR</a>
<?php
$con->close();
?>
