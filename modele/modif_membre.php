<?php
function modif_membre($Mail,$Telephone,$Adresse,$Codepostal,$MDP){
	$Mail=htmlspecialchars($Mail);
	$Telephone=htmlspecialchars($Telephone);
	$Adresse=htmlspecialchars($Adresse);
	$Codepostal=(int) $Codepostal;
	$MDP=htmlspecialchars($MDP);	
	include'connexion_sql.php';
	if(isset($Telephone)and $Telephone!=''){
		$req = $bdd->prepare('UPDATE membre SET numero_de_portable = :telephone WHERE adresse_mail =:mail');
			$req->execute(array(
				'mail' => $Mail,
				'telephone' => $Telephone));

	}
	if(isset($Adresse)and $Adresse!=''){
		$req = $bdd->prepare('UPDATE membre SET adresse = :adresse WHERE adresse_mail =:mail');
			$req->execute(array(
				'mail' => $Mail,
				'adresse' => $Adresse));

	

	}
	if(isset($Codepostal)and $Codepostal!=''){
		$req = $bdd->prepare('UPDATE membre SET codepostal = :codepostal WHERE adresse_mail =:mail');
			$req->execute(array(
				'mail' => $Mail,
				'codepostal' => $Codepostal));

	

	}
	if(isset($MDP)and $MDP!=''){
		include'../modele/password_maker.php';
		$req = $bdd->prepare('UPDATE membre SET mdp = :mdp WHERE adresse_mail =:mail');
			$req->execute(array(
				'mail' => $Mail,
				'mdp' => password_maker($MDP)
				));

	

	}
}
?>