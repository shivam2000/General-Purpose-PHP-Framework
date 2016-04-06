<?php

/*
The most important file (almost)
Use conditional operators to make things work. Simple !
Also supports files arranged in different directories 
*/
	$request  = $_SERVER['REQUEST_URI'];
	$request  = str_replace('/'.$protected['app_directory'].'/', '', $request);
	$request = explode('/', $request);

	// for homepage
	if($request[0] == '' && ( !isset($request[1]) || $request[1] == '' ) )
	{
		include ("application/views/homepage.php");
	}
	elseif($request[0] == 'level_1' && ( !isset($request[1]) || $request[1] == '' ) )
	{
		include ("application/views/login.php");
	}
	elseif($request[0] == 'level_2' && ( !isset($request[1]) || $request[1] == '' ) )
	{
		include ("application/views/some_dir/file.php");
	}
	else
	{
		include ("application/views/404.php");
	}
	

?>