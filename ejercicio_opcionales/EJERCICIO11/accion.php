<?php
// Incluir la clase Examen
require_once('examen.php');

// Obtener la opción seleccionada por el usuario
$opcion = $_POST['opcion'];

// Crear un objeto de la clase Examen con los parámetros introducidos en el formulario
$examen = new Examen($_POST['n'], $_POST['cadena'], $_POST['a'], $_POST['b'], $_POST['c']);

// Ejecutar el método correspondiente según la opción seleccionada por el usuario
switch ($opcion) {
    case 1:
        // Fibonacci
        $fibonacci = $examen->calcularFibonacci();
        echo "Números Fibonacci hasta " . $_POST['n'] . ": <br>";
        foreach ($fibonacci as $num) {
            echo $num . " ";
        }
        break;
    case 2:
        // Mayor
        $mayor = $examen->calcularMayor();
        echo "El mayor de " . $_POST['a'] . ", " . $_POST['b'] . " y " . $_POST['c'] . " es: <br>";
        foreach ($mayor as $num) {
            if ($num == max($_POST['a'], $_POST['b'], $_POST['c'])) {
                echo "<strong>" . $num . "</strong> ";
            } else {
                echo $num . " ";
            }
        }
        break;
    case 3:
        // Piramide
        echo "Pirámide de la cadena '" . $_POST['cadena'] . "': <br>";
        $examen->piramide();
        break;
    default:
        echo "Opción inválida";
}
?>
