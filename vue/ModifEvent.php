<!DOCTYPE html>
<html>
<head>
   	<title>Modifier votre événement</title>
    <link rel="stylesheet" type="text/css" href="../vue/new_event.css" media="screen" />
    <meta http-equiv="content-type" content="text/html" charset="UTF-8" />
</head>
<body>
	<?php include("../Header/HOMETOP Slider.php"); ?>

	<div class="Creation">
		<h1>MODIFIER EVENEMENT</h1>

		<input id="nom_event" type="text" placeholder="Nom de l'évènement"></input>
    <br>
    <input type="button" value="G" style="font-weight:bold;" onclick="commande('bold','','bouton_bold');" id="bouton_bold"/>
    <input type="button" value="I" style="font-style:italic;" onclick="commande('italic','','bouton_italic');" id="bouton_italic"/>
    <input type="button" value="S" style="text-decoration:underline;" onclick="commande('underline','','bouton_underline');" id="bouton_underline"/>
    <div id="editeur_description" contentEditable onclick="enleve('editeur_description','Description de l\'événement');">Description de l'événement</div>
    <div id="editeur_adresse" contentEditable onclick="enleve('editeur_adresse','Adresse ou a lieu l\'événement');">Adresse ou a lieu l'événement</div>
		<input id="editeur_date" type="datetime-local">
		<?php
			if(isset($erreur) and $erreur!=""){?>
			<h4><?php echo $erreur?></h4><?php
		}?>

    <input id="creer" type="button" value="Modifier" onclick="resultat();"/>
    <form name="form" action='../controleur/ModifEvent.php?groupe=<?php echo $_GET['groupe']?>&event=<?php echo $_GET['event']?>&etat=1' method="post">
        <input type="hidden" name="resultat_nom_event" id="resultat_nom_event">
        <input type="hidden" name="resultat_description" id="resultat_description">
        <input type="hidden" name="resultat_adresse" id="resultat_adresse">
        <input type="hidden" name="resultat_date" id="resultat_date">
    </form>
    <script type="text/javascript" src="../vue/new_event.js"></script>
	</div>
	<div id="social">
		<a href="https://www.facebook.com/workoutsociety/?ref=aymt_homepage_panel"><img src="../Images/Logos/Fb.png"></a>
		<a href="https://twitter.com/?lang=fr"><img src="../Images/Logos/Tw.png"></a>
		<a href="https://www.instagram.com"><img src="../Images/Logos/Insta.png"></a>
		<a href="https://www.pinterest.com"><img src="../Images/Logos/Pint.png"></a>
	</div>
</body>
</html>
