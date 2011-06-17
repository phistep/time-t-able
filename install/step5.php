<h2>Step 5 - Set permissions for sensible files</h2>
<p>
The templates/ directory is vulnurable to the outside by standart permission settings. As they are no real .php files they can just be downloaded as normal files. This is dangerous because they can optain information about the structure of you code and reveal security issues. You better change the permissions. Default permission setting is 755, you should better set it to 711. If you haven't changed back the permissions for strings/ you should do that now. Here is 755 the best choice. The script can't' do this for you.
<pre>
(recursively for time-t-able/templates)
chmod 711
(for time-t-able/strings)
chmod 755
</pre>
</p>
<p>
<a href="index.php?step=6">Step 6 &gt;&gt;</a>
</p>