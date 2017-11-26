<?php
function pass_verify($saisi,$password){
	if(password_verify($saisi,$password))
	{
		echo 'bon mdp'.'</br>';
	}
	else
	{
		echo 'mauvais mdp'.'</br>';
	}
}
?>