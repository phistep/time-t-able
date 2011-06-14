<?php
// Global includes
include('../include.php');

if($_SESSION['login'] == '1'){
	// empty session array
	$_SESSION = array();
	
	// empty PHPSESSID Cookie
	if (isset($_COOKIE[session_name()])){
		setcookie(session_name(), '', time() - 3600);       
	}
}
else{
	// Not logged in, no use for logging out
}
?>