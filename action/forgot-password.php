<?php
// Global includes
include('../include.php');

if($_SESSION['login'] == '1'){
	// Already logged in, no use for this script
	alert(STR_ALERT_ALREADYLOGGEDIN, "error", MAIN_URL, 3);
}
else{
	// Choose processing option: Viewing or action
	if('POST' == $_SERVER['REQUEST_METHOD']){
		// action
	}
	else{
		// Viewing
		
		$title = STR_TITLE_FORGOT_PASSWORD;
		$linklist = STR_LINK_LOGIN.' '.SEPERATOR.' '.STR_LINK_REGISTER;

		// Header
		include('../templates/header.tpl');

		// Main Content
		include('../templates/forgot-password.tpl');

		// Footer
		include('../templates/footer.tpl');
	}
}
?>