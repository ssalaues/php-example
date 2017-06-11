<?php
	session_start();
	if ($_GET['submit'] === "SENT")
	{
		$_SESSION["login"] = $_GET["login"];
		$_SESSION{"passwd"] = $_GET["passwd"];
	}
?>
<html>
	<body>
		<form method="get">
		Username: <input type="text" name="name" value="<?php echo $_SESSION['login'];?>"><br><br>
		Password: <input type="password" name="passwd" value="<?php echo $_SESSION['passwd'];?>">
		<input type="submit" name="submit" value="SENT">
	</form>
<?php
echo "<h2>Your Input:</h2>";
echo $_SESSION['login'];
echo $_SESSION['passwd'];
?>
</body>
</html>
