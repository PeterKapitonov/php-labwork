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
	                   
	<h3>Задачи на отработку циклов и функций PHP</h3><br>
	<span>task1</span>
	<div class="window">
<?php
	for ($i = 1; $i < 10; $i++) {
		echo $i . '<br>';
	}
?>
	</div><br>


<!--      -------- Task2-----------         -->
	<span>task2</span>
	<div class="window" id="w2">
<?php
	for ($i = 2; $i < 20; $i += 2) {
		echo $i . '<br>';
	}
?>
	</div><br>

<!--      -------- Task3-----------         -->
	<span>task3</span>
	<div class="window">
<?php
	$sum = 0;
	for ($i = 1; $i <= 100; $i++) {
		$sum += $i;
	}
	echo $sum;
?>
	</div><br>

<!--      -------- Task4-----------         -->
	<span>task4/сумма квадратов чисел от 1 до 15</span>
	<div class="window">
<?php
	$sum = 0;
	for ($i = 1; $i <= 15; $i++) {
		$sum += $i * $i;
	}
	echo $sum;
?>
	</div><br>

<!--      -------- Task5-----------         -->
	<span>task5.сумма корней чисел от 1 до 15</span>
	<div class="window">
<?php
	$sum = 0;
	for ($i = 1; $i <= 15; $i++) {
		$sum += sqrt($i);
	}
	echo round($sum, 2);
?>
	</div><br>

<!--      -------- Task6-----------         -->
	<span>task6.сумма тех чисел от 1 до 100, которые делятся на 7</span>
	<div class="window">
<?php
	$sum = 0;
	for ($i = 1; $i <= 100; $i++) {
		if ($i % 7 == 0) {
			$sum += $i;
		}
	}
	echo $sum;
?>
	</div><br>

<!--      -------- Task7-----------         -->
	<span>task7.массив 10-ю иксами</span>
	<div class="window">
<?php
	$arr = [];
	for ($i = 1; $i <= 10; $i++) {
		$arr[] = 'x';
	}
	var_dump($arr);
?>
	</div><br>

<!--      -------- Task8-----------         -->
	<span>task8.массив числами от 1 до 10 с помощью цикла</span>
	<div class="window">
<?php
	$arr = [];
	for ($i = 1; $i <= 10; $i++) {
		$arr[] = $i;
	}
	var_dump($arr);
?>
	</div><br>

<!--      -------- Task9-----------         -->
	<span>task9.массив числами от 10 до 1 с помощью цикла</span>
	<div class="window">
<?php
	$arr = [];
	for ($i = 10; $i > 0; $i--) {
		$arr[] = $i;
	}
	var_dump($arr);
?>
	</div><br>

<!--      -------- Task10-----------         -->
	<span>task10.массив <b>случайными</b> числами от 1 до 10 с помощью цикла</span>
	<div class="window">
<?php
	$arr = [];
	for ($i = 1; $i <= 10; $i++) {
		$arr[] = mt_rand(1, 10);
	}
	var_dump($arr);
?>
	</div><br>

<!--      -------- Task11-----------         -->
	<span>task11.Строка из 6-ти символов случайными числами от 1 до 10</span>
	<div class="window">
<?php
	$str = '';
	for ($i = 1; $i <= 6; $i++) {
		$str .= rand(1, 9);
	}
	echo $str;
?>
	</div><br>

<!--      -------- Task12-----------         -->
	<span>task12.Сумма элементов массива</span>
	<div class="window">
<?php
	$arr = [1, 2, 3, 4, 6, 9, 11];
	$sum = 0;
	foreach ($arr as $elem) {
		$sum += $elem;
	}
	echo $sum;
?>
	</div><br>

<!--      -------- Task13-----------         -->
	<span>task13.Сумма квадратов элементов массива</span>
	<div class="window">
<?php
	$arr = [1, 2, 3, 4, 6, 9, 11];
	$sum = 0;
	foreach ($arr as $elem) {
		$sum += $elem * $elem;
	}
	echo $sum;
?>
	</div><br>

<!--      -------- Task14-----------         -->
	<span>task14.корень из суммы квадратов элементов  массива.</span>
	<div class="window">
<?php
	$arr = [1, 2, 3, 4, 6, 9, 11];
	$sum = 0;
	foreach ($arr as $elem) {
		$sum += $elem * $elem;
	}
	echo floor(sqrt($sum));
?>
	</div><br>

<!--      -------- Task15-----------         -->
	<span>task15.Cуммы элементов массива больше 0 и меньше 10.</span>
	<div class="window">
<?php
	$arr = [1, 2, 3, 4, 6, 9, 11];
	$sum = 0;
	foreach ($arr as $elem) {
		if ($elem > 0 and $elem < 10){
			$sum += $elem;
		}
	}
	echo $sum;
?>
	</div><br>

<!--      -------- Task16-----------         -->
	<span>task16.3 одинаковых элемента подрят</span>
	<div class="window">
<?php
	$arr = [1, 2,2,2, 3, 4, 6, 9, 11];
	for($i=2;$i<count($arr);$i++){
		if($arr[$i]==$arr[$i-1] and $arr[$i-1]==$arr[$i-2]){
			 echo 'есть';
			 break;
		}
	}
?>
	</div><br>

<!--      -------- Task17-----------         -->
	<span>task17.строка '1223334444...' и так далее до заданного числа</span>
	<div class="window">
<?php
	$str = '';
	for ($i = 1; $i <= 10; $i++) {
		for ($j = 1; $j <= $i; $j++) {
			$str .= $i;
		}
	}
	echo $str;
?>
	</div><br>

<!--      -------- Task18-----------         -->
	<span>task18.С помощью цикла выведуться строки в формате 'имя-зарплата'.</span>
	<div class="window">
<?php
	$arr = [
		0=>['name'=>'Коля', 'salary'=>300],
		1=>['name'=>'Вася', 'salary'=>400],
		2=>['name'=>'Петя', 'salary'=>500],
	];


	foreach ($arr as $elem) { 
		echo $elem['name'] .'-'. $elem['salary'] . '<br>';
 	}

?>
	</div><br>

<!--      -------- Task19-----------         -->
	<span>task19. двумерный массив случайными числами от 1 до 10</span>
	<div class="window" id="w19">
<?php
	$arr = [];
	for ($i = 0; $i < 10; $i++) {
		for ($j = 0; $j < 10; $j++){
			$arr[$i][] = mt_rand(1, 10);
		}
	}
	var_dump($arr);
?>
	</div><br>

<!--      -------- Task20-----------         -->
	<span>task20</span>
	<div class="window" >
<?php
	$str = 'apple';
	$first = substr($str, 0, 1);
	$str = strtoupper($first).substr($str, 1, strlen($str));
	echo $str;
?>
	</div><br>
</body>
</html>