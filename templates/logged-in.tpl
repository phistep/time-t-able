<style type="text/css">
	.disclaimer		{font-family: Courier; text-align: left;}
	.stunde			{}
	.Pause			{background-color: #fff; border: #000 1px dashed; color: #fff;}
	.zeit			{font-size: 10px;}
	.lehrer			{font-size: 10px; text-align: left; width: 50%;}
	.raum			{font-size: 10px; text-align: right; width: 50%;}
	/* Colored Style */
	.Biologie 		{background-color: #b5b5b5;}
	.Latein			{background-color: #fff; border: #000 1px solid;}
	.Boersenspiel	{background-color: #fff; border: #000 1px solid;}
	.Sport			{background-color: #fff; border: #000 1px solid;}
	.Italienisch	{background-color: #fff; border: #000 1px solid;}
	.Mathematik		{background-color: #71a2da;}
	.Religion		{background-color: #c471da;}
	.Physik			{background-color: #000; color: #fff;}
	.Englisch		{background-color: #47cc38;}
	.Wirtschaft-Recht {background-color: #e3b392; font-size: 14px;}
	.Geographie		{background-color: #e3b392;}
	.Deutsch 		{background-color: #ff4747;}
	.Chemie			{background-color: #ffdd33;}
	.Informatik		{background-color: #fff; border: #000 1px solid;}
	.Geschichte		{background-color: #ffaa33;}
	.Sozialkunde	{background-color: #ffaa33;}
	.Profil			{background-color: #fff; border: #000 1px solid;}
	.Musik			{background-color: #fff; border: #000 1px solid;} 
	.Kunst			{background-color: #fff; border: #000 1px solid;}
</style>


<div class="centered main">
	<h1>Your Timetable</h1>
	<table border="0" cellpadding="2px" id="timetable">

		<!-- Headlines -->
		<tr>
			<td><h1>10c<br>2010/2011 HJ2</h1></td>
			<td><h1><?php echo STR_DAY_MON; ?></h1></td>
			<td><h1><?php echo STR_DAY_TUE; ?></h1></td>
			<td><h1><?php echo STR_DAY_WED; ?></h1></td>
			<td><h1><?php echo STR_DAY_THU; ?></h1></td>
			<td><h1><?php echo STR_DAY_FRI; ?></h1></td>
		</tr>

		<!-- 1. -->
		<tr>
			<td><div class="stunde">1. Stunde<br><span class="zeit">07:55 - 08:40</span></div></td>
			<td><div class="Religion">Religion<br><span class="lehrer">Finkenberg</span> <span class="raum">N235</span></div></td>
			<td><div class="Physik">Physik<br><span class="lehrer">Bock</span> <span class="raum">F09</span></div></td>
			<td><div class="Physik">Physik<br><span class="lehrer">Bock</span> <span class="raum">F07</span></div></td>
			<td><div class="Deutsch">Deutsch<br><span class="lehrer">Kramer</span> <span class="raum">N235</span></div></td>
			<td><div class="Wirtschaft-Recht">Wirtschaft &amp; Recht<br><span class="lehrer">Hosak</span> <span class="raum">N235</span></div></td>
		</tr>

		<!-- 2. -->
		<tr>
			<td><div class="stunde">2. Stunde<br><span class="zeit">08:40 - 09:25</span></div></td>
			<td><div class="Chemie">Chemie<br><span class="lehrer">Seefried</span> <span class="raum">F07</span></div></td>
			<td><div class="Mathematik">Mathematik<br><span class="lehrer">Eisermann</span> <span class="raum">N235</span></div></td>
			<td><div class="Latein">Latein<br><span class="lehrer">Pietschmann</span> <span class="raum">N235</span></div></td>
			<td><div class="Geographie">Geographie<br><span class="lehrer">Klammer</span> <span class="raum">N235</span></div></td>
			<td><div class="Englisch">Englisch<br><span class="lehrer">Kress</span> <span class="raum">N235</span></div></td>
		</tr>

		<!-- 3. -->
		<tr>
			<td><div class="stunde">3. Stunde<br><span class="zeit">09:40 - 10:25</span></div></td>
			<td><div class="Latein">Latein<br><span class="lehrer">Pietschmann</span> <span class="raum">N235</span></div></td>
			<td><div class="Sport">Sport<br><span class="lehrer">Kramer</span> <span class="raum">Sporthalle 2</span></div></td>
			<td><div class="Biologie">Biologie<br><span class="lehrer">K&ouml;rner</span> <span class="raum">F17</span></div></td>
			<td><div class="Latein">Latein<br><span class="lehrer">Pietschmann</span> <span class="raum">N235</span></div></td>
			<td><div class="Sozialkunde">Sozialkunde<br><span class="lehrer">Toepffer</span> <span class="raum">N235</span></div></td>
		</tr>

		<!-- 4. -->
		<tr>
			<td><div class="stunde">4. Stunde<br><span class="zeit">10:25 - 11:10</span></div></td>
			<td><div class="Englisch">Englisch<br><span class="lehrer">Kress</span> <span class="raum">N235</span></div></td>
			<td><div class="Sport">Sport<br><span class="lehrer">Kramer</span> <span class="raum">Sporthalle 2</span></div></td>
			<td><div class="Chemie">Chemie<br><span class="lehrer">Seefried</span> <span class="raum">F04</span></div></td>
			<td><div class="Geschichte">Geschichte<br><span class="lehrer">Alin</span> <span class="raum">N235</span></div></td>
			<td><div class="Deutsch">Deutsch<br><span class="lehrer">Kramer</span> <span class="raum">N235</span></div></td>
		</tr>

		<!-- 5. -->
		<tr>
			<td><div class="stunde">5. Stunde<br><span class="zeit">11:30 - 12:15</span></div></td>
			<td><div class="Profil">Ch / Ph Profil<br><span class="lehrer">Seefried / Bock</span> <span class="raum">F07 / F09</span></div></td>
			<td><div class="Geographie">Geographie<br><span class="lehrer">Klammer</span> <span class="raum">N235</span></div></td>
			<td><div class="Mathematik">Mathematik<br><span class="lehrer">Eisermann</span> <span class="raum">N235</span></div></td>
			<td><div class="Musik">Musik<br><span class="lehrer">Sonnleitner</span> <span class="raum">F44</span></div></td>
			<td><div class="Informatik">Informatik<br><span class="lehrer">Greiner</span> <span class="raum">F15</span></div></td>
		</tr>

		<!-- 6. -->
		<tr>
			<td><div class="stunde">6. Stunde<br><span class="zeit">12:15 - 12:55</span></div></td>
			<td><div class="Profil">Chemie Profil<br><span class="lehrer">Seefried</span> <span class="raum">F07</span></div></td>
			<td><div class="Englisch">Englisch<br><span class="lehrer">Kress</span> <span class="raum">N235</span></div></td>
			<td><div class="Deutsch">Deutsch<br><span class="lehrer">Kramer</span> <span class="raum">N235</span></div></td>
			<td><div class="Informatik">Informatik<br><span class="lehrer">Greiner</span> <span class="raum">F15</span></div></td>
			<td><div class="Mathematik">Mathematik<br><span class="lehrer">Eisermann</span> <span class="raum">N235</span></div></td>
		</tr>

		<!-- Pause -->
		<tr>
			<td><div class="stunde">Pause<br><span class="zeit">13:00 - 13:45</span></div></td>
			<td><div class="Latein">Latein Int.<br><span class="lehrer">Pietschmann</span> <span class="raum">N235</span></div></td>
			<td><div class="Pause">Mittags-<br>Pause</div></td>
			<td><div class="Pause">Mittags-<br>Pause</div></td>
			<td><div class="Pause">Mittags-<br>Pause</div></td>
			<td></td>
		</tr>

		<!-- 7. -->
		<tr>
			<td><div class="stunde">7. Stunde<br><span class="zeit">13:45 - 14:30</span></div></td>
			<td></td>
			<td><div class="Wirtschaft-Recht">Wirtschaft &amp; Recht<br><span class="lehrer">Hosak</span> <span class="raum">N235</span></div></td>
			<td><div class="Italienisch">Italienisch<br><span class="lehrer">von Rhein</span> <span class="raum">202</span></div></td>
			<td><div class="Kunst">Kunst<br><span class="lehrer">Rudloff-Seitz</span> <span class="raum">E40</span></div></td>
			<td></td>
		</tr>

		<!-- 8. -->
		<tr>
			<td><div class="stunde">8. Stunde<br><span class="zeit">14:30 - 15:15</span></div></td>
			<td></td>
			<td><div class="Biologie">Biologie<br><span class="lehrer">K&ouml;rner</span> <span class="raum">F09</span></div></td>
			<td><div class="Italienisch">Italienisch<br><span class="lehrer">von Rhein</span> <span class="raum">202</span></div></td>
			<td><div class="Religion">Religion<br><span class="lehrer">Finkenberg</span> <span class="raum">N235</span></div></td>
			<td></td>
		</tr>
	
		<!-- 9. -->
		<tr>
			<td><div class="stunde">9. Stunde<br><span class="zeit">15:15 - 16:00</span></div></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

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
					for($i = 0; $i < 10; $i++){
						echo"<tr><td>".($i+1).". ".STR_TABLE_LESSON;
						for ($j=0; $j < 5; $j++) { 
							echo "
							<td>
								<div class=\"\">
									<select name=\"subject_".((5*$i+$j)+1)."\">
										<option>".STR_TABLE_CHOOSE."</option>\n".$subjectlist."
									</select>
									<br>
									<input name=\"room_".((5*$i+$j)+1)."\" type=\"text\" size=\"5\" value=\"\">
								</div>
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