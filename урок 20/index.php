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
	                   
	<h3>Задачи на продвинутую работу с формами в PHP</h3><br>
	<span>task1.Когда чекбокс отмечен вас поприветствуют</span>
	<div class="window">
		<form action="" method="GET">
			<input type="text" name="name1" placeholder="Введите имя">
			<input type="hidden" name="hello1" value="0">
			<input type="checkbox" name="hello1" value="1"><br>
			<input type="submit">
		</form>

<?php
	if (isset($_REQUEST['hello1']) and $_REQUEST['hello1'] == 0) {
		echo 'Прощай '.$_REQUEST['name1'];
	}

	if (isset($_REQUEST['hello1']) and $_REQUEST['hello1'] == 1) {
		echo 'Привет '.$_REQUEST['name1'];
	}
?>
	</div><br>


<!--      -------- Task2-----------         -->
	<span>task2.Выберите языки которые вы знаете</span>
	<div class="window" id="w2">
		<form action="" method="GET">
			html<input type="checkbox" name="lang1[]" value="html">
			css<input type="checkbox" name="lang1[]" value="css"><br>
			php<input type="checkbox" name="lang1[]" value="php">
			javascript<input type="checkbox" name="lang1[]" value="javascript"><br><br>
			<input type="submit">
		</form><br>

<?php
	if(isset($_REQUEST['lang1']))
	{
		echo 'Вы знаете: ' . implode(',', $_REQUEST['lang1']);
	}
?>
	</div><br>

<!--      -------- Task3-----------         -->
	<span>task3</span>
	<div class="window">
		<form action="" method="GET">
			Вы знаете PHP?<br>
			да<input type="radio" name="php3" value="1"><br>
			нет<input type="radio" name="php3" value="0"><br>
			<input type="submit">
		</form><br>

<?php
	if (isset($_REQUEST['php3']) and $_REQUEST['php3'] == 0) {
		echo 'Вы не знаете PHP';
	}

	if (isset($_REQUEST['php3']) and $_REQUEST['php3'] == 1) {
		echo 'Вы  знаете PHP!';
	}
?>
	</div><br>

<!--      -------- Task4-----------         -->
	<span>task4</span>
	<div class="window">
		<form action="" method="GET">
			Сколько вам лет?<br>
			менее 20 лет<input type="radio" name="age4" value="1"><br>
			20-25<input type="radio" name="age4" value="2"><br>
			26-30<input type="radio" name="age4" value="3"><br>
			более 30<input type="radio" name="age4" value="4">
			<input type="submit">
		</form><br>

<?php
	if (isset($_REQUEST['age4']) and $_REQUEST['age4'] == 1) {
		echo 'Вам менее 20 лет';
	}

	if (isset($_REQUEST['age4']) and $_REQUEST['age4'] == 2) {
		echo 'Вам 20-25 лет';
	}

	if (isset($_REQUEST['age4']) and $_REQUEST['age4'] == 3) {
		echo 'Вам 26-30 лет';
	}

	if (isset($_REQUEST['age4']) and $_REQUEST['age4'] == 4) {
		echo 'Вам более 30 лет';
	}
?>
	</div><br>

<!--      -------- Task5-----------         -->
	<span>task5.Выбрать можно только один вариант</span>
	<div class="window">
		<form action="" method="GET">
			<select size="2"  name="age5">
			<option disabled>Сколько вам лет?</option>
			<option value="1">менее 20 лет</option>
			<option value="2">20-25</option>
			<option value="3">26-30</option>
			<option value="4">более 30</option>
 			</select>
			<input type="submit">
		</form><br>

<?php
	if (isset($_REQUEST['age5']) and $_REQUEST['age5'] == 1) {
		echo 'Вам менее 20 лет';
	}

	if (isset($_REQUEST['age5']) and $_REQUEST['age5'] == 2) {
		echo 'Вам 20-25 лет';
	}

	if (isset($_REQUEST['age5']) and $_REQUEST['age5'] == 3) {
		echo 'Вам 26-30 лет';
	}

	if (isset($_REQUEST['age5']) and $_REQUEST['age5'] == 4) {
		echo 'Вам более 30 лет';
	}
?>
	</div><br>

<!--      -------- Task6-----------         -->
	<span>task6.Выбрать можно несколько вариантов</span>
	<div class="window">
		<form action="" method="GET">
			<select size="5" multiple name="lg6[]">
			<option disabled>Сколько вам лет?</option>
			<option value="1">html</option>
			<option value="2">css</option>
			<option value="3">php</option>
			<option value="4">javascript</option>
 			</select>
			<input type="submit">
		</form>

<?php
	$str = 'Вы знаете: ';
	foreach ($_REQUEST['lg6'] as $elem) {
		if($elem == 1) {
			$str .= 'html, ';
		}
		if($elem == 2) {
			$str .= 'css, ';
		}
		if($elem == 3) {
			$str .= 'php, ';
		}
		if($elem == 4) {
			$str .= 'javascript.';
		}
	}
	echo $str;
?>
	</div><br>

<!--      -------- Task7-----------         -->
	<span>task7.Функция которая создаёт форму</span>
	<div class="window">
<?php
	$type='text';
	$name='hello7';
	$value='hello';
	echo input7($type, $name, $value);

	function input7($type, $name, $value){
		return '<input type="'.$type.'" name="'.$name.'" value="'.$value.'">';
	}
?>
	</div><br>

<!--      -------- Task8-----------         -->
	<span>task8.Функция которая создаёт форму</span>
	<div class="window">
<?php
	function input8($type, $name, $value){
		if(isset($_REQUEST[$name])) {
			$value = $_REQUEST[$name];
		}

		return '<input type="text" name="'.$name.'" value="'.$value.'">';
	}
	echo input8('text', 'input', '1');
	echo input8('submit', 'input', '1');
?>
	</div><br>
</body>
</html>