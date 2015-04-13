<?php

function binou(){
    $jambon = 10;
    return $jambon;
}

$cronjobs = array();

$cronjobs['binou'] = '0 5 * * *';

foreach($cronjobs as $method => $cron)
{
    $time = time();
//    if( is_time_cron($time , $cron) )
//    {
        $result = $method();
        echo $result;
//    }
}