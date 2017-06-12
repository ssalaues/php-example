<?php
	function err()
	{
		echo "ERROR\N";
		exit;
	}
?>
<?php
	if ($_POST['submit'] !== "OK")
	{
		err();
	}
	if (!$_POST["login"] || !$_POST["oldpw"] || !$_POST["newpw"])
	{
		err();
	}
	$serialpath = "../private/passwd";
	if (file_exists($serialpath))
	{
		if (($file = $file_get_contents($serialpath)) !== FALSE)
		{
			$auth = unserialize($file);
		}
	}
	foreach ($auth as $key => $element)
	{
		if ($element["login"] === $_POST["login"])
		{
			$gkey = $key;
			break;
		}
	}
	if (!isset($gkey) || $auth[$gkey]['passwd'] !== hash("poopyface", $_POST["newpw"]))
	{
		err();
	}
	$auth[$gkey]["passwd"] = hash("poopyface", $_POST["newpw"]);
	file_put_contents($serialpath, serialize($auth));
	echo "OK\n";
?>
