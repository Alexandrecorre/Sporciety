<?php
include 'password_maker.php';

function inscription_membre($Civilite,$Nom,$Prenom,$DateNaissance,$CodePostal,$Adresse,$Ville,$AdresseMail,$NumeroDePortable,$Mdp){
	$Nom=htmlspecialchars($Nom);
	$Prenom=htmlspecialchars($Prenom);
	$DateNaissance=htmlspecialchars($DateNaissance);
	$CodePostal=(int)$CodePostal;
	$Adresse=htmlspecialchars($Adresse);
	$Ville=htmlspecialchars($Ville);
	$AdresseMail=htmlspecialchars($AdresseMail);
	$NumeroDePortable=htmlspecialchars($NumeroDePortable);
	$Mdp=htmlspecialchars($Mdp);
	
	include'connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO membre(civilite, nom, prenom, date_de_naissance,codepostal,adresse,ville,adresse_mail,numero_de_portable,mdp) 
		VALUES(:civilite, :nom, :prenom, :date_de_naissance,:codepostal, :adresse,:ville,:adresse_mail,:numero_de_portable,:mdp)');
$req->execute(array(
	'civilite' => $Civilite,
	'nom' => $Nom,
	'prenom' => $Prenom,
	'date_de_naissance' => $DateNaissance,
	'codepostal'=>$CodePostal,
	'adresse' => $Adresse,
	'ville'=> $Ville,
	'adresse_mail' => $AdresseMail,
	'numero_de_portable' => $NumeroDePortable,
	'mdp'=> password_maker($Mdp)
	));
}


?>