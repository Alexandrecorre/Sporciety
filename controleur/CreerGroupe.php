<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
if(isset($_GET['newsport'])and $_GET['newsport']==true)
{
	if(!isset($_POST['nom_sport'])or  $_POST['nom_sport']==''or !isset($_POST['description'])){
		
		$erreur="informations manquantes";
		include'../controleur/Add_Sport.php';
	}
	else
	{

	include'../modele/inscription_sport.php';
	$_POST['nom_sport']=strtoupper($_POST['nom_sport']);
	inscription_sport($_POST['nom_sport'],$_POST['description']);

	include'../modele/get_sports.php';

	$sports = get_sports('');
		foreach($sports as $cle => $sport)
		{
			$sports[$cle]['sport'] = htmlspecialchars($sport['sport']);
		}

	include_once'../vue/CreerGroupe.php';
	}
}
else
{
include'../modele/get_sports.php';

$sports = get_sports('');
foreach($sports as $cle => $sport)
{
	$sports[$cle]['sport'] = htmlspecialchars($sport['sport']);
}

include_once'../vue/CreerGroupe.php';
}

include_once('../modele/langue.php');

?>