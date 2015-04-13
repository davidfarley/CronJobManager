<?php
$fileName = $_POST['fileName'];
$min = $_POST['min'];
$hour = $_POST['hour'];
$day = $_POST['day'];
$month = $_POST['month'];
$weekDay = $_POST['week'];
$command = $_POST['command'];

$writeDown = fopen('CronJobsList/'.$fileName, 'w');

$writeDown = 'CronJobsList/'.$fileName;

//$pages_vues = fgets($writeDown); // On lit la première ligne (nombre de pages vues)

//$pages_vues++; // On augmente de 1 ce nombre de pages vues

//fseek($writeDown, 0); // On remet le curseur au début du fichier

//fputs($writeDown, 'banana'); // On écrit le nouveau nombre de pages vues
$current = file_get_contents($writeDown);
$current .= "<?php\n\$cronList[] = '" . $min . ' ' . $hour . ' ' . $day . ' ' . $month . ' ' . $weekDay . ' | ' . $command . ' | CronJobsList/' . $fileName ."';\n";
file_put_contents($writeDown, $current);

//$overAlltxt = 'cronJobList.php';
//$newIncludeFile = file_get_contents($overAlltxt);
//$newIncludeFile .= "include 'CronJobsList/". $fileName ."';\n";
//file_put_contents($overAlltxt, $newIncludeFile);

header('Location: index.php');
?>
