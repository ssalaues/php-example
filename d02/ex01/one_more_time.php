#!/usr/bin/php
<?php
date_default_timezone_set("Europe/Paris");
$months = array("Janvier" => 1, "Février" => 2, "Mars" => 3, "Avril" => 4, "Mai" => 5, "Juin" => 6, "Juillet" => 7, "Août" => 8, "Septembre" => 9, "Octobre" => 10, "Novembre" => 11, "Décembre" => 12);

if ($argv[1])
{
	
    if (preg_match("/(Lundi|Mardi|Mercredi|Jeudi|Vendredi|Samedi|Dimanche) ([0-9]{2}) (Janvier|Février|Mars|Avril|Mai|Juin|Juillet|Août|Septembre|Octobre|Novembre|Décembre) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})/", $argv[1], $time));
    {
    print_r($time);
    $str = mktime($time[5], $time[6], $time[7], $months[$time[3]], $time[2], $time[4]);
    print($str);
    echo "\n";
    }
}
?>
