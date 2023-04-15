<?php
$filas = $_GET['filas'];
$columnas = $_GET['columnas'];

echo "<table border='1'>";
for ($i=1; $i<=$filas; $i++) {
	echo "<tr>";
	for ($j=1; $j<=$columnas; $j++) {
		$valor = $i*$j;
		if ($valor % 3 == 0) {
			if ($valor % 6 == 0) {
				echo "<td style='background-color: yellow'></td>";
			} else {
				echo "<td style='background-color: green'></td>";
			}
		} else {
			echo "<td style='background-color: red'></td>";
		}
	}
	echo "</tr>";
	if ($i % 3 == 0) {
		echo "<tr style='background-color: blue'>";
		for ($j=1; $j<=$columnas; $j++) {
			echo "<td></td>";
		}
		echo "</tr>";
	}
}
echo "</table>";
?>
