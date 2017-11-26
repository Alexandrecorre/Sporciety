<!DOCTYPE html>
<html>
	<head>
		<title>Page Sports</title>
		<link href="../vue/Fichesporttype.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	</head>
	<body>
	    
	    <?php include("../Header/HOMETOP.php"); ?><br><br>

    	<div class="center">
    		<div class="titre">
				<h1>
					<?php
					if(isset($_POST['choix']) and $_POST['choix']!='')
					{
						echo $_POST['choix'];
					}
					elseif((!isset($_POST['choix']) or $_POST['choix']=='') and !isset($_GET['sport']))
					{
						echo 'SPORTS';
					}
					elseif(!isset($_GET['sport'])or $_GET['sport']=='')
					{
						echo'SPORTS';
					}
					else
					{
						echo $_GET['sport'];
					}	
				 	?>
				</h1>
    		</div><br><br>
    		<div class="texte">
    			<?php
    			
				if((!isset($_GET['sport']) or $_GET['sport']=='') and (!isset($_POST['choix']) or $_POST['choix']==''))
				{

				}
				elseif(isset($_POST['choix']))
				{
					foreach ($sports as $sport)
					{
						if(strtolower($sport['sport'])==strtolower($_POST['choix']))
						{
							break;
						}
					}
	    			?>
	    			<p><?php echo ucfirst(strtolower($sport['information'])).'</br>' ?></p>
	    			<?php
    			}
    			else
    			{

					foreach ($sports as $sport)
					{
						if(strtolower($sport['sport'])==strtolower($_GET['sport']))
						{
							break;
						}
					}
	    			?>
	    			<p><?php echo ucfirst(strtolower($sport['information'])).'</br>' ?></p>
	    			<?php

    			}
    			?>
    		</div><br>
			<div class="Groupes">
		   		<table>
		    		<tbody>
						<tr>
							<?php
						
							if((!isset($_GET['sport']) or $_GET['sport']=='')and (!isset($_POST['choix']) or $_POST['choix']==''))
							{								
								if(isset($_POST['codepostal'])and $_POST['codepostal']!='')
								{
									$sports_groupes=get_groupes('',$_POST['codepostal']);
								}
								else
								{
									$sports_groupes= get_groupes('','');
								}
							}
							elseif(isset($_POST['choix']) and $_POST['choix']!='')
							{
						
								if(isset($_POST['codepostal'])and $_POST['codepostal']!='')
								{
									$sports_groupe= get_sports_groupes($_POST['choix'],'');
									$sports_groupes=array();
									$a=0;
									foreach($sports_groupe as $sport_groupe)
									{
									$groupe= get_groupes($sport_groupe['groupe'],'');
										if(round($groupe['codepostal']/1000)==round($_POST['codepostal']/1000))
										{?>
											<td><a href='../controleur/Groupe.php?groupe=<?php echo $groupe['groupe']?>'><?php echo ucfirst(strtolower($groupe['groupe'])) ?></a></td>
										<?php
										$a++;
										if($a%3==0)
											{
												?>
												</tr>
												<tr>
												<?php
											}	
										}
									}
								
								}
								else
								{
									$sports_groupes= get_sports_groupes($_POST['choix'],'');
								}	
							}
							else
							{
								$sports_groupes= get_sports_groupes($_GET['sport'],'');
							}
							$a=0;
							foreach($sports_groupes as $sports_groupe) 
							{
							?>

							<td><a href='../controleur/Groupe.php?sport=<?php echo $_GET['sport']?>&groupe=<?php echo $sports_groupe['groupe']?>'><?php echo ucfirst(strtolower($sports_groupe['groupe'])) ?></a></td>
							<?php	
							$a++;
							if($a%3==0)
								{
									?>
									</tr>
									<tr>
									<?php
								}
							}
							?>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="NouveauGroupe">
		<?php
			if(isset($_SESSION['mail'])){
				?>
				<a href="../controleur/CreerGroupe.php">Créer un Groupe</a>
				<?php
	 		}	
	   		else {
      			?>
	    		<a href="../Controleur/Connexion.php">Créer un Groupe</a>
	    		<?php
	   		}
      	?>
		</div>	
	</body>
</html>