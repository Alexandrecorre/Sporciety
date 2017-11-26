<?php
function get_membres_events($mail,$id){
	$mail=htmlspecialchars($mail);
	$id=htmlspecialchars($id);
	include'connexion_sql.php';
	if ($mail!='' and $id!='') {
		$reponse = $bdd->prepare('SELECT * FROM event_contient_membre WHERE mail= :mail and id= :id');
		$reponse -> execute(array(
			':mail' => $mail,
			':id' => $id,
			));
		$mail_id = $reponse->fetch();
		return $mail_id;
	}


}
 ?>
