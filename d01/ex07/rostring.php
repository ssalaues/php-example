#!/usr/bin/php
<?php

if ($argv[1])
{
	$split = explode(' ', $argv[1]);
	$split = array_filter($split);
	$split = array_splice($split, 0);
	for ($i = 1; $split[$i]; $i++)
	{
		print("$split[$i] ");
	}
	print("$split[0]\n");
}

?>
