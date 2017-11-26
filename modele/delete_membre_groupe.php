<?php
function delete_membre_groupe($Mail,$Groupe){
	$Mail=htmlspecialchars($Mail);
	$Groupe=htmlspecialchars($Groupe);
	include'connexion_sql.php';
	if($Mail=='' and $Groupe!='')
	{
	$req = $bdd->prepare('DELETE FROM groupe_contient_membre WHERE  groupe =:groupe');
		$req->execute(array(
			'groupe'=> $Groupe
	));
	}
	elseif($Mail!='' and $Groupe==''){
		$req = $bdd->prepare('DELETE FROM groupe_contient_membre WHERE membre =:membre ');
		$req->execute(array(
			'membre' => $Mail
	));
	}
	else{
	$req = $bdd->prepare('DELETE FROM groupe_contient_membre WHERE membre =:membre AND groupe =:groupe');
		$req->execute(array(
			'membre' => $Mail,
			'groupe'=> $Groupe
	));
	}
}
?>