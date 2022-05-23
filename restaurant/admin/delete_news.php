<?php
	require_once "config.php";
	$id = strip_tags(trim($_POST['id'])); //ID of the   which is got from super global variable POST
	$dbc = mysqli_connect('localhost','root','','restaurant') or die(mysql_error()); // connection to DB
	$query = "DELETE FROM news WHERE id = '$id'"; // query that removes in table the row using the id of article
	$result = $mysqli->query($query);  // stores result of query
	if($result == true){
		echo "True";
	}
?>