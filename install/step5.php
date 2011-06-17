<h2>Step 5 - Set permissions for sensible files</h2>
<p>
The templates/ directory is vulnurable to the outside by standart permission settings. As they are no real .php files they can just be downloaded as normal files. This is dangerous because they can optain information about the structure of you code and reveal security issues. You better change the permissions. Default permission setting is 755, you should better set it to 711. The script can do this vor you.
</p>
<form method="post" action="step5.php"><input type="submit" value="FIX PERMISSIONS" name="fix-permissions"></form>
<p>
Or you can fix the permissions yourself (using SSH etc.). Perform this command:
<pre>
(recursively for time-t-able/templates)
chmod 711
</pre>
</p>
<p>
<a href="index.php?step=6">Step 6 &gt;&gt;</a>
</p>