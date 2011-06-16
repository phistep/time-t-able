<?php
// Global includes
include('include.php');

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['view'])){
	// public view
	$title = htmlspecialchars($_GET['view']);
	$content_tpl = 'public-view';
	$linklist = '';
}
// Check for login status
else if($_SESSION['login'] == '1'){
	// logged in
	$title = $_SESSION['username'];
	$linklist = STR_LINK_LOGOUT;
	$content_tpl = 'logged-in';
}
else {
	// not logged in
	$title = STR_TITLE_HOME;
	$linklist = STR_LINK_LOGIN.' '.SEPERATOR.' '.STR_LINK_REGISTER;
	$content_tpl = 'preview';
}

// Header
include('templates/header.tpl');

// Main Content
include('templates/'.$content_tpl.'.tpl'); // won't work if logged in for now, will cause errors

// Footer
include('templates/footer.tpl');
?>