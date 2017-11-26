<?php
function get_admin($mail)
{
	include'connexion_sql.php';
	if($mail=='')
	{
	$reponse = $bdd->query('SELECT * FROM admin ORDER BY adresse_mail');
	$membres = $reponse->fetchAll();
	return $membres;
	}
	else
	{
	$reponse = $bdd->prepare('SELECT * FROM admin WHERE adresse_mail= :mail');
	$reponse -> execute(array(
		':mail' => $mail
		));
	$membres = $reponse->fetch();
	return $membres;
	}
}
?>