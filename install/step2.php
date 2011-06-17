<h2>Step 2 - Create pw.php</h2>

<p>
You have to store you MySQL connection information in a password file. This wizard will create the file for you when you enter your information here:
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
			<td align="right"><input class="button" value="GENERATE pw.php" name="formaction" type="submit"></td>
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