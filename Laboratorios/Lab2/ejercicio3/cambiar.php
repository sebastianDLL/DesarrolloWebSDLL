<!DOCTYPE html>
<html>
<head>
	<style>
		.board {
			width: 400px;
			height: 400px;
			display: flex;
			flex-wrap: wrap;
		}
		
		.square {
			width: 50px;
			height: 50px;
			display: flex;
			justify-content: center;
			align-items: center;
			border: 1px solid black;
		}
		
		.white {
			background-color: white;
		}
		
		.black {
			background-color: gray;
		}
	</style>
</head>
<body>
	<div class="board">
		<?php
		for ($i=0; $i<8; $i++) {
			for ($j=0; $j<8; $j++) {
				$color = (($i + $j) % 2 == 0) ? 'white' : 'black';
				echo '<div class="square ' . $color . '">';
				echo ($i+1) . ',' . ($j+1);
				echo '</div>';
			}
		}
		?>
	</div>
</body>
</html>