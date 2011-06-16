<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Language" content="en" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>time(t)able Setup Wizard</title>
</head>
<body>
	<h1>time(t)able Setup Wizard</h1>
	<hr />
<?php
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['step']))
	$step = $_GET['step'];
else
	$step = '1';
require('step'.$step.'.php');
?>
	<hr />
	<p>&copy 2011 by <a href="http://ps0ke.de">Ps0ke (Philipp Stephan)</a></p>
</body>
</html>