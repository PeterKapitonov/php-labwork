<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	                   
	<h3>Задачи на приемы работы с массивами на PHP</h3><br>
	<span>task1.Заполните массив следующим образом: в первый элемент запишите 'x', во второй 'xx', в третий 'xxx' и так далее</span>
	<div class="window">
<?php
	$arr = array();
	$str = 'х';
	for ($i = 0; $i < 10; $i++) {
		$arr[] = $str;
		$str .= 'x';
	}
	var_dump($arr);
?>
	</div><br>


<!--      -------- Task2-----------         -->
	<span>task2.в первый элемент запишите '1', во второй '22', в третий '333' и так далее</span>
	<div class="window">
<?php
	$arr = array();
	for ($i = 1; $i <= 9; $i++) {
		$str = '';
		for ($j = 0; $j < $i; $j++) {
			$str .= $i;
		}
		$arr[] = $str;
	}
	var_dump($arr);
?>
	</div><br>

<!--      -------- Task3-----------         -->
	<span>task3.</span>
	<div class="window">
<?php
	function task3($str, $num)
	{
		$arr =array();
		for ($i = 1; $i <= $num; $i++) {
			$arr[] = $str;
		}
		return $arr;
	}
	
	var_dump(task3('x', 5));
?>	
	</div><br>

<!--      -------- Task4-----------         -->
	<span>task4.</span>
	<div class="window" id="window4">
<?php
	$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	$sum = 0;
	foreach ($arr as $key=>$elem) {   //
		$sum += $elem;
		if ($sum >= 10) {
			$result = $key + 1; //+1 так как нумерация с нуля в $key
			break;
		}
	}
	
	echo $result;
?>
	</div><br>

<!--      -------- Task5-----------         -->
	<span>task5.сумма элементов двухмерного массива</span>
	<div class="window">
<?php
	$arr = array(array(1, 2, 3), array(4, 5), array(6,7));
	$sum = 0;
	foreach ($arr as $elem) {
		foreach($elem as $num) {
			$sum += $num;
		}
	}
	
	echo $sum;
?>
	</div><br>

<!--      -------- Task6-----------         -->
	<span>task6. сумма элементов трёхмерного массива</span>
	<div class="window">
<?php
	$arr = array(array(array(1, 2), array(3, 4)), array(array(5, 6), array(7)));
	$sum = 0;
	foreach ($arr as $elem) {
		foreach($elem as $subElem) {
			foreach($subElem as $subSubElem) {
				$sum += $subSubElem;
			}
		}
	}
	
	echo $sum;
?>
	</div><br>

<!--      -------- Task7-----------         -->
	<span>task7.</span>
	<div class="window">
<?php
	$arr = array();
	$count = 1;
	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 3; $j++) {
			$arr[$i][$j] = $count;
			$count++;
		}
	}
	
	var_dump($arr);
?>

	</div><br>
</body>
</html>