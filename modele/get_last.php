<?php
function get_last()
{
	include'connexion_sql.php';

	$reponse = $bdd->query('SELECT * FROM groupe ORDER BY date_creation DESC LIMIT 0, 5');
	$groupes = $reponse->fetchAll();
	return $groupes;
}
?>