<?php
function new_event($nom,$description,$date,$adresse,$groupe,$createur){
	$nom=htmlspecialchars($nom);
	$description=htmlspecialchars($description);
	$groupe=htmlspecialchars($groupe);
	$adresse=htmlspecialchars($adresse);
	$createur=htmlspecialchars($createur);
	include'../modele/connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO event(nom,description,date,adresse,groupe,createur)
		VALUES(:nom,:description,:date,:adresse,:groupe,:createur)');
	$req->execute(array(
	'nom' => $nom,
	'description' => $description,
	'date' => $date,
	'adresse' => $adresse,
	'groupe' => $groupe,
	'createur' => $createur,
	));
}
 ?>
