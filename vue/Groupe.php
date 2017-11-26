<!DOCTYPE html>
<html>
  <head>
  	<title><?php echo $_GET['groupe']; ?></title>
  	<link rel="stylesheet" type="text/css" href="../vue/Groupe.css" media="screen" />
  	<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
    <script type="text/javascript" src="../vue/Groupe.js"></script>
  </head>
  <body>

    <?php include("../Header/HOMETOP Slider.php"); ?>

    <?php

      $img1='';
      $img2='';
      if ($_GET['sport']=='ATHLETISME') {
        $img1='Athlétisme1.jpg';
        $img2='Athlétisme2.jpg';
      }
      elseif ($_GET['sport']=='ACCROBRANCHE') {
        $img1='Accrobranche1.jpg';
        $img2='Accrobranche2.jpg';
      }
      elseif ($_GET['sport']=='BASKETBALL') {
        $img1='Basketball1.jpg';
        $img2='Basketball2.jpg';
      }
      elseif ($_GET['sport']=='MOTO') {
        $img1='Moto1.jpg';
        $img2='Moto2.jpg';
      }
      elseif ($_GET['sport']=='PING PONG') {
        $img1='Ping Pong1.jpg';
        $img2='Ping Pong1.jpg';
      }
      elseif ($_GET['sport']=='CYCLISME') {
        $img1='cyclisme.jpg';
        $img2='Cyclisme2.jpg';
      }
      else {
        $img1='get_fit1.jpg';
        $img2='get_fit1.jpg';
      }
    ?>
    <div class="slider">
			<figure>
	    		<img src="../Images/Wallpaper/<?php echo $img1 ?>">
	    		<img src="../Images/Wallpaper/<?php echo $img2 ?>">
	    		<img src="../Images/Wallpaper/<?php echo $img1 ?>">
	    		<img src="../Images/Wallpaper/<?php echo $img2 ?>">
	    		<img src="../Images/Wallpaper/<?php echo $img1 ?>">
	  		</figure>
  	</div>

		<div id="descriptiongroupe">
			<h1 id="nom_g"><?php echo $_GET['groupe']; ?></h1>
      <p style="padding-bottom: 16em;"><?php echo $groupes['information'] ?></p>

      <?php
      if (!isset($_SESSION['mail'])) {
        ?>
        <a id="bouton_rejoindre" href='../controleur/Connexion.php'>Rejoindre</a>
        <?php
      }
      else {
        if ($deja_membre=='') {
          ?>
          <a id="bouton_rejoindre" href='../controleur/inscription_groupe_membre.php?groupe=<?php echo $_GET['groupe']?>'>Rejoindre</a>
          <?php
        }
        else {
          ?>
          <a id="bouton_rejoindre" href='../controleur/Page_Personnelle_mon_groupe.php?groupe=<?php echo $_GET['groupe']?>'>Bienvenue</a>
          <?php
        }
      }
      ?>
  	</div>

		<div id="event">
      <?php
        if (!isset($_SESSION['mail'])) {
          ?>
          <a id="Create_ev" href="../controleur/Connexion.php">Connecte-toi avant de créer un évènement</a>
          <?php
        }
        else {
          if ($deja_membre=='') {
            ?>
            <a id="Create_ev" href="../controleur/Groupe.php?groupe=<?php echo $groupes['groupe']?>#nom_g">Rejoins le groupe avant de créer un évènement</a>
            <?php
          }
          else {
            ?>
            <a id="Create_ev" href="../controleur/new_event.php?groupe=<?php echo $_GET['groupe'] ?>">Créer un évènement</a>
            <?php
          }
        }
      ?>
      <div id="l_event">
        <?php
      foreach($event as $ev) {
        ?>

        <a href="../controleur/Groupe.php?groupe=<?php echo $groupes['groupe']?>&event=<?php echo $ev['nom']?>#bouton_rejoindre"><?php echo $ev['nom'];?></a>

        <br />
        <br />
        <?php
      }
      ?>
      </div>

      <div id="e_infos">
        <?php

        if(!isset($_GET['event'])) {
          ?>
          <h3>Veuillez sélectionner un évènement pour décourvir les informations qui y sont associées</h3>
          <?php
        }
        foreach ($event as $ev) {

          if (isset($_GET['event']) and $_GET['event']==$ev['nom']) {
            ?>
            <h1 id="inline"> <?php echo $ev['nom']; ?> </h1>
            <h3 id="inline"> Rendez vous le : <?php echo $ev['date'] ?> </h3>
            <h3 id="affiche_description"></h3>
            <script type="text/javascript">
                document.getElementById('affiche_description').innerHTML="<?php echo $ev['description'] ?>";
                document.getElementById('affiche_description').innerHTML=document.getElementById('affiche_description').innerText;
            </script>
            <?php
            if (isset($_SESSION['mail'])) {
                if (isset($deja_event) and $deja_event=='') {
                  ?>
                  <a id="ins_ev" href='../controleur/inscription_event.php?groupe=<?php echo $_GET['groupe'] ?>&id=<?php echo $ev['id'] ?>'>Inscris toi à <?php echo $_GET['event']; ?></a>
                  <?php
                }
                else {
                    ?>
                    <a id="desins_ev" href='../controleur/desinscrire_event.php?groupe=<?php echo $_GET['groupe'] ?>&id=<?php echo $ev['id'] ?>'>Se désinscrire de <?php echo $_GET['event']; ?></a>
                    <?php
                }
            }
          }
        }
        ?>
      </div>
    </div>

    <div class="localisation">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d85161.85430845951!2d2.3617916544987367!3d48.864518359376234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1457358140451"></iframe>
      <?php
        if(!isset($_GET['event'])) {
          ?>
          <h1>Point de rendez-vous de : </h1>
          <h2>Veuillez sélectionner un évènement ci-dessus</h2>
          <?php
        }
        foreach ($event as $ev) {
          if (isset($_GET['event']) and $_GET['event']==$ev['nom']) {
            ?>
            <h1>Point de rendez-vous de <?php echo $ev['nom']; ?> : </h1>
            <p id="adresse"></p>
            <script type="text/javascript">
                document.getElementById('adresse').innerHTML="<?php echo $ev['adresse'] ?>";
                document.getElementById('adresse').innerHTML=document.getElementById('adresse').innerText;
            </script>
            <?php
          }
        }
      ?>

    </div>

  </body>

  <?php include("../Footer/Footer.php"); ?>

</html>
