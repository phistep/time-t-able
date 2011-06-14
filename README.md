# time(t)able

## About time(t)able
`time(t)able` (pronounced timeable) is a web-based application to manage timetables. I used to have my personal timetable on my homepage written in obfuscated table-layouted html. Originally only meant for personal use, classmates started to use it as well and soon I had a hand full of people relaying on my online timetable. This works good for a few people in the same class using the same timetable, but soon we won't be in one class anymore, instead having personal courses with individual timetables. So I started this project to provide a solution for me and my friends to still have the timetable online and always available.

## Cloning and self-hosting
Before I'm done with the main code and will be able to write an install file you have to manually setup your passwords and databases. Getting the source with git installed ist very easy:
	$ git clone https://github.com/Ps0ke/time-t-able.git`
	$ cd time-t-able`

then you have to setup your SQL password file:
	$ cd strings
	$ touch pw.php

Open the file with the editor of your choice and add the following code (with your passwords of course):
	<?php
	define('SQL_USER', 'root');
	define('SQL_PASSWORD', '');
	define('SQL_DATABASE', 'time-t-able');
	define('SQL_HOST', 'localhost');
	?>

Then you have to set up your Database. You need at least this one table:
	CREATE TABLE IF NOT EXISTS `time-t-able_core_users` (
	  `ID` int(11) NOT NULL AUTO_INCREMENT,
	  `email` varchar(100) NOT NULL,
	  `username` varchar(30) NOT NULL,
	  `pw_hash` varchar(40) NOT NULL,
	  `public` int(1) NOT NULL,
	  PRIMARY KEY (`ID`)
	)

## License
My code is published under cc-by-nc-sa (c) 2011 by Philipp Stephan, [ps0ke.de](http://ps0ke.de)

The jscolorpicker is published under GPL by Jan Odvarko, [odvarko.cz](http://odvarko.cz)