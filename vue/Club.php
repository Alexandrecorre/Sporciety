<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $_GET['club'] ?></title>
		<link href="../vue/Club.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
		
		<?php include("../Header/HOMETOP.php"); ?>
		
		<div class="user">
			<img src="../Images/Logos/User.png" style="height: 7em;">
			<div id="uinfo">
				<table>
					<tr>
						<th>
						<?php
						include'../modele/get_club.php';
						$club=get_club($_GET['club'],'');
							echo $club['nom'].'</br>'.$club['code_postal'].'</br>'.$club['description'];
						
						?>
						</th>
					</tr>
				</table>
			</div>
		</div>	<br />
			<div class="more">
				<div id="p">
					
					<table>
						<h3>Les Groupes :</h3>
						<tr>
							<th>
								<ul><?php
								include'../modele/get_groupe_club.php';
								$groupes=get_groupe_club('',$_GET['club']);
										foreach ($groupes as $groupe) {
											?><li><a href="../controleur/Page_Personnelle_mon_groupe.php?groupe=<?php echo $groupe['groupe']?>" ><?php echo $groupe['groupe']?></li><?php
										}
																		
									?>								
								</ul>
							</th>
						</tr>
					</table>
				</div>
			</div>	
	</body>
</html>