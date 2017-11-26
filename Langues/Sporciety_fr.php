<?php

$url = $_SERVER['PHP_SELF'];

//////////////////////////////////////////// HOMETOP ////////////////////////////////////////////

if (!defined('SPORT')){define("SPORT", "LES SPORTS");}
if (!defined('PROFIL')){define("PROFIL", "PROFIL");}
if (!defined('AIDE')){define("AIDE", "AIDE");}

//////////////////////////////////////////// FOOTER ////////////////////////////////////////////

if (!defined('Partenaires')){define("Partenaires", "Partenaires Premium");}

//////////////////////////////////////////// ACCUEIL ////////////////////////////////////////////


if (!defined('Ins')){define("Ins", "Je m'inscris");}
if (!defined('Sport')){define("Sport", "LES SPORTS");}
if (!defined('Sports')){define("Sports", "Les Sports");}
if (!defined('CP')){define("CP", "Code Postal");}
if (!defined('Rechercher')){define("Rechercher", "Rechercher");}
if (!defined('Boxe')){define("Boxe", "BOXE");}
if (!defined('Athlé')){define("Athlé", "ATHLÉTISME");}
if (!defined('Nata')){define("Nata", "NATATION");}
if (!defined('PLAN')){define("PLAN","PLAN");}
if (!defined('DGROUPES')){define("DGROUPES", "DERNIERS GROUPES");}


//////////////////////////////////////////// FORUM ////////////////////////////////////////////

if (!defined('Groupes')){define("Groupes", "Groupes");}

//////////////////////////////////////////// POST ////////////////////////////////////////////
if($url=='/GitHub/G6B/Site/controleur/Post.php'){
if (!defined('Select')){define("Select", "Veuillez sélectionner un ".$_GET['sujet']." pour décourvir les posts qui y sont associés");}
if (!defined('Répondre')){define("Répondre", "Répondre");}
if (!defined('Réponse')){define("Réponse", "Votre Réponse :");}
if (!defined('Poster')){define("Poster", "Poster");}
}
//////////////////////////////////////////// CONTACT ////////////////////////////////////////////

if (!defined('apdn')){define("apdn", "A propos de nous :");}
if (!defined('Description')){define("Description", "Sportciety est une société francaise crée en 2016. Ce site a pour caractère de rassembler les utilisateurs afin de permettre à ses utilisateurs de partager leur passion pour un sport en formant des groupes de participants à des cours, des séances d'entrainement dans un club ou des compétitions sportives.");}
if (!defined('Adresse')){define("Adresse", "Sportciety est située en France :<br><br>10 rue de Vanves<br>92130 ISSY LES MOULINEAUX");}
if (!defined('Info')){define("Info", "Une question ? N'hésitez pas à nous envoyer un mail :");}
if (!defined('Contacter')){define("Contacter", "Contactez-nous");}

//////////////////////////////////////////// CONNEXION ////////////////////////////////////////////

if (!defined('Connexion')){define("Connexion", "CONNECTEZ-VOUS");}
if (!defined('Mail')){define("Mail", "Adresse Mail");}
if (!defined('Pass')){define("Pass", "Mot de Passe");}
if (!defined('Pins')){define("Pins", "Pas encore inscrit ? Inscris toi !");}

//////////////////////////////////////////// INSCRIPTION ////////////////////////////////////////////

if (!defined('Inscris')){define("Inscris", "INSCRIS-TOI");}
if (!defined('Hom')){define("Hom", "Homme");}
if (!defined('Fem')){define("Fem", "Femme");}
if (!defined('Prénom')){define("Prénom", "Prénom");}
if (!defined('Nom')){define("Nom", "Nom");}
if (!defined('Ddn')){define("Ddn", "Date de Naissance (JJMMAAAA)");}
if (!defined('Tel')){define("Tel", "Numéro de Téléphone");}
if (!defined('Adres')){define("Adres", "Adresse");}
if (!defined('Ville')){define("Ville", "Ville");}
if (!defined('CP')){define("CP", "Code Postal");}
if (!defined('Mail')){define("Mail", "Adresse Mail");}
if (!defined('Pass')){define("Pass", "Mot de Passe");}


?>