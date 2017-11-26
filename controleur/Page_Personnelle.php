<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
if($_SESSION['mail']=='' or !isset($_SESSION['mail'])){
	include_once'../controleur/Accueil.php';

}
if(isset($_POST['telephone'])or isset($_POST['adresse'])or isset($_POST['codepostal'])){
	include_once'../modele/modif_membre.php';
	modif_membre($_SESSION['mail'],$_POST['telephone'],$_POST['adresse'],$_POST['codepostal'],'');
}
if(isset($_POST['mdp1'])and isset($_POST['mdp2'])and isset($_POST['mdp3'])){
	include'../modele/get_membres.php';
	$pass=get_membres($_SESSION['mail']);
	if(password_verify($_POST['mdp1'],$pass['mdp'])){
		if(strlen($_POST['mdp2'])>=6 and $_POST['mdp2']==$_POST['mdp3'])
		{
			include_once'../modele/modif_membre.php';
			modif_membre($_SESSION['mail'],"","","",$_POST['mdp2']);


			include_once'../modele/get_membres.php';
			$membre=get_membres($_SESSION['mail']);
			include'../modele/get_membres_groupes.php';
			$groupes=get_membres_groupes($_SESSION['mail'],'');
			foreach ($groupes as $cle =>$groupe) 
			{
				$groupes[$cle]['groupe'] = htmlspecialchars($groupe['groupe']);
			}
			include_once'../modele/get_event.php';
			include_once'../modele/get_post.php';
			$event=get_event('');
			$post=get_post('','');





			include_once('../vue/Page_Personnelle.php');
		}
		else{
			$erreur2="veuillez saisir le même mot de passe d'au moins 6 caratères";
			include'../controleur/ModifProfil.php';
		}
	}
	else{
		$erreur1="mauvais mot de passe";
		include'../controleur/ModifProfil.php';
	}

}
else{

include_once'../modele/get_membres.php';
$membre=get_membres($_SESSION['mail']);
include'../modele/get_membres_groupes.php';
$groupes=get_membres_groupes($_SESSION['mail'],'');
foreach ($groupes as $cle =>$groupe) {
	$groupes[$cle]['groupe'] = htmlspecialchars($groupe['groupe']);
}
include_once'../modele/get_event.php';
include_once'../modele/get_post.php';
$event=get_event('');
$post=get_post('','');

include_once('../vue/Page_Personnelle.php');	
}

include_once('../modele/langue.php');

?>