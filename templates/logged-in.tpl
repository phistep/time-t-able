<div class="centered main">
	<h1>Your Timetable</h1>
	<table border="0" cellpadding="2px" id="timetable">
		<?php
		$query = "	SELECT
						class,
						period
					FROM
						`time-t-able_users`
					WHERE
						ID = \"".$_SESSION['ID']."\"";
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
						user_ID = \"".$_SESSION['ID']."\"";
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
								user_ID = \"".$_SESSION['ID']."\"
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
								user_ID = \"".$_SESSION['ID']."\"
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
	<div class="optionpane">
		<?php
		$query = "	SELECT
						class,
						period,
						public
					FROM
						`time-t-able_users`
					WHERE
						ID = \"".$_SESSION['ID']."\"";
		$generalcheck = $db->query($query);
		if(!$generalcheck){
			die('Query Error:'.$db->error);
		}
		if($generalcheck->num_rows){
			$row = $generalcheck->fetch_assoc();
				$class = $row['class'];
				$period = $row['period'];
				if($row['public']){
					$public = 'checked="checked"';
				}
		}
		
		?>
		
		<a href="#"><h1><?php echo STR_GENERAL_PREFERENCES; ?></h1></a>
		<hr />
			<form method="post" action="action/save.php">
				<input type="hidden" name="section" value="general" />
				<table>
					<tr>
						<td><label for="period"><?php echo STR_GENERAL_PERIOD; ?></label></td>
						<td><input name="period" id="period" type="text" value="<?php echo $period; ?>" /></td>
					</tr>
					<tr>
						<td><label for="class"><?php echo STR_GENERAL_CLASS; ?></label></td>
						<td><input name="class" id="class" type="text" value="<?php echo $class; ?>" /></td>
					</tr>
					<tr>
						<td><label for="public"><?php echo STR_GENERAL_PUBLIC; ?></label></td>
						<td><input name="public" id="public" type="checkbox" <?php echo $public; ?> /></td>
					</tr>
					<tr>
						<td><label for="link"><?php echo STR_GENERAL_LINK; ?></label></td>
						<td><input type="text" id="link" readonly="readonly" value="<?php echo MAIN_URL; ?>?view=<?php echo $_SESSION['username']; ?>" /></td>
					</tr>
				</table>
				<input class="button" value="<?php echo STR_SAVE_BUTTON; ?>" name="formaction" type="submit" />	
			</form>
			<br />
			<input type="button" value="<?php echo STR_GENERAL_DEL_SHOW; ?>" />
			<form method="post" action="action/delete.php">
				<table>
					<tr>
						<td><label for="password"><?php echo STR_GENERAL_DEL_CONFIRM; ?></label></td>
						<td><input type="password" id="password" value="" name="password" /></form></td>
					</tr>
					<tr>
						<td><?php echo STR_GENERAL_DEL_NOUNDO; ?></td>
						<td><input class="button" value="<?php echo STR_GENERAL_DEL_GO; ?>" name="formaction" type="submit" /></td>
					</tr>
				</table>
			</form>
		<hr />
	</div>
	<div class="optionpane">
		<?php
		$query = "	SELECT
						ID,
						timespan
					FROM
						`time-t-able_times`
					WHERE
						user_ID = \"".$_SESSION['ID']."\"";
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
		
		<a href="#"><h1><?php echo STR_TIMES; ?></h1></a>
		<hr />
			<form method="post" action="action/save.php">
				<input type="hidden" name="section" value="times" />
				<table>
					<tr>
						<td><label for="time_1">1.</label><input type="text" name="time_1" id="time_1" value="<?php echo $timesarray['1']; ?>" /></td>
						<td><label for="time_7">7.</label><input type="text" name="time_7" id="time_7" value="<?php echo $timesarray['7']; ?>" /></td>
					</tr>
					<tr>
						<td><label for="time_2">2.</label><input type="text" name="time_2" id="time_2" value="<?php echo $timesarray['2']; ?>" /></td>
						<td><label for="time_8">8.</label><input type="text" name="time_8" id="time_8" value="<?php echo $timesarray['8']; ?>" /></td>
					</tr>
					<tr>
						<td><label for="time_3">3.</label><input type="text" name="time_3" id="time_3" value="<?php echo $timesarray['3']; ?>" /></td>
						<td><label for="time_9">9.</label><input type="text" name="time_9" id="time_9" value="<?php echo $timesarray['9']; ?>" /></td>
					</tr>
					<tr>
						<td><label for="time_4">4.</label><input type="text" name="time_4" id="time_4" value="<?php echo $timesarray['4']; ?>" /></td>
						<td><label for="time_10">10.</label><input type="text" name="time_10" id="time_10" value="<?php echo $timesarray['10']; ?>" /></td>
					</tr>
					<tr>
						<td><label for="time_5">5.</label><input type="text" name="time_5" id="time_5" value="<?php echo $timesarray['5']; ?>" /></td>
						<td><label for="time_11">11.</label><input type="text" name="time_11" id="time_11" value="<?php echo $timesarray['11']; ?>" /></td>
					</tr>
					<tr>
						<td><label for="time_6">6.</label><input type="text" name="time_6" id="time_6" value="<?php echo $timesarray['6']; ?>" /></td>
						<td><label for="time_12">12.</label><input type="text" name="time_12" id="time_12" value="<?php echo $timesarray['12']; ?>" /></td>
					</tr>
				</table>
				<input class="button" value="<?php echo STR_SAVE_BUTTON; ?>" name="formaction" type="submit" />
			</form>
		<hr />
	</div>
	<div class="optionpane">
		<a href="#"><h1><?php echo STR_SUBJECTS_SUBJECTS; ?></h1></a>
		<hr />
			<form method="post" action="action/save.php">
				<input type="hidden" name="section" value="subjects" />
				<input class="button" value="<?php echo STR_SAVE_BUTTON; ?>" name="formaction" type="submit" />
				<table>
					<?php
					$query = "	SELECT
									ID,
									name,
									teacher,
									std_room,
									color
								FROM
									`time-t-able_subjects`
								WHERE
									user_ID = \"".$_SESSION['ID']."\"
								ORDER BY
									ID";
					$subjectcheck = $db->query($query);
					if(!$subjectcheck){
						die('Query Error:'.$db->error);
					}
					if($subjectcheck->num_rows){
						$i = 0;
						while($row = $subjectcheck->fetch_assoc()){
							$i++;
							echo "\t\t\t\t\t<tr>\n";
							echo "\t\t\t\t\t\t<td><label for=\"name_".$i."\">".STR_SUBJECTS_NAME."</label></td>\n";
							echo "\t\t\t\t\t\t<td><input type=\"text\" name=\"name_".$i."\" id=\"name_".$i."\" value=\"".$row['name']."\" /></td>\n";
							echo "\t\t\t\t\t\t<td><label for=\"room_".$i."\">".STR_SUBJECTS_ROOM."</label></td>\n";
							echo "\t\t\t\t\t\t<td><input type=\"text\" name=\"room_".$i."\" id=\"room_".$i."\" value=\"".$row['std_room']."\" /></td>\n";
							echo "\t\t\t\t\t</tr>\n";
							echo "\t\t\t\t\t<tr>\n";
							echo "\t\t\t\t\t\t<td><label for=\"teacher_".$i."\">".STR_SUBJECTS_TEACHER."</label></td>\n";
							echo "\t\t\t\t\t\t<td><input type=\"text\" name=\"teacher_".$i."\" id=\"teacher_".$i."\" value=\"".$row['teacher']."\" /></td>\n";
							echo "\t\t\t\t\t\t<td><label for=\"color_".$i."\">".STR_SUBJECTS_COLOR."</label></td>\n";
							echo "\t\t\t\t\t\t<td><input class=\"color\" name=\"color_".$i."\" id=\"color_".$i."\" value=\"".$row['color']."\" /></td>\n";
							echo "\t\t\t\t\t</tr>\n";
							echo "\t\t\t\t\t<tr><td>&nbsp;</td></tr>\n";
						}
					}
					?>
				</table>
				<input class="button" value="<?php echo STR_SAVE_BUTTON; ?>" name="formaction" type="submit" />
			</form>
		<hr />
	</div>
	<div class="optionpane">
		<a href="#"><h1><?php echo STR_TABLE_TIMETABLE; ?></h1></a>
		<hr />
			<form method="post" action="action/save.php">
				<input type="hidden" name="section" value="table" />
				
				<?php echo STR_TABLE_HELP; ?>
				<br /><br />
				<input class="button" value="<?php echo STR_SAVE_BUTTON; ?>" name="formaction" type="submit" />
				
				<table border="0" cellpadding="2px" id="timetable">
					<tr>
						<td><h1></h1></td>
						<td><h1><?php echo STR_DAY_MON; ?></h1></td>
						<td><h1><?php echo STR_DAY_TUE; ?></h1></td>
						<td><h1><?php echo STR_DAY_WED; ?></h1></td>
						<td><h1><?php echo STR_DAY_THU; ?></h1></td>
						<td><h1><?php echo STR_DAY_FRI; ?></h1></td>
					</tr>
					<?php
					// get all subjects
					$query = "	SELECT
									name,
									ID
								FROM
									`time-t-able_subjects`
								WHERE
									user_ID = \"".$_SESSION['ID']."\"";
					$subjectcheck = $db->query($query);
					if(!$subjectcheck){
						die('Query Error:'.$db->error);
					}
					if($subjectcheck->num_rows){
						while($row = $subjectcheck->fetch_assoc()){
							if ($row['name'] != ''){
								$subjectlist = $subjectlist."\t\t\t\t\t\t\t\t\t".'<option value="'.$row['ID'].'">'.$row['name'].'</option>'."\n";
							}
						}
					}
				
					// Displaying the table
					for($i = 0; $i < 12; $i++){
						echo"<tr><td>".($i+1).". ".STR_TABLE_LESSON."</td>";
						for ($j=0; $j < 5; $j++) { 
							echo "
							<td>
								<select name=\"subject_".((5*$i+$j)+1)."\">
									<option value=\"\">".STR_TABLE_CHOOSE."</option>\n".$subjectlist."
								</select>
								<br>
								<input name=\"room_".((5*$i+$j)+1)."\" type=\"text\" size=\"5\" value=\"\">
							</td>";

						}
						echo "</tr>";
					}
					?>
				</table>
				<input class="button" value="<?php echo STR_SAVE_BUTTON; ?>" name="formaction" type="submit" />
			</form>
		<hr />
	</div>
</div>