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
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300:400:700" rel="stylesheet">
</head>
<body>
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
	<header> <!-- this block contains logo and naviagtion of the website -->
		<div class="header_center">
			<div class="logo"><a href="index.php"></a></div>
			<nav class="nav">
				<li><a href="index.php">Главная</a></li>
				<li><a href="news.php">Новости</a></li>
				<li><a href="about.html">О нас</a></li>
				<li><a href="contacts.html">Контакты</a></li>
			</nav>
		</div>
	</header>
	<div class="news"> <!-- serction where latest articles are displayed on the screen -->
		<div class="news_center"> <!-- centralization of the news block -->
			<div class="cards clearfix">
			  <?php
				$query = "SELECT * FROM news"; //query that allows to get informaton about all news from database
				$result = $mysqli->query($query); // stores the result of the query returned by DB
				$num_row = $result->num_rows; // as the result get from DB need to be separated by 3, this variable counts number of such blocks
						$count;
						$count_wrap;
						$k = 0;
						if($num_row % 3 != 0 && $num_row < 3){
							$count_wrap = 1;
						} else if($num_row % 3 != 0 && $num_row > 3){
							$count_wrap = (($num_row - ($num_row % 3)) / 3) + 1;
						} else if($num_row % 3 == 0){
							$count_wrap = $num_row / 3;
						}
				$last_id = 0; // variable that helps to allocate articles
				$i = 0; // variable that prevents of being more that 3 articles in 1 block
			  	for($j = 0; $j < $count_wrap; $j++){ // cycle that identifes number of blocks for articles
  						echo '<div class="card-col">';
						$result_n = $mysqli->query("SELECT * FROM news WHERE id > $last_id LIMIT 3");// as the number of the articles in DB are counted this query devides them by 3
					    while ($row = mysqli_fetch_assoc($result_n)){ // cycle created to display 3 article in 1 block on the screen
					    	echo'<div class="card" id="'.$row['id'].'">
						      <div class="top">
						        <img src="'.$row['image'].'">
						      </div>
						      <div class="bottom">
						        <h2>'.$row['title'].'</h2>
						        <p>'.$row['text_mini'].'</p>
						      </div>
						    </div>';
						    if($i == 2){
								$last_id = $row['id'];
								$i = 0;
							} else {
								$i++;
							}
					    }
					    echo '</div>';
				}
			  ?>
			</div>
		</div>
	</div>
</body>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</html>