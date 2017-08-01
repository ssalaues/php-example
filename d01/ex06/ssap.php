#!/usr/bin/php
<?php
if ($argv[1])
{	
	unset($argv[0]);
	$arr = array();
	foreach($argv as $value)
	{
		$exploded = explode(' ', $value);
		$filtered = array_filter($exploded);
		foreach ($filtered as $newV)
			$arr[] = $newV;
	}
	sort($arr);
	for ($i = 0; $arr[$i]; $i++)
	{
		print($arr[$i]);
		echo "\n";
	}
}
?>
