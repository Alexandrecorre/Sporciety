<?php
function modif_event($ID,$Nom,$Description,$Date,$Adresse){

	$ID=(int) $ID;
	$Nom=htmlspecialchars($Nom);
	$Description=htmlspecialchars($Description);
	$Date=htmlspecialchars($Date);
	$Adresse=htmlspecialchars($Adresse);
	include'connexion_sql.php';
	if(isset($Nom)and $Nom!=''){
		$req = $bdd->prepare('UPDATE event SET nom = :nom WHERE id =:ID');
			$req->execute(array(
				'ID' => $ID,
				'nom' => $Nom));

	}
	if(isset($Description)and $Description!=''){
		$req = $bdd->prepare('UPDATE event SET description = :description WHERE id =:ID');
			$req->execute(array(
				'ID' => $ID,
				'description' => $Description));



	}
	if(isset($Date)and $Date!=''){
		$req = $bdd->prepare('UPDATE event SET date = :date WHERE id =:ID');
			$req->execute(array(
				'ID' => $ID,
				'date' => $Date));
	}
	if(isset($Adresse)and $Adresse!=''){
		$req = $bdd->prepare('UPDATE event SET adresse = :adresse WHERE id =:ID');
			$req->execute(array(
				'ID' => $ID,
				'adresse' => $Adresse));
	}
}
?>
