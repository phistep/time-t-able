<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Meta Data -->
	<meta http-equiv="Content-Language" content="en" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="<?php echo AUTHOR; ?>" />
	<meta name="keywords" content="timetable" />
	<meta name="date" content="<?php echo C_DATE; ?>" />
	<meta name="time(t)able version" content="v1.2" />
	
	<!-- CSS -->
	<link rel="stylesheet" media="screen" type="text/css" href="<?php echo MAIN_URL; ?>css/style.css" title="Standart" />
	<?php
	if($_SESSION['login'] == '1'){
		// logged in
		echo "<link rel=\"stylesheet\" media=\"screen\" type=\"text/css\" href=\"css/usercss.php?u=".$_SESSION['username']."\" />\n";
		echo "\n\t<!-- JS -->\n\t<script type=\"text/javascript\" src=\"js/userjs.php?u=".$_SESSION['username']."\"></script>\n";
		echo "\t<script type=\"text/javascript\" src=\"js/jscolor/jscolor.js\"></script>\n";
	}
	if(isset($_GET['view'])){
		// logged in
		echo "<link rel=\"stylesheet\" media=\"screen\" type=\"text/css\" href=\"css/usercss.php?u=".$_GET['view']."\" />\n";
	}
	?>
	<script type="text/javascript" src="js/script.js"></script>
	
	<!-- Title -->
	<title><?php echo "$title"; ?> <?php echo SEPERATOR; ?> <?php echo LOGO_NAME; ?></title>
</head>
<body>
	<table width="100%" border="0" id="header">
		<tr>
			<td class="headerleft"><a href="<?php echo MAIN_URL; ?>"><?php echo LOGO_NAME; ?></a></td>
			<td class="headermiddle"><?php echo $title ?></td>
			<td class="headerright"><?php echo $linklist ?></td>
		</tr>
	</table>
	<hr />