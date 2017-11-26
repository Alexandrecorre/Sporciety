<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
		<link href="../vue/CreerGroupe.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>

	    <div class="Creation">
	    	<h1 style="text-align: center;">CRÉER UN GROUPE</h1>
	    	<form action='../controleur/Page_Personnelle_mon_groupe.php?new=true' method="post">
	    		<input id="plh" type="text" name="nom_groupe" placeholder="Nom du Groupe" />
				<select name="choix">
			    <option value=''>Sport</option>
			    <?php
				include_once('../modele/get_sports.php');
				$sports = get_sports('');
				foreach($sports as $sport)
				{
					?>
					<option value= <?php echo $sport['sport'] ?>><?php echo ucfirst(strtolower($sport['sport'])) ?></option>
					*/<?php
				}
				?>
				</select>
					<a href="../controleur/Add_Sport.php" ><p>Ajouter un sport<p></a>
		    		<textarea id="txtarea" type="text" name="description" placeholder="Description du groupe"></textarea>
		    		<input id="plh" type="text" name="code_postal" placeholder="Code Postal" />
			    <?php
			    if(isset($erreur) and $erreur!=""){?>
			    	 <h4><?php echo $erreur?></h4><?php
				}?>
			   
			    <input type="submit" value="CREER" />
			</form>

			<div id="social" style="text-align: center; ">
			<a href="https://www.facebook.com/workoutsociety/?ref=aymt_homepage_panel"><img src="../Images/Logos/Fb.png"></a>
	    	<a href="https://twitter.com/?lang=fr"><img src="../Images/Logos/Tw.png"></a>
			<a href="https://www.instagram.com"><img src="../Images/Logos/Insta.png"></a>
	    	<a href="https://www.pinterest.com"><img src="../Images/Logos/Pint.png"></a>
		</div>
	</body>
</html>