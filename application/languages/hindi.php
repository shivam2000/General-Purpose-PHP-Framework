<?php

// this file is language file for hindi
// the $i['hello world'] = 'hello world';

$lang['hello']									=	"नमस्ते";
$lang['how-are-you']							=	"क्या हाल है";
$lang['hope-you-are-good']						=	"आशा है कि आप अच्छे हैं";


$GLOBALS['lang'] = $lang;
function write($i)
{
	echo $GLOBALS['lang'][$i];
}

/*
This is in hindi language.
Make as many files as you want languages to be.
NOTE : MAKE SURE TO INCLUDE REQUIRED META CHARSET ON PAGES
*/


?>