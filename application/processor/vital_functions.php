<?php 

/*
This file can make code simpler
Declare global functions here. 
*/ 

// NOTE : make the most complex and secure hash

function password($i)
{
	$i = md5($i);
	// or something like
	// $i = hash('sha512', $i);
	// for SHA512
	return $i;
}

// demo functions
function redirect_if_not_logged_in()
{
	if(!isset($_SESSION['user']))
	{
		header("Location: ".$protected['app_url'].'login');
	}
}

function redirect_if_logged_in()
{
	if(isset($_SESSION['user']))
{
	header("Location: ".$protected['app_url'].'dashboard');
}

}

?>