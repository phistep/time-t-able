<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['generate-sql'])){
include('../strings/pw.php');
include('../general/connect-to-sql.php');

$usersfile = fopen('sql/time-t-able_users.sql', 'r') or die("Error while creating file! Propably your permissions are not set correctly. 777 for strings/");
$usersquery = fread($usersfile, filesize('sql/time-t-able_users.sql'));
fclose($usersfile);
$timesfile = fopen('sql/time-t-able_times.sql', 'r') or die("Error while creating file! Propably your permissions are not set correctly. 777 for strings/");
$timesquery = fread($timesfile, filesize('sql/time-t-able_times.sql'));
fclose($timesfile);
$subjectsfile = fopen('sql/time-t-able_subjects.sql', 'r') or die("Error while creating file! Propably your permissions are not set correctly. 777 for strings/");
$subjectsquery = fread($subjectsfile, filesize('sql/time-t-able_subjects.sql'));
fclose($subjectsfile);
$tablefile = fopen('sql/time-t-able_table.sql', 'r') or die("Error while creating file! Propably your permissions are not set correctly. 777 for strings/");
$tablequery = fread($tablefile, filesize('sql/time-t-able_table.sql'));
fclose($tablefile);

$check = $db->multi_query($usersquery.$timesquery.$subjectsquery.$tablequery);
if(!$check)
	die('Query Error:'.$db->error);

header('location:index.php?step=4');
exit();
}
?>
<h2>Step 3 - Create MySQL database</h2>
<p>
Now we need the MySQL database to store userinformation. The four tables are:
<pre>
`time-t-able_users`
`time-t-able_times`
`time-t-able_subjects`
`time-t-able_table`
</pre>
The script can generate them for you.<br /><br />
<form method="post" action="step3.php"><input type="submit" value="CREATE SQL tables" name="generate-sql"></form><br />
or you can create the tables yourself by perform these queries:
<pre>
<?php
include('sql/time-t-able_users.sql');
echo "\n\n";
include('sql/time-t-able_times.sql');
echo "\n\n";
include('sql/time-t-able_subjects.sql');
echo "\n\n";
include('sql/time-t-able_table.sql');
?>
</pre>
</p>
<p>
<a href="index.php?step=4">Step 4 &gt;&gt;</a>
</p>