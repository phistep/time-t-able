<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create-pw-php'])){
$file = fopen('../strings/pw.php', 'w') or die("Error while creating file!");
$data =
"<?php
define('SQL_USER', '".$_POST['sql-user']."');
define('SQL_PASSWORD', '".$_POST['sql-pw']."');
define('SQL_DATABASE', '".$_POST['sql-db']."');
define('SQL_HOST', '".$_POST['sql-host']."');
?>";
fwrite($file, $data);
fclose($file);
header('location:index.php?step=3');
exit();
}
?>
<h2>Step 2 - Create pw.php</h2>

<p>
You have to store you MySQL connection information in a password file. This wizard will create the file for you. IMPORTANT: PHP can only create files when the folder's permissions are set to '777'. You have to set this using your FTP programm. Enter your information here:
</p>
<form method="post" action="step2.php" style="width:300px">
  <fieldset>
	<legend>SQL Connection Information</legend>
	<table border="0">
		<tr>
			<td><label for="sql-user">SQL-USER:</label></td>
			<td><input name="sql-user" id="sql-user" size="24" type="text" value=""></td>
		</tr>
		<tr>
			<td><label for="sql-pw">SQL-PASSWORD:</label></td>
			<td><input name="sql-pw" id="sql-pw" size="24" type="text" value=""></td>
		</tr>
		<tr>
			<td><label for="sql-db">SQL-DATABASE:</label></td>
			<td><input name="sql-db" id="sql-db" size="24" type="text" value=""></td>
		</tr>
		<tr>
			<td><label for="sql-host">SQL-HOST:</label></td>
			<td><input name="sql-host" id="sql-host" size="24" type="text" value=""></td>
		</tr>
		<tr>
			<td></td>
			<td align="right"><input class="button" value="GENERATE pw.php" name="create-pw-php" type="submit"></td>
		</tr>
	</table>
  </fieldset>
</form>
<p>
You can also generate the file manually:
<pre>
&lt;?php
define('SQL_USER', '<SQL Username>');
define('SQL_PASSWORD', '<SQL Password>');
define('SQL_DATABASE', '<SQL Database>');
define('SQL_HOST', '<SQL Host>');
?&gt
</pre>
and place it into:
<pre>time-t-able/strings/pw.php</pre>
</p>
<p><a href="index.php?step=3">Step 3 &gt;&gt;</a></p>