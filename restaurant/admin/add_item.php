<?php
	require_once "config.php";
	$image = strip_tags(trim($_POST['image'])); // Image attribute of product
	$name = strip_tags(trim($_POST['name'])); // Name of product
	$category = strip_tags(trim($_POST['category'])); // Category to which product relates
	$text = strip_tags(trim($_POST['text'])); // Descriptiom of the product
	$price = strip_tags(trim($_POST['price'])); // Price of the product
	$query = "INSERT INTO menu VALUES (NULL,'$name','$category','$price','$image','$text')"; //  query that insert a new product details to table
	$result = $mysqli->query($query); // result resturned from query
	if($result == true){
		echo "True";
	}
?>