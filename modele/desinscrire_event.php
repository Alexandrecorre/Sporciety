<?php 
function desinscrire_event($id,$mail){
	$id=htmlspecialchars($id);
	$mail=htmlspecialchars($mail);
	include'connexion_sql.php';
	$req = $bdd->prepare('DELETE FROM event_contient_membre WHERE id=:id AND mail=:mail');
	$req->execute(array(
		'id' => $id,
		'mail' => $mail,
	));

}
 ?>