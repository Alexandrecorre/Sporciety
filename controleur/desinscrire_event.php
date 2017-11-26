<?php
if(!isset($_SESSION['mail']))
{
session_start();
}

include_once'../modele/desinscrire_event.php';
desinscrire_event($_GET['id'],$_SESSION['mail']);

header('Location: ../controleur/Groupe.php?groupe='.$_GET['groupe']);

?>
