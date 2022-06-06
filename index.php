<?php 
	require "db.php";


 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<title>Document</title>
</head>
<body>
	<header>
		<div class="Выбор">

		<ul >
			<h1>Название</h1>
			<input type="text" placeholder="Поиск...">

			<li class="fun"><a href="ex.html">Функции</a></li>
			<li class="Price" ><a href="ex.html">Цены</a></li>
			<li class="log"><?php if (isset($_SESSION['logged_user'])) {echo "Авторизован";} ?></li>
			<li class="exit"><a href="exit.php">Выйти</a></li>
			
		</ul>
	</div>
	</header>
	<aside>
		<div class="aside">
			<ul>
				<li class="top"><a href="">Какая-то категория</a></li>
				<li class="a"><a href="">Какая-то категория</a></li>
				<li class="a"><a href="">Какая-то категория</a></li>
				<li class="a"><a href="">Какая-то категория</a></li>
				<li class="a"><a href="">Какая-то категория</a></li>
				<li class="a"><a href="">Какая-то категория</a></li>
				<li class="a"><a href="">Какая-то категория</a></li>
				<li class="a"><a href="">Какая-то категория</a></li>
				<li class="a"><a href="">Какая-то категория</a></li>
				<li class="a"><a href="">Какая-то категория</a></li>
			</ul>
		</div>
	</aside>
  	<footer >
  	<div class="Низ">
    	<ul>
    		<li><a href="">Дом</a></li>
    		<li><a href="">О нас</a></li>
    		<li><a href="">Часто задаваемые вопросы</a></li>
    	</ul>
    </div>	
  </footer>			
</body>
</html>