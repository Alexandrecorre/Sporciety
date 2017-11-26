<?php
if(!isset($_SESSION['mail']))
{
session_start();
}

if ($_GET['etat']=='') {
    include_once'../vue/ModifEvent.php';
}
else {
    include_once'../modele/get_event.php';
    $selected_event=selection_event($_GET['groupe'],$_GET['event']);
    $resultat_description=$_POST['resultat_description'];
    if ($_POST['resultat_description']=='Description de l\'événement') {
        $resultat_description='';
    }
    $resultat_adresse=$_POST['resultat_adresse'];
    if ($_POST['resultat_adresse']=='Adresse ou a lieu l\'événement') {
        $resultat_adresse='';
    }
    include_once'../modele/modif_event.php';
    modif_event($selected_event['id'],$_POST['resultat_nom_event'],$resultat_description,$_POST['resultat_date'],$resultat_adresse);
    header('Location: ../controleur/Page_Personnelle_mon_groupe.php?groupe='.$_GET['groupe']);
}




include_once('../modele/langue.php');

?>
