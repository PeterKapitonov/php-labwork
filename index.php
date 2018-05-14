<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	                   
	<h3>Задачи на приемы работы с флагами на PHP</h3><br>
	<span>task1.Проверка что в массиве есть введённое число</span>
	<div class="window">
		<form action="" method="GET">
			<input type="text" name="num1" placeholder="Введите число"><br>
			<input type="submit" name="submit1">
		</form>
<?php
	if (isset($_REQUEST['submit1'])) {
		$num = $_REQUEST['num1'];
	}

	$arr = array(1, 4, 6, 10, 11, 5, 8);
	foreach ($arr as $elem) {
		if ($elem == $num) {
			$flag = true;
			break;
		}else{
			$flag = false;
		}
	}

	if ($flag == true) {
		echo 'есть';
	} else {
		echo 'нет';
	}
?>
	</div><br>


<!--      -------- Task2-----------         -->
	<span>task2.Проверка что число простое</span>
	<div class="window">
		<form action="" method="GET">
			<input type="text" name="num2" placeholder="Введите число"><br>
			<input type="submit" name="submit2">
		</form>
<?php
	if (isset($_REQUEST['submit2'])) {
		$num2 = $_REQUEST['num2'];
	}

	$flag2 = false;
	for ($i = 2; $i < $num2; $i++) {
		if ($num2 % $i == 0) {
			$flag2 = true;
			break;
		}
	}

	if ($flag2 == true) {
		echo 'число непростое';
	} else {
		echo 'число простое';
	}
?>
	</div><br>


<!--      -------- Task3-----------         -->
	<span>task3.есть ли в массиве два одинаковых числа подряд</span>
	<div class="window">
<?php
	$arr = array(1, 2, 3, 3, 4, 5, 5);
	$flag = false;
	foreach ($arr as $key=>$elem) {
		if ($key > 0 and $elem == $arr[$key - 1]) {
			$flag = true;
			break;
		}
	}

	if ($flag == true) {
		echo 'да';
	} else {
		echo 'нет';
	}
?>
	</div><br>

</body>
</html>