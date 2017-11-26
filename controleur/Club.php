<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
if(!isset($_GET['club'])){
	include_once('../controleur/Accueil.php');
}else{
	

include_once('../vue/Club.php');
}

include_once('../modele/langue.php');

?>