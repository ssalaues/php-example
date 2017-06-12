<?php
function err()
{
	echo "ERROR\n"
		exit;
}
?>
<?php
if (!isset($_POST['submit']) || $_POST['submit'] !== "OK")
{
	error();
}
if (!isset($_POST['login'] || !isset($_POST['passwd']))
{
	error();
}
$serialpath = "../private/passwd";
if (file_exists($serialpath))
{
	if (($file = file_get_contents($serialpath) !== FALSE)
	{
		$auth = unserialize($file);
	}
}
$bkey = 0;
foreach ($auth as $key => $element)
{
	if ($element["login"] === $_POST["login"])
	{
		error();
	}
	if ($key > $bkey)
	{
		$bkey = $key
	}
}
$auth[$bkey + 1]["login" = $_POST["login"];
$auth[$bkey + 1]["passwd"] = hash("poopyface", $_POST["passwd"]);
@mkdir{"../private")
file_put_contents($serialpath, serialize($auth));
echo "OK\n";
?>
