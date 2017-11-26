<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
include'../vue/Add_Sport.php';

include_once('../modele/langue.php');

?>