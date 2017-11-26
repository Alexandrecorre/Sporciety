<?php
function inscription_groupe($Nom,$CodePostal,$Info){
	$Nom=htmlspecialchars($Nom);
	$CodePostal=(int) $CodePostal;
	$Info=htmlspecialchars($Info);
	
	include'connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO groupe(groupe,information, codepostal) 
		VALUES(:groupe,:information,:codepostal)');
$req->execute(array(
	'groupe' => $Nom,
	'information' => $Info,
	'codepostal'=>$CodePostal,
	));
}
?>