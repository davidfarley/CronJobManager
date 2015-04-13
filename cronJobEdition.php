<?php
    $fileName = $_GET['path'];
    include $fileName;
    $singleCronJob = $cronList[0];
    $parts = explode(" | ", $singleCronJob);
    $timeParts = explode(" ", $parts[0]);

    $fileNameParts = explode("/", $fileName);

    $tinFileName = $fileNameParts[1];
    $min = $timeParts[0];
    $hour = $timeParts[1];
    $day = $timeParts[2];
    $month = $timeParts[3];
    $week = $timeParts[4];
    $command = $parts[1];
?>

<!DOCTYPE html>
<html>

    <head>

        <?php include"Includes/headContent.php" ?>
        <title>Édition - CronJobs</title>

    </head>

    <body>

    <div class="container">
        <h1>Édition de Cron Job</h1>
        <h3><?php echo $tinFileName ?></h3>
        <form class="form-horizontal" action="writeEdition.php" method="post">
            <div class="form-group">
                <label class="sr-only" for="fileName">file name</label>
                <input type="hidden" name="fileName" class="form-control" id="fileName" placeholder="Nom du fichier" value="<?php echo $tinFileName;?>">
            </div>
            <div class="form-group">
                <label class="sr-only" for="min">Min</label>
                <input type="text" name="min" class="form-control" id="min" placeholder="Minutes" value="<?php echo $min;?>">
            </div>
            <div class="form-group">
                <label class="sr-only" for="hour">Heures</label>
                <input type="text" name="hour" class="form-control" id="hour" placeholder="Heures" value="<?php echo $hour;?>">
            </div>
            <div class="form-group">
                <label class="sr-only" for="day">Date</label>
                <input type="text" name="day" class="form-control" id="day" placeholder="Jour du mois" value="<?php echo $day;?>">
            </div>
            <div class="form-group">
                <label class="sr-only" for="month">Mois</label>
                <input type="text" name="month" class="form-control" id="month" placeholder="Mois" value="<?php echo $month;?>">
            </div>
            <div class="form-group">
                <label class="sr-only" for="week">Semaine</label>
                <input type="text" name="week" class="form-control" id="week" placeholder="Semaine" value="<?php echo $week;?>">
            </div>
            <div class="form-group">
                <label for="command" class="sr-only">Lien à exécuter</label>
                <input type="text" name="command" class="form-control" id="command" placeholder="Lien à exécuter" value="<?php echo $command;?>">
            </div>
            <div class="form-group">
                <div class="">
                    <button type="submit" class="btn btn-default">Modifier</button>
                    <a href="index.php" class="btn btn-default">Annuler</a>
                </div>
            </div>
        </form>
    </div>

    </body>
</html>