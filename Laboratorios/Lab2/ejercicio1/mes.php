<?php
$n = $_GET['n'];

$dias = array(
	1 => 'ENERO',
	2 => 'FEBRERO',
	3 => 'MARZO',
	4 => 'ABRIL',
	5 => 'MAYO',
	6 => 'JUNIO',
	7 => 'JULIO',
    8 => 'AGOSTO',
	9 => 'SEPTIEMBRE',
	10 => 'OCTUBRE',
	11 => 'NOVIEMBRE',
	12 => 'DICIEMBRE'
);

echo '<select>';

foreach ($dias as $key => $value) {
	$selected = ($key == $n) ? 'selected' : '';
	echo "<option value=\"$key\" $selected>$value</option>";
}

echo '</select>';
?>
