<?php
// Global includes
include('../include.php');

if($_SESSION['login'] != '1'){
	// not logged in, can't update any tables for noone
	alert(STR_ALERT_NOTLOGGEDIN, "error", MAIN_URL, 3);
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
				alert(STR_ALERT_SAVE_SUCCESSFULL, "success", MAIN_URL, 1);
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
				alert(STR_ALERT_SAVE_SUCCESSFULL, "success", MAIN_URL, 1);
			break;
			
			case 'subjects':
				// subjects
				$query = '';
				for ($i=1; $i < 21; $i++) { 
					$query = $query."	UPDATE
											`time-t-able_subjects` 
										SET 
											name = \"".$_POST['name_'.$i]."\",
											teacher = \"".$_POST['teacher_'.$i]."\",
											std_room = \"".$_POST['room_'.$i]."\",
											color = \"".$_POST['color_'.$i]."\"
										WHERE
											user_ID = \"".$_SESSION['ID']."\"
											AND ID = \"".$i."\";";
				}
				$subjectcheck = $db->multi_query($query);
				if(!$subjectcheck){
					die('Query Error:'.$db->error);
				}
				alert(STR_ALERT_SAVE_SUCCESSFULL, "success", MAIN_URL, 1);
			break;
			
			case 'table':
				// table
				$query = '';
				for ($i=1; $i < 61; $i++) {
					$room = '';
					if($_POST['room_'.$i] != ""){
						$room = $_POST['room_'.$i];
					}
					else {
						$subquery = "	SELECT
											std_room
										FROM
											`time-t-able_subjects`
										WHERE
											ID = \"".$_POST['subject_'.$i]."\"
											AND user_ID = \"".$_SESSION['ID']."\"";
						$stdroomcheck = $db->query($subquery);
						if(!$stdroomcheck){
							die('Query Error:'.$db->error);
						}
						if($stdroomcheck->num_rows){
							$row = $stdroomcheck->fetch_assoc();
							$room = $row['std_room'];
						}
					}
					
					$query = $query."	UPDATE
											`time-t-able_table`
										SET 
											`subject_ID` = \"".$_POST['subject_'.$i]."\",
											`room` = \"".$room."\"
										WHERE
											`user_ID` = \"".$_SESSION['ID']."\"
											AND `fieldnumber` = \"".$i."\";";
				}
				
				$subjectcheck = $db->multi_query($query);
				if(!$subjectcheck){
					die('Query Error:'.$db->error);
				}
				alert(STR_ALERT_SAVE_SUCCESSFULL, "success", MAIN_URL, 1);
			break;

		}
	}
}
?>