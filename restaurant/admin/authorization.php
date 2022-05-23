<?php
	require_once "config.php";
	$login = strip_tags(trim($_POST['login'])); // login of user that come from super global variable POST
	$password = md5(strip_tags(trim($_POST['password']))); // password of user that come from super global variable POST
	$query = "SELECT * FROM admin WHERE login = '$login' AND password = '$password'"; // query that get data from DB that mutches to login and password
	$result = $mysqli->query($query); // stores the result of the query
	while ($row = mysqli_fetch_assoc($result)){ // cycle to get results in details
		if($row['login'] == $login && $row['password'] == $password){ // check if the data inputed matches with data in DB
			setcookie('login_admin', $row['login'], time() + (3600 * 100), "/"); // sets the cookie
			setcookie('password_admin', $row['password'], time() + (3600 * 100), "/"); // sets the cookie
			echo "True";
		}
	}
?>