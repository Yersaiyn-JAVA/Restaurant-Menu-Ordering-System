<?php
		session_start(); // session is used to store uniqe id of article that is need be displayed
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
	<div class="news_page"> <!-- section where text and image of the article are respresented -->
		<div class="news_page_center"> <!-- centralization of the blocks of article -->
			<?php
				$id = $_SESSION['news_id'];// variable that gets id of article
				$query = "SELECT * FROM news WHERE id = '$id'"; //query that gets information about article based on the id
				$result = $mysqli->query($query); //stores the result of the query returned by DB
				while($row = mysqli_fetch_assoc($result)){ // cycle created to display result on the screen
					echo '<div class="news_img" style="background-image: url('.$row['image'].')"></div>
						  <div class="news_content">
						      <h1><strong>'.$row['title'].'</strong></h1>'; // title of the article and image
						      foreach (preg_split('/\n|\r\n?/', $row['text']) as $key) { //cycle that creats a division between paragraphs
						      	echo '<p>'.$key.'</p>';
						      }
					echo '</div>';// pattern of how the information should be represented
				}
			 ?>
		</div>
	</div>
</body>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</html>