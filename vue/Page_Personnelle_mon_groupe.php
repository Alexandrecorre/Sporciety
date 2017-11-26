<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $Groupe?></title>
		<link href="../vue/Page_Personnelle_mon_groupe.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>

		<?php include("../Header/HOMETOP.php"); ?>

		<div class="mygroups">
			<a href='../controleur/Groupe.php?groupe=<?php echo $Groupe ?>' id="titre_h1"><?php echo $Groupe?></a><br /><br />
			<?php

			foreach ($leader as $lead) {
				if($lead['membre']==$_SESSION['mail'] and $lead['groupe']==$Groupe){?>
					<a href="../controleur/ModifGroupe.php?groupe=<?php echo $Groupe ?>">Modifie ton Groupe</a><br /><br /> 
					<a href="../controleur/ModifGroupe.php?groupe=<?php echo $Groupe ?>&Del= true">Supprime ton Groupe</a><br /><br />
					<?php
				}
			}
				?>
			<?php
			if(isset($deja_membre)){
			?>
				<a id="pad_l" href="../controleur/quitter_groupe.php?groupe=<?php echo $_GET['groupe']; ?>">Quitter le groupe</a>
			<?php
			}
			 ?>
			<div class="members">
				<h3>Les Membres :</h3>
				<table>
					<tr>
						<th>
							<ul>
								<?php foreach($mails as $mail){
										foreach($membres as $membre){
										if($mail['membre']==$membre['adresse_mail']){
									?>
								<li><?php echo mb_strtoupper($membre['nom'])." ".ucfirst(mb_strtolower($membre['prenom']))?></li>
								<?php
							}}}
								?>

							</ul>
						</th>
					</tr>
				</table>
			</div>
			<div class="more">
				<div id="club">
					<h3>Le Club :</h3>
					<table>
						<tr>
							<?php
								foreach($club as $clubs){
								?>
								<td>
								<li><a href="../controleur/Club.php?club=<?php echo $clubs['club']?>" ><?php echo $clubs['club']?></li>
								</td>
								<?php
									}
								?>
						</tr>
					</table>
				</div>
				<div id="cal">
					<h3>Le Calendrier :</h3>
					<p id="pad_l2"><a href="../controleur/new_event.php?groupe=<?php echo $_GET['groupe'] ?>">Créer un événement</a></p>
					<table>
						<tr>
							<th>
								<ul>
									<?php
									foreach($event as $events){
										if($events['groupe']==$Groupe ){
											?><li><a href="../controleur/Event.php?groupe=<?php echo $_GET['groupe'] ?>&event=<?php echo $events['nom']?>" ><?php echo $events['nom']?></a></li><?php
										}
										}
									?>
								</ul>
							</th>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
