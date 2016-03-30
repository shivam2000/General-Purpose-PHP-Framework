<?php

// database settings
$protected['database_server']	= 'localhost';
$protected['database_name']		= 'app_name';
$protected['database_username']	= 'database_name'; 
$protected['database_password']	= 'database_password';

// webapp settings
$protected['app_name']			= 'Dharni Properties';
$protected['app_timezone']		= 'UTC+05:30';
$protected['app_currency']		= 'INR';
$protected['app_language']		= 'EN';
$protected['app_country']		= 'INDIA';
$protected['app_countrycode']	= '+91';
$protected['app_url']			= 'http://localhost/app_url/';
$protected['app_language']		= 'en';

// admin settings
$protected['admin_name']		= 'Yash Kumar Verma';
$protected['admin_email']		= 'yk.verma2000@gmail.com';

$protected['directory']			= 'dharniproperties';

// user variables
// $protected['user']['attribute']			= 'Yash';
if(function_exists('developer'))
{
	developer('config' , '1');
}

?>
