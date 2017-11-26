<!DOCTYPE html>
<html>
	<head>
		<title>Modification de vos informations</title>
		<link href="../vue/ModifProfil.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>

	    <div class="ModifProfil">
	    	<h1 style="text-align: center;">MODIFIE VOS INFORMATIONS</h1>
	    	<form action='../controleur/Page_Personnelle.php' method="post">
	    		<input type="text" name="telephone" placeholder="modifier votre numero de téléphone" /></br>
	    		<input type="text" name="adresse" placeholder="modifier votre adresse" /></br>
	    		<input type="text" name="codepostal" placeholder="modifier votre code postal" />
	    		
	    		<input type="submit" value="VALIDER" />
	    	</form>
	    	<form action='../controleur/Page_Personnelle.php' method="post">
	    		<input type="password" name="mdp1" placeholder="Veuillez rentrer votre ancien mot de passe" /></br>
	    		<?php if(isset($erreur1)and $erreur1!=''){?>
			    	<h4><?php echo $erreur1 ?></h4>
			    	<?php
			    }
			    ?>	    		
	    		<input type="password" name="mdp2" placeholder="Veuillez rentrer votre nouveau mot de passe" /></br>
	    		<input type="password" name="mdp3" placeholder="Veuillez rentrer votre nouveau mot de passe" />   		
				<?php if(isset($erreur2)and $erreur2!=''){?>
			    	<h4><?php echo $erreur2 ?></h4>
			    	<?php
			    }
			    ?>
			    <input type="submit" value="VALIDER" />
			</form>
	    </div>
	</body>
</html>