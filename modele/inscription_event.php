<?php 

function inscription_event($mail,$id){
	$mail=htmlspecialchars($mail);
	$id=htmlspecialchars($id);
	include'connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO event_contient_membre(mail,id) 
		VALUES(:mail,:id)');
	$req->execute(array(
	'mail' => $mail,
	'id' => $id
	));

}
 ?>