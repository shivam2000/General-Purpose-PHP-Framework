<?php 

function developer($property,$message)
{
	$_SESSION['developer'][$property] = $message;
}

function developer_show()
{
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
}

	developer('function','1');
?>
