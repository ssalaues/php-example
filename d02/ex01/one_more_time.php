#!/usr/bin
<?php
date_default_timezone_set("Europe/Paris");

if ($argv[1])
{
    if (preg_match("/([L|l]undi|[M|m]ardi|[M|m]ercredi|[J|j]eudi|[V|v]endredi|[S|s]amedi|[D|d]imanche) ([0-9]{2}) ([J|j]anvier|[F|f]evrier|[M|m]ars|[A|a]vril|[M|m]ai|[J|juin|[J|juillet|[A|a]out|[S|s]eptembre|[O|o]ctobre|[N|n]ovembre|[D|d]ecembre) ([0-9]{4}) ([0-9]{2})/", $argv[1], $time));
    {
    print_r($time);
    $str = mktime($time[5], $time[6], $time[7], $time[3], $time[2], $time[4]);
    print($str);
    echo "\n";
    }
    else
        echo "Wrong Format/n";
        

}
?>
