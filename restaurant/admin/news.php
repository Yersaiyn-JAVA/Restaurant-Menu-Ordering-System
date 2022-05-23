<?php
	require_once "config.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> <!-- UNICODE that contains most of the worlds language to respresnt -->
		<link rel="stylesheet" type="text/css" href="css/style_admin.css">
		<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0//css/font-awesome.min.css">
		<title>Main Panel</title>
	</head>
	<body>
		<div class="left_panel"> <!-- Left panel responses for navigaton of admin panel -->
			<ul>
				<li><a href="mainpanel.php">Менью</a></li>
				<li><a href="news.php">Статьи</a></li>
				<li><a href="orders.php">Заказы</a></li>
				<li id="admin_exit">Выход</li>
			</ul>
			<div class="hide_left_panel"><div></div></div>
			<div class="show_left_panel"><div></div></div>
		</div>
		<div class="right_panel">
			<div class="right_panel_heading one"><h1><strong>Статьи</strong></h1></div> <!-- Each page has uniqe heading dependinf on content -->
			<div class="block_wrap">
				<table style='color: #fff; margin: auto; padding-top: 50px;'> <!-- Table for displaying necessary content that depends from the selected page -->
					<tr>
						<td><p>ID</p></td>
						<td><p>Картинка</p></td>
						<td><p>Заголовок</p></td>
						<td><p>Текст превью</p></td>
						<td><p>Полный текст</p></td>
					</tr>
					<?php
						$query = "SELECT * FROM news "; // query that selects all articles from table news
						$result = $mysqli->query($query); // result of the query stored there
						while ($row = mysqli_fetch_assoc($result)) { // cycle to represent the content of the result gained from query
							echo "<tr>
									<td><p>".$row['id']."</p></td>
									<td><img style='width: 25vw; height: auto; margin-left: 50%; transform: translate(-50%, 0); padding: 15px;'; src='".$row['image']."'></td>
									<td><p>".$row['title']."</p></td>
									<td><p>".$row['text_mini']."</p></td>
									<td><p>".$row['text']."</p></td>
								</tr>";	// template of how content has to be displayed
						}
					?>
				</table>
			</div>
			<div class="right_panel_heading two"><h1><strong>Инструменты</strong></h1></div> <!-- Tools section where admin can manage data -->
			<div class="tools">
				<div class="what_to_do"> <!-- Available options of management -->
					<div class="add_news">Добавить статью<i class="fa fa-cog"></i></div>
					<div class="delete_news">Удалить статью<i class="fa fa-trash"></i></div>
					<div class="alter_news">Изменить статью<i class="fa fa-cog"></i></div>
				</div>
				<div class="action">

				</div>
			</div>
		</div>
	</body>
</html>