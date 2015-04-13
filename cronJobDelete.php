<?php
$fileName = $_GET['path'];

file_put_contents("cronJobList.php", str_replace("include '".$fileName."';\n", "", file_get_contents("cronJobList.php")));

unlink($fileName);

header('Location: index.php');