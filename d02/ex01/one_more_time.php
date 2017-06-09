#!/usr/bin/php
<?php
date_default_timezone_set("Europe/Paris");
$months = array("janvier" => 1, "février" => 2, "mars" => 3, "avril" => 4, "mai" => 5, "juin" => 6, "juillet" => 7, "août" => 8, "septembre" => 9, "octobre" => 10, "novembre" => 11, "décembre" => 12);

if ($argv[1])
{
	
    if (preg_match("/([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) ([0-9]{2}) ([Jj]anvier|[Ff]évrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]oût|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]écembre) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})/", $argv[1], $time));
    {
    $str = mktime($time[5], $time[6], $time[7], $months[strtolower($time[3])], $time[2], $time[4]);
    print($str);
    echo "\n";
    }
}
?>
