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
	echo '<h3>Задачи на функции работы со строками в PHP</h3><br><span>task1</span><div class="window">';
		echo strtoupper('php');
	echo '</div><br>';
	


//--------------------------------------------------TASK2                                                       
	echo '<span>task2</span><div class="window">';
		
			echo strtolower('PHP');

	echo '</div><br>';


	
//----------------------------------------------------TASK3                                                       
	echo '<span>task3</span><div class="window">';
		echo ucfirst('london');
	echo '</div><br>';
	


//----------------------------------------------------TASK4                                                       
	echo '<span>task4. </span><div class="window">';
		echo lcfirst('London');
	echo '</div><br>';
	


//----------------------------------------------------TASK5                                                       
	echo '<span>task5</span><div class="window">';
		//echo ucworlds('london is the capital of great britain');
	echo '</div><br>';

//----------------------------------------------------TASK6                                                       
	echo '<span>task6</span><div class="window">';
		echo ucfirst(strtolower('LONDON'));
	echo '</div><br>';

//----------------------------------------------------TASK7                                                       
	echo '<span>task7.количество символов в строке</span><div class="window">';
		echo strlen('html css php');
	echo '</div><br>';


//----------------------------------------------------TASK8                                                       
	echo '<span>task8</span><div class="window">';
		$password = '123456789';
		$len = strlen($password);
	
		if ($len > 5 and $len < 10) {
			echo 'Пароль подходит';
		} else {
			echo 'Пароль не подходит, придумайте другой';
		}
	echo '</div><br>';

	

//----------------------------------------------------TASK9                                                       
	echo '<span>task9</span><div class="window">';
		echo substr('html css php', 0, 4).'<br>'; //html
		echo substr('html css php', 5, 3).'<br>'; //css
		echo substr('html css php', 9, 3).'<br>'; //php
	echo '</div><br>';



//----------------------------------------------------TASK10                                                       
	echo '<span>task10</span><div class="window">';
		echo substr('12345678934q26', -3); 
	echo '</div><br>';

//----------------------------------------------------TASK11                                                       
	echo '<span>task11</span><div class="window">';
		$str = 'http://phphtml.net';
		if (substr($str, 0, 7) == 'http://') {
			echo 'Да';
		} else {
			echo 'Нет';
		}
	echo '</div><br>';

//----------------------------------------------------TASK12                                                       
	echo '<span>task12</span><div class="window">';
		$str = 'http://phphtml.net';
		$check1 = substr($str, 0, 7);
		$check2 = substr($str, 0, 8);
		if ($check1 == 'http://' or $check2 == 'https://') {
			echo 'Да';
		} else {
			echo 'Нет';
		}
	echo '</div><br>';


//----------------------------------------------------TASK13                                                       
	echo '<span>task13</span><div class="window">';
		$str = '1.png';
		$check = substr($str, -4);
		if ($check == '.png') {
			echo 'Да';
		} else {
			echo 'Нет';
		}
	echo '</div><br>';

//----------------------------------------------------TASK14                                                       
	echo '<span>task14</span><div class="window">';
		$str = '1.jpg';
		$check = substr($str, -4);
		if ($check == '.png' or $check == '.jpg') {
			echo 'Да';
		} else {
			echo 'Нет';
		}	
	echo '</div><br>';

//----------------------------------------------------TASK15                                                       
	echo '<span>task15</span><div class="window">';
		$str = '123456789';
		if(strlen($str) > 5) {
			echo substr($str, 0, 5). '...';
		} else {
			echo $str;
		}
	echo '</div><br>';

//----------------------------------------------------TASK16                                                   
	echo '<span>task16</span><div class="window">';
		echo str_replace('.', '-', '31.12.2013');
	echo '</div><br>';

//----------------------------------------------------TASK17                                                  
	echo '<span>task17</span><div class="window">';
		echo str_replace(array('a', 'b', 'c'), array(1, 2, 3), 'abcabc'); //выведет '123123'
	echo '</div><br>';

//----------------------------------------------------TASK18                                                  
	echo '<span>task18</span><div class="window">';
		echo str_replace(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0), '', '1a2b3c4b5d6e7f8g9h0');
	echo '</div><br>';

