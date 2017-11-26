<?php
if(!isset($_SESSION['mail'])) {
session_start();
}

include_once('../modele/langue.php');

include_once('../vue/Contact.php');
?>