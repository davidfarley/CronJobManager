<?php

$time = time();
//$cron = "03 9 8 4 *";

//echo is_time_cron($time, $cron);

include "cronJobList.php";
//echo $cronList;

if(is_array($cronList)){
    foreach($cronList as $singleCronJob){
        $parts = explode(" | ", $singleCronJob);
        $cron = $parts[0];
        $timeCheck = is_time_cron($time, $cron);
        if($timeCheck == true){
            virtual($parts[1]);
        }
    }
}

function is_time_cron($time, $cron)
{
    $cron_parts = explode(' ', $cron);
    if (count($cron_parts) != 5) {
        return false;
    }

    list($min, $hour, $day, $mon, $week) = explode(' ', $cron);

    $to_check = array('min' => 'i', 'hour' => 'G', 'day' => 'j', 'mon' => 'n', 'week' => 'w');

    $ranges = array(
        'min' => '0-59',
        'hour' => '0-23',
        'day' => '1-31',
        'mon' => '1-12',
        'week' => '0-6',
    );

    foreach ($to_check as $part => $c) {
        $val = $$part;
        $values = array();

        /*
        For patters like 0-23/2
        */
        if (strpos($val, '/') !== false) {
//Get the range and step
            list($range, $steps) = explode('/', $val);

//Now get the start and stop
            if ($range == '*') {
                $range = $ranges[$part];
            }
            list($start, $stop) = explode('-', $range);

            for ($i = $start; $i <= $stop; $i = $i + $steps) {
                $values[] = $i;
            }
        } /*
For patters like :
2
2,5,8
2-23
*/
        else {
            $k = explode(',', $val);

            foreach ($k as $v) {
                if (strpos($v, '-') !== false) {
                    list($start, $stop) = explode('-', $v);

                    for ($i = $start; $i <= $stop; $i++) {
                        $values[] = $i;
                    }
                } else {
                    $values[] = $v;
                }
            }
        }

        if (!in_array(date($c, $time), $values) and (strval($val) != '*')) {
            return false;
        }
    }

    return true;
}

//var_dump(time() , '0 5 * * *');  //true or false