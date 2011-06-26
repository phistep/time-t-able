<?php
// OTHER SGTRINGS
include('info.php');

// HEADER
define('STR_TITLE_HOME', 'STARTSEITE');
define('STR_TITLE_LOGIN', 'EINLOGGEN');
define('STR_TITLE_REGISTER', 'REGISTRIEREN');
define('STR_LINK_LOGOUT', '<a href="'.MAIN_URL.'action/logout.php">Ausloggen</a>');
define('STR_LINK_LOGIN', '<a href="'.MAIN_URL.'action/login.php">Einloggen</a>');
define('STR_LINK_REGISTER', '<a href="'.MAIN_URL.'action/register.php">Registrieren</a>');

// FOOTER
define('STR_ABOUT', 'Impressum');
define('STR_CONTACT', 'Kontakt');

// LOGIN
define('STR_LOGIN_LEGEND', 'Einloggen:');
define('STR_LOGIN_USERNAME', 'Benutzername:');
define('STR_LOGIN_PASSWORD', 'Passwort:');
define('STR_LOGIN_GO_BUTTON', 'Einloggen!');

// REGISTER
define('STR_REGISTER_LEGEND', 'Registrieren');
define('STR_REGISTER_USERNAME', 'Benutzername:');
define('STR_REGISTER_PASSWORD', 'Passwort:');
define('STR_REGISTER_REP_PASSWORD', 'Passwort wiederholen:');
define('STR_REGISTER_EMAIL', 'E-Mail:');
define('STR_REGISTER_CAPTCHA', 'Captcha:');
define('STR_REGISTER_GO_BUTTON', 'Lass mich loslegen!');
define('STR_REGISTER_DATA_LEGEND', 'Deine Daten:');
define('STR_REGISTER_DATA_INFO', 'Ich nehme deine Privatsph&auml;re sehr ernst. Ich werde deine Email nur f&uuml;r Support usw. benutzen und sie niemals an Dritte weitergeben. Ich hasse Spam auch. Dein Password wird niemals in Klartext gespeichert werden.');

// PUBLIC
define('STR_PUBLIC_SHARING', ' zeigt seinen Stundenplan online. Wenn du das auch willst, kannst du dich <a href="'.MAIN_URL.'action/register.php">hier</a> registrieren!');
define('STR_PUBLIC_DISCLAIMER', 'Wenn Sie Missbrauch feststellen oder ihre Privatsph&auml;re verletzt sehen, melden Sie das an <a href="mailto:'.ABUSE_EMAIL.'">'.ABUSE_EMAIL.'</a> und erw&auml;hnen Sie "'.LOGO_NAME.' - Abuse - <BENUTZERNAME>" im Betreff. Ich &uuml;bernehme keine Verantwortung f&uuml;r jedwegen Missbrauch dieses Dienstes. Dies hier sind benutzergenerierte Daten, f&uuml;r die ich icht verantwortlich bin.');
define('STR_PUBLIC_NO', ' benutzt '.LOGO_NAME.' nicht oder ver&ouml;ffentlicht seinen Stundenplan nicht online!');

// MAIN
define('STR_SAVE_BUTTON', 'Speichern');
define('STR_YOUR_TIMETABLE', 'Dein Stundenplan');
define('STR_DAY_MON', 'Montag');
define('STR_DAY_TUE', 'Dienstag');
define('STR_DAY_WED', 'Mittwoch');
define('STR_DAY_THU', 'Donnerstag');
define('STR_DAY_FRI', 'Freitag');
define('STR_GENERAL_PREFERENCES', 'Allgemeine Einstellungen');
define('STR_GENERAL_PERIOD', 'Jahr:');
define('STR_GENERAL_CLASS', 'Klasse/Stufe:');
define('STR_GENERAL_PUBLIC', '&Ouml;ffentlicher Stundenplan:');
define('STR_GENERAL_LINK', 'Dein &ouml;ffentlicher Link:');
define('STR_GENERAL_DEL_SHOW', 'Account l&ouml;schen');
define('STR_GENERAL_DEL_HIDE', 'Abbrechen');
define('STR_GENERAL_DEL_CONFIRM', 'Passwort best&auml;tigen:');
define('STR_GENERAL_DEL_NOUNDO', 'Dies kann nicht r&uuml;ckg&auml;ngig gemacht werden!');
define('STR_GENERAL_DEL_GO', 'Auf Wiedersehen!');
define('STR_TIMES', 'Zeiten');
define('STR_SUBJECTS_SUBJECTS', 'F&auml;cher');
define('STR_SUBJECTS_NAME', 'Name:');
define('STR_SUBJECTS_TEACHER', 'Lehrer:');
define('STR_SUBJECTS_ROOM', 'Standard Raum:');
define('STR_SUBJECTS_COLOR', 'Farbe:');
define('STR_TABLE_TIMETABLE', 'Stundenplan');
define('STR_TABLE_HELP', 'Ver&auml;ndere hier deine genaue Stundenplananordnung. Wenn das Fach in seinem Standardraum statt findet, lass die Textbox leer und der Standardraum wird hinzugef&uuml;gt. Ansonsten f&uuml;ge den gesonderten Raum f&uuml;r diese spezielle Stunde unten ein.');
define('STR_TABLE_LESSON', 'Stunde');
define('STR_TABLE_CHOOSE', 'W&auml;hlen...');

