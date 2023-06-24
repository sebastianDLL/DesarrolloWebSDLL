<?php
include('conexion.php');

$sql = "SELECT id, nombre, direccion, correo_electronico, telefono, imagen FROM clientes";
$resultado = $con->query($sql);

if ($resultado->num_rows > 0) {
    echo '<div class="contenedor-tarjetas">';
    $contador = 0;
    while ($row = $resultado->fetch_assoc()) {
        if ($contador % 3 == 0) {
            echo '<div class="fila-tarjetas">';
        }
        ?>
        <div class="tarjeta">
            <img src="images/<?php echo $row['imagen']; ?>" alt="Foto de <?php echo $row['nombre']; ?>">
            <h3><?php echo $row['nombre']; ?></h3>
            <p><strong>Correo:</strong> <?php echo $row['correo_electronico']; ?></p>
            <p><strong>Dirección:</strong> <?php echo $row['direccion']; ?></p>
            <p><strong>Teléfono:</strong> <?php echo $row['telefono']; ?></p>
        </div>
        <?php
        if ($contador % 3 == 2 || $contador == ($resultado->num_rows - 1)) {
            echo '</div>';
        }
        $contador++;
    }
    echo '</div>';
} else {
    echo "No se encontraron clientes.";
}

$con->close();
?>
