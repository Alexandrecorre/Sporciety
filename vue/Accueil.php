<!DOCTYPE html>
<html>
	<head>
		<title>Sporciety</title>
		<link href="../vue/Accueil.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>		
		
		<?php include("../Header/HOMETOP Slider.php"); ?>

		<a id="inscription" href="../controleur/Inscription.php"><?php echo Ins ?></a>
		<div class="slider">
			<figure>
	    		<img src="../Images/Wallpaper/US.jpg">
	    		<img src="../Images/Wallpaper/mountain.jpg">
	    		<img src="../Images/Wallpaper/beachvolley.jpg">
	    		<img src="../Images/Wallpaper/tennis.jpg">
	  		</figure>
  		</div>
		<div class="search">
			<ul>
				<form action='../controleur/Fichesporttype.php' method="post">
				<select name="choix">
				    <option value=''><?php echo Sports ?></option>
				    <?php
					foreach($sports as $sport)
					{
						?>
						<option value= <?php echo $sport['sport'] ?>><?php echo ucfirst(strtolower($sport['sport'])) ?></option>
						<?php
					}
					?>
				</select>
			    <input id="codepo" type="int" name="codepostal" placeholder="<?php echo CP ?>" />
			    <input type="submit" value="<?php echo Rechercher ?>" />
				</form>
			</ul>
	    </div>
		<div id="SPORT">
			<a><?php echo Sport ?></a>
		</div>
		<div class="picture">
			<div class="pline1">
				<div class="p1"><a href="../controleur/Fichesporttype.php?sport=BASKETBALL">BASKETBALL</a></div>
				<div class="p2"><a href="../controleur/Fichesporttype.php?sport=BOXE"><?php echo Boxe ?></a></div>
				<div class="p3"><a href="../controleur/Fichesporttype.php?sport=SKI">SKI</a></div>
			</div>
			<div class="pline2">
				<div class="p4"><a href="../controleur/Fichesporttype.php?sport=ATHLETISME"><?php echo Athlé ?></a></div>
				<div class="p5"><a href="../controleur/Fichesporttype.php?sport=RUGBY">RUGBY</a></div>
			</div>
			<div class="pline3">
				<div class="p6"><a href="../controleur/Fichesporttype.php?sport=NATATION"><?php echo Nata ?></a></div>
				<div class="p7"><a href="../controleur/Fichesporttype.php?sport=TENNIS">TENNIS</a></div>
			</div>
		</div>
		<div id="GROUPES">
			<a><?php echo DGROUPES ?></a>
		</div>
		<div class="vedettes">
			<div class="vline">
				<?php
				include ("../modele/get_last.php");
				$groupes=get_last();
				$a=1;
				foreach ($groupes as $groupe) {
					?>
					<div class='v<?php echo $a ?>'>
					<a href='../controleur/Groupe.php?groupe=<?php echo $groupe['groupe']?>'><?php echo ucfirst(strtolower($groupe['groupe']))?></a>
				</div>
					<?php
				 } 
				?>
			</div>
	</body>

	<?php include("../Footer/Footer.php"); ?>
	
</html>