//----------------------------------------------------TASK19                                                  
	echo '<span>task19</span><div class="window">';
		$str = 'abcabc';
		echo strtr($str, array('a'=>1, 'b'=>'2', 'c'=>'3')); //выведет '123123'
	echo '</div><br>';

//----------------------------------------------------TASK20                                                  
	echo '<span>task20</span><div class="window">';
		$str = '1234567890';
		echo $str.'<br>';
		echo substr_replace($str, '!!!', 3, 5); //выведет '123!!!90'
	echo '</div><br>';

//----------------------------------------------------TASK21                                                  
	echo '<span>task21</span><div class="window">';
		echo strpos('abc abc abc', 'b'); //выведет 1
	echo '</div><br>';

//----------------------------------------------------TASK22                                                 
	echo '<span>task22</span><div class="window">';
		echo strrpos('abc abc abc', 'b'); //выведет 9
	echo '</div><br>';

//----------------------------------------------------TASK23                                                 
	echo '<span>task23</span><div class="window">';
		echo strpos('abc abc abc', 'b', 3); //выведет 5
	echo '</div><br>';

//----------------------------------------------------TASK24                                                 
	echo '<span>task24</span><div class="window">';
		$str = 'aaa aaa aaa aaa aaa';
		$first = strpos($str, ' '); //позиция первого пробела
		echo strpos($str, ' ', $first + 1);//позиция второго пробела
	echo '</div><br>';

//----------------------------------------------------TASK25                                                 
	echo '<span>task25</span><div class="window">';
		$str = 'aaa..aaaa';
		if(strpos($str, '..') !== false) {
			echo 'Да';
		} else {
			echo 'Нет';
		}
	echo '</div><br>';

//----------------------------------------------------TASK26                                                 
	echo '<span>task26.строка начинается на http://</span><div class="window">';
		$str = 'http://phphtml.net';
	
		//Проверяем, что строка начинается с http://:
		if(strpos($str, 'http://') == 0) {
			echo 'Да';
		} else {
			echo 'Нет';
		}
	echo '</div><br>';

//----------------------------------------------------TASK27                                                
	echo '<span>task27</span><div class="window">';
		$arr = explode(' ', 'html css php');
		var_dump($arr);
	echo '</div><br>';

//----------------------------------------------------TASK28                                                
	echo '<span>task28</span><div class="window">';
		$arr =array('html', 'css', 'php');
		echo implode(',', $arr);
	echo '</div><br>';

//----------------------------------------------------TASK29                                                
	echo '<span>task29</span><div class="window">';
		$date = '2013-12-31';
		$arr = explode('-', $date);
		echo $arr[2].'.'.$arr[1].'.'.$arr[0];
	echo '</div><br>';

//----------------------------------------------------TASK30                                                
	echo '<span>task30</span><div class="window">';
		var_dump(str_split('1234567890', 2));
	echo '</div><br>';
//----------------------------------------------------TASK31                                               
	echo '<span>task31</span><div class="window">';
		var_dump(str_split('1234567890', 1));
	echo '</div><br>';
//----------------------------------------------------TASK32                                               
	echo '<span>task32</span><div class="window">';
		echo implode('-', str_split('1234567890', 2));
	echo '</div><br>';
//----------------------------------------------------TASK36                                               
	echo '<span>task36</span><div class="window">';
		$str = '12345';
		echo strrev($str);
	echo '</div><br>';
//----------------------------------------------------TASK37                                               
	echo '<span>task37</span><div class="window">';
		$str = 'madam';
		$rev = strrev($str);
		if ($rev == $str) {
			echo $str. ' - это слово палиндром';
		}
	echo '</div><br>';

//----------------------------------------------------TASK38                                              
	echo '<span>task38</span><div class="window">';
		$str = 'Hello World!';
		echo str_shuffle($str);
	echo '</div><br>';

//----------------------------------------------------TASK39                                              
	echo '<span>task39</span><div class="window">';
		$str = 'qwertyuiopasdfghjklzxcvbnm'; //все латинские буквы
		$newStr = str_shuffle($str); //перемешиваем их
		echo substr($newStr, 0, 6); //берем первые 6 символов
	echo '</div><br>';
?>
</body>
</html>