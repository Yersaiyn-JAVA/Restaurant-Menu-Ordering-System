<?php
	require_once "config.php";
	$str = strip_tags(trim($_GET['it']));
	$query = "SELECT * FROM menu WHERE name LIKE '%$str%'";
	$result = $mysqli->query($query);
		while ($row = mysqli_fetch_assoc($result)){
			echo '<div><p class="item_name"><span class ="name_of_item">'.$row['name'].'</span><span class="price">'.$row['price'].'тг</span></p></div>';
		}
?>