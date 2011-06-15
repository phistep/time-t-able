CREATE TABLE IF NOT EXISTS `time-t-able_subjects` (
  `user_ID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `teacher` varchar(30) DEFAULT NULL,
  `std_room` varchar(20) DEFAULT NULL,
  `color` varchar(6) DEFAULT 'FFFFFF'
);