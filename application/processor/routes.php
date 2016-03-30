<?php

	$request  = $_SERVER['REQUEST_URI'];
	$request  = str_replace('/framework/', '', $request);
	$request = explode('/', $request);

	// for homepage
	if($request[0] == '' && @!$request[1])
	{
		include ("application/views/homepage.php");
	}
	
	else
	{
		include ("application/views/404.php");
	}
	
	// console($request);
	developer('routes' , '1');


?>