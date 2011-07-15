<?php
// Global includes
include('../include.php');

header("Content-type: text/javascript");

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['u'])){
	$username = $_GET['u'];
	$query = "	SELECT
					public,
					ID
				FROM
					`time-t-able_users`
				WHERE
					username = \"".$username."\"";
	$usernamecheck = $db->query($query);
	if(!$usernamecheck){
		die('Query Error:'.$db->error);
	}
	if($usernamecheck->num_rows){
		$row = $usernamecheck->fetch_assoc();
		$ID = $row['ID'];
	}

	if($row['public'] || $_SESSION['login']){
		$query = "	SELECT
						std_room							
					FROM
						`time-t-able_subjects`
					WHERE
						user_ID = \"".$ID."\"
					ORDER BY
						ID";
		$tablecheck = $db->query($query);
		if(!$tablecheck){
			die('Query Error:'.$db->error);
		}
		if($tablecheck->num_rows){
			$i = 0;
			echo "var room = new Array();\n";
			
			while($row = $tablecheck->fetch_assoc()){
				$i++;
				if($row['std_room'])
					echo "room[".$i."] = \"".$row['std_room']."\"\n";
			}
		}
	}
}
else{
	// move along, nothing to see here
}
?>