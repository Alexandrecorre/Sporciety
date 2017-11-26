<?php

function password_maker($pwd){
$hash = password_hash($pwd,PASSWORD_DEFAULT);
	return$hash;
}
?>