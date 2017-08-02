#!/usr/bin/php
<?php
function get_val($char)
{
	$val = ord($char);
	if ($val == 0)
		return $val;
	if (!ctype_alpha($char) && !is_numeric($char))
		$val += 1000;
	else if (is_numeric($char))
		$val += 100;
	else if (ctype_upper($char))
		$val += 32;
	return $val;
}

function ssap_compare($s1, $s2)
{
	if ($s1 == $s2)
		return 0;
	$s1_len = strlen($s1);
	$s2_len = strlen($s2);
	for($i = 0; $i < $s1_len && $i < $s2_len; $i++)
	{
		$s1_val = get_val($s1[$i]);
		$s2_val = get_val($s2[$i]);
		if ($s1_val != $s2_val)
			return ($s1_val < $s2_val ? -1 : 1);
	}
	if ($i == $s1_len && $i == $s1_len)
		return 0;
	if ($i == $s1_len)
		return -1;
	return 1;
}

if ($argv[1])
{
	unset($argv[0]);
	$array = array();
	foreach($argv as $value)
	{
		$exploded = explode(' ', $value);
		$filtered = array_filter($exploded);
		$array = array_merge($array, $filtered);
	}
	usort($array, 'ssap_compare');
	for($i = 0; $array[$i]; $i++)
		echo $array[$i]."\n";
}
?>
