<?php 

function ajout_question($ques,$rep){
	$rep=htmlspecialchars($rep);
	$ques=htmlspecialchars($ques);
	include'connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO question(question,reponse) 
		VALUES(:question,:reponse)');
	$req->execute(array(
	'question' => $ques,
	'reponse' => $rep
	));

}
 ?>