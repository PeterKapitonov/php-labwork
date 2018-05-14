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
	                   
	<h3>Продвинутая работа с пользовательскими функциями в PHP</h3><br>
	<span>task1.Введите слово длина которой больше 5 и она вернёт первые 5 букв</span>
	<div class="window">
	<form action="" method="GET">
		<input type="text" name="name1" placeholder="Введите слово">
		<input type="submit">
	</form> <br>
<?php	
		if (isset($_REQUEST['name1'])) {
			$name1 = $_REQUEST['name1'];
		}

	echo cut1($name1);
 	function cut1($str, $lim = 5){
		return  substr($str, 0, $lim);
	}
?>
	</div><br>


<!--      -------- Task2-----------         -->
	<span>task2.Вывод всех элементов не использую цикл</span>
	<div class="window">
<?php
	$arr=[1,2,2,32,23,34,543,2];
	printArr($arr);

	function printArr($arr){
		echo array_shift($arr) . '<br>';
		if (!empty($arr)) {
			echo printArr($arr);
		}
	}
?>
	</div><br>

<!--      -------- Task3-----------         -->
	<span>task3.Счастливый билет: сумма первых 3 цифр равна сумме вторых 3</span>
	<div class="window">
<?php
	$num=1234;
	echo lowNum3($num);

	function lowNum3($num){
		$arr=str_split($num,1);
		$result = array_sum($arr);
		if ($resullt > 9) {
			$result = lowNum($result);
		}else{
			return $result;
		}
	}
?>
	</div><br>



</body>
</html>