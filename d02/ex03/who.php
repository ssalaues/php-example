#!/usr/bin/php
<?php
$stuff = file_get_contents("/var/run/utmpx");
date_default_timezone_set("America/Vancouver");
$y = [];
while($stuff != "")
{

	$x = unpack("A256user/A4id/A32ttyname/ipid/itype/lloginsec/lloginus/A256host/A64pad", $stuff);
	if ($x['type'] == 7)
		$y[] = $x['user'] . " " . $x['ttyname'] . "  " . strftime("%b %e %R", $x['loginsec']) . PHP_EOL;
	$stuff = substr($stuff, 628);
}
	sort($y);
	$i = 0;
	while ($i < count($y))
	{
		print($y[$i]);
		$i++;
	}

?>
