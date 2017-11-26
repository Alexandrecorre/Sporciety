<?php
function delete_groupe($Nom){
	$Nom=htmlspecialchars($Nom);
	include'connexion_sql.php';
	$req = $bdd->prepare('DELETE FROM groupe WHERE groupe =:groupe');
		$req->execute(array(
			'groupe' => $Nom
	));
	}
?>