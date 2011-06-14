<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Meta Data -->
	<meta http-equiv="Content-Language" content="en" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="generator" content="TextMate http://macromates.com/" />
	<meta name="author" content="<?php echo AUTHOR; ?>" />
	<meta name="keywords" content="timetable" />
	<meta name="date" content="<?php echo C_DATE; ?>" />
	
	<!-- CSS -->
	<link rel="stylesheet" media="screen" type="text/css" href="<?php echo MAIN_URL; ?>css/style.css" title="Standart" />
	<?php
	if($_SESSION['login'] == '1'){
		// logged in
		echo "\n\t<!-- JS -->\n\t<script type=\"text/javascript\" src=\"js/jscolor/jscolor.js\"></script>\n";
	}
	?>
	
	<!-- Title -->
	<title><?php echo "$title"; ?> &middot; <?php echo LOGO_NAME; ?></title>
</head>
<body>
	<table width="100%" border="0" id="header">
		<tr>
			<td class="headerleft"><?php echo LOGO_NAME; ?></td>
			<td class="headermiddle"><?php echo "$title"?></td>
			<td class="headerright">
				<?php /* link list depending on site */?>
			</td>
		</tr>
	</table>
	<hr />