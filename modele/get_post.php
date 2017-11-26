<?php
function get_post($Sujet,$Sous_sujet)
{
	$Sujet=htmlspecialchars($Sujet);
	$Sous_sujet=htmlspecialchars($Sous_sujet);
include'connexion_sql.php';
	if($Sujet=='' and $Sous_sujet=='')
	{
		$reponse = $bdd->query('SELECT * FROM post ORDER BY date');
		$groupes = $reponse->fetchAll();
		return $groupes;
	}
	elseif($Sujet!='' and $Sous_sujet==''){

		$reponse = $bdd->prepare('SELECT * FROM post WHERE sujet= :sujet ORDER BY date');
		$reponse-> execute(array(
			':sujet'=> $Sujet
			));
		$groupes = $reponse->fetchAll();
		return $groupes;

	}
	elseif($Sous_sujet!='' and $Sujet==''){

		$reponse = $bdd->prepare('SELECT * FROM post WHERE sous_sujet= :sous_sujet ORDER BY date');
		$reponse-> execute(array(
			':sous_sujet'=> $Sous_sujet
			));
		$groupes = $reponse->fetchAll();
		return $groupes;

	}elseif($Sujet!='' and $Sous_sujet!='')
	{
		$reponse = $bdd->prepare('SELECT * FROM post WHERE sujet= :sujet AND sous_sujet=:sous_sujet ORDER BY date');
		$reponse-> execute(array(
			':sujet'=> $Sujet,
			':sous_sujet'=>$Sous_sujet
			));
		$groupes = $reponse->fetchAll();
		return $groupes;
	}
}
?>