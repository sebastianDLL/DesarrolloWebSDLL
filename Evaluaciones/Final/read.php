<?php
include('conexion.php');
$sql = "SELECT id,nombre,descripcion,precio,stock,imagen FROM productos ";

// echo $sql;

$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <table>
        <tr>
            <th>Imagen</a></th>
            <th>Nombres</th>
            <th>Descripcion</th>
            <th>Precio</a> </th>
            <th>Stock</a></th>

        </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
                <td><img width="100px" src="images/<?php echo $row['imagen'];  ?>" alt="imagen"> </td>
                <td><?php echo $row['nombre'] ?> </td>
                <td><?php echo $row['descripcion'] ?> </td>
                <td><?php echo $row['precio'] ?></td>
                <td><?php echo $row['stock'] ?></td>

            </tr>
        <?php } ?>
    </table><br>
    <div id="reemplazar">
        <button onclick="ContenidoFetch('formInsertar.php')">Insertar</button>
    </div>

<?php
} else {
    echo "la tabla no tiene datos que mostrar";
}
$con->close();
?>