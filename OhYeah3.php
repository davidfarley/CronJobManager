<!--<img src="dontKnow.jpg" />-->
<?php
$writeDown = fopen('increaseTest.php', 'a');
$writeDown = 'increaseTest.php';
$current = file_get_contents($writeDown);
$current .= "3\n";
file_put_contents($writeDown, $current);