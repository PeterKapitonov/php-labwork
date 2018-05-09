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
		
	$arr=array('a','b','c');//задача 1
	
	echo '<span>task1</span><div class="window">';
		var_dump($arr);
			echo '</div><br>';
	
											//task2
	echo '<span>task2</span><div class="window">';
		echo $arr[0].'<br>';
		echo $arr[1].'<br>';
		echo $arr[2].'<br>';
	echo '</div><br>';


	
	$arr = array('a', 'b', 'c', 'd');				//TASK3
	echo '<span>task3</span><div class="window">';
		echo $arr[0].'+'. $arr[1].', '.$arr[2].'+'.$arr[3]; 
	echo '</div><br>';


	$arr = array(2, 5, 3, 9);				//TASK4
	echo '<span>task4</span><div class="window">';
		echo $arr[0] * $arr[1] + $arr[2] * $arr[3]; 
	echo '</div><br>';


	$arr = array();				//TASK5
	echo '<span>task5</span><div class="window">';
		$arr[] = 1;
		$arr[] = 2;
		$arr[] = 3;
		$arr[] = 4;
		$arr[] = 5;
		var_dump($arr);
	echo '</div><br>';

	$arr = array('a'=>1, 'b'=>2, 'c'=>3);				//TASK6
	echo '<span>task6</span><div class="window">';
		echo $arr['c'];
	echo '</div><br>';

	$arr = array('a'=>1, 'b'=>2, 'c'=>3);				//TASK7
	echo '<span>task7</span><div class="window">';
		echo $arr['a'] + $arr['b'] + $arr['c'];
	echo '</div><br>';

	$arr = array('Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$');		//TASK8
	echo '<span>task8</span><div class="window">';
		echo $arr['Петя'].' '.$arr['Коля'];
	echo '</div><br>';

	$arr = array(1=>'пн', 2=>'вт', 3=>'ср', 4=>'чт', 5=>'пт', 6=>'сб', 7=>'вс');//TASK9
	echo '<span>task9</span><div class="window">';
		echo $arr[4];
	echo '</div><br>';



//-------------------------------------------------------//TASK10
	$arr = array(1=>'пн', 2=>'вт', 3=>'ср', 4=>'чт', 5=>'пт', 6=>'сб', 7=>'вс');
	$day = 3;                                                          
	echo '<span>task10</span><div class="window">';
		echo $arr[$day];
	echo '</div><br>';


?>
</body>
</html>