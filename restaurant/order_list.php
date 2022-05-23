<?php
	setcookie('order_list', $_POST['order'], time()+ (500 * 1000), "/");
	setcookie('item_count', $_POST['count'], time()+ (500 * 1000), "/");
	setcookie('sum', $_POST['total_price'], time()+ (500 * 1000), "/");
	echo "True";
?>