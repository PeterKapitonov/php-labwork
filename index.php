<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	                   
	<h3>Задачи на приемы работы с циклами на PHP</h3><br>
	<span>task1. Цикл for сформирует строку '123456789'</span>
	<div class="window">
<?php
	$str = '';
	for ($i = 1; $i <= 9; $i++) {
		$str .= $i;
	}
	echo $str;
 ?>
	</div><br>


<!--      -------- Task2-----------         -->
	<span>task2.Цикл for сформирует строку '987654321'</span>
	<div class="window">
<?php
	$str = '';
	for ($i = 9; $i >= 1; $i--) {
		$str .= $i;
	}
	echo $str;
 ?>
	</div><br>

<!--      -------- Task3-----------         -->
	<span>task3. строка '-1-2-3-4-5-6-7-8-9-'</span>
	<div class="window">
<?php
	$str = '';
	for ($i = 1; $i <= 9; $i++) {
		$str .= '-' . $i;
	}
	echo $str . '-';
?>		
	</div><br>

<!--      -------- Task4-----------         -->
	<span>task4. пирамида</span>
	<div class="window" id="window4">
<?php
	$str = '';
	for ($i = 1; $i <= 9; $i++) {
		$str .= 'x';
		echo $str.'<br>';
	}
?>	
	</div><br>

<!--      -------- Task5-----------         -->
	<span>task5. пирамида из чисел</span>
	<div class="window">
<?php
	for ($i = 1; $i <= 9; $i++) {
		$str = '';
		for ($j = 0; $j < $i; $j++) {
			$str .= $i;
		}
		echo $str.'<br>';
	}
?>
	</div><br>

<!--      -------- Task6-----------         -->
	<span>task6. пирамида</span>
	<div class="window">
<?php
	$str = '';
	for ($i = 1; $i <= 8; $i++) {
		$str .= 'xxx';
		echo $str.'<br>';
	}
?>
	</div><br>
</body>
</html>