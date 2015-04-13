<!DOCTYPE html>
<html>

<head>

    <?php include"Includes/headContent.php" ?>
    <title>List - CronJobs</title>

</head>

<body>
    <div class="container">
        <h1>List des Cron Jobs</h1>
        <a class="btn bg-primary m-b-10" href="cronJobAdd.php">Ajouter une Cron Job</a>
        <div class="cronJobList">
            <table class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>Temps d'exécution</th>
                        <th>Lien de l'action effectué</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        include "cronJobList.php";

                        if(is_array($cronList)){
                            foreach($cronList as $singleCronJob){
                                $parts = explode(" | ", $singleCronJob);
                                echo '<tr>';
                                echo '<td>';
                                echo $parts[0];
                                echo '</td>';
                                echo '<td>';
                                echo $parts[1];
                                echo '</td>';
                                echo "<td><span class='m-l-10'><a class='btn btn-primary' href='cronJobEdition.php?path=". $parts[2] ."'>Éditer</a></span>";
                                echo "<span class='m-l-10'><a class='btn btn-danger' href='cronJobDelete.php?path=". $parts[2] ."' onclick=\"return confirm('Veillez confirmer la suppression de la Cron Job?')\">Supprimer</a></span></td>";
                                echo '</tr>';
                            }
                        }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript">
        var elems = document.getElementsByClassName('confirmation');
        var confirmIt = function (e) {
            if (!confirm('Are you sure?')) e.preventDefault();
        };
        for (var i = 0, l = elems.length; i < l; i++) {
            elems[i].addEventListener('click', confirmIt, false);
        }
    </script>
</body>
</html>