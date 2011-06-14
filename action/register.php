<?php
// Global includes
include('../include.php');

if($_SESSION['login'] == '1'){
	// Already logged in, no use for this script
	echo "logged in";
}
else{
	// Choose processing option: Viewing or database action
	if('POST' == $_SERVER['REQUEST_METHOD']){
		// Database action
		// Check for invalid forms
		if(!isset($_POST['username'], $_POST['password'], $_POST['rep-password'], $_POST['email'], $_POST['captcha'])){
			// handle invalid form
			echo "invalid form";
		}
		if ($_SESSION['captcha'] != sha1($_POST['captcha'])) {
			// handle invalid captcha
			echo "invalid captcha";
		}
		if($_POST['rep-password'] != $_POST['password']){
			// handle inconsistent passwords
			echo "inconsistent passwords";
		}
		if(!preg_match("/^[A-Za-z0-9]{3,30}$/", $_POST['username'])){
			// handle invalid username
			echo "invalid username";
		}
		if(!preg_match("/^.+@.+\..+$/", $_POST['email'])){
			// handle fake email
			echo "fake email";
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
					echo "username already taken";
				}
			}
		}
		echo "done";
		
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
		
		// manual 'log in'
		$_SESSION['login'] = '1';
		$_SESSION['ID'] = $ID;
		$_SESSION['username'] = $_POST['username'];
	}
	else{
		// Viewing
		
		$title = STR_TITLE_REGISTER;

		// Header
		include('../templates/header.tpl');

		// Main Content
		include('../templates/register.tpl');

		// Footer
		include('../templates/footer.tpl');
	}
}
?>