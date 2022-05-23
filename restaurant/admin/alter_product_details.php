<?php
	require_once "config.php";
	$id = strip_tags(trim($_POST['id'])); // Id of the product that needs to be updated
	$image = strip_tags(trim($_POST['image'])); // Image of the product that is going to be changed
	$name = strip_tags(trim($_POST['name'])); // Image of the product that is going to be changed
	$text = strip_tags(trim($_POST['text'])); // Name of the product that is going to be changed
	$price = strip_tags(trim($_POST['price'])); // Price of the product that is going to be changed
	$query = "UPDATE menu SET `name`= '$name',`text`='$text',`price`='$price',`image`='$image' WHERE id = '$id'"; // query that Updates all attribues of one record identified by an ID
	$result = $mysqli->query($query);// variable that stores result of query
	if($result == true){
		echo "True";
	}
?>