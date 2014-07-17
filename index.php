<?php

	//Used to set the default project to display on local XAMPP server

	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/website/local');
	exit;
?>

Something is wrong with this Website!
