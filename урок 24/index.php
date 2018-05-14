<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>24</title>
</head>
<body>
	<h1>Задачи на основы работы с базами данных SQL в PHP
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
		
	<h3>Задание 1</h3>
		<?php
			$query = "SELECT name FROM workers WHERE id = 3";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 2.Работники с зарплатой 455</h3>
		<?php
			$query = "SELECT name FROM workers WHERE salary = 455";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>
	<h3>Задание 3.Работники с возрастом 21</h3>
		<?php
			$query = "SELECT name FROM workers WHERE age = 21";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>


	<h3>Задание 4.Работники с зарплатой больше и с 20000 </h3>
		<?php
			$query = "SELECT name FROM workers WHERE salary >= 20000";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>


	<h3>Задание 8</h3>
		<?php
			$query = "SELECT age,salary FROM workers WHERE name='Ваня'";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 9.Работники старше 20 и младше 28</h3>
		<?php
			$query = "SELECT * FROM workers WHERE age > 20 AND age <= 28";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 10.Работник Ваня</h3>
		<?php
			$query = "SELECT * FROM workers WHERE name = 'Ваня'";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

	<h3>Задание 11.Работники Ваня и Вася</h3>
		<?php
			$query = "SELECT * FROM workers WHERE name = 'Ваня' OR name = 'Вася'";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

		<h3>Задание 12.Все кроме Вани</h3>
		<?php
			$query = "SELECT * FROM workers WHERE name != 'Ваня'";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

		<h3>Задание 13.Все работники с зарблатой 500 и возрастом 21</h3>
		<?php
			$query = "SELECT * FROM workers WHERE age = 21 OR salary = 500";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>

		<h3>Задание 17 Добавление и вывод</h3>
		<?php 
			$query = "INSERT INTO workers SET name='Никита', age=26, salary=300";
			mysqli_query($link, $query); 
		 ?>
		 <?php
			$query = "SELECT * FROM workers WHERE name='Никита'";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
			var_dump($data);
		?>


		<h3>Задание 18 (Добавление)</h3>
		<?php 
			$query = "INSERT INTO workers (name, age, salary) VALUES ('Светлана', 20, 1200)";
			mysqli_query($link, $query); 
		 ?>

		<h3>Задание 20 (Удаление работника с id=7)</h3>
		<?php 
			$query = "DELETE FROM workers WHERE id = 7";
			mysqli_query($link, $query); 
		 ?>

		<h3>Задание 21 Удаление Кирила</h3>
		<?php 
			$query = "DELETE FROM workers WHERE name = 'Кирил'";
			mysqli_query($link, $query); 
		 ?>

		<h3>Задание 23. Удаление работников у кооторых возраст 23</h3>
		<?php 
			$query = "DELETE FROM workers WHERE age = 23";
			mysqli_query($link, $query); 
		 ?>

		<h3>Задание 24.Работнику с id=4 дать возраст 35</h3>
		<?php 
			$query = "UPDATE workers SET age = 35 WHERE id = 4";
			mysqli_query($link, $query);
		 ?>

		<h3>Задание 25.У кого зарплата 500 сделать 700</h3>
		<?php 
			$query = "UPDATE workers SET salary = 700 WHERE salary = 500";
			mysqli_query($link, $query); 
		 ?>


</body>
</html>