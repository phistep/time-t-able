<?php
// Global includes
include('../include.php');

header("Content-type: text/css");

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
						color							
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
			while($row = $tablecheck->fetch_assoc()){
				$i++;
				if($row['color']){
					echo ".subject_".$i."\t{\n\tbackground-color:#".$row['color'].";\n";
				
					$r = hexdec(substr($row['color'], 0, 2));
					$g = hexdec(substr($row['color'], 2, 2));
					$b = hexdec(substr($row['color'], 4, 2));
					
					if(($r + $g + $b) > 255)
						echo "\tcolor:#000;\n}";
					else
						echo "\tcolor:#FFF;\n}";
						
				}					
			}
		}
	}
}
else{
	// move along, nothing to see here
}
?>