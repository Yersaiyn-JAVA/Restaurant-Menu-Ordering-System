<?php
	require_once "config.php";
	$id = strip_tags(trim($_POST['id'])); // ID of product that is need to be removed
	$query = "DELETE FROM menu WHERE id = '$id'"; // query that deletes a particular product in table
	$result = $mysqli->query($query); // result of the query
	if($result == true){
		echo "True";
	}
?>