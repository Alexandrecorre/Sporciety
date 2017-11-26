<!DOCTYPE html>
<html>
	<head>
		<title>Page Personnelle</title>
		<link href="../vue/Page_Personnelle.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>
		
		<div id="wrap">
			<div class="user">
				<img src="../Images/Logos/User.png" style="height: 7em;">
				<div id="uinfo">
					<table>
						<tr>
							<td>
							<?php
								echo $membre['prenom'] . " " . $membre['nom'];
							?>
							</td>
						</tr>
						<tr>
							<td>
							<?php
								echo "Mail : " . $membre['adresse_mail'];
							?>
							</td>
						</tr>
						<tr>
							<td>
								<?php
									echo $membre['adresse'] . "</br>" . $membre['codepostal'] . "</br>" . $membre['ville']."</br>";
								?>
							</td>
						</tr>
						<tr>
							<td>
								<?php
									echo $membre['numero_de_portable'];
								?>
							</td>
						</tr>
						<tr>
							<td>
								<?php
									echo $membre['date_de_naissance'];
								?>
							</td>
						</tr>
					</table></br>
					<a href="../controleur/CreerGroupe.php">Créer un groupe</a><br />
					<a href="../controleur/ModifProfil.php">Modifier votre profil</a>
										
				</div>
				<div class="more">
					<div id="p">
						<h3>Mon Planning :</h3>
						<table>
							<tr>
								<td>
									<ul><?php
										foreach($event as $events){
											foreach ($groupes as $groupe) {
											if($events['groupe']==$groupe['groupe'] ){
												?><li><a href="../controleur/Event.php?event=<?php echo $events['nom']?>&groupe=<?php echo $events['groupe'] ?>" ><?php echo $events['nom']?></li><?php
											}
											}
										}

										
										?>								
									</ul>
								</td>
							</tr>
						</table>
					</div>
					<div id="f">
						<h3>Forum :</h3>
						<table>
							<tr>
								<td>
									<ul><?php
									$a=0;
										foreach($post as $posts){
											foreach ($groupes as $groupe) {
												if($a>=7){break;}
											if($posts['auteur']==$_SESSION['mail']){
												?>
												<li><a href="../controleur/Post.php?sujet=<?php echo $posts['sujet']?>" ><?php echo $posts['sujet']?></a></li>
												<?php
												$a++;
											}
											}
										}

										
										?>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="mygroups">
				<h3>Mes Groupes :</h3>
				<table>
					<tr>
						<td>
							<ul>
								<?php
									foreach ($groupes as $groupe) {
										?>
										<li><a href="../controleur/Page_Personnelle_mon_groupe.php?groupe=<?php echo $groupe['groupe']?>" ><?php echo $groupe['groupe']?></a></li>
										<?php
									}
								?>
							</ul>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>
