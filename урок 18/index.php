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
	                   
	<h3>Практика на работу с пользовательскими функциями PHP</h3><br>
	<span>task1.Транслит введённого слова</span>
	<div class="window">
	<form action="" method="GET">
		<input type="text" name="name1" placeholder="Введите слово">
		<input type="submit">
	</form> <br>
<?php	
		if (isset($_REQUEST['name1'])) {
			$name1 = $_REQUEST['name1'];
		}

  function translit($str) {
    $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
    return str_replace($rus, $lat, $str);
  }
  echo translit($name1);
?>
	</div><br>


<!--      -------- Task2-----------         -->
	<span>task2.Cоздаётся новый массив и с другого массива отбираются только те элементы которые подходят по условию</span>
	<div class="window">
<form action="" method="GET">
		<input type="text" name="num2" placeholder="Введите число"><br>
		<input type="text" name="word2-1" placeholder="слово когда число в единственном числе - яблоко"><br>
		<input type="text" name="word2-2" placeholder="яблока"><br>
		<input type="text" name="word2-3" placeholder="яблок"><br>
		<input type="submit">
	</form> <br>
<?php	
		if (isset($_REQUEST['num2'])) {
			$num2 = $_REQUEST['num2'];
			$word2_1 = $_REQUEST['word2-1'];
			$word2_2 = $_REQUEST['word2-2'];
			$word2_3 = $_REQUEST['word2-3'];
		}

	function getDigitsSum2($num,$word1,$word2,$word3){
		if($num==1){
			return $num.' '.$word1;
		}elseif($num>1 and $num<5){
			return $num.' '.$word2;
		}else{
			return $num.' '.$word3;
		}
	}
	
	echo getDigitsSum2($num2,$word2_1,$word2_2,$word2_3); 
?>
	</div><br>

<!--      -------- Task3-----------         -->
	<span>task3.Счастливый билет: сумма первых 3 цифр равна сумме вторых 3</span>
	<div class="window">
	<form action="" method="GET">
		<input type="text" name="num3" placeholder="Введите число">
		<input type="submit">
	</form> <br>
<?php	
		if (isset($_REQUEST['num3'])) {
			$num3 = $_REQUEST['num3'];
		}
	function getDigitsSum3($num){
		$arr=(str_split($num, 1));  //массив цифр числа
		$arr1=[];
		$arr2=[];
		for($i=0;$i<3;$i++){
			$arr1=$arr[$i];
		}
		for($i=3;$i<6;$i++){
			$arr2=$arr[$i];
		}
		if($arr1==$arr2){
			return 'вы счастливчик';
		}else{
			return 'повезёт в другой раз';
		}
	}
	
	echo getDigitsSum3($num3); 
?>
	</div><br>

<!--      -------- Task4-----------         -->
	<span>task4.Все дружественные числа до 10000.Например, 220 и 284. Делители для 220 это 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 и 110, сумма делителей равна 284. Делители для 284 это 1, 2, 4, 71 и 142, их сумма равна 220.</span>
	<div class="window" id="window4">
<?php
	$friends =[];
	for ($i = 1; $i < 1000; $i++) {
		$friends1=getDivisors4($i);
		$friends2=getDivisors4($friends1);
		if($i==$friends2){
			$friends=(string)$friends1.'and'.(string)$friends2;
		}
	}

	var_dump($friends);

	function getDigitsSum4($num){
		return array_sum($num);
	}
	
	function getDivisors4($num)   //делители числа
	{
		$arr = [];
		for ($i = 1; $i <= $num; $i++) {
			if ($num % $i == 0) {
				$arr[] = $i;
			}
		}
		

		getDigitsSum4($arr);
	}
?>
	</div><br>


</body>
</html>