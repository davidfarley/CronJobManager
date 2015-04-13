<?php
$cron = '10 10 10 10 * | /wamp/champion.php';
$parts = explode(" | ", $cron);
echo $parts[0];
echo $parts[1];