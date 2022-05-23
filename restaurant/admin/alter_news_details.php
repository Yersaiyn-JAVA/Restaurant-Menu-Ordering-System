<?php
	require_once "config.php";
	$id = strip_tags(trim($_POST['id'])); // Id of the article that needs to be updated
	$image = strip_tags(trim($_POST['image'])); // Image of the product that is going to be changed
	$title = strip_tags(trim($_POST['title'])); // Heading of the product that is going to be changed
	$text = strip_tags(trim($_POST['text'])); // Full text of the product that is going to be changed
	$text_preview = strip_tags(trim($_POST['text_preview'])); // Text used in of the product that is going to be changed
	$query = "UPDATE news SET `image`= '$image',`title`= '$title',`text`= '$text',`text_mini`= '$text_preview' WHERE id = '$id'"; // query that Updates all attribues of one record identified by an ID
	$result = $mysqli->query($query);); //variable that stores result of query
	if($result == true){
		echo "True";
	}
?>