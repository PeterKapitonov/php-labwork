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
	echo '<h3>Задачи на функции работы с массивами в PHP</h3><br><span>task1. количество элементов массива</span><div class="window">';
		$arr = array(1, 2, 3, 4, 5);
		echo count($arr);
	echo '</div><br>';
	


//--------------------------------------------------TASK2                                                       
	echo '<span>task2</span><div class="window">';
		$arr = array(1, 2, 3, 4, 5,6,7,8,8,12);
		echo $arr[count($arr) - 1]; //последний элемент массива
	echo '</div><br>';


	
//----------------------------------------------------TASK3                                                       
	echo '<span>task3</span><div class="window">';
		$arr = array(1, 2, 3, 4, 5,6,7,8,8,12);
		var_dump(in_array(3, $arr));
	echo '</div><br>';
	


//----------------------------------------------------TASK4                                                       
	echo '<span>task4. </span><div class="window">';
		$arr = array(1, 2, 3, 4, 5,6,7,8,8,12);
		echo array_sum($arr);
	echo '</div><br>';
	


//----------------------------------------------------TASK5                                                       
	echo '<span>task5</span><div class="window">';
		$arr = array(1, 2, 3, 4, 5,6,7,8,8,12);
		echo array_product($arr);
	echo '</div><br>';

//----------------------------------------------------TASK6                                                       
	echo '<span>task6.сумма элементов делить на их количество</span><div class="window">';
		$arr = array(1, 2, 3, 4, 5,6,7,8,8,12);
		echo array_sum($arr) / count($arr);
	echo '</div><br>';

//----------------------------------------------------TASK7                                                       
	echo '<span>task7.массив, заполненный числами от 1 до 10</span><div class="window">';
		$arr = range(1, 10);
		var_dump($arr);
	echo '</div><br>';


//----------------------------------------------------TASK8                                                       
	echo '<span>task8. массив, заполненный буквами от a до z.</span><div class="window">';
		$arr = range('a', 'z');
		var_dump($arr);
	echo '</div><br>';

	

//----------------------------------------------------TASK9                                                       
	echo '<span>task9. 1-2-3-4-5-6-7-8-9 не используя цикл</span><div class="window">';
		echo implode('-', range(1, 9));
	echo '</div><br>';



//----------------------------------------------------TASK10                                                       
	echo '<span>task10. сумма чисел от 1 до 100 не используя цикл</span><div class="window">';
		echo array_sum(range(1, 100));
	echo '</div><br>';

//----------------------------------------------------TASK11                                                       
	echo '<span>task11.произведение чисел от 1 до 10 не используя цикл</span><div class="window">';
		echo array_product(range(1, 10));
	echo '</div><br>';

//----------------------------------------------------TASK12                                                       
	echo '<span>task12</span><div class="window">';
		$arr1 = array(1, 2, 3);
		$arr2 = array('a', 'b', 'c');
		$result = array_merge($arr1, $arr2);
		var_dump($result);
	echo '</div><br>';


//----------------------------------------------------TASK13                                                       
	echo '<span>task13</span><div class="window">';
		$arr = array(1, 2, 3, 4, 5);
		$result = array_slice($arr, 1, 3);
		var_dump($result);
	echo '</div><br>';

//----------------------------------------------------TASK14                                                       
	echo '<span>task14</span><div class="window">';
		$arr =  array(1, 2, 3, 4, 5);
		array_splice($arr, 1, 2);
		var_dump($arr);
	echo '</div><br>';

//----------------------------------------------------TASK15                                                       
	echo '<span>task15</span><div class="window">';
		$arr = array(1, 2, 3, 4, 5);
		$result = array_splice($arr, 1, 3);
		var_dump($result);
	echo '</div><br>';

//----------------------------------------------------TASK16                                                   
	echo '<span>task16</span><div class="window">';
		$arr = array(1, 2, 3, 4, 5);
		array_splice($arr, 3, 0, array('a', 'b', 'c'));
		var_dump($arr);
	echo '</div><br>';

