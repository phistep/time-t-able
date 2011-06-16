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
		if(!isset($_POST['username'], $_POST['password'])){
			alert(STR_ALERT_INVALIDFORM, "error", MAIN_URL.'action/login.php', 3);
		}
		$password = $_POST['password'];
		
		$query = "	SELECT
						username,
						ID
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
					$ID = $row['ID'];
				}
			}
		}
		if($ID){
			$query = "	SELECT
							pw_hash
						FROM
							`time-t-able_users`
						WHERE
							ID = ".$ID;
			$passwordcheck = $db->query($query);
			if(!$passwordcheck){
				die('Query Error:'.$db->error);
			}
			if($passwordcheck->num_rows){
				while($row = $passwordcheck->fetch_assoc()){
					if ($row['pw_hash'] == sha1($_POST['password'])){
						$_SESSION['login'] = '1';
						$_SESSION['ID'] = $ID;
						$_SESSION['username'] = $_POST['username'];
						alert(STR_ALERT_LOGIN_SUCCESS, "success", MAIN_URL, 3);
					}
					else{
						alert(STR_ALERT_WRONGPW, "error", MAIN_URL.'action/login.php', 3);
					}
				}
			}
		}
		else{
			alert(STR_ALERT_WRONGUSERNAME, "error", MAIN_URL.'action/login.php', 3);
		}
	}
	else{
		// Viewing
		
		$title = STR_TITLE_LOGIN;
		$linklist = STR_LINK_REGISTER;

		// Header
		include('../templates/header.tpl');

		// Main Content
		include('../templates/login.tpl');

		// Footer
		include('../templates/footer.tpl');
	}
}
?>