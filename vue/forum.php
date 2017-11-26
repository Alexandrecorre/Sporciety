<!DOCTYPE html>
<html>
	<head>
		<title>Forum</title>
		<link href="../vue/forum.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>

	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>
		
		<div class="forum">

			<h1> Forum </h1>

			<div id="sport">
				<a href="../controleur/Post.php?sujet=sport">Sports</a>
			</div>

			<div id="groupe">
				<a href="../controleur/Post.php?sujet=groupe"><?php echo Groupes ?></a>
			</div>

			<div id="club">
				<a href="../controleur/Post.php?sujet=club">Clubs</a>
			</div>

		</div>
	</body>
</html>