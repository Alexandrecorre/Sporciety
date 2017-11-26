<?php
function add_sport_groupe($Sport,$Groupe){
	$Sport=htmlspecialchars($Sport);
	$Groupe=htmlspecialchars($Groupe);
	
	include'connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO sport_groupe(sport,groupe) 
		VALUES(:sport,
			:groupe)');
$req->execute(array(
	'sport' => $Sport,
	'groupe' => $Groupe,
	));
}


?>