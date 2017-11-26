<?php
function get_groupe_club($groupe,$club)
{	
	$groupe=htmlspecialchars($groupe);
	$club=htmlspecialchars($club);

	include'connexion_sql.php';
	if($groupe=='' and $club=='')
	{
		$reponse = $bdd->query('SELECT * FROM club_groupe ORDER BY groupe');
		$groupes = $reponse->fetchAll();
		return $groupes;
	}
	elseif($groupe=='' and $club!='')
	{
		
		$reponse=$bdd->prepare('SELECT * FROM club_groupe WHERE club=:club ORDER BY groupe');
		$reponse-> execute(array(
			':club'=> $club
			));
		$groupes=$reponse->fetchAll();
		return $groupes;
		
	}
	elseif($groupe!=''and $club=='')
	{
		$reponse = $bdd->prepare('SELECT * FROM club_groupe WHERE groupe= :groupe');
		$reponse -> execute(array(
				':groupe' => $groupe
				));
		$groupes = $reponse->fetchAll();
		return $groupes;	
	}
	else
	{
		return;
	}
}

?>