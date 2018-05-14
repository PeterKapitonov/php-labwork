<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	                   
	<h3>Задачи на приемы работы с логическими значениями</h3><br>
	<span>task1.равны ли числа</span>
	<div class="window">
		<form action="" method="GET">
			<input type="text" name="num1-1" placeholder="Введите число"><br>
			<input type="text" name="num1-2" placeholder="Введите число"><br>
			<input type="submit" name="submit1">
		</form>
<?php
	if (isset($_REQUEST['submit1'])) {
		$num1_1 = $_REQUEST['num1-1'];
		$num2_1 = $_REQUEST['num1-2'];
	}

	echo func1($num1_1,$num2_1);
	function func1($a, $b){
		if($a == $b){
			return 'равны';
		}else{
			return 'неравны';
		}
	}
?>
	</div><br>


<!--      -------- Task2-----------         -->
	<span>task2.проверка что сумма двух чисел больше 10</span>
	<div class="window">
		<form action="" method="GET">
			<input type="text" name="num2-1" placeholder="Введите число"><br>
			<input type="text" name="num2-2" placeholder="Введите число"><br>
			<input type="submit" name="submit2">
		</form>
<?php
	if (isset($_REQUEST['submit2'])) {
		$num1_2 = $_REQUEST['num2-1'];
		$num2_2 = $_REQUEST['num2-2'];
	}

	echo func2($num1_2,$num2_2);
	function func2($a, $b){
		if($a + $b<10){
			return 'не больше';
		}else{
			return 'больше';
		}
	}
?>
	</div><br>


<!--      -------- Task3-----------         -->
	<span>task3.проверка на положительность</span>
	<div class="window">
		<form action="" method="GET">
			<input type="text" name="num3" placeholder="Введите число"><br>
			<input type="submit" name="submit3">
		</form>
<?php
	if (isset($_REQUEST['submit3'])) {
		$num3 = $_REQUEST['num3'];
	}

	echo func3($num3);
	function func3($a){
		if($a<0){
			return 'отрицательный';
		}else{
			return 'положительный';
		}
	}
?>
	</div><br>

</body>
</html>