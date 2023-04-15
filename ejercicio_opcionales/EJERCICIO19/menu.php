<?php
include 'cola.php';
session_start();

// Creamos la cola y la guardamos en una variable de sesión para conservar su valor
if (!isset($_SESSION['cola'])) {
    $_SESSION['cola'] = new Cola('Normal');
}

// Si se ha enviado un formulario, realizamos la operación correspondiente
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    switch ($_POST['opcion']) {
        case 'insertarDelante':
            $_SESSION['cola']->insertarDelante($_POST['elemento']);
            break;
        case 'insertarDetras':
            $_SESSION['cola']->insertarDetras($_POST['elemento']);
            break;
        case 'eliminar':
            $_SESSION['cola']->eliminar();
            break;
        case 'mostrar':
            $_SESSION['cola']->mostrar();
            break;
        case 'cambiarTipo':
            $_SESSION['cola'] = new Cola($_POST['tipo']);
            break;
    }
}

// Mostramos el menú y la cola
echo "<form action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "' method='POST'>";
echo "Elemento: <input type='text' name='elemento'>";
echo "<br>";
echo "<input type='submit' name='opcion' value='insertarDelante'>";
echo "<input type='submit' name='opcion' value='insertarDetras'>";
echo "<input type='submit' name='opcion' value='eliminar'>";
echo "<input type='submit' name='opcion' value='mostrar'>";
echo "<br>";
echo "Tipo de cola: <input type='text' name='tipo' value='" . $_SESSION['cola']->getTipo() . "'>";
echo "<input type='submit' name='opcion' value='cambiarTipo'>";
echo "</form>";
echo "Cola: ";
$_SESSION['cola']->mostrar();
