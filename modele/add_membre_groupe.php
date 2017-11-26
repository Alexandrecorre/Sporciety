<?php
function add_membre_groupe($Mail,$Groupe){
	$Mail=htmlspecialchars($Mail);
	$Groupe=htmlspecialchars($Groupe);
	
	include'connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO groupe_contient_membre(groupe,membre) 
		VALUES(:groupe,
			:membre)');
$req->execute(array(
	'membre' => $Mail,
	'groupe' => $Groupe,
	));
}


?>