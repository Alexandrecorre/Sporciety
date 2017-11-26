<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
$check_createur=true;
include_once'../modele/get_event.php';
$selected_event=selection_event($_GET['groupe'],$_GET['event']);

if ($_SESSION['mail']==$selected_event['createur']) {
    $check_createur=true;
}
include_once('../vue/Event.php');
?>
