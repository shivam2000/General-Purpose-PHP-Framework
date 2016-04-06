<?php

$servername 	= $protected['database_server'];
$databasename 	= $protected['database_name'];
$username 		= $protected['database_username'];
$password 		= $protected['database_password'];

/*
Change this according to the type of database you are using.
The following is for SQL.
*/

// Check connection
$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

?>