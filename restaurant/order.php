<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vinograd</title>
	<link rel="stylesheet" type="text/css" href="css/order.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="images/ico.png">
	<link rel="stylesheet" type="text/css" href="js/jquery-ui-1.12.1.custom/jquery-ui.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0//css/font-awesome.min.css">
</head>
<body>
	<div class="search_opacity"></div>
	<div class="top_bar">
		<div class="tel_num">
			<div class="tel"></div>
			+7-707-437-27-78
			<div class="email"></div>
			vinograd_shymkent@mail.ru
		</div>
		<nav class="links">
			<li><a href="https://facebook.com"></a></li>
			<li><a href="https://vk.com"></a></li>
			<li><a href="https://twitter.com"></a></li>
			<li><a href="https://instagram.com"></a></li>
		</nav>
	</div>
	<header>
		<div class="header_center">
			<div class="logo"><a href="index.php"></a></div>
			<nav class="nav">
				<li>
					<a href="index.php">Главная</a>
				</li>
				<li>
					<a href="locations.php">Филиалы</a>
				</li>
				<li>
					<a href="about.html">О Нас</a>
				</li>
				<li>
					<a href="contacts.html">Контакты</a>
				</li>
			</nav>
		</div>
	</header>
	<form id="msform">
		<!-- progressbar -->
		<ul id="progressbar">
			<li class="active">Подтверждение заказа</li>
			<li>Заполнение формы</li>
			<li>Оплата</li>
		</ul>
		<!-- fieldsets -->
		<fieldset>
			<h2 class="fs-title">Подтверждение заказа</h2>
			<h3 class="fs-subtitle">Шаг 1</h3>
			<div class="order_list">
				<?php
					$text = explode('<div class="reduce_amount fa fa-minus-circle" id="reduce_btn" style="font-size: 23px; line-height: 30px;"></div><div class="add_amount fa fa-plus-circle" id="add_btn" style="font-size: 23px; line-height: 30px;"></div>', $_COOKIE['order_list']);
					for($i = 0; $i < count($text); $i++){
						echo $text[$i];
					}
				?>
				<hr><br>
				<?php
					echo "Общая сумма: ".$_COOKIE['sum']."тг";
				?>
			</div>
			<input type="button" name="next" class="next action-button" value="Подтвердить" />
		</fieldset>
		<fieldset>
			<h2 class="fs-title">Личная информация</h2>
			<h3 class="fs-subtitle">Шаг 2</h3>
			<input type="text" id="fname" name="fname" placeholder="Имя" />
			<input type="text" id="lname" name="lname" placeholder="Фамилия" />
			<input type="text" id="phone" name="phone" placeholder="Тел. Номер" />
			<textarea name="address" id="address" placeholder="Адресс"></textarea>
			<input type="button" name="previous" class="previous action-button" value="Назад" />
			<input type="button" name="next" class="next action-button" value="Вперед" disabled="" style="background: #a0a0a0;"/>
		</fieldset>
		<fieldset>
			<h2 class="fs-title" style="font-size: 1vw;">Спасибо за заказ</h2>
			<div style="width: 200px; margin: auto;"><img style="width: inherit; height: inherit;" src="https://i.pinimg.com/originals/42/93/05/429305229f4b907a56b8a24a448830ed.png"></div>
			<input style="margin-left: 50%; transform: translate(-50%,0);" type="submit" name="submit" onclick="location.href = 'index.php';" class="submit action-button" value="Завершить" />
		</fieldset>
	</form>
</body>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/order.js"></script>
	<script type="text/javascript" src="js/confirm.js"></script>
</html>