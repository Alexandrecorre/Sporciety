<?php 
if(!isset($_SESSION['mail']))
{
session_start();
}

include_once'../modele/inscription_groupe_membre.php';
inscription_groupe_membre($_SESSION['mail'],$_GET['groupe']);

header('Location: ../controleur/Page_Personnelle_mon_groupe.php?groupe='.$_GET['groupe']);

?>