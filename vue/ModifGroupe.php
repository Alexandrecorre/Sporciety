<!DOCTYPE html>
<html>
	<head>
		<title>Modification d'un Groupe</title>
		<link href="../vue/ModifGroupe.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>

	    <div class="ModifGroupe">
	    	<h1 style="text-align: center;">MODIFIE TON GROUPE: <?php echo $_GET['groupe'] ?></h1>
	    	<form action='../controleur/Page_Personnelle_mon_groupe.php?groupe=<?php echo $_GET['groupe'] ?>' method="post" enctype="multipart/form-data">
	    		<input type="text" name="Codepostal" placeholder="Votre groupe déménage ? Entre un nouveau code postal" />
	    		<input type="text" name="Description" placeholder="Entre une nouvelle description de groupe" />

	    		<br /><h3>Supprimer un membre du groupe :</h3>
	    		<table>
	    			<th>
	    				<tr>
	    					<ul>
	    						<li>
	    							<?php
									foreach ($go as $test) {
										?>
										<input type="checkbox" name="case[]"  value="<?php echo $test['membre'] ?>" /> <label for="case"><?php echo $test['membre']?></label></br>
										<?php
									}

									 ?>
	    						</li>
	    					</ul>
	    				</tr>
	    			</th>
	    		</table>
	    		<br /><h3>Nommer un nouveau leader pour le groupe  :</h3>
	    		<table>
	    			<th>
	    				<tr>
	    					<ul>
	    						<li>
	    							<?php
									foreach ($go as $test) {
										?>
										<input type="radio" name="radio[]"  value="<?php echo $test['membre'] ?>" /> <label for="radio"><?php echo $test['membre']?></label></br>
										<?php
									}

									 ?>
	    						</li>
	    					</ul>
	    				</tr>
	    			</th>
	    		</table>

	    		
			    <input type="submit" value="VALIDER" />
			</form>
	    </div>
	</body>
</html>