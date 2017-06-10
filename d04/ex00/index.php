<html>
	<head><title>User Modification</title></head>
	<body>
<?php
	session_start();
?>
		<form method="get">
		Username: <input type="text" name="name" value="<?php echo $_SESSION['login'];?>"><br><br>
		Password: <input type="password" name="passwd" value="<?php echo $_SESSION['passwd'];?>">
		<input type="submit" name="submit" value="Submit">
	</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo $passwd;
?>
</body>
</html>
