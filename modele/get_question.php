<?php
function get_question()
{	
	include'connexion_sql.php';
		$reponse=$bdd->query('SELECT * FROM question');
		$question=$reponse->fetchAll();
		return $question;
	}
?>