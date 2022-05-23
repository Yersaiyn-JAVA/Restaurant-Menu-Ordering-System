<?php
	require_once "config.php";
	$firstname = strip_tags(trim($_POST['Firstname'])); // firstname of user that come from super global variable POST
	$lastname = strip_tags(trim($_POST['Lastname'])); // lastname of user that come from super global variable POST
	$email = strip_tags(trim($_POST['Email'])); // email of user that come from super global variable POST
	$telephone = strip_tags(trim($_POST['Telephone'])); // telephone of user that come from super global variable POST
	$password = md5(strip_tags(trim($_POST['Password']))); // password of user that come from super global variable POST
	$state = false; // variable user to indetifes if such user already registered
	$query = "SELECT * FROM users WHERE email = '$email'"; // query to check that such user do not exists
	$result = $mysqli->query($query); // stores the result of query returned from DB
	while ($row = mysqli_fetch_assoc($result)){ // cycle to see result in details
		if($row != ''){
			$state = true; // turnes value of variable to possitive
			echo "False";
		}
	}
	if ($state == false){
		$query_c = "INSERT INTO users VALUES (NULL,'$firstname','$lastname','$email','$telephone','$password')"; // query to insert user data into Databse
		$result_c = $mysqli->query($query_c); //  stores the result of query returned from DB
		if($result_c == true){
			echo "True";
		}
	}
?>