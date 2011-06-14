<?php
// Global includes
include('include.php');

// Check for login status
if($_SESSION['login'] == '1'){
	// logged in
	$title = $_SESSION['username'];
	$content_tpl = 'logged-in';
}
else {
	// not logged in
	$title = STR_TITLE_HOME;
	$content_tpl = 'preview';
}

// Header
include('templates/header.tpl');

// Main Content
include('templates/'.$content_tpl.'.tpl'); // won't work if logged in for now, will cause errors

// Footer
include('templates/footer.tpl');
?>