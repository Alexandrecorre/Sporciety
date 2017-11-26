<?php

function inscription_sport($Sport,$Information)
{
	$Sport=htmlspecialchars($Sport);
	$Information=htmlspecialchars($Information);
	
	include'connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO sport(sport, information) 
		VALUES(:sport, :information)');
	$req->execute(array(
	'information' => $Information,
	'sport' => $Sport
	));
}

?>