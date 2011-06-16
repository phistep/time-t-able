<?php
// Global includes
include('../include.php');

if($_SESSION['login'] == '1'){
	// Already logged in, no use for this script
	alert(STR_ALERT_ALREADYLOGGEDIN, "error", MAIN_URL, 3);
}
else{
	// Choose processing option: Viewing or database action
	if('POST' == $_SERVER['REQUEST_METHOD']){
		// Database action
		// Check for invalid forms
		if(!isset($_POST['username'], $_POST['password'], $_POST['rep-password'], $_POST['email'], $_POST['captcha'])){
			// handle invalid form
			alert(STR_ALERT_INVALIDFORM, "error", MAIN_URL.'action/register.php', 3);
		}
		if ($_SESSION['captcha'] != sha1($_POST['captcha'])) {
			// handle invalid captcha
			alert(STR_ALERT_REGISTER_CAPTCHA, "error", MAIN_URL.'action/register.php', 5);
		}
		if($_POST['rep-password'] != $_POST['password']){
			// handle inconsistent passwords
			alert(STR_ALERT_REGISTER_PASSWORDS, "error", MAIN_URL.'action/register.php', 5);
		}
		if(!preg_match("/^[A-Za-z0-9]{3,30}$/", $_POST['username'])){
			// handle invalid username
			alert(STR_ALERT_REGISTER_INVALID_USERNAME, "error", MAIN_URL.'action/register.php', 5);
		}
		if(!preg_match("/^.+@.+\..+$/", $_POST['email'])){
			// handle fake email
			alert(STR_ALERT_REGISTER_EMAIL, "error", MAIN_URL.'action/register.php', 5);
		}
		$query = "	SELECT
						username
					FROM
						`time-t-able_users`
					WHERE
						1";
		$usernamecheck = $db->query($query);
		if(!$usernamecheck){
			die('Query Error:'.$db->error);
		}
		if($usernamecheck->num_rows){
			while($row = $usernamecheck->fetch_assoc()){
				if ($row['username'] == $_POST['username']){
					// handle taken username
					alert(STR_ALERT_REGISTER_TAKEN_USERNAME, "error", MAIN_URL.'action/register.php', 5);
				}
			}
		}
		
		// Creating user db entry
		$query = '	INSERT INTO
						`time-t-able_users`
						(email, username, pw_hash)
					VALUES
						("'.$_POST['email'].'", "'.$_POST['username'].'", "'.sha1($_POST['password']).'")';
		$userinsert = $db->query($query);
		if(!$userinsert){
			die('Query Error:'.$db->error);
		}
		
		// Getting user ID
		$query = '	SELECT
						username,
						ID
					FROM
						`time-t-able_users`
					WHERE
						username = "'.$_POST['username'].'"';
		$userIDcheck = $db->query($query);
		if(!$userIDcheck){
			die('Query Error:'.$db->error);
		}
		if($userIDcheck->num_rows){
			$row = $userIDcheck->fetch_assoc();
			$ID = $row['ID'];
		}
		
		// Inserting empty db entries
		// times
		$values = '';
		for ($i=1; $i < 13; $i++) { 
			$values = $values.'("'.$ID.'", "'.$i.'")';
			if($i<12) $values = $values.', ';
		}
		$query = '	INSERT INTO
						`time-t-able_times`
						(user_ID, ID)
					VALUES
						'.$values;
		$timeinsert = $db->query($query);
		if(!$timeinsert){
			die('Query 1 Error:'.$db->error);
		}
		// subjects
		$values = '';
		for ($i=1; $i < 21; $i++) { 
			$values = $values.'("'.$ID.'", "'.$i.'")';
			if($i<20) $values = $values.', ';
		}
		$query = '	INSERT INTO
						`time-t-able_subjects`
						(user_ID, ID)
					VALUES
						'.$values;
		$subjectinsert = $db->query($query);
		if(!$subjectinsert){
			die('Query 2 Error:'.$db->error);
		}
		// table
		$values = '';
		for ($i=1; $i < 61; $i++) { 
			$values = $values.'("'.$ID.'", "'.$i.'")';
			if($i<60) $values = $values.', ';
		}
		$query = '	INSERT INTO
						`time-t-able_table`
						(user_ID, fieldnumber)
					VALUES
						'.$values;
		$tableinsert = $db->query($query);
		if(!$tableinsert){
			die('Query 3 Error:'.$db->error);
		}
		
		// manual 'log in'
		$_SESSION['login'] = '1';
		$_SESSION['ID'] = $ID;
		$_SESSION['username'] = $_POST['username'];
		
		alert(STR_ALERT_REGISTER_SUCCESS, "success", MAIN_URL, 5);
	}
	else{
		// Viewing
		
		$title = STR_TITLE_REGISTER;
		$linklist = STR_LINK_LOGIN;

		// Header
		include('../templates/header.tpl');

		// Main Content
		include('../templates/register.tpl');

		// Footer
		include('../templates/footer.tpl');
	}
}
?>