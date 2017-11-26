<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
		<link href="../vue/Add_Sport.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		
		<?php include("../Header/HOMETOP Slider.php"); ?>

	    <div class="Creation">
	    	<h1 style="text-align: center;">AJOUTER UN SPORT</h1>
	    	<form action='../controleur/CreerGroupe.php?newsport=true' method="post">
	    		<input type="text" name="nom_sport" placeholder="Nom du Sport" />
	    		<textarea type="text" name="description" placeholder="Description du sport"></textarea>

			    <?php
			    if(isset($erreur) and $erreur!=""){?>
			    	 <h4><?php echo $erreur?></h4><?php
				}?>
			   
			    <input type="submit" value="CREER" />
			</form>
			<div id="social">
				<a href="https://www.facebook.com/workoutsociety/?ref=aymt_homepage_panel"><img src="../Images/Logos/Fb.png"></a>
		    	<a href="https://twitter.com/?lang=fr"><img src="../Images/Logos/Tw.png"></a>
				<a href="https://www.instagram.com"><img src="../Images/Logos/Insta.png"></a>
		    	<a href="https://www.pinterest.com"><img src="../Images/Logos/Pint.png"></a>
			</div>
	    </div>
	</body>
</html>