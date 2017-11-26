<!DOCTYPE html>
<html>
	<head>
		<link href="../Header/HOMETOP BO.css" rel="stylesheet" type="text/css" media="screen" />
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
						<th><a href="../controleur/Accueil.php">SPORCIETY</a></th>
	                   	<?php if(isset($_SESSION['mail'])) { ?>
	                   	<th><a href="../controleur/Accueil.php?deconnexion=true">DECONNEXION</a></th>
	                   	<?php
	                   }
	                   ?>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>