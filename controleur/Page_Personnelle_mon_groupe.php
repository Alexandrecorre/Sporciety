<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
include_once('../modele/langue.php');
if($_SESSION['mail']=='' or !isset($_SESSION['mail']))
{
	include_once'../controleur/Accueil.php';

}
include'../modele/get_leader_groupe.php';
$leader=get_leader_groupe('','');
include'../modele/get_event.php';
$event=get_event('');
include'../modele/get_groupe_club.php';

if(!isset($_GET['groupe']) and !isset($_GET['new']) and (!isset($_POST['Description']) and !isset($_POST['Codepostal'])and !isset($_FILES['image_groupe']['name'])and !isset($_POST['case'])) and !isset($_POST['nom_groupe'])){
	include'../controleur/Accueil.php';
}

elseif(isset($_POST['Description']) or isset($_POST['Codepostal'])or isset($_POST['case']) or isset($_POST['radio']))
{
	if(isset($_POST['Description']) or isset($_POST['Codepostal']))
	{
		include_once'../modele/modif_groupe.php';
		modif_groupe($_GET['groupe'],$_POST['Codepostal'],$_POST['Description']);
	}
	if(isset($_POST['case']))
	{
		include_once'../modele/delete_membre_groupe.php';
		foreach($_POST['case'] as $case)
		{
				delete_membre_groupe($case,$_SESSION['groupe']);
		}
	}
	if(isset($_POST['radio'])){
		include_once'../modele/delete_leader_groupe.php';
		include_once'../modele/add_leader_groupe.php';
		delete_leader_groupe($_SESSION['mail'],$_SESSION['groupe']);
		add_leader_groupe($_POST['radio'],$_SESSION['groupe']);

	}
include'../modele/get_membres_groupes.php';
include'../modele/get_membres.php';
$mails= get_membres_groupes('',$_GET['groupe']);
$membres=get_membres('');
$Groupe=$_GET['groupe'];
$club=get_groupe_club($Groupe,'');
include'../vue/Page_Personnelle_mon_groupe.php';
}


elseif(isset($_GET['new']) and $_GET['new']==true)
{
	if(!isset($_POST['nom_groupe'])or$_POST['nom_groupe']==""or !isset($_POST['code_postal'])or$_POST['code_postal']==""or!isset($_POST['description'])or$_POST['description']=="")
	{
		$erreur='Information manquante';
		include'../controleur/CreerGroupe.php';
	}
	else
	{
	include'../modele/inscription_groupe.php';
	inscription_groupe($_POST['nom_groupe'],$_POST['code_postal'],$_POST['description']);
	include'../modele/add_sport_groupe.php';
	add_sport_groupe($_POST['choix'],$_POST['nom_groupe']);
	include'../modele/add_membre_groupe.php';
	add_membre_groupe($_SESSION['mail'],$_POST['nom_groupe']);
	include'../modele/add_leader_groupe.php';
	add_leader_groupe($_SESSION['mail'],$_POST['nom_groupe']);	
	$Groupe=$_POST['nom_groupe'];
	include'../controleur/Page_Personnelle.php';
	}
}
else
{
	include'../modele/get_membres_groupes.php';
	include'../modele/get_membres.php';
	$mails= get_membres_groupes('',$_GET['groupe']);
	$membres=get_membres('');
		if ($_SESSION['mail']!='') {
			$deja_membre=get_membres_groupes($_SESSION['mail'],$_GET['groupe']);
		}
	$Groupe=$_GET['groupe'];
	$club=get_groupe_club($Groupe,'');
	include'../vue/Page_Personnelle_mon_groupe.php';
}



?>