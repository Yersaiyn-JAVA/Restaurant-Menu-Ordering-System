<?php
	require_once "config.php";
	$id = strip_tags(trim($_POST['id']));// Id of the product
	$query = "SELECT * FROM menu WHERE id = '$id'"; // query that select all information about the product using it's ID
	$result = $mysqli->query($query); // variable that stores the returned result
		while ($row = mysqli_fetch_assoc($result)){ // cycle that display the result
			$state = '';
						$explode1 = explode('http', $row['image']);
						if(count($explode1) == 1){
							$state = '../images/menu/'.$row['image'];
						} else if(count($explode1 > 1)){
							$state = $row['image'];
						}
			echo '<h1><strong>Изменить</strong></h1>
					<div class="add_product_details" id="'.$row['id'].'">
						<div class="product_img" style="height: 35%;"><input type="text" style="height: 40px;" placeholder="URL картинки" id="url" value="'.$state.'"/><p class="preview" style="background-image: url('.$state.')"></p></div>
						<div class="product_name"><input type="text" placeholder="Наименование" value="'.$row['name'].'"></div>
						<div class="product_category"><input type="text" placeholder="Категория" value="'.$row['category'].'"></div>
						<div class="product_price"><input type="number" placeholder="Цена" value="'.$row['price'].'"></div>
						<div class="product_detail"><textarea placeholder="Описание">'.$row['text'].'</textarea></div>
						<button class="product_save_btn">Сохранить</button>
					</div>'; // template that identifes how the result should be displayed
		}
?>