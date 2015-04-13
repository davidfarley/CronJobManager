Pour faire fonctionner la liste de cron job en php il faut tout de mÃªme crÃ©er une seule cron job qui va lancer le script et toute la magie.

Lancer le script toute les minutes 
* * * * * wget -q http://route-vers-cronTimeCheck.php >/dev/null 2>&1

L'option -q ou -quiet de Wget désactive le résultat de sget. C'est exactement ce que nous voulons puisque nous n'avons pas l'intention de produire du contenu mais d'exécuter seulement le script PHP.

>/dev/null signigie: redirige STDOUT (standard output stream) vers /dev/null qui est essentiellement un trou noir qui avale les bits.

2>&1 signifie: redirige STDERR (standard error stream) vers le même endroit que STDOUT (qui vient d'être spécifié). À STDOUT a été assigné le numéro 1, tandis que le numéro 2 a été assigné à STDERR. Ainsi, tant STDOUT (1) que STDERR (2) sont dirigés vers /dev/null et tous les produits des cron sont supprimés. 

