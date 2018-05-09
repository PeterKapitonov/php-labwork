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
	echo '<h3>Практика на комбинации функций</h3><br><span>task1</span><div class="window">';
		$arr = array(1, 2, 3, 4, 5);
		var_dump($arr);
		echo '<br>';
		echo array_sum($arr) / count($arr);
	echo '</div><br>';
	


//--------------------------------------------------TASK2                                                       
	echo '<span>task2/сумма чисел от 1 до 100</span><div class="window">';
		echo array_sum(range(1, 100));
	echo '</div><br>';


	
//----------------------------------------------------TASK3                                                       
	echo '<span>task3</span><div class="window">';
		$arr = range(1, 9);
		echo implode('<br>', $arr);
	echo '</div><br>';
	


//----------------------------------------------------TASK4                                                       
	echo '<span>task4. </span><div class="window">';
		$arr = array_fill(0, 10, 'x');
		var_dump($arr);
	echo '</div><br>';
	


//----------------------------------------------------TASK5                                                       
	echo '<span>task5</span><div class="window">';
		$arr = range(1, 10);
		shuffle($arr);
		var_dump($arr);
	echo '</div><br>';

//----------------------------------------------------TASK6                                                       
	echo '<span>task6. факториал числа не используя цикл</span><div class="window">';
			$num = 5; //найдем факториал 5
			$arr = range(1, $num);
			echo array_product($arr);
	echo '</div><br>';

//----------------------------------------------------TASK7                                                       
	echo '<span>task7.сумма цифр числа</span><div class="window">';
			$num = 123;
			$arr = str_split($num, 1);
			echo array_sum($arr);
	echo '</div><br>';


//----------------------------------------------------TASK8                                                       
	echo '<span>task8</span><div class="window">';
		$str = 'abcde';
		$str = strrev($str);
		$str = ucfirst($str);
		$str = strrev($str);
		echo $str;
	echo '</div><br>';

	

//----------------------------------------------------TASK9                                                       
	echo '<span>task9.массив с квадратными корнями этих чисел не используя цикл</span><div class="window">';
		$arr = array(1, 4, 5, 7, 9);
		$result = array_map('sqrt', $arr);
		var_dump($result);
	echo '</div><br>';



//----------------------------------------------------TASK10                                                       
	echo '<span>task10.Массив c числами от 1 до 26 так, чтобы ключами этих чисел были буквы английского алфавита: ["a"=>1, "b"=>2...]</span><div class="window">';
		$keys = range('a', 'z');
		$elems = range(1, 26);
		$arr = array_combine($keys, $elems);
		var_dump($arr);
	echo '</div><br>';

//----------------------------------------------------TASK11                                                       
	echo '<span>task11.сумма пар чисел: 12+34+56+78+90</span><div class="window">';
		$str = '1234567890';
		$arr = str_split($str, 2);
		$result = array_sum($arr);
		echo $result;
	echo '</div><br>';


?>
</body>
</html>