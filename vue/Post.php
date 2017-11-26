<!DOCTYPE html>
<html>
	<head>
		<title>Sporciety</title>
		<link href="../vue/Post.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
		<script type="text/javascript" src="../vue/new_event.js"></script>
	</head>
	<body>
		<script type="text/javascript">
			function AfficherMasquer()
			{
			divInfo = document.getElementById('divacacher');
			if (divInfo.style.display == 'none')
			divInfo.style.display = 'block';
			else
			divInfo.style.display = 'none';
			}
		</script>
		<?php include("../Header/HOMETOP.php"); ?>
		<div class='Sujet'>
			<?php
			if($_GET['sujet']=='sport') {
				include_once'../modele/get_sports.php';
				$Sports=get_sports('');
				foreach ($Sports as $Sport) { ?>
					<a href="../controleur/Post.php?sujet=sport&sous_sujet=<?php echo $Sport['sport']?>"><?php echo $Sport['sport']?></a>
					<br />
					<br />
				<?php
				}
			}
			?>
			<?php
			if($_GET['sujet']=='groupe') {
				include_once'../modele/get_groupes.php';
				$Groupes=get_groupes('','');
				foreach ($Groupes as $Groupe) { ?>
					<a href="../controleur/Post.php?sujet=groupe&sous_sujet=<?php echo $Groupe['groupe']?>"><?php echo $Groupe['groupe']?></a>
					<br />
					<br />
				<?php
				}
			}
			?>
			<?php
				if($_GET['sujet']=='club') {
					include_once'../modele/get_club.php';
				$Groupes=get_club('','');
				foreach ($Groupes as $Groupe) { ?>
					<a href="../controleur/Post.php?sujet=club&sous_sujet=<?php echo $Groupe['nom']?>"><?php echo $Groupe['nom']?></a>
					<br />
					<br />
				<?php
				}
				}
			?>

			<?php
				if($_GET['sujet']=='question') {
				include_once'../modele/get_question.php';
				$Groupes=get_question('','');
				foreach ($Groupes as $Groupe) { ?>
					<a href="../controleur/Post.php?sujet=groupe&sous_sujet=<?php echo $Groupe['groupe']?>"><?php echo $Groupe['groupe']?></a>
					<br />
					<br />
				<?php
				}

				}
			?>
		</div>
		<div class="Posts" >
			<h1><?php echo strtoupper($_GET['sujet']) ?>S</h1>
			<div id="p">
				<?php
					if(isset($_GET['sujet']) and isset($_GET['sous_sujet'])) {
						?>
						<h3><?php echo $_GET['sous_sujet'] ?></h3>
						<div id="Plus"  onClick="AfficherMasquer();">
							<p><?php echo Répondre ?></p>
						</div>
						<div id="divacacher" style="display:none;">
							<p><?php echo Réponse ?></p>
								<form name="form" action='../controleur/Post.php?sujet=<?php echo $_GET['sujet']?>&sous_sujet=<?php echo $_GET['sous_sujet']?>' method="post">

									<input type="button" value="G" style="font-weight:bold;" onclick="commande('bold','','bouton_bold');" id="bouton_bold"/>
									<input type="button" value="I" style="font-style:italic;" onclick="commande('italic','','bouton_italic');" id="bouton_italic"/>
									<input type="button" value="S" style="text-decoration:underline;" onclick="commande('underline','','bouton_underline');" id="bouton_underline"/>

									<div id="editeur_description" name="editeur_description" contentEditable ></div>

									<input type="hidden" name="resultat" id="resultat">

									<input type="submit" onclick="resultat_post();" value="<?php echo Poster ?>" >

								</form>

						</div>
						<?php
						include'../modele/get_post.php';
						$posts=get_post($_GET['sujet'],$_GET['sous_sujet']);
						$compteur=0;
						foreach($posts as $post) {
						?>
						<div id="ligne"></div>
						<table>
							<tr>
								<td id="left">
									<p><?php echo $post['auteur'].'</br>'.$post['date']; ?></p>
									<?php echo $post['id']?> 
								</td>
								<td id="right">
									<p class="affiche_resultat"><?php echo $post['post'] ?></p>
									<script type="text/javascript">
										document.getElementsByClassName('affiche_resultat')[<?php echo $compteur ?>].innerHTML=document.getElementsByClassName('affiche_resultat')[<?php echo $compteur ?>].innerText
									</script>
								</td>
							</tr>
						</table>
						<br />
						<?php
							$compteur=$compteur+1;
						}
					}
					else {
						?>
						<h3><?php echo Select ?></h3>
						<?php
					}
				?>
			</div>
		</div>
	</body>
</html>
