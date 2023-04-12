<?php
include("eliminar.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $tamano = $_POST["tamano"];
    $menor = $_POST["menor"];
    
    $numeros = array();
    for($i = 0; $i < $tamano; $i++){
        $numeros[$i] = 0;
    }
    
    echo '<form action="eliminar.php" method="post">';
    echo '<input type="hidden" name="numeros" value="'.implode(",", $numeros).'">';
    echo '<input type="hidden" name="menor" value="'.$menor.'">';
    
    for($i = 0; $i < $tamano; $i++){
        echo '<label for="numeros['.$i.']">Ingrese el número '.($i+1).':</label>';
        echo '<input type="number" id="numeros['.$i.']" name="numeros['.$i.']" required>';
        echo '<br><br>';
    }
    
    echo '<input type="submit" value="Eliminar menores">';
    echo '</form>';
}
?>
