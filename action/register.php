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
			die("invalid form");
		}
		if ($_SESSION['captcha'] != sha1($_POST['captcha'])) {
			// handle invalid captcha
			die("invalid captcha");
		}
		if($_POST['rep-password'] != $_POST['password']){
			// handle inconsistent passwords
			die("inconsistent passwords");
		}
		if(!preg_match("/^[A-Za-z0-9]{3,30}$/", $_POST['username'])){
			// handle invalid username
			die("invalid username");
		}
		if(!preg_match("/^.+@.+\..+$/", $_POST['email'])){
			// handle fake email
			die("fake email");
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