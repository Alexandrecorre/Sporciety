<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
include_once'../modele/get_question.php';
$Question=get_question();
include_once('../vue/faq.php');

include_once('../modele/langue.php');

?>