<?php
function get_sports($sport)
{   
	include'connexion_sql.php';
	//$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root' , 'root');
	if($sport=='')
	{
	$req = $bdd->prepare('SELECT * FROM sport ORDER BY sport');						
    $req->execute();
    $sports = $req->fetchAll();
    return $sports;
	}
	else
	{
	$req = $bdd->prepare('SELECT * FROM sport WHERE sport=:sport');						
    $req->execute(array(
    	':sport'=>$sport
    	));
    $sports = $req->fetch();
    return $sports;
	}
}
?>