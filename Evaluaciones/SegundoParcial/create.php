<?php
include('conexion.php');
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];



$fotografia = null;
if (isset($_FILES['imagen'])) {
    $archivo_original = $_FILES['imagen']['name'];
    $arreglo = explode(".", $archivo_original);
    $extension = $arreglo[1];
    $fotografia = uniqid() . '.' . $extension;
}

if (copy($_FILES['imagen']['tmp_name'], 'images/' . $fotografia)) {
    $sql = "INSERT into libros (titulo, autor, imagen)
    VALUES ('$titulo', '$autor', '$fotografia')";

    if ($con->query($sql) === TRUE) {
        echo "<script>
                var mensaje = document.getElementById('mensaje');
                mensaje.textContent = 'Se creó el registro correctamente';
              </script>";
    } else {
        echo "<script>
                var mensaje = document.getElementById('mensaje');
                mensaje.textContent = 'Error: " . $sql . "<br>" . $con->error . "';
              </script>";
    }
} else {
    echo "<script>
            var mensaje = document.getElementById('mensaje');
            mensaje.textContent = 'Error al copiar la imagen';
          </script>";
}

$con->close();
?>

<script>
sleep(5);
cargarContenido('parcial2.html')
</script>
