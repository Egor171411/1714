<!DOCTYPE html>
<html>
	<head>
		<title> Моя страница </title>
		<link rel="stylesheet" href='mycss.css'>
		<link rel="shortcut icon" href='favicon.ico'>
	</head>
	<body>
		<div class="mydiv1">
			<?php
				echo "Результат вычисления квадрата разности двух чисел 5 и 8 равен ";
				echo pow((5-8), 2);
			?>
		</div>
	</body>
</html>