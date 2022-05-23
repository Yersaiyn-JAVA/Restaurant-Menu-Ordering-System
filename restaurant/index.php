<?php
	require_once "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> <!-- UNICODE that contains most of the worlds language to respresnt -->
	<title>Vinograd</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="images/ico.png">
	<link rel="stylesheet" type="text/css" href="js/jquery-ui-1.12.1.custom/jquery-ui.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Raleway:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<div class="search_opacity"></div>
	<div class="top_bar"> <!-- block at he top that provides contact information about restaurant -->
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
	<header> <!-- this block contains logo, menu and busket button to order food -->
		<div class="header_center">
			<div class="logo"><a href="index.php"></a></div> <!-- logotype -->
			<nav class="nav"> <!-- navigation of the webiste -->
				<li>
					<a href="index.php">Главная</a>
				</li>
				<li>
					<a href="news.php">Новости</a>
				</li>
				<li>
					<a href="about.html">О Нас</a>
				</li>
				<li>
					<a href="contacts.html">Контакты</a>
				</li>
			</nav>
			<div class="order"> <!-- button that displays list of food added to busket -->
				<div class="order_btn"></div>
				<span id="order_count">
					<?php
						if(isset($_COOKIE['item_count'])){ //displays the number of food in the list
							echo '<i class="fa-solid fa-dollar-sign"></i>';
						} else {
							echo 0;
						}
					?>
				</span>
			</div>
			<div class="store_item">
					<form id="data">
						<span class="sum_price" style="color: black;">Общая сумма: <p><?php

				if(isset($_COOKIE['sum'])){ // displays total price of the list of food
					echo $_COOKIE['sum'];
				} else {
					echo 0;
				}

				 ?></p> тг</span>
							<ul class="place">
								<?php

				if(isset($_COOKIE['order_list'])){// displays list of food
					echo $_COOKIE['order_list'];
				} else {
					echo "";
				}
								 ?>
							</ul>
						<input type="submit" class="submit" value="Заказать">
					</form>
			</div>
			<?php
				if(!isset($_COOKIE['user_id'])){
					echo '<a href="authorization.html" class="authorization_btn">Войти</a>';
				} else {
					echo '<div class="user_box">
							<span><i class="fa fa-user"></i> '.$_COOKIE['firstname'].' '.$_COOKIE['lastname'].'</span>
							<div class="log_out">Выйти</div>
						</div>';
				}
			?>
		</div>
	</header>
	<div class="wrap"> <!-- slider of the website -->
		<div id="slider">
			<img src="images/slider/slide1.jpg" alt="">
			<img src="images/slider/slide2.jpg" alt="">
			<img src="images/slider/slide3.jpg" alt="">
			<img src="images/slider/slide4.jpg" alt="">
			<img src="images/slider/slide5.jpg" alt="">
			<div class="opacity_slider"></div>
		</div>
		<div class="btn_slider" id="slider_left"></div>
		<div class="btn_slider" id="slider_right"></div>
	</div>
	<main class="main">
		<section class="card-hot">
			<div class="card-hot-header">
				<h3>Популярные сеты</h3>
			</div>
			<div class="last-update">
				<div class="list-group">
					<div class="list-group-item">
						<div class="media">
							<div class="media-left">
								<img src="images/menu/ebi_maki.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="media-title">
									<h6>Суши Эби Маки</h6>
								</div>
								<div class="media-info">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="media-price">
									<span>1699&#8376;</span>
								</div>
							</div>
							<span class="promotional"></span>
						</div>
						<div class="media">
							<div class="media-left">
								<img src="images/menu/kalifornia.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="media-title">
									<h6>Суши Калифорния</h6>
								</div>
								<div class="media-info">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="media-price">
									<span>1699&#8376;</span>
								</div>
							</div>
							<span class="promotional"></span>
						</div>
						<div class="media">
							<div class="media-left">
								<img src="images/menu/kappa_maki.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="media-title">
									<h6>Суши Каппа Маки</h6>
								</div>
								<div class="media-info">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="media-price">
									<span>1699&#8376;</span>
								</div>
							</div>
							<span class="promotional"></span>
						</div>
						<div class="media">
							<div class="media-left">
								<img src="images/menu/margarita.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="media-title">
									<h6>Пицца Маргарита</h6>
								</div>
								<div class="media-info">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="media-price">
									<span>1699&#8376;</span>
								</div>
							</div>
							<span class="promotional"></span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="card-hot">
			<div class="card-hot-header">
				<h3>Топ продаж</h3>
			</div>
			<div class="last-update">
				<div class="list-group">
					<div class="list-group-item">
						<div class="media">
							<div class="media-left">
								<img src="images/menu/ebi_maki.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="media-title">
									<h6>Суши Эби Маки</h6>
								</div>
								<div class="media-info">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="media-price">
									<span>1699&#8376;</span>
								</div>
							</div>
							<span class="promotional"></span>
						</div>
						<div class="media">
							<div class="media-left">
								<img src="images/menu/kalifornia.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="media-title">
									<h6>Суши Калифорния</h6>
								</div>
								<div class="media-info">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="media-price">
									<span>1699&#8376;</span>
								</div>
							</div>
							<span class="promotional"></span>
						</div>
						<div class="media">
							<div class="media-left">
								<img src="images/menu/kappa_maki.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="media-title">
									<h6>Суши Каппа Маки</h6>
								</div>
								<div class="media-info">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="media-price">
									<span>1699&#8376;</span>
								</div>
							</div>
							<span class="promotional"></span>
						</div>
						<div class="media">
							<div class="media-left">
								<img src="images/menu/margarita.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="media-title">
									<h6>Пицца Маргарита</h6>
								</div>
								<div class="media-info">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="media-price">
									<span>1699&#8376;</span>
								</div>
							</div>
							<span class="promotional"></span>
						</div>
						<div class="media">
							<div class="media-left">
								<img src="images/menu/fried_poato.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="media-title">
									<h6>Картошка Фри</h6>
								</div>
								<div class="media-info">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="media-price">
									<span>499&#8376;</span>
								</div>
							</div>
							<span class="promotional"></span>
						</div>
					</div>
				</div>
		</section>
		<section class="card-hot">
			<div class="card-hot-header">
				<h3>Акций</h3>
			</div>
			<div class="last-update">
				<div class="list-group">
					<div class="list-group-item">
						<div class="media">
							<div class="media-left">
								<img src="images/menu/ebi_maki.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="media-title">
									<h6>Суши Эби Маки</h6>
								</div>
								<div class="media-info">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="media-price">
									<span>1699&#8376;</span>
								</div>
							</div>
							<span class="promotional"></span>
						</div>
						<div class="media">
							<div class="media-left">
								<img src="images/menu/kalifornia.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="media-title">
									<h6>Суши Калифорния</h6>
								</div>
								<div class="media-info">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="media-price">
									<span>1699&#8376;</span>
								</div>
							</div>
							<span class="promotional"></span>
						</div>
						<div class="media">
							<div class="media-left">
								<img src="images/menu/kappa_maki.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="media-title">
									<h6>Суши Каппа Маки</h6>
								</div>
								<div class="media-info">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="media-price">
									<span>1699&#8376;</span>
								</div>
							</div>
							<span class="promotional"></span>
						</div>
					</div>
				</div>
		</section>
	</main>
	<ul class="content"> <!-- section of the list of food from menu -->
		<div class="search"> <!-- search field to that user can use to find necessary food -->
			<input type="text" id="search">
			<ul class="search_result"></ul>
		</div>
		<div class="menu"> <!-- button that displays window where menu is represented for user -->
			<div class="circle">
				<p>Menu</p>
				<div class="before"></div>
				<div class="after"></div>
			</div>
			<ul class="menu_ul"> <!-- menu food category list -->
				<li><p>Алкогольные коктели</p></li>
				<li><p>Спиртные напитки</p></li>
				<li><p>Безалкогольные коктели</p></li>
				<li><p>Вино</p></li>
				<li><p>Салаты</p></li>
				<li><p>Холодные закуски</p></li>
				<li><p>Горячие закуски</p></li>
				<li><p>Национальные блюда</p></li>
				<li><p>Шашлык</p></li>
				<li><p>Суши</p></li>
				<li><p>Соус</p></li>
				<li><p>Пицца</p></li>
				<li><p>Десерты</p></li>
				<li><p>Первые блюда</p></li>
				<li><p>Гарниры</p></li>
				<li><p>Вторые блюда(из баранины)</p></li>
				<li><p>Вторые блюда(из курицы)</p></li>
				<li><p>Вторые блюда(из рыбы)</p></li>
				<li><p>Вторые блюда(из телятины)</p></li>
			</ul>
		</div>
		<div class="context">
			<?php
				$query = "SELECT * FROM menu ORDER BY category LIMIT 18"; // query to get all items from DB menu ordered by attribute category
				$result = $mysqli->query($query); // variable that stores result of the query
				while($row = mysqli_fetch_assoc($result)){ // cycle created to display result on the screen
					echo '<div class="card_menu">
		<div class="image" style="background-image: url(images/menu/'.$row['image'].'); background-size: cover;
		background-repeat: no-repeat;
		background-position: center;"></div>
		<div class="text">
			<div class="text_wrap">
				<h4>'.$row['name'].'</h4>
				<p>'.$row['text'].'</p>
				<p class="price">'.$row['price'].'&#8376;</p>
				<button class="add_to_cart">Добавить В Корзину<i class="fas fa-shopping-cart"></i></button>
			</div>
		</div>
	</div>'; // this is a pattern at which result from query should be displayed
				}
			 ?>
		</div>
	</ul>
</body>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src='http://thecodeplayer.com/uploads/js/jquery.easing.min.js'></script>
	<script type="text/javascript" src="js/script.js"></script>
</html>