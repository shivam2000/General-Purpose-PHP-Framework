<?php 
include "../processor/config.php";
include "../database/connect.php";

// declare functions here which you want to use across all ajax requests.
// sample functions for demonstration

function eat($i)
{
	$i = htmlspecialchars($i);
	$i = addslashes($i);
	return $i;

	// while in development phase, use the above type of code, when deploying, use something like
	// return addslashes(htmlspecialchars($i));
}

function spit($i)
{
	$i = htmlspecialchars_decode($i);
	$i = stripcslashes($i);
	return $i;
}

?>