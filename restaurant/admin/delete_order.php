<?php
	require_once "config.php";
	$id = strip_tags(trim($_POST['id']));
	$query = "DELETE FROM orders WHERE id = '$id'";
	$result = $mysqli->query($query);
	if($result == true){
		echo "True";
	}
?>