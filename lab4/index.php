<!DOCTYPE html>
<html lang="ru">

<head>
<!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

<header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Лабораторная работа №4</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">

          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Поиск">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
          </form>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Определить, достаточно ли имеющейся ткани для изготовления изделий двух видов.</h1>
		<form method="POST">
			<div class="form-group">
				<label for="exampleInputB">Расход ткани на первое изделие</label>
				<input type="number" class="form-control" name="A1" id="exampleInputB" placeholder="Введите значение">
				<label for="exampleInputB">Количество изделий первого вида</label>
				<input type="number" class="form-control" name="B1" id="exampleInputB" placeholder="Введите значение">
				<label for="exampleInputB">Расход ткани на второе изделие</label>
				<input type="number" class="form-control" name="A2" id="exampleInputB" placeholder="Введите значение">
				<label for="exampleInputB">Количество изделий второго вида</label>
				<input type="number" class="form-control" name="B2" id="exampleInputB" placeholder="Введите значение">
				<label for="exampleInputB">Количество имеющейся ткани</label>
				<input type="number" class="form-control" name="C" id="exampleInputB" placeholder="Введите значение">
			</div>
			<p></p>
			<div>
				<button type="submit" class="btn btn-primary" name="submit" id="button_rez">Вычислить</button>
			</div>
		</form>
		<div class="mydiv1">
			<h2>
				<?php
					if (isset($_POST['submit'])){
						$A1 = floatval($_POST['A1']);
						$B1 = floatval($_POST['B1']);
						$A2 = floatval($_POST['A2']);
						$B2 = floatval($_POST['B2']);
						$C = floatval($_POST['C']);
						if ((($A1 || $A2) <= 0) || (($B1 || $B2) < 0) || ($C <= 0)){
							echo "Значения не могут быть отрицательными и не могут равняться нулю";
						}else if((($A1 * $B1) + ($A2 * $B2)) <= $C){
							echo "Количество имеющейся ткани: Достаточно";
						}else{
							echo "Количество имеющейся ткани: Не достаточно";
						}
					}
				?>
			</h2>
		</div>
    </main>

    <footer class="footer">

    </footer>
	
</body>

</html>