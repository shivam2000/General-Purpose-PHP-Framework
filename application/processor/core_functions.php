<?php 

$protected = array();
// only for demonstration ; 
// change as required 

function console($i)
{
	echo "<pre>";
	print_r($i);
	echo "</pre>";
}

function lang($i)
{
	$protected['app_language'] = $i;
	include ("application/languages/".$i.".php");
}

function navigate($i)
{
	header("Location: ".$i);
}



?>
