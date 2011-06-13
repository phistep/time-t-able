<?php
// Global includes
include('general/include.php');
include('strings/en_US.php'); // English localization for now

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
include('templates/'.$content_tpl);

// Footer
include('templates/footer.tpl');
?>