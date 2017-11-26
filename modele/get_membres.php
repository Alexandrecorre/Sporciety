<?php
function get_membres($mail)
{
	include'connexion_sql.php';
	if($mail=='')
	{
	$reponse = $bdd->query('SELECT * FROM membre ORDER BY nom');
	$membres = $reponse->fetchAll();
	return $membres;
	}
	else
	{
	$reponse = $bdd->prepare('SELECT * FROM membre WHERE adresse_mail= :mail');
	$reponse -> execute(array(
		':mail' => $mail
		));
	$membres = $reponse->fetch();
	return $membres;
	}
}
?>