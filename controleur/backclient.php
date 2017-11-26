<?php

if(!isset($_SESSION['mail'])){
session_start();
}
include_once'../modele/get_admin.php';
$mail=get_admin('');
if(!isset($_SESSION['mail'])){
	$erreur='test';
	include_once'../controleur/admin.php';
}
else{
	include_once'../modele/get_admin.php';
	$mail=get_admin($_SESSION['mail']);
	if($mail['adresse_mail']!=$_SESSION['mail'])
	{
		include_once'../controleur/admin.php';
	}
	else
	{
		if(isset($_GET['Membre']) and $_GET['Membre']=='true'){
			include_once'../modele/delete_membre.php';
			include_once'../modele/delete_leader_groupe.php';
			include_once'../modele/delete_membre_groupe.php';
			foreach($_POST['case'] as $case){
				delete_membre($case);
				delete_membre_groupe($case,'');
				delete_leader_groupe($case,'');
			}
			include_once('../modele/langue.php');
			include_once'../vue/backclient.php';
		}
		if(isset($_GET['Groupe']) and $_GET['Groupe']=='true'){
			include_once'../modele/delete_groupe.php';
			include_once'../modele/delete_leader_groupe.php';
			include_once'../modele/delete_membre_groupe.php';
			include_once'../modele/delete_club_groupe.php';
			include_once'../modele/delete_sport_groupe.php';
			include_once'../modele/delete_event.php';
			foreach($_POST['case'] as $case){
				delete_sport_groupe('',$case);
				delete_groupe($case);
				delete_membre_groupe('',$case);
				delete_leader_groupe('',$case);
				delete_club_groupe('',$case);
				delete_event_groupe($case);
			
			}
			include_once('../modele/langue.php');
			include_once'../vue/backclient.php';
		}
		if(isset($_GET['Groupe']) and $_GET['Groupe']=='Modif'){
			include_once'../modele/modif_groupe.php';
			modif_groupe($_POST['groupe'],'',$_POST['description']);
			include_once('../modele/langue.php');
			include_once'../vue/backclient.php';
		}
		if(isset($_GET['Sport']) and $_GET['Sport']=='true'){
			include_once'../modele/delete_sport.php';
			include_once'../modele/delete_sport_groupe.php';
			foreach($_POST['case'] as $case){
				delete_sport($case);
				delete_sport_groupe($case,'');
			}
			include_once('../modele/langue.php');
			include_once'../vue/backclient.php';
		}
		if(isset($_GET['Sport']) and $_GET['Sport']=='Modif'){

			include_once'../modele/modif_sport.php';
			modif_sport($_POST['sport'],$_POST['description']);
			include_once('../modele/langue.php');
			include_once'../vue/backclient.php';
		}

		/*
		if(isset($_GET['Image']) and $_GET['Image']==true){
			include_once'../modele/upload.php';

		//include_once('../Back Office/admin.php');
		}
		*/
		if(isset($_GET['Forum']) and $_GET['Forum']=='true'){
			include_once'../modele/delete_post.php';
			foreach($_POST['case'] as $case){
				delete_post($case);
			}
			include_once('../modele/langue.php');
			include_once'../vue/backclient.php';
		}
		if(isset($_GET['Aide']) and $_GET['Aide']=='true'){
			include'../modele/ajout_question.php';
			ajout_question($_POST['Question'],$_POST['Réponse']);
			include_once('../modele/langue.php');
			include_once'../vue/backclient.php';
		}


		include_once('../modele/langue.php');
		include_once'../vue/backclient.php';

	}
}

include_once('../modele/langue.php');

?>