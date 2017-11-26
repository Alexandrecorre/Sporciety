<!DOCTYPE html>
<html>
	<head>
		<title>Contact</title>
		<link href="../vue/Contact.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body> 

		<?php include("../Header/HOMETOP.php"); ?>

	    <div class="Contact">
	    	<div class="Presentation">
	    		<h1><?php echo apdn ?></h1>
	    		<a>
	    			<br>
	    			<?php echo Description ?>
	    			<br><br><br><br>
	    			<?php echo Adresse ?>
	    			<br><br><br><br>
	    		</a>
		  	</div>
		  	<div class="Carte">
		  		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36456.91791685746!2d2.3104931933631194!3d48.83031544598615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6707980bd3947%3A0xd54fb6c5e1933333!2s10+Rue+de+Vanves%2C+92170+Issy-les-Moulineaux!5e0!3m2!1sfr!2sfr!4v1462265999460" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		  	</div>
		  	<div id="Mail">
		  		<h3><?php echo Info ?><h3>
		  		<a href="mailto:sporciety@gmail.com"><?php echo Contacter ?></a>
		  	</div>
		</div>
	</body>
</html>