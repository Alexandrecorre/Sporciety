<?php

function get_event($groupe)
{
	include'connexion_sql.php';
	if($groupe==''){
		
	$reponse = $bdd->query('SELECT * FROM event ORDER BY date');
	$event=$reponse->fetchAll();
	return $event;

	}else{
	$groupe=htmlspecialchars($groupe);

	
	$reponse = $bdd->prepare('SELECT * FROM event WHERE groupe= :groupe');
	$reponse -> execute(array(
			'groupe' => $groupe,
			));
	$event= $reponse->fetch();
	return $event;}
}

function get_list_event($groupe){
	include'connexion_sql.php';
	if ($groupe!='') {
		$groupe=htmlspecialchars($groupe);

		
		$reponse = $bdd->prepare('SELECT * FROM event WHERE groupe= :groupe ORDER BY date');
		$reponse -> execute(array(
				'groupe' => $groupe,
				));
		$event= $reponse->fetchAll();
		return $event;
	}
}

function selection_event($groupe,$nom){
	include'connexion_sql.php';
	$groupe=htmlspecialchars($groupe);
	$nom=htmlspecialchars($nom);

	
	$reponse = $bdd->prepare('SELECT * FROM event WHERE groupe= :groupe AND nom= :nom');
	$reponse -> execute(array(
			'groupe' => $groupe,
			'nom' => $nom,
			));
	$event= $reponse->fetch();
	return $event;
}

function selection_event_by_id($id){
	include'connexion_sql.php';
	
	$reponse = $bdd->prepare('SELECT * FROM event WHERE id= :id');
	$reponse -> execute(array(
			'id' => $id,
			));
	$event= $reponse->fetch();
	return $event;
}

 ?>
