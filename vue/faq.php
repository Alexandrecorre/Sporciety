<!DOCTYPE html>
<html>
	<head>
		<title>Aide</title>
		<link rel="stylesheet" type="text/css" href="../vue/faq.css" media="screen">
		<meta http-equiv="content-type" content="text/html" charset="UTF-8">
	</head>
	<body>
		<?php include("../Header/HOMETOP.php"); ?>
		<div id="titre">
			<p>Une question ? Une réponse </p>
		</div>
		<section>
			<div class="question">Comment s'inscrire ?</div>
			<div class="reponse"><a href="../controleur/Inscription.php">Cliquer ici !</a></div>

			<div class="question">Comment se connecter ?</div>
			<div class="reponse"><a href="../controleur/Connexion.php">Cliquer ici !</a></div>

			<div class="question">Comment trouver ou rejoindre un groupe ?</div>
			<div class="reponse"><a href="../controleur/Sports.php">Faites une recherche ici en fonction de votre sport</a></div>

			<div class="question">Comment gérer votre mot de passe ?</div>
			<div class="reponse"><?php if(isset($_SESSION['mail'])and $_SESSION['mail']!=""){ ?>
				<a href="../controleur/Page_Personnelle.php">Cliquer ici pour accèder à votre profil et aller dans modifier</a></div><?php
			}else{?>
				<a href="../controleur/Connexion.php">Connectez vous d'abord</a></div><?php
			} ?>

			<div class="question">Comment créer votre groupe ?</div>
			<div class="reponse"><?php if(isset($_SESSION['mail'])and $_SESSION['mail']!=""){ ?>
				<a href="../controleur/Page_Personnelle.php">Cliquer ici pour accèder à votre profil et aller dans groupe puis créer un groupe</a></div><?php
			}else{?>
				<a href="../controleur/Connexion.php">Connectez vous d'abord</a></div><?php
			} ?>
			<?php
			foreach($Question as $q){?>
				<div class="question"><?php  echo $q['question'] ?></div>
				<div class="reponse"><?php  echo $q['reponse'] ?></div>
				<?php
			}
			?>
		</section>	
		<section id="mail">
			<p>Pour toute autre question, n'hésitez pas à nous contacter en nous envoyant un mail :</p>
			<a href="mailto:sporciety@gmail.com" id="bouton_contact">Contactez-nous</a>

		</section>
	</body>
</html>