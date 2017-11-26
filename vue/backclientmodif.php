<!DOCTYPE html>
<html>
	<head>
		<title>Page Personnelle</title>
		<link href="../vue/backclientmodif.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>
		<?php
			if(isset($_GET['groupe']) and $_GET['groupe']!=''){?>
			<h3>Modification : <?php echo $_GET['groupe']?></h3></br>
			<form method="post" action="../controleur/backclient.php?Groupe=Modif">
				<h4>Description</h4>
				<textarea type="text"  name="description" rows="5" cols="100"><?php echo $groupe['information']?></textarea>
	    		<input type="hidden"  name="groupe" value=<?php echo $_GET['groupe'] ?> />
	    		</br></br>
				<input type="submit" value="Modifier">
			</form>
			<?php 

			}elseif(isset($_GET['sport']) and $_GET['sport']!=''){?>
			<h3>Modification : <?php echo $_GET['sport']?></h3></br>
			<form method="post" action="../controleur/backclient.php?Sport=Modif">
					<h4>Description</h4>
				<textarea type="text" name="description" rows="5" cols="100"><?php echo $sport['information']?></textarea>
	    		<input type="hidden"  name="sport" value=<?php echo $_GET['sport'] ?> />

				<input type="submit" value="Modifier">
				<?php
				} ?>
			</form>
			
	</body>
</html>