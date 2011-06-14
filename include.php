<?php
session_start(); // Starting a session
include('strings/pw.php'); // Loading passwords and login information
include('general/connect-to-sql.php'); // Establishing connection to sql database
include('strings/info.php'); // Loading general strings

// Check for language
if(preg_match("/^de.*/", $_SERVER['HTTP_ACCEPT_LANGUAGE']))
	$lang = 'de_DE';
else // fallback
	$lang = 'en_US';
// Load localization
include('strings/'.$lang.'.php');
?>
