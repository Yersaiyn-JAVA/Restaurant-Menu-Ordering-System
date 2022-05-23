<?php
	require_once "config.php"
	$image = strip_tags(trim($_POST['image'])); // URL image of article which is got from super global variable POST
	$title = strip_tags(trim($_POST['title'])); // Title of the article which is got from super global variable POST
	$text = strip_tags(trim($_POST['text'])); // Text which is got from super global variable POST
	$text_preview = strip_tags(trim($_POST['text_preview'])); // Text preview of the article wich is got from the super global variable POST
	$query = "INSERT INTO news VALUES (NULL,'$title','$image','$text_preview','$text')"; // query that insertion data of a new product
	$result = $mysqli->query($query); // variable that stores the result of the query
	if($result == true){
		echo "True";
	}
?>