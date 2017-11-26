<?php

function get_membres_groupes($mail,$groupe){
	include'connexion_sql.php';
	$mail=htmlspecialchars($mail);
	$groupe=htmlspecialchars($groupe);
	
	if($groupe=='' and $mail=='')
	{
		$reponse = $bdd->query('SELECT * FROM groupe_contient_membre');
		$mails_groupes = $reponse->fetchAll();
		return $mails_groupes;
	}
	elseif($groupe=='')
	{
		$reponse = $bdd->prepare('SELECT * FROM groupe_contient_membre WHERE membre= :mail');
		$reponse -> execute(array(
			':mail' => $mail
			));
		$mails_groupes = $reponse->fetchAll();
		return $mails_groupes;
	}
	elseif ($mail=='') 
	{
		$reponse = $bdd->prepare('SELECT * FROM groupe_contient_membre WHERE groupe= :groupe');
		$reponse -> execute(array(
		':groupe' => $groupe
		));
		$mails_groupes = $reponse->fetchAll();
		return $mails_groupes;
	}
	elseif ($groupe!='' and $mail!='') {
		$reponse = $bdd->prepare('SELECT * FROM groupe_contient_membre WHERE membre= :mail and groupe= :groupe');
		$reponse -> execute(array(
			':mail' => $mail,
			':groupe' => $groupe
			));
		$mails_groupes = $reponse->fetch();
		return $mails_groupes;
	}
	else
	{
		return;
	}

}