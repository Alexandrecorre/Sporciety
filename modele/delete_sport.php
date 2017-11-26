<?php
function delete_sport($Nom){
	$Nom=htmlspecialchars($Nom);
	include'connexion_sql.php';
	$req = $bdd->prepare('DELETE FROM sport WHERE sport =:sport');
		$req->execute(array(
			'sport' => $Nom
	));
	}
?>