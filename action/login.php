<?php
// Global includes
include('../include.php');
include('../strings/en_US.php'); // English localization for now

if($_SESSION['login'] == '1'){
	// Already logged in, no use for this script
}
else{
	// Choose processing option: Viewing or database action
	if('POST' == $_SERVER['REQUEST_METHOD']){
		// Database action
	}
	else{
		// Viewing
		$title = STR_TITLE_LOGIN;

		// Header
		include('../templates/header.tpl');

		// Main Content
		include('../templates/login.tpl');

		// Footer
		include('../templates/footer.tpl');
	}
}
?>