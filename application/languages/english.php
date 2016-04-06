<?php

// this file is language file for english
// the $i['hello world'] = 'hello world';

$lang['hello']									=	"Hello";
$lang['how-are-you']							=	"How are you ?";
$lang['hope-you-are-good']						=	"Hope you are good !";


// just in case
$GLOBALS['lang'] = $lang;

function write($i)
{
	echo $GLOBALS['lang'][$i];
}

/*
use the above function to write into different languages.
Note : this is an array, with a named index.
Always try to use meaningful names for elements.

Example Usage 
write('hello');

*/

?>