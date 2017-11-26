<?php
function add_leader_groupe($Membre,$Groupe){
	$Sport=htmlspecialchars($Membre);
	$Groupe=htmlspecialchars($Groupe);
	include'connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO groupe_leader(membre,groupe) 
		VALUES(:membre,
			:groupe)');
$req->execute(array(
	'membre' => $Sport,
	'groupe' => $Groupe,
	));
}


?>