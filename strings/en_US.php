<?php
// OTHER SGTRINGS
include('info.php');

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
define('STR_PUBLIC_SHARING', ' is sharing his timetable online. If you also want to do that, you can register <a href="'.MAIN_URL.'action/register.php">here</a>!');
define('STR_PUBLIC_DISCLAIMER', 'If you notice any abuse or feel your privacy injured, please report to <a href="mailto:'.ABUSE_EMAIL.'">'.ABUSE_EMAIL.'</a> and mention "'.LOGO_NAME.' - Abuse - <USERNAME>" in the subject. I don\'t take any responsibility for any misuse of this service. This is user generated data, which I am not responsible for.');
define('STR_PUBLIC_NO', ' is not a user of '.LOGO_NAME.' or has decided not to share the timetable publicly!');

// MAIN
define('STR_SAVE_BUTTON', 'Save');
define('STR_CANCEL_BUTTON', 'Cancel');
define('STR_YOUR_TIMETABLE', 'Dein Stundenplan');
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
define('STR_ACCOUNT_SETTINGS', 'Account Settings');
define('STR_ACCOUNT_MAIL_BUTTON', 'Change Email');
define('STR_ACCOUNT_MAIL_CONFIRM_PASSWORD', 'Confirm Password:');
define('STR_ACCOUNT_MAIL_NEW', 'New Email Address:');
define('STR_ACCOUNT_MAIL_CURRENT', 'Current Email Address:');
define('STR_ACCOUNT_USERNAME_BUTTON', 'Change Username');
define('STR_ACCOUNT_USERNAME_NEW', 'New Username:');
define('STR_ACCOUNT_PASSWORD_BUTTON', 'Change Password');
define('STR_ACCOUNT_PASSWORD_OLD', 'Old Password:');
define('STR_ACCOUNT_PASSWORD_NEW', 'New Password:');
define('STR_ACCOUNT_PASSWORD_NEW_CONFIRM', 'Confirm New Password:');
define('STR_ACCOUNT_DELETE_BUTTON', 'Delete Account');
define('STR_ACCOUNT_DELETE_CONFIRM_PASSWORD', "Confirm Password:");
define('STR_ACCOUNT_DELETE_NO_UNDO', 'You cannot undo this action!');
define('STR_ACCOUNT_DELETE_GOODBYE_BUTTON', 'Good Bye!');

// ALERTS
define('STR_ALERT_LOGOUT_SUCCESS', "Signed out successfully!");
define('STR_ALERT_LOGIN_SUCCESS', "Signed in successfully!");
define('STR_ALERT_NOTLOGGEDIN', "You aren't even logged in!");
define('STR_ALERT_ALREADYLOGGEDIN', "You are already logged in!");
define('STR_ALERT_INVALIDFORM', "Invalid form! Please use only forms from the website.");
define('STR_ALERT_DELETED', "Youre account has been deleted successfully! Goodbye!");
define('STR_ALERT_WRONGPW', "The password was wrong!");
define('STR_ALERT_WRONGUSERNAME', "The username was wrong!");
define('STR_ALERT_REGISTER_CAPTCHA', "You have to enter the Captcha correctly!");
define('STR_ALERT_REGISTER_PASSWORDS', "The entered passwords were not identical!");
define('STR_ALERT_REGISTER_INVALID_USERNAME', "The username was invalid! It has to be between 3 and 30 characters and may only contain upper- and lowercase letters and numbers.");
define('STR_ALERT_REGISTER_EMAIL', "The entered email was not valid!");
define('STR_ALERT_REGISTER_TAKEN_USERNAME', "I'm sorry, but the chosen username is already taken. You have to make a different choice!");
define('STR_ALERT_REGISTER_SUCCESS', "Registration successfull! Thanks for giving ".LOGO_NAME." a try! You will now be logged in and ready to go!");
define('STR_ALERT_SAVE_SUCCESSFULL', "Saved successfully!");
define('STR_ALERT_CHANGED_PASSWORD', "Password changed successfully!");
define('STR_ALERT_CHANGED_USERNAME', "Username changed successfully!");
define('STR_ALERT_CHANGED_EMAIL', "Email address changed successfully!");

// PREVIEW
define('STR_ABOUT_HEADLINE', 'What is time(t)able?');
define('STR_FEATURES_HEADLINE', 'Features');
define('STR_ABOUT_DESC', '<code>time(t)able</code> (pronounced <code>timeable</code>) is a web-based application to manage timetables. I used to have my personal timetable on my homepage written in obfuscated table-layouted html. Originally only meant for personal use, classmates started to use it as well and soon I had a hand full of people relaying on my online timetable. This works good for a few people in the same class using the same timetable, but soon we won\'t be in one class anymore, instead having personal courses with individual timetables. So I started this project to provide a solution for me and my friends to still have the timetable online and always available.');
define('STR_FEATURES_DESC', '<ul><li>option for making the timetable public</li><li>German and English localization</li><li>clean interface</li><li>12 lesson times</li><li>5 weekdays</li><li>20 subjects with custom colors</li><li>default-room auto-assignment</li><li>easy-to-you table editor</li><li>password encryption - your data is safe</li></ul>');
?>