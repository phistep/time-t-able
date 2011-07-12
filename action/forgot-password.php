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
		$query = "	SELECT
						email,
						ID
					FROM
						`time-t-able_users`
					WHERE
						1";
		$check = $db->query($query);
		if(!$check){
			die('Query Error:'.$db->error);
		}
		if($check->num_rows){
			while($row = $check->fetch_assoc()){
				if ($row['email'] == $_POST['email']){
					$email = $_POST['email'];
					$ID = $row['ID'];
					
					// generate random password
					$randompw = "";
					for ($i = 0; $i < 6; $i++) {
						$randompw .= chr(rand(97, 122));
					}
					
					// update db
					$query = "	UPDATE
									`time-t-able_users`
								SET
									pw_hash = \"".sha1($randompw)."\"
								WHERE
									ID = \"".$ID."\"";
					// perform query
					$check = $db->query($query);

					// check 
					if (!$check){
						die('Query Error: '.$db->error);
					}
					
					// sending the mail
					$header = "MIME-Version: 1.0\nContent-Type: text/plain\nContent-Transfer-Encoding: utf8\nFrom: ".LOGO_NAME." Password Bot <".PW_BOT_EMAIL.">\n";					
					mail($email, STR_FORGOT_MAIL_SUBJECT, STR_FORGOT_MAIL_CONTENT.$randompw, $header);
					
					alert(STR_ALERT_FORGOT_SENT_AND_RESET, "success", MAIN_URL.'action/login.php', 3);
					
				}
			}
		}
		alert(STR_ALERT_FORGOT_EMAIL_NOT_IN_DB, "error", MAIN_URL.'action/forgot-password.php', 5);
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