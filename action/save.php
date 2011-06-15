<?php
// Global includes
include('../include.php');

if($_SESSION['login'] != '1'){
	// not logged in, can't update any tables for noone
}
else{
	// Only processing
	if('POST' == $_SERVER['REQUEST_METHOD']){
		switch($_POST['section']){
			
			case 'general':
				// general
				if(isset($_POST['public'])){
					$public = 1;
				}
				else{
					$public = 0;
				}
				
				$query = "	UPDATE
								`time-t-able_users`
							SET
								class = \"".$_POST['class']."\",
								period = \"".$_POST['period']."\",
								public = \"".$public."\"
							WHERE
								ID = \"".$_SESSION['ID']."\"";
				$generalcheck = $db->query($query);
				if(!$generalcheck){
					die('Query Error:'.$db->error);
				}
				if(!$generalcheck->num_rows){
					// error
				}
			break;
			
			case 'times':
				// times				
				$query = '';
				for ($i=1; $i < 13; $i++) { 
					$query = $query."	UPDATE
											`time-t-able_times` 
										SET 
											timespan = \"".$_POST['time_'.$i]."\"
										WHERE
											user_ID = \"".$_SESSION['ID']."\"
											AND ID = \"".$i."\";";
				}

				$timecheck = $db->multi_query($query);
				if(!$timecheck){
					die('Query Error:'.$db->error);
				}
				if(!$timecheck->num_rows){
					// error
				}
			break;
			
			case 'subjects':
				// subjects
			break;
			
			case 'table':
				// table
			break;
			
			default:
		}
	}
}
?>