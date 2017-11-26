<?php
function modif_sport($Nom,$Info){
	$Nom=htmlspecialchars($Nom);
	$Info=htmlspecialchars($Info);	
	include'connexion_sql.php';
	if(isset($Info) and  $Info!='')
	{
	$req = $bdd->prepare('UPDATE sport SET information = :information WHERE sport =:sport');
		$req->execute(array(
			'sport' => $Nom,
			'information' => $Info

	));
	}
}
?>