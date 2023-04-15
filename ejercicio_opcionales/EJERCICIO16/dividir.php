<?php
// Recuperar el valor de la cookie
if(isset($_COOKIE["miCookie"])) {
    $numero = $_COOKIE["miCookie"];
} else {
    echo "No se ha ingresado un número válido.";
    exit();
}

// Obtener los valores enviados por el formulario
if(isset($_POST["divisor"])) {
    $divisor = $_POST["divisor"];
} else {
    echo "<form method='POST' action='dividir.php'>";
    echo "<label for='divisor'>Introduce el divisor:</label>";
    echo "<input type='number' id='divisor' name='divisor' required>";
    echo "<br>";
    echo "<input type='submit' value='Calcular'>";
    echo "</form>";
    exit();
}

// Validar que el divisor sea diferente de cero
if($divisor == 0) {
    echo "No se puede dividir por cero.";
    exit();
}

// Realizar la división
$division = $numero / $divisor;

// Mostrar el resultado
echo "El resultado de dividir " . $numero . " entre " . $divisor . " es: " . $division;
?>
