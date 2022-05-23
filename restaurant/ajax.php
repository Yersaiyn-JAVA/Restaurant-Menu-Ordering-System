<?php
	require_once "config.php";
	$str = strip_tags(trim($_POST['text']));
	$query = "SELECT name FROM menu WHERE name LIKE '%$str%'";
	$query_c = "SELECT category FROM menu WHERE category LIKE '%$str%'";
	$query_name = "SELECT name FROM menu WHERE category LIKE '%$str%'";
	$result = $mysqli->query($query);
	$result_c = $mysqli->query($query_c);
	$result_name = $mysqli->query($query_name);
	$names = array();
	$category = array();

	while ($row = mysqli_fetch_assoc($result)) {
		if($row['name'] != ''){
			$name = explode(' ', $row['name']);
			foreach ($name as $key) {
				if(strpos(strtolower($key), strtolower($str)) !== false){
					if(count($names) == 0){
						echo '<li class="item" where="name">'.'<p>'.$row['name'].'</p>'.'</li>';
						array_push($names, $row['name']);
					} else {
						$state = false;
						foreach ($names as $keys) {
							if(strtolower($keys) != strtolower($row['name']) && $state == false){
								echo '<li class="item" where="name_names">'.'<p>'.$row['name'].'</p>'.'</li>';
								array_push($names, $row['name']);
								$state = true;
							}
						}
					}
				}
			}
		}
	}

	while ($row_name = mysqli_fetch_assoc($result_name)){
		$state_name = true;
		foreach ($names as $key) {
			if($row_name['name'] == $key){
				$state_name = false;
			}
		}
		if($state_name == true){
			echo '<li class="item" where="name & class">'.'<p>'.$row_name['name'].'</p>'.'</li>';
		}
	}

	$i = 0;
	while ($row_c = mysqli_fetch_assoc($result_c)) {
			if($row_c['category'] != '' && $i == 0){
				echo '<li class="class" where="class">'.'<p>'.$row_c['category'].'</p>'.'</li>';
				$i = 1;
			}
	}
?>