<?php
function get_password($AdresseMail){
	include_once'connexion_sql.php';
	$req = $bdd->prepare('SELECT mdp FROM membre WHERE adresse_mail = :adresse_mail');
	$req->execute(array(
		':numero_membre' => $AdresseMail
		));
		$donnees = $req->fetch();
	return $donnees['mdp'];

}
 

?>