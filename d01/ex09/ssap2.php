#!/usr/bin/php
<?php
if ($argv[1])
{	
	unset($argv[0]);
	$arr = $alpha = $numeric = $special = array();
	foreach($argv as $value)
	{
		$exploded = explode(' ', $value);
		$filtered = array_filter($exploded);
		foreach($filtered as $str)
		{
			if (ctype_alpha($str[0]))
				$alpha[] = $str;
			else if (is_numeric($str[0]))
				$numeric[] = $str;
			else
				$special[] = $str;
		}
	}
	if ($alpha)
		natcasesort($alpha);
	if ($numeric)
		sort($numeric, SORT_STRING);
	if ($special)
		natcasesort($special);
	$arr = array_merge($alpha, $numeric, $special);
	for ($i = 0; $arr[$i]; $i++)
	{
		print($arr[$i]);
		echo "\n";
	}
}
?>
