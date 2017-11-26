<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8" />
    <title>Sporciety</title>
    <link href="../vue/Event.css" rel="stylesheet" type="text/css" media="screen" />
  </head>
  <body>

    <div id="event">
        <div id="liste_event">
          <h1> <?php echo $_GET['groupe']; ?> </h1>
          <?php
            include_once'../modele/get_event.php';
            
            $list_Events=get_event('');
            foreach ($list_Events as $list_Event) { ?>
              <a href="../controleur/Event.php?groupe=<?php echo $_GET['groupe'] ?>&event=<?php echo $list_Event['nom']?>"><?php echo $list_Event['nom']?></a>
            <?php
            }
          ?>
        </div>

        <div id="detail">
          <?php
            include_once'../modele/get_event.php';
            $selected_event=selection_event($_GET['groupe'],$_GET['event']);
          ?>
          <?php if (isset($_GET['event'])): ?>
            <h2><?php echo $_GET['event'] ?></h2>
          <?php endif; ?>
          <div id="ligne"></div>
          <p id="affiche_description">
            <script type="text/javascript">
              document.getElementById('affiche_description').innerHTML= "<?php echo $selected_event['description']; ?>";
              document.getElementById('affiche_description').innerHTML=document.getElementById('affiche_description').innerText;
            </script>
          </p>
            <h3>Adresse : </>
            <p id="affiche_adresse">
              <script type="text/javascript">
                document.getElementById('affiche_adresse').innerHTML= "<?php echo $selected_event['adresse']; ?>";
                document.getElementById('affiche_adresse').innerHTML=document.getElementById('affiche_adresse').innerText;
              </script>
            </p>
            <h3>Rendez-vous le :</h3><p id="affiche_date"><?php echo $selected_event['date'];?> </p>
            <?php if ($check_createur==true or !isset($_SESSION['groupe'])): ?>
              <p id="modifsuppr">
                <a href="../controleur/ModifEvent.php?groupe=<?php echo $_GET['groupe']?>&event=<?php echo $_GET['event']?>">Modifier cet évènement</a>
                <a href="../controleur/delete_event.php?id=<?php echo $selected_event['id'] ?>&groupe=<?php echo $_GET['groupe'] ?>">Supprimer cet événement</a>
              </p>
            <?php endif; ?>
          </div>
    </div>
  </body>
</html>
