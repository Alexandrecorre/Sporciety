<?php
function get_leader_groupe($mail,$groupe){
	$mail=htmlspecialchars($mail);
	$groupe=htmlspecialchars($groupe);
	include'connexion_sql.php';
	if($groupe=='' and $mail=='')
	{
		$reponse = $bdd->query('SELECT * FROM groupe_leader');
		$mails_groupes = $reponse->fetchAll();
		return $mails_groupes;
	}
	elseif($groupe=='')
	{
		$reponse = $bdd->prepare('SELECT * FROM groupe_leader WHERE membre= :mail');
		$reponse -> execute(array(
			':mail' => $mail
			));
		$mails_groupes = $reponse->fetchAll();
		return $mails_groupes;
	}
	elseif ($mail=='') 
	{
		$reponse = $bdd->prepare('SELECT * FROM groupe_leader WHERE groupe= :groupe');
		$reponse -> execute(array(
		':groupe' => $groupe
		));
		$mails_groupes = $reponse->fetchAll();
		return $mails_groupes;
	}
	elseif ($groupe!='' and $mail!='') {
		$reponse = $bdd->prepare('SELECT * FROM groupe_leader WHERE membre= :mail and groupe= :groupe');
		$reponse -> execute(array(
			':mail' => $mail,
			':groupe' => $groupe
			));
		$mails_groupes = $reponse->fetchAll();
		return $mails_groupes;
	}
	else
	{
		return;
	}

}?>