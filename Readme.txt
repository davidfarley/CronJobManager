Pour faire fonctionner la liste de cron job en php il faut tout de même créer une seule cron job qui va lancer le script et toute la magie.

Lancer le script toute les minutes 
* * * * * wget -q http://route-vers-cronTimeCheck.php >/dev/null 2>&1

L'option -q ou -quiet de Wget d�sactive le r�sultat de sget. C'est exactement ce que nous voulons puisque nous n'avons pas l'intention de produire du contenu mais d'ex�cuter seulement le script PHP.

>/dev/null signigie: redirige STDOUT (standard output stream) vers /dev/null qui est essentiellement un trou noir qui avale les bits.

2>&1 signifie: redirige STDERR (standard error stream) vers le m�me endroit que STDOUT (qui vient d'�tre sp�cifi�). � STDOUT a �t� assign� le num�ro 1, tandis que le num�ro 2 a �t� assign� � STDERR. Ainsi, tant STDOUT (1) que STDERR (2) sont dirig�s vers /dev/null et tous les produits des cron sont supprim�s. 

