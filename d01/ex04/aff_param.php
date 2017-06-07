#!/usr/bin/php
<?php
if ($argv[1])
{
	unset($argv[0]);
	foreach($argv as $value)
	{
		echo "$value\n";
	}
}
?>
