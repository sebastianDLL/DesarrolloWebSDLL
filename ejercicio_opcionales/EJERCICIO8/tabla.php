<?php
$filas = $_GET['filas'];
$columnas = $_GET['columnas'];

echo "<table border='2'>";
for ($i=0; $i<=$columnas; $i++) {
	echo "<tr>&nbsp;&nbsp;";
	for ($j=0; $j<=$filas; $j++) {
		if ($i == 0 && $j == 0) {
			echo "<td>&nbsp<b>&nbsp;</b></td>";
		} else if ($i == 0) {
			echo "<td>&nbsp<b>$j&nbsp;</b></td>";
		} else if ($j == 0) {
			echo "<td>&nbsp<b>$i&nbsp;</b></td>";
		} else {
			echo "<td>&nbsp;" . ($i*$j) . "&nbsp;</td>";
		}
	}
	echo "</tr>&nbsp;";
}
echo "</table>";
?>
