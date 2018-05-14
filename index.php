<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	                   
	<h3>Задачи на пользовательские функции</h3><br>
	<span>task1.</span>
	<div class="window">
		<form action="" method="GET">
			<input type="text" name="num1" placeholder="Введите число"><br>
			<input type="submit" name="submit1">
		</form>
<?php
	if (isset($_REQUEST['submit1'])) {
		$num = $_REQUEST['num1'];
		echo 'квадрат числа '.$num.' равен: '.func1($num);

	}
	function func1($num){
		return  $num*$num;
	}
?>
	</div><br>


<!--      -------- Task2-----------         -->
	<span>task2.</span>
	<div class="window">
		<form action="" method="GET">
			<input type="text" name="num2-1" placeholder="Введите число"><br>
			<input type="text" name="num2-2" placeholder="Введите число"><br>
			<input type="submit" name="submit2">
		</form>
<?php
	if (isset($_REQUEST['submit2'])) {
		$num1 = $_REQUEST['num2-1'];
		$num2 = $_REQUEST['num2-2'];
		echo 'cумма чисел '.$num1. ' и '.$num2.' равен: '.func2($num1,$num2);

	}
	function func2($num1,$num2){
		return  $num1+$num2;
	}
?>
	</div><br>



<!--      -------- Task3-----------         -->
	<span>task3.</span>
	<div class="window">
		<form action="" method="GET">
			<input type="text" name="num3-1" placeholder="Введите число"><br>
			<input type="text" name="num3-2" placeholder="Введите число"><br>
			<input type="text" name="num3-3" placeholder="Введите число"><br>
			<input type="submit" name="submit3">
		</form>
<?php
	if (isset($_REQUEST['submit3'])) {
		$num1 = $_REQUEST['num3-1'];
		$num2 = $_REQUEST['num3-2'];
		$num3 = $_REQUEST['num3-3'];
		echo 'разность чисел '.$num1. ' и '.$num2.' делённый на '.$num3.' равен: '.func3($num1,$num2,$num3);

	}
	function func3($num1,$num2,$num3){
		return  ($num1-$num2)/$num3;
	}
?>
	</div><br>
<!--      -------- Task4-----------         -->
	<span>task4.день недели</span>
	<div class="window">
		<form action="" method="GET">
			<input type="text" name="num4" placeholder="Введите число от 1 до 7"><br>
			<input type="submit" name="submit4">
		</form>
<?php
	if (isset($_REQUEST['submit4'])) {
		$num = $_REQUEST['num4'];
		echo 'сегодня '.func4($num);

	}
	function func4($num){
		$arr = array(1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс');
		return $arr[$num];
	}
?>
	</div><br>

</body>
</html>