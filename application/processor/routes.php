<?php

	$request  = $_SERVER['REQUEST_URI'];

	$request = explode('/', $request, 3);
	$request = explode('/',$request[2]);

	$_SESSION['request'] = $request;

	developer('routes','1');
?>