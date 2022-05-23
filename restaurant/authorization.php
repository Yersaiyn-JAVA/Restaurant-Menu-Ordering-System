<?php
	require_once "config.php";
	$email = strip_tags(trim($_POST['email']));
	$password = md5(strip_tags(trim($_POST['password'])));
	$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
	$result = $mysqli->query($query);
	while ($row = mysqli_fetch_assoc($result)){
		if($row['email'] == $email && $row['password'] == $password){
			setcookie('user_id', $row['id'], time()+ (3600 * 1000), "/");
			setcookie('firstname', $row['firstname'], time() + (3600 * 1000), "/");
			setcookie('lastname', $row['lastname'], time() + (3600 * 1000), "/");
			setcookie('email', $row['email'], time() + (3600 * 1000), "/");
			setcookie('password', $row['password'], time() + (3600 * 1000), "/");
			setcookie('telephone', $row['telephone'], time() + (3600 * 1000), "/");
			echo "True";
		}
	}
?>