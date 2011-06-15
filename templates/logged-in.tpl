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
		<a href="#"><h1><?php echo STR_GENERAL_PREFERENCES; ?></h1></a>
		<hr />
			<table>
				<tr>
					<td><?php echo STR_GENERAL_PERIOD; ?></td>
					<td><input type="text" value="" /></td>
				</tr>
				<tr>
					<td><?php echo STR_GENERAL_CLASS; ?></td>
					<td><input type="text" value="" /></td>
				</tr>
				<tr>
					<td><?php echo STR_GENERAL_PUBLIC; ?></td>
					<td><input type="checkbox" checked="checked" /></td>
				</tr>
				<tr>
					<td><?php echo STR_GENERAL_LINK; ?></td>
					<td><input type="text" value="<?php echo MAIN_URL; ?>?view=<?php echo $_SESSION['username']; ?>" /></td>
				</tr>
				<tr>
					<td>Delete Account (No undo!):<br />Confirm password:<br /><form method="post" action="action/delete.php"><input class="button" value="Good Bye!" name="formaction" type="submit"></td>
					<td><input type="password" value="" name="password" /></form></td>
				</tr>
			</table>
		<hr />
	</div>
	<div class="optionpane">
		<a href="#"><h1><?php echo STR_TIMES; ?></h1></a>
		<hr />
			<table>
				<tr>
					<td>1.<input type="text" value="07:55 - 08:40" /></td>
					<td>7.<input type="text" value="13:00 - 13:45" /></td>
				</tr>
				<tr>
					<td>2.<input type="text" value="08:40 - 09:25" /></td>
					<td>8.<input type="text" value="13:45 - 14:30" /></td>
				</tr>
				<tr>
					<td>3.<input type="text" value="09:40 - 10:25" /></td>
					<td>9.<input type="text" value="14:30 - 15:15" /></td>
				</tr>
				<tr>
					<td>4.<input type="text" value="10:25 - 11:10" /></td>
					<td>10.<input type="text" value="15:15 - 16:00" /></td>
				</tr>
				<tr>
					<td>5.<input type="text" value="11:30 - 12:15" /></td>
					<td>11.<input type="text" value="" /></td>
				</tr>
				<tr>
					<td>6.<input type="text" value="12:15 - 12:55" /></td>
					<td>12.<input type="text" value="" /></td>
				</tr>
			</table>
		<hr />
	</div>
	<div class="optionpane">
		<a href="#"><h1><?php echo STR_SUBJECTS_SUBJECTS; ?></h1></a>
		<hr />
			<table>
				<?php
				for ($i=0; $i < 20; $i++) { 
					echo "\t\t\t\t<tr>\n";
					echo "\t\t\t\t\t<td>".STR_SUBJECTS_NAME."</td>\n";
					echo "\t\t\t\t\t<td><input type=\"test\" value=\"\" /></td>\n";
					echo "\t\t\t\t\t<td>".STR_SUBJECTS_ROOM."</td>\n";
					echo "\t\t\t\t\t<td><input type=\"test\" value=\"\" /></td>\n";
					echo "\t\t\t\t</tr>\n";
					echo "\t\t\t\t<tr>\n";
					echo "\t\t\t\t\t<td>".STR_SUBJECTS_TEACHER."</td>\n";
					echo "\t\t\t\t\t<td><input type=\"test\" value=\"\" /></td>\n";
					echo "\t\t\t\t\t<td>".STR_SUBJECTS_COLOR."</td>\n";
					echo "\t\t\t\t\t<td><input class=\"color\" value=\"FFFFFF\" /></td>\n";
					echo "\t\t\t\t</tr>\n";
					echo "\t\t\t\t<tr><td>&nbsp;</td></tr>\n";
				}
				?>
			</table>
		<hr />
	</div>
	<div class="optionpane">
		<a href="#"><h1><?php echo STR_TABLE_TIMETABLE; ?></h1></a>
		<hr />
			<?php echo STR_TABLE_HELP; ?>
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
			
		<hr />
	</div>
</div>