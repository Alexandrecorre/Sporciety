<?php
function delete_post($ID){
	$ID=htmlspecialchars($ID);
	include'connexion_sql.php';
	$req = $bdd->prepare('DELETE FROM post WHERE id=:id');
		$req->execute(array(
			'id' => $ID
	));
	}
?>