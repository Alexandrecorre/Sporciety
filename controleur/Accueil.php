<?php
if(isset($_GET['inscription']) and $_GET['inscription']==true)
{
		if(isset($_POST['Genre']) and isset($_POST['Prenom']) and $_POST['Prenom']!="" and isset($_POST['Nom']) and $_POST['Nom']!="" and isset($_POST['Code_Postal']) and $_POST['Code_Postal']!="" and isset($_POST['Adresse_Mail']) and $_POST['Adresse_Mail']!="" and isset($_POST['Mot_de_Passe']) and $_POST['Mot_de_Passe']!='')
	{
		include_once'../modele/get_membres.php';
		$_POST['Adresse_Mail']=htmlspecialchars($_POST['Adresse_Mail']);
		$mails=get_membres(htmlspecialchars($_POST['Adresse_Mail']));
		if(filter_var($_POST['Adresse_Mail'],FILTER_VALIDATE_EMAIL) and $mails['adresse_mail']=='')
		{
			$_POST['Mot_de_Passe']=htmlspecialchars($_POST['Mot_de_Passe']);
			if(strlen($_POST['Mot_de_Passe'])>=6)
			{
				
				$_POST['Prenom']=htmlspecialchars($_POST['Prenom']);
				$_POST['Nom']=htmlspecialchars($_POST['Nom']);
				if(isset($_POST['Date_de_Naissance']))
				{
					$Naissance = htmlspecialchars($_POST['Date_de_Naissance']);
					$annee = substr($Naissance, 6, 4); 
					$mois = substr($Naissance, 3, 2); 
					$jour = substr($Naissance, 0, 2);  
 					$Naissance = $annee . '-' . $mois . '-' . $jour; 
				}
				else{$Naissance='';}
				if(isset($_POST['Numéro_de_Téléphone']))
				{
					$telephone=htmlspecialchars($_POST['Numéro_de_Téléphone']);
				}
				else{$telephone='';}
				if(isset($_POST['Adresse']))
				{
					$adresse=htmlspecialchars($_POST['Adresse']);
				}
				else{$adresse='';}
				$_POST['Code_Postal']=htmlspecialchars($_POST['Code_Postal']);
				include_once'../modele/inscription_membre.php';	
				inscription_membre($_POST['Genre'],$_POST['Nom'],$_POST['Prenom'],$Naissance,$_POST['Code_Postal'],$adresse,$_POST['Ville'],$_POST['Adresse_Mail'],$telephone,$_POST['Mot_de_Passe']);
				
				session_start();
				$_SESSION['mail']=$_POST['Adresse_Mail'];
				include_once'../modele/langue.php';



				include'../vue/Accueil.php';
			}
			else
			{
				$erreur='Mot de passe invalide 6 caractères minimum';
				include_once'../controleur/Inscription.php';
			}	
		}
		else
		{
			$erreur='Adresse mail invalide ou déjà utilisée';
			include_once'../controleur/Inscription.php';
		}
	}
	else
	{
		$erreur='informations incomplètes';
		include_once'../controleur/Inscription.php';
	}

}
else{




if(!isset($_SESSION['mail']))
{
session_start();
}

if(isset($_GET['deconnexion']) and $_GET['deconnexion']=='true')
{
	session_destroy();
	session_start();
}

include_once('../modele/get_sports.php');
$sports = get_sports('');


foreach($sports as $cle => $sport)
{
	$sports[$cle]['sport'] = htmlspecialchars($sport['sport']);
}

include_once('../modele/langue.php');

include_once('../vue/Accueil.php');
}