//----------------------------------------------------TASK17                                                  
	echo '<span>task17</span><div class="window">';
		$arr = array(1, 2, 3, 4, 5);
		array_splice($arr, 1, 0, array('a', 'b'));
		array_splice($arr, 6, 0, array('c'));
		array_splice($arr, 8, 0, array('e'));
		var_dump($arr);
	echo '</div><br>';

//----------------------------------------------------TASK18                                                  
	echo '<span>task18</span><div class="window">';
		$arr = array('a'=>1, 'b'=>2, 'c'=>3);
		$keys = array_keys($arr);
		$value = array_values($arr);
		var_dump($keys); 
		echo '<br>';
		var_dump($value);
	echo '</div><br>';

//----------------------------------------------------TASK19                                                  
	echo '<span>task19</span><div class="window">';
		$keys = array('a', 'b', 'c');
		$values = array(1, 2, 3);
		var_dump(array_combine($keys, $values));
	echo '</div><br>';

//----------------------------------------------------TASK20                                                  
	echo '<span>task20</span><div class="window">';
		$arr = array('a'=>1, 'b'=>2, 'c'=>3);
		var_dump(array_flip($arr));
	echo '</div><br>';

//----------------------------------------------------TASK21                                                  
	echo '<span>task21</span><div class="window">';
		$arr = array(1, 2, 3, 4, 5);
		$arr = array_reverse($arr);
		var_dump($arr);
	echo '</div><br>';

//----------------------------------------------------TASK22                                                 
	echo '<span>task22</span><div class="window">';
		$arr = array('a', '-', 'b', '-', 'c', '-', 'd');
		echo array_search('b', $arr);
	echo '</div><br>';

//----------------------------------------------------TASK23                                                 
	echo '<span>task23</span><div class="window">';
		$arr = array('a', '-', 'b', '-', 'c', '-', 'd');
		$pos = array_search('-', $arr);
		array_splice($arr, $pos, 1);
		var_dump($arr);
	echo '</div><br>';

//----------------------------------------------------TASK24                                                 
	echo '<span>task24</span><div class="window">';
		$arr = array('a', 'b', 'c', 'd', 'e');
		$result = array_replace($arr, array(0=>'!', 3=>'!!'));
		var_dump($arr);
	echo '</div><br>';

//----------------------------------------------------TASK25                                                 
	echo '<span>task25</span><div class="window">';
		$arr = array('3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b');
		sort($arr);
		var_dump($arr);
	echo '</div><br>';

//----------------------------------------------------TASK26                                                 
	echo '<span>task26.случайный ключ из массива.</span><div class="window">';
		$arr = array('a'=>1, 'b'=>2, 'c'=>3);
		echo array_rand($arr);
	echo '</div><br>';

//----------------------------------------------------TASK27                                                
	echo '<span>task27</span><div class="window">';
		$arr = array('a'=>1, 'b'=>2, 'c'=>3);
		echo $arr[array_rand($arr)];
	echo '</div><br>';

//----------------------------------------------------TASK28                                                
	echo '<span>task28</span><div class="window">';
		$arr = array(1, 2, 3, 4, 5);
		shuffle($arr);
		var_dump($arr);
	echo '</div><br>';

//----------------------------------------------------TASK29                                                
	echo '<span>task29</span><div class="window">';
		$arr = range(1, 25);
		shuffle($arr);
		var_dump($arr);
	echo '</div><br>';

//----------------------------------------------------TASK30                                                
	echo '<span>task30</span><div class="window">';
		$arr = range('a', 'z');
		shuffle($arr);
		var_dump($arr);
	echo '</div><br>';
//----------------------------------------------------TASK31                                               
	echo '<span>task31</span><div class="window">';
		$arr = range('a', 'z');
		shuffle($arr);
		echo implode('', array_slice($arr, 0, 6));
	echo '</div><br>';
//----------------------------------------------------TASK32                                               
	echo '<span>task32</span><div class="window">';
		$arr = array('a', 'b', 'c', 'b', 'a');
		$arr = array_unique($arr);
		var_dump($arr);
	echo '</div><br>';

?>
</body>
</html>