// ALERTS
define('STR_ALERT_LOGOUT_SUCCESS', "Erfolgreich ausgeloggt!");
define('STR_ALERT_LOGIN_SUCCESS', "Erfolgreich eingeloggt!");
define('STR_ALERT_NOTLOGGEDIN', "Du bist nicht einmal eingeloggt!");
define('STR_ALERT_ALREADYLOGGEDIN', "Du bist schon eingeloggt!");
define('STR_ALERT_INVALIDFORM', "Invalides Formular! Bitte benutze nur Formulare von der Website");
define('STR_ALERT_DELETED', "Dein Account wurde erfolgreich gel&ouml;scht! Auf Wiedersehen!");
define('STR_ALERT_WRONGPW', "Das Passwort war falsch!");
define('STR_ALERT_WRONGUSERNAME', "Der Benutzername war falsch!");
define('STR_ALERT_REGISTER_CAPTCHA', "Du musst das Captcha korrekt eingeben!");
define('STR_ALERT_REGISTER_PASSWORDS', "Die eingegebenen Passw&ouml;rter m&uumlssen identisch sein!");
define('STR_ALERT_REGISTER_INVALID_USERNAME', "Der Benutzername ist nicht g&uuml;ltig! Er muss zwischen 3 und 30 Zeichen haben und darf nur Gro&szlig;- und Kleinbuchstaben sowie Zahlen enthalten.");
define('STR_ALERT_REGISTER_EMAIL', "Die eingegebene Emailadresse ist nicht g&uuml;ltig!");
define('STR_ALERT_REGISTER_TAKEN_USERNAME', "Tut mir leid, der gew&uuml;nschte Benutzername ist bereits vergeben. Probiere einen anderen aus!");
define('STR_ALERT_REGISTER_SUCCESS', "Registrierung erfolgreich! Danke, dass du ".LOGO_NAME." auspobierst! Du wirst jetzt eingeloggt und kannst sofort loslegen!");
define('STR_ALERT_SAVE_SUCCESSFULL', "Erfolgreich gespeichert!");

// PREVIEW
define('STR_ABOUT_HEADLINE', 'Was ist time(t)able?');
define('STR_FEATURES_HEADLINE', 'Features');
define('STR_ABOUT_DESC', '<code>time(t)able</code> (sprich <code>timeable</code>) ist eine webbasierte Anwendung um Stundenpl&auml;ne zu verwalten. Fr&uuml;her hatte ich meinen Stundenplan in verwirrtem HTML auf meiner Homepage. Urspr&uumlnglich nur f&uuml;r mich selbst gedacht, fingen auch Klassenkameraden bald an ihn zu benutzen. Schnell hatte ich eine Handvoll Leute, die sich auf meinen Stundenplan verlie&szlig;en. Das funktioniert vielleicht gut f&uuml;r ein paar Leute aus der gleichen Klasse, aber bald werden wir nicht mehr in Klassen sein sondern jeder wird seinen eigenen, individuellen Stundenplan haben. Also habe ich dieses Projekt gestartet um eine M&oumlglichkeit f&uumlr mich und meine Freunde zu bereitzustellen, unseren Stundenplan immer online verf&uuml;gbar zu haben.');
define('STR_FEATURES_DESC', '<ul><li>Option, den Stundenplan &ouml;ffentlich zu machen</li><li>Deutsche und Englische Lokalisierung</li><li>Einfaches und schlichtes Interface</li><li>12 Unterrichtsstunden</li><li>5 Wochentage</li><li>20 F&auml;cher mit eigenen Farben</li><li>Standardraum Autozuweisung</li><li>einfach zu benutzender Tabelleneditor</li><li>Passwortverschl&uuml;sselung - Deine Daten sind sicher</li></ul>');

?>