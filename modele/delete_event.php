<?php
function delete_event($Id){
	$Id=(int)$Id;
	include'connexion_sql.php';
	$req = $bdd->prepare('DELETE FROM event WHERE id =:Id');
		$req->execute(array(
			'Id' => $Id
	));
	}

function clean_membre_event($id){
	$id=htmlspecialchars($id);
	include'connexion_sql.php';
	$req = $bdd->prepare('DELETE FROM event_contient_membre WHERE id= :id');
	$req->execute(array(
		'id' => $id,
	));
}
function delete_event_groupe($Id){
	$Id=(int)$Id;
	include'connexion_sql.php';
	$req = $bdd->prepare('DELETE FROM event WHERE groupe =:groupe');
		$req->execute(array(
			'groupe' => $Id
	));
	}
?>
