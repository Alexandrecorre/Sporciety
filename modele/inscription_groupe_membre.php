<?php 

function inscription_groupe_membre($mail,$groupe){
	$mail=htmlspecialchars($mail);
	$groupe=htmlspecialchars($groupe);
	include'connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO groupe_contient_membre(membre,groupe) 
		VALUES(:membre,:groupe)');
	$req->execute(array(
	'membre' => $mail,
	'groupe' => $groupe,
	));

}

 ?>