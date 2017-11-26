<?php
function delete_club_groupe($Club,$Groupe){
	$Club=htmlspecialchars($Club);
	$Groupe=htmlspecialchars($Groupe);
	include'connexion_sql.php';
	if($Club=='' and $Groupe!=''){
		$req = $bdd->prepare('DELETE FROM club_groupe WHERE groupe =:groupe');
		$req->execute(array(
			'groupe'=> $Groupe
	));

	}elseif($Groupe=='' and $Club!=''){
		$req = $bdd->prepare('DELETE FROM club_groupe WHERE club =:club ');
		$req->execute(array(
			'club' => $Club
	));

	}
	else{
	$req = $bdd->prepare('DELETE FROM club_groupe WHERE club =:club AND groupe =:groupe');
		$req->execute(array(
			'club' => $Club,
			'groupe'=> $Groupe
	));
	}
}
?>