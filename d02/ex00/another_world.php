#!/usr/bin/php
<?php
	if ($argv[1])
	{
		$str = preg_replace("/\t/", ' ', $argv[1]);
		$str = explode(' ', $str);
		$str = array_filter($str);
		$str = array_splice($str, 0);
		for ($i = 0; $str[$i]; $i++)
		{
			print($str[$i]);
			if ($str[$i + 1])
				echo " ";
		}
		echo "\n";		
}
?>
