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
	echo '<h3>Задачи на математические функции PHP</h3><br><span>task1</span><div class="window">';
		$a = 10;
		$b = 3;
		echo $a % $b;
	echo '</div><br>';
	


//--------------------------------------------------TASK2                                                       
	echo '<span>task2</span><div class="window">';
		
		$a = 10;
		$b = 3;
		$c = $a % $b;
	
		if ($c == 0) {
			echo 'Делится, результат деления: ' . ($a / $b);
		} else {
			echo 'Делится с остатком '.$c;
		}

	echo '</div><br>';


	
//----------------------------------------------------TASK3                                                       
	echo '<span>task3</span><div class="window">';
		$st = pow(2, 10);
		echo $st;
	echo '</div><br>';
	


//----------------------------------------------------TASK4                                                       
	echo '<span>task4. квадратный корень из 245</span><div class="window">';
		$sqrt = sqrt(245);
		echo $sqrt;
	echo '</div><br>';
	


//----------------------------------------------------TASK5                                                       
	echo '<span>task5.корень из суммы квадратов  элементов массива</span><div class="window">';
		$arr = array(4, 2, 5, 19, 13, 0, 10);
		$sum = 0;
	
		foreach ($arr as $elem) {
			$sum += $elem * $elem;
		}
	
		$result = sqrt($sum);
		echo $result;
	echo '</div><br>';

//----------------------------------------------------TASK6                                                       
	echo '<span>task6</span><div class="window">';
		$sqrt = sqrt(379);
	
		echo round($sqrt).'<br>'; //округление до целых
		echo round($sqrt, 1).'<br>'; //округление до десятых
		echo round($sqrt, 2).'<br>'; //округление до сотых
	echo '</div><br>';

//----------------------------------------------------TASK7                                                       
	echo '<span>task7</span><div class="window">';
		$sqrt = sqrt(587);
		$arr = array('floor'=>floor($sqrt), 'ceil'=>ceil($sqrt), 'ceil1'=>ceil($sqrt));
		var_dump($arr);
	echo '</div><br>';


//----------------------------------------------------TASK8                                                       
	echo '<span>task8</span><div class="window">';
		$arr = array(4, -2, 5, 19, -130, 0, 10);
		echo max($arr); //максимальное значение
		echo min($arr); //минимальное значение
	echo '</div><br>';

	

//----------------------------------------------------TASK9                                                       
	echo '<span>task9</span><div class="window">';
		echo mt_rand(1, 100);
	echo '</div><br>';



//----------------------------------------------------TASK10                                                       
	echo '<span>task10</span><div class="window">';
		$arr = array();
		for ($i = 1; $i <= 10; $i++) {
			$arr[] = mt_rand(1, 100);
		}
		var_dump($arr);
	echo '</div><br>';

//----------------------------------------------------TASK11                                                       
	echo '<span>task11</span><div class="window">';
		$a = 20;
		$b = 24;
		echo abs($a-$b);
	echo '</div><br>';

//----------------------------------------------------TASK12                                                       
	echo '<span>task12</span><div class="window">';
		$result = array();
		$arr = array(1, 2, -1, -2, 3, -3);
	
		foreach ($arr as $elem) {
			$result[] = abs($elem);
		}
	
		var_dump($result);
	echo '</div><br>';


?>
</body>
</html>