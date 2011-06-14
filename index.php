<?php
// Global includes
include('include.php');

// Check for language
if(preg_match("/^de.*/", $_SERVER['HTTP_ACCEPT_LANGUAGE']))
	$lang = 'de_DE';
else // fallback
	$lang = 'en_US';
// Load localization
include('strings/'.$lang.'.php');

// Check for login status
if($_SESSION['login'] == '1'){
	// logged in
	// do some random account action stuff here later
}
else {
	// not logged in
	$title = STR_TITLE_HOME;
	$content_tpl = 'preview.tpl';
}

// Header
include('templates/header.tpl');

// Main Content
include('templates/'.$content_tpl); // won't work if logged in for now, will cause errors

// Footer
include('templates/footer.tpl');
?>