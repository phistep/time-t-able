<h2>Step 4 - Create info.php</h2>
<p>
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
</p>
<form method="post" action="step4.php">
  <fieldset>
	<legend>Information</legend>
	<table border="0">
		<tr>
			<td><label for="logo_name">LOGO_NAME</label></td>
			<td><input name="logo_name" id="logo_name" size="24" type="text" value="time(t)able"></td>
			<td>The name of the service, appearing in the title, on top of each page.</td>
		</tr>
		<tr>
			<td><label for="author">AUTHOR</label></td>
			<td><input name="author" id="author" size="24" type="text" value=""></td>
			<td>Your or the webmasters (nick)name, apperaing in the bottom of each page.</td>
		</tr>
		<tr>
			<td><label for="author_url">AUTHOR_URL</label></td>
			<td><input name="author_url" id="author_url" size="24" type="text" value=""></td>
			<td>Link to the webmaster's website/twitter/what-ever.</td>
		</tr>
		<tr>
			<td><label for="c_date">C_DATE</label></td>
			<td><input name="c_date" id="c_date" size="24" type="text" value=""></td>
			<td>Date copyrighted/last updated to indecate if its old shit or still on top of the nodge.</td>
		</tr>
		<tr>
			<td><label for="about_url">ABOUT_URL</label></td>
			<td><input name="about_url" id="about_url" size="24" type="text" value=""></td>
			<td>Linking to the about page, probably containing legal info or some stuff like this.</td>
		</tr>
		<tr>
			<td><label for="contact_url">CONTACT_URL</label></td>
			<td><input name="contact_url" id="contact_url" size="24" type="text" value=""></td>
			<td>Link for contacting the webmaster, probably a mailto:// address.</td>
		</tr>
		<tr>
			<td><label for="abuse_email">ABUSE_EMAIL</label></td>
			<td><input name="abuse_email" id="abuse_email" size="24" type="text" value=""></td>
			<td>mail address for abuse ande complains. No mailto://  !!</td>
		</tr>
		<tr>
			<td><label for="main_url">MAIN_URL</label></td>
			<td><input name="main_url" id="main_url" size="24" type="text" value=""></td>
			<td>URL under which the site will be hosted. Must contain 'http://' and end with a '/'! E.g.: 'http://time-t-able.psoke.de/'</td>
		</tr>
		<tr>
			<td><label for="powered_by">POWERED_BY</label></td>
			<td><input name="powered_by" id="powered_by" readonly size="24" type="text" value="Powered by <a href=&quot;http://www.psoke.de/other-projects/time-t-able/&quot;>time(t)able</a>"></td>
			<td>Powered by message. This is the perfect place to fullfill the 'name the authorship' part of the cc license. Please leave it and the link there :)</td>
		</tr>
		<tr>
			<td><label for="seperator">SEPERATOR</label></td>
			<td><input name="seperator" id="seperator" size="24" type="text" value=""></td>
			<td>Seperator between link lists. Good ones are: &middot; = &ampmiddot or - or &#126; = &amp;#126;</td>
		</tr>
		<tr>
			<td></td>
			<td align="right"><input class="button" value="GENERATE info.php" name="formaction" type="submit"></td>
		</tr>
	</table>
  </fieldset>
</form>
<p>
You can also generate the file manually:
<pre>
&lt;?php
define('LOGO_NAME', 'time(t)able'); // The name of the service, appearing in the title, on top and bottom of each page
define('AUTHOR', ''); // The 'Author' of the webpage
define('AUTHOR_URL', ''); // Link to the author's website/twitter/what ever
define('C_DATE', ''); // Date copyrighted/last updated to indecate if its old shit or still on top of the nodge
define('ABOUT_URL', ''); // Linking to the about page, probably containing legal info or some stuff like this
define('CONTACT_URL', ''); // Link for contacting the webmaster, probably a mailto:// address
define('ABUSE_EMAIL', ''); // Email address for abuse ande complains
define('MAIN_URL', ''); // Url of the root directory of the site
define('POWERED_BY', 'Powered by <a href=&quot;http://www.psoke.de/other-projects/time-t-able/&quot;>time(t)able</a>'); // Powered by message. This is the perfect place to fullfill the 'name the authorship' part of the cc license. Please leave it and the link there :)
define('SEPERATOR', ''); // Seperator between link lists
?&gt
</pre>
and place it into:
<pre>time-t-able/strings/info.php</pre>
</p>
<p>
<a href="index.php?step=5">Step 5 &gt;&gt;</a>
</p>