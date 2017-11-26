<?php
function get_club($Nom,$codepostal)
{	
	$Nom=htmlspecialchars($Nom);

	include'connexion_sql.php';
	if($Nom=='' and $codepostal=='')
	{
		$reponse = $bdd->query('SELECT * FROM club ORDER BY nom');
		$club = $reponse->fetchAll();
		return $club;
	}
	elseif($Nom=='' and $codepostal!='')
	{
		
		$reponse=$bdd->prepare('SELECT * FROM club WHERE code_postal=:codepostal ORDER BY club');
		$reponse-> execute(array(
			':codepostal'=> round($codepostal/1000)
			));
		$club=$reponse->fetchAll();
		return $club;
		
	}
	elseif($Nom!='' and $codepostal=='')
	{
		$reponse = $bdd->prepare('SELECT * FROM club WHERE nom= :nom');
		$reponse -> execute(array(
				':nom' => $Nom
				));
		$Noms = $reponse->fetch();
		return $Noms;	
	}
	else
	{
		return;
	}
}

?>