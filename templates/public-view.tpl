<?php
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['view'])){
	$username = htmlspecialchars($_GET['view']);
	
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
	if($row['public']){
		
?>
	<div class="centered main">
		<h1><?php echo $username; ?></h1>
		<table border="0" cellpadding="2px" id="timetable">
			<?php
			$query = "	SELECT
							class,
							period
						FROM
							`time-t-able_users`
						WHERE
							ID = \"".$ID."\"";
			$generalcheck = $db->query($query);
			if(!$generalcheck){
				die('Query Error:'.$db->error);
			}
			if($generalcheck->num_rows){
				$row = $generalcheck->fetch_assoc();
					$class = $row['class'];
					$period = $row['period'];
			}
			$query = "	SELECT
							ID,
							timespan
						FROM
							`time-t-able_times`
						WHERE
							user_ID = \"".$ID."\"";
			$timecheck = $db->query($query);
			if(!$timecheck){
				die('Query Error:'.$db->error);
			}
			if($timecheck->num_rows){
				while($row = $timecheck->fetch_assoc()){
					$timesarray[$row['ID']] = $row['timespan'];
				}
			}		
			?>

			<!-- Headlines -->
			<tr>
				<td><h1><?php echo $class; ?><br><?php echo $period; ?></h1></td>
				<td><h1><?php echo STR_DAY_MON; ?></h1></td>
				<td><h1><?php echo STR_DAY_TUE; ?></h1></td>
				<td><h1><?php echo STR_DAY_WED; ?></h1></td>
				<td><h1><?php echo STR_DAY_THU; ?></h1></td>
				<td><h1><?php echo STR_DAY_FRI; ?></h1></td>
			</tr>

			<?php
			for($i = 0; $i < 12; $i++){
				echo"<tr><td><div class=\"lesson\">".($i+1).". ".STR_TABLE_LESSON."<br><span class=\"time\">".$timesarray[$i+1]."</span></div></td>";
				for ($j=0; $j < 5; $j++) {

					$name = '';
					$teacher = '';
					$room = '';
					$subject_ID = '';

					$query = "	SELECT
									subject_ID,
									room								
								FROM
									`time-t-able_table`
								WHERE
									user_ID = \"".$ID."\"
									AND fieldnumber = \"".((5*$i+$j)+1)."\"";
					$tablecheck = $db->query($query);
					if(!$tablecheck){
						die('Query Error:'.$db->error);
					}
					if($tablecheck->num_rows){
						$row = $tablecheck->fetch_assoc();
						$room = $row['room'];
						$subject_ID = $row['subject_ID'];
					}
					$query = "	SELECT
									name,
									teacher								
								FROM
									`time-t-able_subjects`
								WHERE
									user_ID = \"".$ID."\"
									AND ID = \"".$subject_ID."\"";
					$tablecheck = $db->query($query);
					if(!$tablecheck){
						die('Query Error:'.$db->error);
					}
					if($tablecheck->num_rows){
						$row = $tablecheck->fetch_assoc();
						$name = $row['name'];
						$teacher = $row['teacher'];
					}

					echo "
					<td>
						<div class=\"subject_".$subject_ID."\">
							".$name."<br>
							<span class=\"teacher\">".$teacher."</span> <span class=\"room\">".$room."</span>
						</div>
					</td>";

				}
				echo "</tr>";
			}		
			?>
		</table>
	
		<?php echo $username.STR_PUBLIC_SHARING; ?>
		<br /><br />
		<?php echo STR_PUBLIC_DISCLAIMER; ?>
	</div>
<?php
	}
	else{
		echo "<br/><br/><br/><h1>".$username.STR_PUBLIC_NO."</h3><br/><br/><br/>";
	}
}
else{
	// move along, nothing to see here
}

?>