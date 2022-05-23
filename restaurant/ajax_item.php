<?php
	require_once "config.php";
	$str = strip_tags(trim($_POST['it'])); // variable that contains name of the selected food by user
	$query = "SELECT * FROM menu WHERE name = '$str'"; // query that allows to get informaton about selected food from database
	$result = $mysqli->query($query); // stores the result of the query returned by DB
		while ($row = mysqli_fetch_assoc($result)){ // cycle created to display result on the screen
			echo '<div class="card_menu">
		<div class="image" style="background-image: url(images/menu/'.$row['image'].'); background-size: cover;
		background-repeat: no-repeat;
		background-position: center;"></div>
		<div class="text">
			<div class="text_wrap">
				<h4>'.$row['name'].'</h4>
				<p>'.$row['text'].'</p>
				<p class="price">'.$row['price'].'тг</p>
				<button class="add_to_cart">Добавить В Корзину<i class="fas fa-shopping-cart"></i></button>
			</div>
		</div>
	</div>'; // pattern of that how the information about food should be displayed
		}
?>