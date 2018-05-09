<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
		
//----------------------------------------------------TASK1                                                       
	echo '<h3>Работа с if-else</h3><br><span>task1</span><div class="window">';
		$a = 1;
		if ($a == 0) {
			echo 'Верно';
		} else {
			echo 'Неверно';
		}
	echo '</div><br>';
	


//--------------------------------------------------TASK2                                                       
	echo '<span>task2</span><div class="window">';
		$a = 1;
		if ($a > 0) {
			echo 'Верно<br>';
		} else {
			echo 'Неверно<br>';
		}

		$a = 0;
		if ($a > 0) {
			echo 'Верно<br>';
		} else {
			echo 'Неверно<br>';
		}

		$a = -3;
		if ($a > 0) {
			echo 'Верно<br>';
		} else {
			echo 'Неверно<br>';
		}
	echo '</div><br>';


	
//----------------------------------------------------TASK3                                                       
	echo '<span>task3</span><div class="window">';
		$a = -1;
		if ($a < 0) {
			echo 'Верно';
		} else {
			echo 'Неверно';
		}
	echo '</div><br>';
	


//----------------------------------------------------TASK4                                                       
	echo '<span>task4</span><div class="window">';
		$a = -0.1;
		if ($a >= 0) {
			echo 'Верно';
		} else {
			echo 'Неверно';
		}
	echo '</div><br>';
	


//----------------------------------------------------TASK5                                                       
	echo '<span>task5</span><div class="window">';
		$a = 1;
		if ($a <= 0) {
			echo 'Верно';
		} else {
			echo 'Неверно';
		}
	echo '</div><br>';

//----------------------------------------------------TASK6                                                       
	echo '<span>task6</span><div class="window">';
		$a = 1;
		if ($a != 0) {
			echo 'Верно';
		} else {
			echo 'Неверно';
		}
	echo '</div><br>';

//----------------------------------------------------TASK7                                                       
	echo '<span>task7</span><div class="window">';
		$a = 'test';
		if ($a == 'test') {
			echo 'Верно';
		} else {
			echo 'Неверно';
		}
	echo '</div><br>';


//----------------------------------------------------TASK8                                                       
	echo '<span>task8</span><div class="window">';
		$a = '1';
		if ($a === '1') {
			echo 'Верно';
		} else {
			echo 'Неверно';
		}

		if ($a === 1) {
			echo 'Верно';
		} else {
			echo 'Неверно';
		}
	echo '</div><br>';

	

//----------------------------------------------------TASK9                                                       
	echo '<span>task9</span><div class="window">';
		$a = '';
		if (empty($a)) {    //пустая
			echo 'Верно';
		} else {
			echo 'Неверно';
		}
	echo '</div><br>';



//----------------------------------------------------TASK10                                                       
	echo '<span>task10</span><div class="window">';
		$a = '';

		if (!empty($a)) {
			echo 'Верно';
		} else {
			echo 'Неверно';
		}
	echo '</div><br>';

//----------------------------------------------------TASK11                                                       
	echo '<span>task11</span><div class="window">';
		$a = 3;
		if (isset($a)) {   //существует
			echo 'Верно';
		} else {
			echo 'Неверно';
		}
	echo '</div><br>';

//----------------------------------------------------TASK12                                                       
	echo '<span>task12</span><div class="window">';
		$a = 1;
		if (!isset($a)) {
			echo 'Верно';
		} else {
			echo 'Неверно';
		}
	echo '</div><br>';

//----------------------------------------------------TASK13                                                       
	echo '<span>task13</span><div class="window">';
		$var = true;
	
		if ($var) {
			echo 'Верно';
		} else {
			echo 'Неверно';
		}
	echo '</div><br>';

//----------------------------------------------------TASK14                                                       
	echo '<span>task14</span><div class="window">';
			$var = true;
		if (!$var) {
			echo 'Верно';
		} else {
			echo 'Неверно';
		}
	echo '</div><br>';

//----------------------------------------------------TASK19                                                       
	echo '<span>task19</span><div class="window">';
		$num = 3;
	
		switch ($num) {
			case 1:
				$result = 'зима';
			break;
			case 2:
				$result = 'весна';
			break;
			case 3:
				$result = 'лето';
			break;
			case 4:
				$result = 'осень';
			break;
		}

	echo $result;
	echo '</div><br>';
?>
</body>
</html>