<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
$Admin="o@gmail.com";
if($_SESSION['mail']!=$Admin){
	include_once('../controleur/Accueil.php');
}else{
	if(isset($_GET['groupe']) and $_GET['groupe']!=''){
		include_once'../modele/modif_groupe.php';
		include_once'../modele/get_groupes.php';
		$groupe=get_groupes($_GET['groupe'],'');

	}
	if(isset($_GET['sport']) and $_GET['sport']!=''){
		include_once'../modele/modif_sport.php';
		include_once'../modele/get_sports.php';
		$sport=get_sports($_GET['sport']);
		
	}
	if(isset($_GET['page']) and $_GET['page']!=''){
		//include_once'../modele/modif_page.php';
		
	}
	if(isset($_GET['post']) and $_GET['post']!=''){
		//include_once'../modele/modif_post.php';
		include_once'../modele/get_post.php';
		
	}
	


include_once'../vue/backclientmodif.php';
}

include_once('../modele/langue.php');

?>