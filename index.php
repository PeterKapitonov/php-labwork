<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	                   
	<h3>Задачи на даты в PHP</h3><br><span>task1.текущее время в формате timestamp</span><div class="window">
<?php
	echo time();
?>	
	</div><br>


<!--      -------- Task2-----------         -->
	<span>task2.1 марта 2025 года в формате timestamp</span>
	<div class="window">
<?php
	echo mktime(0, 0, 0, 3, 1, 2025);
?>		
	</div><br>


<!--      -------- Task3-----------         -->
	<span>task3.31 декабря текущего года в формате timestamp</span>
	<div class="window">
<?php
	echo mktime(0, 0, 0, 12, 31);
?>
	</div><br>

<!--      -------- Task4-----------         -->
	<span>task4.количество секунд, прошедших с 13:12:59 15-го марта 2000 года до настоящего момента времени.</span>
	<div class="window">
<?php
	echo time() - mktime(13, 12, 59, 3, 15, 2000);
?>
	</div><br>

<!--      -------- Task5-----------         -->
	<span>task5.количество целых часов, прошедших с 7:23:48 текущего дня до настоящего момента времени</span>
	<div class="window">
<?php
	$sec = time() - mktime(7, 23, 48); //количество часов
	echo floor($sec / (60 * 60));
?>
	</div><br>

<!--      -------- Task6-----------         -->
	<span>task6.текущий год, месяц, день, час, минута, секунда</span>
	<div class="window">
<?php
	echo date('Y.m.d H:i:s');
?>
	</div><br>

<!--      -------- Task7-----------         -->
	<span>task7.текущая дата-время в форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59'</span>
	<div class="window">
<?php
	echo date('Y-m-d').'<br>'; //в формате '2025-12-31'
	echo date('d.m.Y').'<br>'; //в формате '31.12.2025'
	echo date('d.m.y').'<br>'; //в формате '31.12.13'
	echo date('H:i:s').'<br>'; //в формате '12:59:59'
?>
	</div><br>

<!--      -------- Task8-----------         -->
	<span>task8.12 февраля 2025 года в формате '12.02.2025'</span>
	<div class="window">
<?php
	echo date('d.m.Y',  mktime(0, 0, 0, 2, 12, 2025));
?>
	</div><br>

<!--      -------- Task9-----------         -->
	<span>task9. какой день недели был 06.06.2006</span>
	<div class="window">
<?php
	$week = array('вс', 'пн', 'вт', 'ср','чт', 'пт', 'сб');
	echo $week[date('w',  mktime(0, 0, 0, 1, 1, 1))];
?>
	</div><br>

<!--      -------- Task10-----------         -->
	<span>task10.название текущего месяца</span>
	<div class="window">
<?php
	$month = array(
		1=>'янв', 'фев', 'мар', 'апр', 'май', 'июнь',
		'июль', 'авг', 'сен', 'окт', 'ноя', 'дек'
	);
	echo $month[date('n')];
?>
	</div><br>

<!--      -------- Task11-----------         -->
	<span>task11.количество дней в текущем месяце</span>
	<div class="window">
<?php
	echo date('t');
?>
	</div><br>

<!--      -------- Task12-----------         -->
	<span>task12.скрипт определяет високосный ли год</span>
	<div class="window">
		<form action="" method="GET">
			<input type="text" name="year12" placeholder="введите год">
			<input type="submit">
		</form>
<?php
	if (isset($_REQUEST['year12'])) {
		$year = $_REQUEST['year12'];
		if (date('L', mktime(0, 0, 0, 1, 1, $year)) == 1) {
			echo 'год високосный';
		} else {
			echo 'год не високосный';
		}
	}
?>
	</div><br>

<!--      -------- Task13-----------         -->
	<span>task13.дата в формате '31.12.2025'.</span>
	<div class="window">
		<form action="" method="GET">
			<input type="text" name="date13" placeholder="31.12.2025">
			<input type="submit">
		</form>
<?php
	if (isset($_REQUEST['date13'])) {
		$date = explode('.', $_REQUEST['date13']);
		$week = array('вс', 'пн', 'вт', 'ср','чт', 'пт', 'сб');
		echo $week[date('w',  mktime(0, 0, 0, $date[1], $date[0], $date[2]))];
	}
?>
	</div><br>

<!--      -------- Task14-----------         -->
	<span>task14.После ввода даты в формате '2025-12-31' выдаёт месяц словом.</span>
	<div class="window">
		<form action="" method="GET">
			<input type="text" name="date14" placeholder="2025-12-31">
			<input type="submit">
		</form>
<?php
	if (isset($_REQUEST['date14'])) {
		$date = explode('-', $_REQUEST['date14']);
		$month = array(
			1=>'янв', 'фев', 'мар', 'апр', 'май', 'июнь',
			'июль', 'авг', 'сен', 'окт', 'ноя', 'дек'
		);
		echo $month[date('n',  mktime(0, 0, 0, $date[1], $date[2], $date[0]))];
	}
?>

	</div><br>

<!--      -------- Task15-----------         -->
	<span>task15.форма, которая спрашивает две даты в формате '2025-12-31'.сравнивает, какая из введенных дат больше.</span>
	<div class="window">
		<form action="" method="GET">
			<input type="text" name="date15-1" placeholder="2025-12-31"><br>
			<input type="text" name="date15-2" placeholder="2025-12-31"><br>
			<input type="submit">
		</form>
<?php
	if (isset($_REQUEST['date15-1']) and isset($_REQUEST['date15-2'])) {
		$date1 = $_REQUEST['date15-1'];
		$date2 = $_REQUEST['date15-2'];
		if ($date1 > $date2) {
			echo $date1;
		} else {
			echo $date2;
		}
	}
?>

	</div><br>
</body>
</html>