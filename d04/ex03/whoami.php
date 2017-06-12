<?php
	session_start();
	if ($_SESSION['logged_on_ser'] !== NULL && $_SESSION['logged_on_user'] !== "")
	{
		echo $_SESSION['logged_on_user' . "\n";
	}
?>
