<?php
	$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

	if( isset($_SESSION['langue'])and $_SESSION['langue']=='fr') {
		include'../Langues/Sporciety_fr.php';
	}
	elseif (isset($_SESSION['langue'])and $_SESSION['langue']=='en') {
		include'../Langues/Sporciety_en.php';
	}
	else {
		include'../Langues/Sporciety_fr.php';
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="../Header/HOMETOP.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		<div class="menu">
			<div id="left">
				<table>
					<tr>
						<th><a href="../controleur/Accueil.php"><img src="../Images/Logos/Sporciety.png"></a></th>
					</tr>
				</table>
			</div>
			<div id="right">
				<table>
					<tr>
						<th><a href="../controleur/Sports.php"><?php echo SPORT ?></a></th>
						<th><a href="../controleur/Forum.php">FORUM</a></th>
	                   	<th><a href="../controleur/Contact.php">CONTACT</a></th>

	                   	<?php if (isset($_SESSION['mail'])) { ?>
	                   	<th><a href="../controleur/Accueil.php?deconnexion=true">DECONNEXION</a></th>
	                   	<th><a href="../controleur/Page_Personnelle.php"><?php echo PROFIL ?></a></th>

	                   	<?php } else { ?>
	                   	<th><a href="../controleur/Connexion.php">CONNEXION</a></th>
	                   	<th><a href="../controleur/Inscription.php">INSCRIPTION</a></th>

	                   	<?php } ?>
	                   	<th id="marge_d"><a href="../controleur/Aide.php"><?php echo AIDE ?></a></th>
					</tr>
				</table>
			</div>
			<ul class="langue">
		        <a id="lg">
		        <?php
					if (isset($_SESSION['langue'])) {
						?>
						<p><?php echo $_SESSION['langue'] ?><span id="none">N</span></p>
						<?php
					}
					else {
						?>
						<p>FR<span id="none">N</span></p>
						<?php
					}
				?>
		        <img src="../Images/Logos/Triangle.png">
		        </a>
		        <ul class="choix">
		            <li id="bottom1"><a href="<?php echo $url ?>?langue=fr">FR</a></li>
		            <li id="bottom2"><a href="<?php echo $url ?>?langue=en">EN</a></li>
		        </ul>
			</ul>
		</div>
	</body>
</html>