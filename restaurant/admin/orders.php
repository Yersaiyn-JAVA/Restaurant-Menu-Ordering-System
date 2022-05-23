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
			<div class="right_panel_heading one"><h1><strong>Заказы</strong></h1></div> <!-- Each page has uniqe heading dependinf on content -->
			<div class="block_wrap">
				<table style='color: #fff; margin: auto; padding-top: 50px;'> <!-- Table for displaying necessary content and depends from the selected page -->
					<tr>
						<td><p>ID</p></td>
						<td><p>Данные заказчика</p></td>
						<td><p>Список желаний</p></td>
						<td><p>Общая сумма</p></td>
					</tr>
					<?php
						$query = "SELECT * FROM orders"; // query to get all orders made by users
						$result = $mysqli->query($query); //the result of query stored as associative array
						while ($row = mysqli_fetch_assoc($result)) { // cycle to represent the content of the result gained from query
							$id = $row['user_id'];
							echo "<tr>
									<td><p>".$row['id']."</p></td>
									<td><p>";
									$queryu = "SELECT * FROM users WHERE id = '$id'"; // query to get infromation about user who amde order
									$resultu = mysqli_query($dbc, $queryu) or die (mysql_error($dbc)); // result of user query
									while ($rowu = mysqli_fetch_assoc($resultu)) { // cycle need to open associative array and represent user info
										echo $rowu['firstname'].' '.$rowu['lastname'].'<br><br>'.'Email: '.$rowu['email'].'<br><br>'.'Telephone: '.$rowu['telephone']; // user details
									}
									echo "</p></td>
									<td><p>";
									foreach (explode(',',$row['list']) as $key) { // cycle for displaying list of wishes
										if($key != ''){
											$queryl = "SELECT * FROM menu WHERE id = '$key'"; // query to get products listed in order
											$resultl = mysqli_query($dbc, $queryl) or die (mysql_error($dbc)); // result of product query
											while ($rowl = mysqli_fetch_assoc($resultl)) { // cycle need to open associative array and represent product info
												echo $rowl['name'].',<br><br>';
											}
										}
									}
									echo "</p></td>
									<td><p>".$row['total_price']." &#x20B8;</p></td>
								</tr>";	 // total price of order
						}
					?>
				</table>
			</div>
			<div class="right_panel_heading two"><h1><strong>Инструменты</strong></h1></div> <!-- Tools section where admin can manage data -->
			<div class="tools">
				<div class="what_to_do"> <!-- Available options of management -->
					<div class="finish_order">Завершить заказ<i class="fa fa-trash"></i></div>
				</div>
				<div class="action">

				</div>
			</div>
		</div>
	</body>
</html>