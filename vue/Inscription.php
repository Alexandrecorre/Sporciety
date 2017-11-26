<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
		<link href="../vue/Inscription.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>

	    <div class="Inscription">
	    	<h1 style="text-align: center;"><?php echo Inscris ?></h1>
	    	<form method="post" action="../controleur/Accueil.php?inscription=true">
	    		<input id="plh" type="radio" name="Genre" value="Homme" /> <p><?php echo Hom ?></p>
	    		<input id="plh" type="radio" name="Genre" value="Femme" /> <p><?php echo Fem ?></p>
	    		<input id="plh" type="text" name="Prenom" placeholder="<?php echo Prénom ?>" />
	    		<input id="plh" type="text" name="Nom" placeholder="<?php echo Nom ?>" />
	    		<input id="plh" type="text" name="Date_de_Naisssance" placeholder="<?php echo Ddn ?>" />
	    		<input id="plh" type="text" name="Numéro_de_Téléphone" placeholder="<?php echo Tel ?>" />
	    		<input id="plh" type="text" name="Adresse" placeholder="<?php echo Adres ?>" />
	    		<input id="plh" type="text" name="Code_Postal" placeholder="<?php echo CP ?>" />
	    		<input id="plh" type="text" name="Ville" placeholder="<?php echo Ville ?>" />
			    <input id="plh" type="email" name="Adresse_Mail" placeholder="<?php echo Mail ?>" />
			    <input id="plh" type="password" name="Mot_de_Passe" placeholder="<?php echo Pass ?>" />
			    <input type="submit" value="INSCRIPTION" />
			    <?php
			    if(isset($erreur)and $erreur!=''){
			    	?>
			    	<h4><?php echo $erreur ?></h4>
			    	<?php
			    }
			    ?>
			</form>
	    </div>
	</body>
</html>