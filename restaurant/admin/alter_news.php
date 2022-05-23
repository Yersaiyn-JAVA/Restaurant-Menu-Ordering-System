<?php
	require_once "config.php";
	$id = strip_tags(trim($_POST['id'])); // ID of the article that gets from the super global variable POST
	$query = "SELECT * FROM news WHERE id = '$id'"; // query that gets all information of a particular article from table news
	$result = $mysqli->query($query); // stores returned result of the query to DB
	if($result == true){
		while ($row = mysqli_fetch_assoc($result)){ // cycle that display the result of the query
			$state = '';
						$explode1 = explode('http', $row['image']);
						if(count($explode1) == 1){
							$state = '../images/menu/'.$row['image'];
						} else if(count($explode1 > 1)){
							$state = $row['image'];
						}
			echo '<h1><strong>Изменить</strong></h1>
					<div class="add_product_details" id="'.$row['id'].'">
						<div class="news_img" style="height: 35%;"><input type="text" style="height: 40px;" placeholder="URL картинки" id="url" value="'.$state.'"/><p class="preview" style="background-image: url('.$state.')"></p></div>
						<div class="news_title"><input type="text" placeholder="Заголовок" value="'.$row['title'].'"></div>
						<div class="news_detail_preview"><textarea placeholder="Текс превью">'.$row['text_mini'].'</textarea></div>
						<div class="news_detail"><textarea placeholder="Полный текст">'.$row['text'].'</textarea></div>
						<button class="news_save_btn">Сохранить</button>
					</div>'; // template of how data should be displayed
		}
	} else {
		echo "False";
	}
?>