<?php
// OTHER SGTRINGS
include('info.php');
include('general.php');

// HEADER
define('STR_TITLE_HOME', 'HOME');
define('STR_TITLE_LOGIN', 'SIGN IN');
define('STR_TITLE_REGISTER', 'REGISTER');
define('STR_LINK_LOGOUT', '<a href="'.MAIN_URL.'action/logout.php">Sign Out</a>');
define('STR_LINK_LOGIN', '<a href="'.MAIN_URL.'action/login.php">Sign In</a>');
define('STR_LINK_REGISTER', '<a href="'.MAIN_URL.'action/register.php">Register</a>');

// FOOTER
define('STR_ABOUT', 'About');
define('STR_CONTACT', 'Contact');

// LOGIN
define('STR_LOGIN_LEGEND', 'Sign In:');
define('STR_LOGIN_USERNAME', 'Username:');
define('STR_LOGIN_PASSWORD', 'Password:');
define('STR_LOGIN_GO_BUTTON', 'Sign In!');

// REGISTER
define('STR_REGISTER_LEGEND', 'Register');
define('STR_REGISTER_USERNAME', 'Username:');
define('STR_REGISTER_PASSWORD', 'Password:');
define('STR_REGISTER_REP_PASSWORD', 'Repeat Password:');
define('STR_REGISTER_EMAIL', 'E-Mail:');
define('STR_REGISTER_CAPTCHA', 'Captcha:');
define('STR_REGISTER_GO_BUTTON', 'Make me productive!');
define('STR_REGISTER_DATA_LEGEND', 'Your Data:');
define('STR_REGISTER_DATA_INFO', 'I take privacy very seriously. I will not use your email, but support ect. and I will never share it. I hate Spam, too. Your password will never be stored in clear text.');

// PUBLIC
define('STR_PUBLIC_SHAREING', ' is shareing his timetable online. If you also want to do that, you can register <a href="'.MAIN_URL.'action/register.php">here</a>!');
define('STR_PUBLIC_DISCLAIMER', 'If you notice any abuse or feel your privacy injured, please report to <a href="mailto:'.ABUSE_EMAIL.'">'.ABUSE_EMAIL.'</a> and mention "'.LOGO_NAME.' - Abuse - <USERNAME>" in the subject. I don\'t take any responsibility for any misuse of this service. This is user generated data, which I am not responsible for.');
define('STR_PUBLIC_NO', ' is not a user of '.LOGO_NAME.' or has decided not to share the timetable publicly!');

// MAIN
define('STR_SAVE_BUTTON', 'Save');
define('STR_DAY_MON', 'Monday');
define('STR_DAY_TUE', 'Tuesday');
define('STR_DAY_WED', 'Wednesday');
define('STR_DAY_THU', 'Thursday');
define('STR_DAY_FRI', 'Friday');
define('STR_GENERAL_PREFERENCES', 'General Preferences');
define('STR_GENERAL_PERIOD', 'Period/Semester:');
define('STR_GENERAL_CLASS', 'Class:');
define('STR_GENERAL_PUBLIC', 'Public timetable:');
define('STR_GENERAL_LINK', 'Your public link:');
define('STR_GENERAL_DEL_SHOW', 'Delete account');
define('STR_GENERAL_DEL_CONFIRM', 'Confirm password:');
define('STR_GENERAL_DEL_NOUNDO', 'You can\'t undo this action!');
define('STR_GENERAL_DEL_GO', 'Good Bye!');
define('STR_TIMES', 'Times');
define('STR_SUBJECTS_SUBJECTS', 'Subjects');
define('STR_SUBJECTS_NAME', 'Name:');
define('STR_SUBJECTS_TEACHER', 'Teacher:');
define('STR_SUBJECTS_ROOM', 'Default room:');
define('STR_SUBJECTS_COLOR', 'Color:');
define('STR_TABLE_TIMETABLE', 'Timetable');
define('STR_TABLE_HELP', 'Choose the actual order of your timetable. If the subject takes place in its default room, leave the textbox below it empty and the default room will be assigned. Otherwise enter the room for this specific lesson.');
define('STR_TABLE_LESSON', 'Lesson');
define('STR_TABLE_CHOOSE', 'Choose...');

?>