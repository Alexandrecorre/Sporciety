<?php	
if(!isset($_SESSION['mail']))
{
session_start();
}
include'../modele/get_sports.php';
$sports=get_sports('');
include'../modele/get_sports_groupes.php';
include'../modele/get_groupes.php';

include'../vue/Fichesporttype.php';

include_once('../modele/langue.php');

?>