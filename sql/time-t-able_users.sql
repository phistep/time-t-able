CREATE TABLE IF NOT EXISTS `time-t-able_users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pw_hash` varchar(40) NOT NULL,
  `public` int(1) NOT NULL,
  `class` varchar(20) DEFAULT NULL,
  `period` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
)