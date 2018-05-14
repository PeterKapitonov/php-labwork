<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="Cache-Control" content="no-cache"><!--Запрет на кэширование браузером и прокси-сервером-->
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	                   
	<h3>Правильное использование пользовательских функций</h3><br>
	<span>task1.Входит ли число в промежуток от 0 до 10</span>
	<div class="window">
<?php
	$num=9;
	echo isNumberInRange1($num);
	function isNumberInRange1($num){
		if ($num > 0 and $num < 10) {
			return 'входит';
		} else {
			return 'не входит';
		}
	}
?>
	</div><br>


<!--      -------- Task2-----------         -->
	<span>task2.Cоздаётся новый массив и с другого массива отбираются только те элементы которые подходят по условию</span>
	<div class="window">
<?php
	$arr = [1, 3, 5, 6, 9, 11, 15, 30];
	$newArr = [];
	foreach ($arr as $elem) {
		if (isNumberInRange2($elem)) {
			$newArr[] = $elem;
		}
	}
	function isNumberInRange2($num){
		if ($num > 0 and $num < 10) {
			return true;
		} else {
			return false;
		}
	}
	
	var_dump($newArr);
?>
	</div><br>

<!--      -------- Task3-----------         -->
	<span>task3.Сумма цифр числа</span>
	<div class="window">
<?php
	function getDigitsSum3($num){
		return array_sum((str_split($num, 1)));
	}
	
	echo getDigitsSum3(1234); //выведет 6
?>
	</div><br>

<!--      -------- Task4-----------         -->
	<span>task4.Числа от 1 до 2018 сумма цифр которых равны 13 </span>
	<div class="window" id="window4">
<?php
	$year = date('Y');
	$arr = [];
	for ($i = 1; $i < $year; $i++) {
		if(getDigitsSum4($i) == 13) {
			$arr[] = $i;
		}
	}

	function getDigitsSum4($num){
		return array_sum((str_split($num, 1)));
	}
	
	var_dump($arr);
?>
	</div><br>

<!--      -------- Task5-----------         -->
	<span>task5.Если четное - функция возвращает true, если нечетное - false.</span>
	<div class="window">
<?php
	function isEven5($num){
		if ($num % 2 == 0) {
			return 'чётное';
		} else {
			return 'нечётное';
		}
	}
	echo isEven5(5);
?>
	</div><br>

<!--      -------- Task6-----------         -->
	<span>task6.Из массива остануться только чётные элементы</span>
	<div class="window">
<?php
	$arr = [1, 3, 5, 6, 9, 11, 15, 30];
	$newArr = [];
	foreach ($arr as $elem) {
		if (isEven6($elem)) {
			$newArr[] = $elem;
		}
	}
	function isEven6($num){
		if ($num % 2 == 0) {
			return true;
		} else {
			return false;
		}
	}
	var_dump($newArr);
?>
	</div><br>

<!--      -------- Task7-----------         -->
	<span>task7.функция, которая параметром принимает число и возвращает массив его делителей</span>
	<div class="window">
<?php

	function getDivisors7($num){
		$arr = [];
		for ($i = 1; $i <= $num; $i++) {
			if ($num % $i == 0) {
				$arr[] = $i;
			}
		}
		
		var_dump($arr);
	}

	getDivisors7(14);

?>

	</div><br>

<!--      -------- Task8-----------         -->
	<span>task8.функция, которая параметром принимает 2 числа, а возвращает массив их общих делителей.</span>
	<div class="window">
<?php
	function getCommonDivisors8($num1, $num2)	{
		return array_intersect(getDivisors8($num1), getDivisors8($num2));
	}

	function getDivisors8($num){
		$arr = [];
		for ($i = 1; $i <= $num; $i++) {
			if ($num % $i == 0) {
				$arr[] = $i;
			}
		}
		
		return $arr;
	}

	var_dump(getCommonDivisors8(14,42));

?>

	</div><br>
</body>
</html>