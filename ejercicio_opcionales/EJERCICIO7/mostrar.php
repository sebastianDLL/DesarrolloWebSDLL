<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$suma = $num1 + $num2;

echo "<table style='border: 1px solid black; background-color: green;'>";
echo "<tr><th colspan='5'>Suma de los número es: </th></tr>";
#echo "<tr><th>Num 1</th><th> + </th><th>Num 2</th><th> = </th><th>Suma</th></tr>";
echo "<tr><td>$num1</td><th> + </th><td>$num2</td><th> = </th><td>$suma</td></tr>";
echo "</table>";
?>
