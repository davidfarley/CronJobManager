<!--<img src="dontKnow.jpg" />-->
<?php
$writeDown = fopen('increaseTest.php', 'a');
$writeDown = 'increaseTest.php';
$current = file_get_contents($writeDown);
$current .= "Ma blonde aussi\n";
file_put_contents($writeDown, $current);
