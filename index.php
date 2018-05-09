<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	                   
	<h3>Задачи на формы в PHP</h3><br><span>task1</span><div class="window">
	<form action="" method="GET">
		<input type="text" name="name1" placeholder="Введите имя">
		<input type="submit">
	</form> <br>
<?php	
		if (isset($_REQUEST['name1'])) {
			$name = $_REQUEST['name1'];
			echo 'Привет,'.$name;
		}
?>
	</div><br>


<!--      -------- Task2-----------         -->
	<span>task2</span>
	<div class="window">
		<form action="" method="GET">
			<input type="text" name="name2" placeholder="Введите имя"><br>
			<input type="text" name="age2" placeholder="Введите возраст"><br>
			<textarea name="message2" placeholder="Ваше сообщение"></textarea>
			<input type="submit" name="submit2">
		</form>
<?php	
		if (isset($_REQUEST['submit2'])) {
			$age = strip_tags($_REQUEST['age2']);
			$name = strip_tags($_REQUEST['name2']);
			$message = strip_tags($_REQUEST['message2']);
			echo "Привет, $name, вам $age лет <br> твое сообщение: $message";
		}
?>
	</div><br>

<!--      -------- Task3-----------         -->
<?php
	if (!isset($_REQUEST['age3'])) {
?>
	<span>task3</span>
	<div class="window">
		<span>После ввода форма изчезнет</span><br>
		<form action="" method="GET">
			<input type="text" name="age3" placeholder="Ваш возраст">
			<input type="submit">
		</form>
	
<?php
	}
?>
<?php
	if (isset($_REQUEST['age3'])) {
		$age = strip_tags($_REQUEST['age3']);
		echo 'Ваш возраст: '.$age;
	}
?>
	</div><br>

<!--      -------- Task4-----------         -->
	<span>task4</span>
	<div class="window">
		<form action="" method="GET">
			<span>Введите логин 'user' и пароль: 123456</span><br>
			<input type="text" name="login4" placeholder="логин"><br>
			<input type="password" name="pass4" placeholder="пароль"><br>
			<input type="submit" name="submit4"><br>
		</form>
<?php	
		if (isset($_REQUEST['submit4'])) {
			$login = 'user';
			$pass = '123456';
			$formLogin = trim($_REQUEST['login4']);
			$formPass = trim($_REQUEST['pass4']);
			if ($login == $formLogin and $pass == $formPass) {
				echo 'Доступ разрешен!';
			} else {
				echo 'Нет доступа!';
			}
}?>
	</div><br>
	
<!--      -------- Task5-----------         -->
	<span>task5</span>
	<div class="window">
		<span>После ввода значение созраняется в форме</span><br>
		<form action="" method="GET">
			<input name="name5" value="<?php if (isset($_GET['name5'])) echo $_GET['name5']; ?>">
			<input type="submit" name="submit5" >
		</form>
<?php	
		if (isset($_REQUEST['submit5'])) {
			$name = $_REQUEST['name5'];
			echo $name;
		}
?>
	</div><br>

<!--      -------- Task6-----------         -->
	<span>task6</span>
	<div class="window">
		<span>После ввода значения полей созраняются </span><br>
		<form action="" method="GET">
			<input name="name6" value="<?php if (isset($_GET['name6'])) echo $_GET['name6']; ?>"><br>
			<textarea name="message6">
			<?php if (isset($_GET['message6'])) echo $_GET['message6']; ?>
			</textarea><br>
			<input type="submit">
		</form>

	</div><br>





</body>
</html>