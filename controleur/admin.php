<?php
if(isset($_POST['mail']) or isset($_POST['passe'])){
	session_destroy();
}
if(isset($_SESSION['mail'])){
	session_destroy();
}
session_start();
session_destroy();

include_once('../modele/langue.php');
include'../vue/admin.php';


?>