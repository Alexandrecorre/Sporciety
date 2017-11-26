<?php 
function quitter_groupe($mail,$groupe){
	$mail=htmlspecialchars($mail);
	$groupe=htmlspecialchars($groupe);
	include'connexion_sql.php';
	$req = $bdd->prepare('DELETE FROM groupe_contient_membre WHERE membre=:mail AND groupe=:groupe');
	$req->execute(array(
		'groupe' => $groupe,
		'mail' => $mail,
	));

}