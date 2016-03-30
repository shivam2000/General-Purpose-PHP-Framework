<?php 

function wash($i)
{
	$i = htmlspecialchars($i);
	$i = addslashes($i);
	return $i;
}

function password($i)
{
	$i = md5($i);
	return $i;
}



?>