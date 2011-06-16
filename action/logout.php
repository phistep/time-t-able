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
	
	alert(STR_ALERT_LOGOUT_SUCCESS, "success", MAIN_URL, 3);
}
else{
	alert(STR_ALERT_NOTLOGGEDIN, "error", MAIN_URL, 3);
}
?>