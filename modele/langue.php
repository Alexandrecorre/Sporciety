<?php

if(isset($_GET['langue']) and $_GET['langue']=='fr') {
	$_SESSION['langue']='fr';
}
elseif(isset($_GET['langue']) and $_GET['langue']=='en') {
	$_SESSION['langue']='en';
}

if (isset($_SESSION['langue']) and $_SESSION['langue']=='fr') {
	include('../Langues/Sporciety_fr.php');
}
elseif (isset($_SESSION['langue']) and $_SESSION['langue']=='en') {
	include('../Langues/Sporciety_en.php');
}
else{
	include('../Langues/Sporciety_fr.php');
}

?>