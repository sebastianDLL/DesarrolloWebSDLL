<?php
include('conexion.php');

// Consulta SQL para obtener los títulos e imágenes de la tabla "libros"
$sql = "SELECT titulo, imagen FROM libros";
$result = $con->query($sql);

// Verificar si se obtuvieron resultados
if ($result->num_rows > 0) {
    // Array para almacenar los datos de los libros
    $datos = array(
        'titulos' => array(),
        'imagenes' => array()
    );

    // Recorrer los resultados y agregar los títulos e imágenes al array
    while ($row = $result->fetch_assoc()) {
        $datos['titulos'][] = $row['titulo'];
        $datos['imagenes'][] = $row['imagen'];
    }

    // Convertir el array a formato JSON y devolverlo como respuesta
    header('Content-Type: application/json');
    echo json_encode($datos);
} else {
    echo "No se encontraron libros en la base de datos.";
}

// Cerrar la conexión
$con->close();
?>
