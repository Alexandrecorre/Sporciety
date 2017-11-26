<?php

function get_Allevent($groupe)
{
	include'connexion_sql.php';
	if($groupe==''){
		
	$reponse = $bdd->query('SELECT * FROM event ORDER BY date');
	$event=$reponse->fetchAll();
	return $event;

	}else{
	$groupe=htmlspecialchars($groupe);

	$reponse = $bdd->prepare('SELECT * FROM event WHERE groupe= :groupe');
	$reponse -> execute(array(
			'groupe' => $groupe,
			));
	$event= $reponse->fetchAll();
	return $event;}
}
 ?>
