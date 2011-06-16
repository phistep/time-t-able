<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Meta Data -->
	<meta http-equiv="Content-Language" content="en" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
	<!-- CSS -->
	<link rel="stylesheet" media="screen" type="text/css" href="<?php echo MAIN_URL; ?>css/style.css" title="Standart" />
	
	<!-- Title -->
	<title><?php echo LOGO_NAME; ?></title>
	
	<!-- Refresh -->
	<meta http-equiv="refresh" content="<?php echo $delay; ?>;URL=<?php echo $return_url; ?>">
</head>
<body>
	<div class="centered alert <?php echo $type; ?>">
		<?php echo $message; ?>
	</div>
</body>
</html>