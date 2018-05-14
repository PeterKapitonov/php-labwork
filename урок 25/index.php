<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>24</title>
</head>
<body>
	<h1>Задачи на базы данных SQL в PHP
</h1>

	<?php
	//Устанавливаем доступы к базе данных:
		$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
		$user = 'root'; //имя пользователя, по умолчанию это root
		$password = ''; //пароль, по умолчанию пустой
		$db_name = 'test_db'; //имя базы данных
	//Соединяемся с базой данных используя наши доступы:
		$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
	//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
		mysqli_query($link, "SET NAMES 'utf8'");
	?>
<!--	//Формируем тестовый запрос:
		$query = "SELECT * FROM articles WHERE id > 0";
	//Делаем запрос к БД, результат запроса пишем в $result:
		//$result = mysqli_query($link, $query) or die(mysqli_error($link));
		//Делаем запрос к БД, результат запроса пишем в $result:
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
		var_dump($data);-->
		
	<h3>Задание 1.первые 6 записей</h3>
		<?php
			$query = "SELECT * FROM workers WHERE id >0 LIMIT 6";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 2 LIMIT</h3>
		<?php
			$query = "SELECT * FROM workers WHERE id >0 LIMIT 2,3";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 3 Order By</h3>
		<?php
			$query = "SELECT * FROM workers WHERE id >0 ORDER BY salary";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 4 Order By</h3>
		<?php
			$query = "SELECT * FROM workers WHERE id >0 ORDER BY salary DESC";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 5 Order By</h3>
		<?php
			$query = "SELECT * FROM workers WHERE id >0 ORDER BY age LIMIT 2,5";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 8. В таблице name найти строки, в которых имя автора заканчивается на "ма"</h3>
		<?php
			$query = "SELECT * FROM workers WHERE name LIKE '%ма'";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 9.Найти статью где есть слово элемент</h3>
		<?php
			$query = "SELECT * FROM workers WHERE name LIKE 'элемент'";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 10.строки, в которых возраст работника начинается с числа 3, а далее идет только одна цифра.</h3>
		<?php
			$query = "SELECT * FROM workers WHERE age LIKE '3_'";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	


</body>
</html>