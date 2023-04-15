<?php
// Comprobamos si la cookie ya existe
if (isset($_COOKIE['visitas'])) {
    $visitas = $_COOKIE['visitas'] + 1;
    setcookie('visitas', $visitas, time() + (86400 * 30), "/"); // Actualizamos la cookie con el nuevo valor
    echo "Gracias por ser un visitante frecuente. Usted ha visitado este sitio $visitas veces.";
    if ($visitas > 5) {
        // Mostramos la encuesta
        echo '<br><br>';
        echo 'Indique qué le gusta de este sitio:';
        echo '<br>a) Buena presentación';
        echo '<br>b) Buenas opciones';
        // ... Aquí podríamos añadir más opciones
    }
} else {
    setcookie('visitas', 1, time() + (86400 * 30), "/"); // Creamos la cookie con valor 1
    echo "Bienvenido a nuestro sitio.";
}
?>
