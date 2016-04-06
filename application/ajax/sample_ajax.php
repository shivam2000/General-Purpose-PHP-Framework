<?php 

// include this file to connect to load configurations.
// make sure you validate the ajax requests to make sure noone else can pound them with unlimited requests !.
include "ajax_core.php";

if(isset($_POST['user']))
{
	echo $user;
}

?>