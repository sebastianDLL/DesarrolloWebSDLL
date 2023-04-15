<!DOCTYPE html>
<html>
<head>
	<title>Llenar</title>
</head>
<body>
	<form action="sumar.php" method="POST">
		<?php
			$n = $_POST['n'];
			echo "<h3>Introduce $n números:</h3>";
			echo "<h3>PRIMER VECTOR</h3>";
			for ($i=0; $i<$n; $i++) {
				echo "<label for='num$i'>Número ".($i+1).":</label>";
				echo "<input type='number' id='num$i' name='num$i' required>";
				echo "<br>";
			}
			echo "<input type='hidden' name='n' value='$n'>";
		?>

		<?php
			$m = $_POST['n'];
			echo "<h3>Introduce $m números:</h3>";
			echo "<h3>SEGUNDO VECTOR</h3>";
			for ($j=0; $j<$m; $j++) {
				echo "<label for='num$j'>Número ".($j+1).":</label>";
				echo "<input type='number' id='num$j' name='n$j' required>";
				echo "<br>";
			}
			echo "<input type='hidden' name='n' value='$m'>";
		?>

		<br>
		<input type="submit" value="Calcular">
	</form>
</body>
</html>
