<?php
function delete_membre($Mail){
	$Mail=htmlspecialchars($Mail);
	include'connexion_sql.php';
	$req = $bdd->prepare('DELETE FROM membre WHERE adresse_mail =:mail');
		$req->execute(array(
			'mail' => $Mail
	));
	}
?>