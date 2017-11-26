<?php
function delete_leader_groupe($Mail,$Groupe){
	$Mail=htmlspecialchars($Mail);
	$Groupe=htmlspecialchars($Groupe);
	include'connexion_sql.php';
	if($Mail=='' and $Groupe!='')
	{
	$req = $bdd->prepare('DELETE FROM groupe_leader WHERE  groupe =:groupe');
		$req->execute(array(
			'groupe'=> $Groupe
	));
	}
	elseif($Mail!='' and $Groupe==''){
		$req = $bdd->prepare('DELETE FROM groupe_leader WHERE membre =:membre ');
		$req->execute(array(
			'membre' => $Mail
	));
	}
	else{
	$req = $bdd->prepare('DELETE FROM groupe_leader WHERE membre =:membre AND groupe =:groupe');
		$req->execute(array(
			'membre' => $Mail,
			'groupe'=> $Groupe
	));
	}
	
	}
?>