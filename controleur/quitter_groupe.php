<?php 
if(!isset($_SESSION['mail']))
{
session_start();
}

include_once'../modele/quitter_groupe.php';
quitter_groupe($_SESSION['mail'],$_GET['groupe']);

header('Location: ../controleur/Page_Personnelle_mon_groupe.php?groupe=' . $_GET['groupe']);
