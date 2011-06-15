<?php
// Global includes
include('../include.php');

if($_SESSION['login'] == '1'){
	
	if(!isset($_POST['password'])){
		// handle invalid form
	}
	// check for right password
	$query = "	SELECT
					pw_hash
				FROM
					`time-t-able_users`
				WHERE
					ID = ".$_SESSION['ID'];
	$passwordcheck = $db->query($query);
	if(!$passwordcheck){
		die('Query Error:'.$db->error);
	}
	if($passwordcheck->num_rows){
		$row = $passwordcheck->fetch_assoc();
		if ($row['pw_hash'] == sha1($_POST['password'])){
			// actual deleting
			$query =
				'DELETE FROM
					`time-t-able_users`
				WHERE
					ID = "'.$_SESSION['ID'].'";
				DELETE FROM
					`time-t-able_subjects`
				WHERE
					user_ID = "'.$_SESSION['ID'].'";
				DELETE FROM
					`time-t-able_times`
				WHERE
					user_ID = "'.$_SESSION['ID'].'";
				DELETE FROM
					`time-t-able_table`
				WHERE
					user_ID = "'.$_SESSION['ID'].'";';
					
			// perform multi_query
			$check = $db->multi_query($query);
				
			// check 
			if (!$check){
				die('Query Error: '.$db->error);
			}
			
			// else alert for user being deleted
			echo "deleted";
			
			// manual logout
			$_SESSION = array();
		}
		else{
			// user fail handling
		}
	}
}
else{
	// Not logged in, can't delete
}
?>