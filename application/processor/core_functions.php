<?php 

$protected = array();

function console($i)
{
	echo "<pre>";
	print_r($i);
	echo "</pre>";
}
function developer($name,$property)
{
	$GLOBALS['_SESSION']['developer'][$name] = $property;
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


developer('functions' , '1');

?>
