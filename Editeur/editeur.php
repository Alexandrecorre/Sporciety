<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../Editeur/editeur.css">
	</head>
	<body>
<<<<<<< Updated upstream
=======
		<form action='../controleur/new_event.php' method="post">
			<a href=""><input type="button" value="G" style="font-weight:bold;" onclick="commande('bold');" id="bouton_bold"/></a>
		    <input type="button" value="I" style="font-style:italic;" onclick="commande('italic');" id="bouton_italic"/> 
		    <input type="button" value="S" style="text-decoration:underline;" onclick="commande('underline');" id="bouton_underline"/> 
>>>>>>> Stashed changes

			   	<input type="button" value="G" style="font-weight:bold;" onclick="commande('bold','','bouton_bold');" id="bouton_bold"/>
			    <input type="button" value="I" style="font-style:italic;" onclick="commande('italic','','bouton_italic');" id="bouton_italic"/>
			    <input type="button" value="S" style="text-decoration:underline;" onclick="commande('underline','','bouton_underline');" id="bouton_underline"/>
			    <br><br>
			    <div id="editeur" contentEditable></div>
			    <input type="button" value="Submit" onclick="resultat();"/>
			<form name="form" action='../Editeur/test.php' method="post">
			    <input type="hidden" name="resultat" id="resultat"> <br>
			</form>

		    <script type="text/javascript" src="../Editeur/editeur.js"></script>
	</body>
</html>
