<!DOCTYPE html>
<html>

<head>

    <?php include"Includes/headContent.php" ?>
    <title>Ajout - CronJobs</title>

</head>

<body>
<div class="container">
    <h1>Création de Cron Job</h1>
    <form class="form-horizontal" action="write.php" method="post">
        <div class="form-group">
            <label class="sr-only" for="fileName">file name</label>
            <input type="text" name="fileName" class="form-control" id="fileName" placeholder="Nom du fichier">
        </div>
        <div class="form-group">
            <label class="sr-only" for="min">Min</label>
            <input type="text" name="min" class="form-control" id="min" placeholder="Minutes">
        </div>
        <div class="form-group">
            <label class="sr-only" for="hour">Heures</label>
            <input type="text" name="hour" class="form-control" id="hour" placeholder="Heures">
        </div>
        <div class="form-group">
            <label class="sr-only" for="day">Date</label>
            <input type="text" name="day" class="form-control" id="day" placeholder="Jour du mois">
        </div>
        <div class="form-group">
            <label class="sr-only" for="month">Mois</label>
            <input type="text" name="month" class="form-control" id="month" placeholder="Mois">
        </div>
        <div class="form-group">
            <label class="sr-only" for="week">Semaine</label>
            <input type="text" name="week" class="form-control" id="week" placeholder="Semaine">
        </div>
        <div class="form-group">
            <label for="command" class="sr-only">Lien à exécuter</label>
            <input type="text" name="command" class="form-control" id="command" placeholder="Lien à exécuter">
        </div>
        <div class="form-group">
            <div class="">
                <button type="submit" class="btn btn-default">Créer</button>
                <a href="index.php" class="btn btn-default">Annuler</a>
            </div>
        </div>
    </form>
</div>




<!--<form action="write.php" method="post">-->
<!---->
<!--    <label>file name</label>-->
<!--    <input type="text" name="fileName">-->
<!---->
<!--    <label>min</label>-->
<!--    <input type="text" name="min">-->
<!---->
<!--    <label>hour</label>-->
<!--    <input type="text" name="hour">-->
<!---->
<!--    <label>day</label>-->
<!--    <input type="text" name="day">-->
<!---->
<!--    <label>month</label>-->
<!--    <input type="text" name="month">-->
<!---->
<!--    <label>day of week</label>-->
<!--    <input type="text" name="week">-->
<!---->
<!--    <label>Command</label>-->
<!--    <input type="text" name="command">-->
<!---->
<!--    <input type="submit">-->
<!---->
<!--</form>-->
</body>
</html>