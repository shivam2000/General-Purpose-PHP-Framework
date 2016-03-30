<?php

// this file contains language file
// the $i['hello world'] = 'hello world';
$lang['login-panel-heading']					=	'कृपया लॉगिन करें';
$lang['login-input-username-placeholder']		=	'उपयोगकर्ता नाम';
$lang['login-input-password-placeholder']		=	'पासवर्ड';
$lang['login-input-submit-placeholder']			=	'लॉगिन करें';




$GLOBALS['lang'] = $lang;
function write($i)
{
	echo $GLOBALS['lang'][$i];
}
developer('hindi','1');
?>