<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="Cache-Control" content="no-cache"><!--Запрет на кэширование браузером и прокси-сервером-->
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	                   
	<h3>Практика по написанию простых скриптов PHP</h3><br>
	<span>task1.сколько дней осталось до нового года</span>
	<div class="window">
<?php
	$year=date('Y');//год 
	$today=mktime();
	$newyear=mktime(0, 0, 0, 1, 1, $year+1);
	$day=($newyear-$today)/(60*60*24);
	echo $day;

?>
	</div><br>


<!--      -------- Task2-----------         -->
	<span>task2</span>
	<div class="window" id="w2">
	<form action="" method="GET">
		<input type="text" name="year2" placeholder="Введите год">
		<input type="submit">
	</form> <br>
<?php	
		if (isset($_REQUEST['year2'])) {
			$name = $_REQUEST['year2'];
		}
		if($name%4==0){
			echo 'год високосный';
		}else{
			echo 'год не високосный';
		}
?>
	</div><br>

<!--      -------- Task3-----------         -->
	<span>task3</span>
	<div class="window">
	<form action="" method="GET">
		<input type="text" name="date3" placeholder="дата в формате '1.12.1990'">
		<input type="submit">
	</form> <br>
<?php	
		if (isset($_REQUEST['date3'])) {
			$name = $_REQUEST['date3'];
		}
		
		$arr=explode(".",$name);
		$week = ['воскресенье', 'понедельник', 'вторник', 'среда','четверг', 'пятница', 'суббота'];
		echo $week[date('w',  mktime(0, 0, 0, $arr[1], $arr[0], $arr[2]))];
?>
	</div><br>

<!--      -------- Task4-----------         -->
	<span>task4/ вывод текущей даты в формате '12 мая 2015 года, воскресенье'</span>
	<div class="window">
<?php
	$month = array(
		1=>'янв', 'фев', 'мар', 'апр', 'мая', 'июня',
		'июля', 'авг', 'сен', 'окт', 'ноя', 'дек'
	);
	$week = ['воскресенье', 'понедельник', 'вторник', 'среда','четверг', 'пятница', 'суббота'];

	echo date('j').' '.$month[date('n')].' '.date('Y').' года, '.$week[date('w')];
?>
	</div><br>

<!--      -------- Task5-----------         -->
	<span>task5.дата рождения в формате '01.12.1990'. По нажатию на кнопку выведите на экран сколько дней осталось до дня рождения пользователя.</span>
	<div class="window">
	<form action="" method="GET">
		<input type="text" name="date5" style="width: 200px;" placeholder="дата в формате '01.12.1990'">
		<input type="submit">
	</form> <br>
<?php	
		if (isset($_REQUEST['date5'])) {
			$date5 = $_REQUEST['date5'];
		}
		
		$arr=explode(".",$date5);
		
		$year=date('Y');//год 
		$newyear=mktime(0, 0, 0, $arr[1], $arr[0], $year);
		$today=mktime();
		$day=($newyear-$today)/(60*60*24);
		echo $day;
?>
	</div><br>
<!--      -------- Task6-----------         -->
	<span>task6.сколько дней осталось до ближайшей масленницы </span>
	<div class="window">
<?php	
		function len_day($year){
			return $len_day=date('t',mktime(0, 0, 0, 3, 0, $year));//количество дней в месяце
		}

 
		function day($year){
			for($i=1;$i<=len_day($year);$i++){
				if(date('w',mktime(0, 0, 0, 3, $i, $year))==0){  //при каких днях
					$num=$i;//счётчик чтобы определить последнее воскресенье
				}
			}

			$newyear=mktime(0, 0, 0, 3, $num, $year);
			$today=mktime();
			return $day=($newyear-$today)/(60*60*24);
		}	

		$year=date('Y');//год 

		$day=day($year);

		if($day<=0){
			$day=day($year+1);
			echo round($day).' дней';
		}else{ 
			echo round($day).' дней';
		}
?>
	</div><br>

<!--      -------- Task10-----------         -->
	<span>task10.массив 10-ю иксами</span>
	<div class="window" id="w10">
<form action="" method="GET">
			<textarea name="text10" id="" cols="50" rows="5"></textarea>
			<input type="submit">
		</form>
<?php
	if (isset($_REQUEST['text10'])) {
		$text10 = $_REQUEST['text10'];
		
	}

	$arr_text=explode(' ',$text10); //массив со словами

	$len_text=mb_strlen($text10, 'utf-8');  ;//количество символов текста 

	$text_nonspace=str_replace(array(" "), '', $text10); //Ищем в переменной $text пробелы " " и заменяем их на пустоту '', результат записываем в новую переменную $text_nonspace.
	

	echo 'количество слов: '.count($arr_text);
	echo '<br>количество символов: '.$len_text;
	echo '<br>количество символов без пробела: '.mb_strlen($text_nonspace);
?>
	</div><br>

<!--      -------- Task11-----------         -->
	<span>task11.процентное содержание каждого символа в тексте</span>
	<div class="window">
		<form action="" method="GET">
			<textarea name="text11" id="" cols="50" rows="5"></textarea>
			<input type="submit">
		</form>
<?php
	if (isset($_REQUEST['text11'])) {
		$text11 = $_REQUEST['text11'];
		
	}


	$len_text=mb_strlen($text11, 'utf-8');  ;//количество символов текста 

	$text_nonspace=mb_strlen(str_replace(array(" "), '', $text11)); //Ищем в переменной $text пробелы " " и заменяем их на пустоту '', результат записываем в новую переменную $text_nonspace. //сразу находим длину
	

	$percent=$text_nonspace/$len_text*100;
	echo round($percent,2).'%';
?>
	</div><br>
	</div><br>


<!--      -------- Task19-----------         -->
	<span>task19. факториал числа</span>
<div class="window">
		<form action="" method="GET">
		<input type="text" name="num19" id="" placeholder="ведите число">
			<input type="submit">
		</form>
<?php
	if (isset($_REQUEST['num19'])) {
		$num19 = (int) $_REQUEST['num19'];
	}

	$fact=1;
	for($i=1;$i<=$num19;$i++){
		$fact*=$i;
	}
	echo 'факториал числа '.$num19.' равен '.$fact;

?>
	</div><br>

<!--      -------- Task20-----------         -->
	<span>task20.Решение квадратного уравнения</span>
<div class="window">
		<form action="" method="GET">
			<input type="text" name="num20-1" id="" placeholder="ведите число">
			<input type="text" name="num20-2" id="" placeholder="ведите число">
			<input type="text" name="num20-3" id="" placeholder="ведите число">
			<input type="submit">
		</form>
<?php
	if (isset($_REQUEST['num19'])) {
		$num20_1 = (int) $_REQUEST['num20-1'];
		$num20_2 = (int) $_REQUEST['num20-2'];
		$num20_3 = (int) $_REQUEST['num20-3'];
	}

	$disk=$num20_2*$num20_2-4*$num20_1*$num20_3;
	if($disk>0){
		$x1=(0-$num20_2-$disk)/2*$num20_1;
		echo 'x1= '.$x1;
		$x2=(0-$num20_2+$disk)/2*$num20_1;
		echo 'x2= '.$x2;
	}else if($disk==0){
		$x=(0-$num20_2)/2*$num20_1;
		echo 'x= '.$x;
	}else{
		echo 'нет решения';
	}

?>
	</div><br>
</body>
</html>