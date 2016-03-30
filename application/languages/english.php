<?php

// this file contains language file
// the $i['hello world'] = 'hello world';
$lang['login-panel-heading']					=	'Login';
$lang['login-input-username-placeholder']		=	'Username';
$lang['login-input-password-placeholder']		= 	'Password';
$lang['login-input-submit-placeholder']			=	'Login';

$lang['signup-panel-heading']					=	'Sign Up';
$lang['signup-input-name-placeholder']			=	'Full Name';
$lang['signup-input-age-placeholder']			=	'Age';
$lang['signup-input-username-placeholder']		=	'Username';
$lang['signup-input-select-type-labor']			=	'Labour';
$lang['signup-input-select-type-mason']			=	'Mason';
$lang['signup-input-select-type-contractor']	=	'Contractor';
$lang['signup-input-select-type-supplier']		=	'Supplier';
$lang['signup-input-input-submit-placeholder'] 	= 	'Sign Up';




$GLOBALS['lang'] = $lang;
function write($i)
{
	echo $GLOBALS['lang'][$i];
}
?>