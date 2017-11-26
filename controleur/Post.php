<?php
if(!isset($_GET['sujet']) and isset($_GET['langue'])){
	include_once'../controleur/Forum.php';
}
else
{
	if(!isset($_SESSION['mail']))
	{
	session_start();
	}

	if(isset($_POST['resultat']) and isset($_SESSION['mail'])){


	include_once'../modele/add_post.php';
	add_post($_POST['resultat'],$_SESSION['mail'],$_GET['sujet'],$_GET['sous_sujet']);
	}
	if(isset($_POST['resultat']) and !isset($_SESSION['mail'])){
		$erreur='Connectez vous pour poster sur le forum ';
		include_once'../controleur/Connexion.php';
	}
	else{

	

	include_once('../vue/Post.php');
}

}

include_once('../modele/langue.php');

?>