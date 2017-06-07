#!/usr/bin/php
<?php
if ($argv[1])
{	
	unset($argv[0]);
	foreach($argv as $value)
	{
		$split[] = $value;
	}
	$str = implode(" ", $split); 
	$split = explode(' ', $str);
	$split = array_filter($split);
	$split = array_splice($split, 0);
	for ($i = 0; $split[$i]; $i++)
	{
		print($split[$i]);
		echo "\n";
	}
}
?>
