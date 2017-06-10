<?php
	$cookie_action = $_GET['action'];
	$cookie_name = $_GET['name'];
	$cookie_value = $_GET['value'];
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
