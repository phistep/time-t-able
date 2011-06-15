# time(t)able
Webapp for managing timetables. Made using PHP, MySQL, HTML and JS.

## About time(t)able
`time(t)able` (pronounced timeable) is a web-based application to manage timetables. I used to have my personal timetable on my homepage written in obfuscated table-layouted html. Originally only meant for personal use, classmates started to use it as well and soon I had a hand full of people relaying on my online timetable. This works good for a few people in the same class using the same timetable, but soon we won't be in one class anymore, instead having personal courses with individual timetables. So I started this project to provide a solution for me and my friends to still have the timetable online and always available.

## Cloning and self-hosting
Before I'm done with the main code and will be able to write an install file you have to manually setup your passwords and databases. Getting the source with git installed ist very easy:

	$ git clone https://github.com/Ps0ke/time-t-able.git
	$ cd time-t-able

then you have to setup your SQL password file:

	$ cd strings
	$ touch pw.php

Open the file with the editor of your choice and add the following code (with your passwords of course):

	<?php
	define('SQL_USER', '<SQL Username>');
	define('SQL_PASSWORD', '<SQL Password>');
	define('SQL_DATABASE', '<SQL Database>');
	define('SQL_HOST', '<SQL Host>');
	?>

Then you have to set up your Database. Perform the SQL commands contained in following files:

	./sql/time-t-able_users.sql
	./sql/time-t-able_times.sql
	./sql/time-t-able_subjects.sql
	./sql/time-t-able_table.sql

## License
My code is published under [cc-by-nc-sa](http://creativecommons.org/licenses/by-nc-sa/3.0/) (c) 2011 by Philipp Stephan, [ps0ke.de](http://ps0ke.de)

The [jscolorpicker](http://jscolor.com) is published under GPL by Jan Odvarko, [odvarko.cz](http://odvarko.cz)