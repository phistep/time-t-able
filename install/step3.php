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