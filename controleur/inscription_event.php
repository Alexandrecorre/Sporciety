<?php
if(!isset($_SESSION['mail']))
{
session_start();
}


include_once'../modele/inscription_event.php';

inscription_event($_SESSION['mail'],$_GET['id']);

header('Location: ../controleur/Groupe.php?groupe='.$_GET['groupe']);

?>