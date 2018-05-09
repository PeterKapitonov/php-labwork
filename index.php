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
		
	$a=3;//задача 1
	
	echo '<div class="window">a='.$a.'
		</div><br>';
	
	$a=10;$b=2;								//task2
	$proiz=$a*$b;
	$chast=$a/$b;
	$summ=$a+$b;
	$raz=$a-$b;
	echo '<div class="window">a='.$a.' and b='.$b.'<br>
	summ='.$summ.'<br>raz='.$raz.'<br>proiz='.$proiz.'<br>chast='.$chast.'
		</div><br>';

	$c=15;$d=2;							//TASK3
	$result=$a+$d;
	echo '<div class="window">c='.$c.' and d='.$d.'<br>
	summ='.$result.'
		</div><br>';

	$a=10;$b=2;$c=5;                       //	TASK4
	$result=$a+$b+$c;
	echo '<div class="window">a='.$a.' and b='.$b.' c='.$c.'<br>
	summ='.$result.'
		</div><br>';

	$a=17;$b=10;                       //	TASK5
	$c=$a-$b;
	$d=7;
	$result=$c*$d;
	echo '<div class="window">a='.$a.' and b='.$b.' c=a-b='.$c.'<br>
	c*7='.$result.'
		</div><br>';

	$text='Hello world!';      //	TASK6
	echo '<div class="window"><br>
	'.$text.'
		</div><br>';

	$text1='Hello';      //	TASK7
	$text2='world!';
	$text=$text1.' '.$text2;
	echo '<div class="window"><br>
	'.$text.'
		</div><br>';

	$name='Дмитрий';      //	TASK8
	echo '<div class="window"><br>Привет, '.$name.'
		</div><br>';

	$age='19';      //	TASK9
	echo '<div class="window"><br>Мне '.$age.' лет.
		</div><br>';

	$text='abcde';      //	TASK10
	echo '<div class="window"><br>text: '.$text.' <br> text[0]='.$text[0].'
	<br> text[4]='.$text[4].'
		</div><br>';

	$text='abcde';      //	TASK11
	echo '<div class="window"><br>text: '.$text;
	$text[0]='!';
	echo '<br>text[0]= '.$text[0].' вместо а
		</div><br>';

	$num='12345';      //	TASK12
	$sum=$num[0]+$num[1]+$num[2]+$num[3]+$num[4];
	echo '<div class="window"><br>'.$num.'<br>sum: '.$sum;
?>
</body>
</html>