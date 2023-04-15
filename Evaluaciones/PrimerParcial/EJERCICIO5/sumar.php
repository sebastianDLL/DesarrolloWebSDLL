<!DOCTYPE html>
<html>
<head>
	<title>sumar</title>
</head>
<body>
	<?php
		$n = $_POST['n'];
		$m = $_POST['n'];
		for ($i=0; $i<$n; $i++) {
			for($j=0; $j<$m; $j++){
			$result = $_POST['num'.$i] + $_POST['num'.$j];
			echo $result;
			}
		}
		echo "<h3>El resultado es: $result</h3>";
	?>
</body>
</html>
