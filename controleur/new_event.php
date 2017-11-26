<?php
if(!isset($_SESSION['mail']))
{
	session_start();
}

if(isset($_POST['resultat_nom_event']) and $_POST['resultat_nom_event']!=""){
 	include_once'../modele/new_event.php';
	new_event($_POST['resultat_nom_event'],$_POST['resultat_description'],$_POST['resultat_date'],$_POST['resultat_adresse'],$_GET['groupe'],$_SESSION['mail']);

	header('location: ../controleur/Groupe.php?groupe='.$_GET['groupe']);
}else{
	include_once'../vue/new_event.php';
}

include_once('../modele/langue.php');

?>
