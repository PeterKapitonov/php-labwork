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
	echo '<h3>Задачи на циклы foreach, while, for в PHP</h3><br><span>task1</span><div class="window">';
		$arr = array('html', 'css', 'php', 'js', 'jq');
		foreach ($arr as $elem) {
			echo $elem.'<br>';
		}
	echo '</div><br>';
	


//--------------------------------------------------TASK2                                                       
	echo '<span>task2</span><div class="window">';
		
		$arr = array(1, 2, 3, 4, 5);
		$result = 0;
		foreach ($arr as $elem) {
			$result += $elem;
		}
		echo $result;

	echo '</div><br>';


	
//----------------------------------------------------TASK3                                                       
	echo '<span>task3</span><div class="window">';
		$arr = array(1, 2, 3, 4, 5);
		$result = 0;
		foreach ($arr as $elem) {
			$result += $elem * $elem;
		}
		echo 'cумма квадратов элементов: '.$result;
	echo '</div><br>';
	


//----------------------------------------------------TASK4                                                       
	echo '<span>task4.столбец ключей и элементов в формате green - зеленый.</span><div class="window">';
		$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
		foreach ($arr as $key=>$elem) {
			echo $key.' - '.$elem.'<br>';
		}
	echo '</div><br>';
	


//----------------------------------------------------TASK5                                                       
	echo '<span>task5</span><div class="window">';
		$arr = array('Коля'=>'200', 'Вася'=>'300','Петя'=>'40000');
		foreach ($arr as $key=>$elem) {
			echo $key.' - зарплата '.$elem.' долларов<br>';
		}
	echo '</div><br>';

//----------------------------------------------------TASK6                                                       
	echo '<span>task6</span><div class="window">';
		$i = 1;
		while ($i <= 6) {
			echo $i.'<br>';
			$i++;
		}
	echo '</div><br>';

//----------------------------------------------------TASK7                                                       
	echo '<span>task7</span><div class="window">';
		$i = 11;
		while ($i <= 33) {
			echo $i.' ';
			$i++;
		}
		echo '<br><br>';

		for ($i = 11; $i <= 33; $i++) {
			echo $i.' ';
		}
	echo '</div><br>';


//----------------------------------------------------TASK8                                                       
	echo '<span>task8</span><div class="window">';
		$i = 10;
		while ($i <= 63) {
			echo $i.' ';
			$i+=2;
		}
		echo '<br><br>';

		for ($i = 10; $i <= 63; $i+=2) {
			echo $i.' ';
		}
	echo '</div><br>';

	

//----------------------------------------------------TASK9                                                       
	echo '<span>task9</span><div class="window">';
		$i = 1;
		$sum=0;
		while ($i <= 63) {
			$sum+=$i;
			$i+=1;
		}
		echo 'сумма '.$sum.'<br><br>';

		$sum=0;
		for ($i = 1; $i <= 63; $i+=1) {
			$sum+=$i;
		}
		echo 'сумма '.$sum.'<br><br>';
	echo '</div><br>';



//----------------------------------------------------TASK10                                                       
	echo '<span>task10</span><div class="window">';
		$arr = array(2, 5, 9, 15, 0, 4);    //вывод числа из массива с условием
		foreach ($arr as $elem) {
			if ($elem > 3 and $elem < 10) {
				echo $elem.'<br>';
			}
		}
	echo '</div><br>';

//----------------------------------------------------TASK11                                                       
	echo '<span>task11</span><div class="window">';
		$sum = 0;
		$arr = array(2, -5, -9, 15, 11, -4);  //cумма положительных элементов
		foreach ($arr as $elem) {
			if ($elem > 0) {
				$sum += $elem;
			}
		}
	echo $sum.'</div><br>';

//----------------------------------------------------TASK12                                                       
	echo '<span>task12</span><div class="window">';
		$arr = array(1, 2, 5, 9, 4, 13, 4, 10);
		foreach ($arr as $elem) {
			if ($elem == 4 ) {
				echo 'Есть!';
				break; //выйдем из цикла
			}
		}
	echo '</div><br>';

//----------------------------------------------------TASK13                                                       
	echo '<span>task13</span><div class="window">';
		$arr = array('10', '20', '30', '50', '235', '3000'); // элементы массива которые начинаются на 1,2,5
		foreach ($arr as $elem) {
			if ($elem[0] == '1' or $elem[0] == '2' or $elem[0] == '5') {
				echo $elem.'<br>';
			}
		}
	echo '</div><br>';

//----------------------------------------------------TASK14                                                       
	echo '<span>task14</span><div class="window">';
		$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
		$str = '';
		foreach ($arr as $elem) {
			$str .= '-'.$elem;
		}
		echo $str.'-';
	echo '</div><br>';

//----------------------------------------------------TASK15                                                       
	echo '<span>task15</span><div class="window">';
		$arr = array('пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс');//выделение суб и воск жирным
		
		foreach ($arr as $key=>$elem) {
			if ($key == 5 or $key == 6) {
				echo '<b>'.$elem.'</b><br>';
			} else {
				echo $elem.'<br>';
			}
		}
	echo '</div><br>';

//----------------------------------------------------TASK16                                                      
	echo '<span>task16</span><div class="window">';
		$arr = array('пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс');
		$day = 4; //пусть сегодня второй день
		
		foreach ($arr as $key=>$elem) {
			if ($key == $day) {
				echo '<i>'.$elem.'</i><br>';
			} else {
				echo $elem.'<br>';
			}
		}
	echo '</div><br>';

//----------------------------------------------------TASK19                                                       
	echo '<span>task19</span><div class="window">';
		$num = 1000;
		$i = 0;
		while ($num > 50) {
			$num /= 2;
			$i++;
		}

		echo $i.'<br>'; //кол-во итераций
		echo $num; //число, которое получилось

		echo $result;
	echo '</div><br>';
?>
</body>
</html>