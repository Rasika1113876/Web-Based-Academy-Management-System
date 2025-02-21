-- Developed By Rasika Rathnasekara  -- 
_______________________________________________________________________ 
---------------------------&&&&&&&&&&&&&&&&&------------------------------- 
=================================@  @ ######  & ============================= 

-- Dumping tables for database: 


SET FOREIGN_KEY_CHECKS=0; 


-- Dumping structure for table: `advance_payment`

DROP TABLE IF EXISTS `advance_payment`;
CREATE TABLE `advance_payment` (
  `paymentID` int(50) NOT NULL,
  `traineeID` varchar(50) NOT NULL,
  `traineeName` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `PaidAmount` int(10) NOT NULL,
  `PaymentBalance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- Dumping data for table: advance_payment



-- Dumping structure for table: `attendence`

DROP TABLE IF EXISTS `attendence`;
CREATE TABLE `attendence` (
  `attendanceSheet_no` int(100) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Trainer_id` varchar(50) NOT NULL,
  `Course_type` varchar(100) NOT NULL,
  `Trainee_id` varchar(50) NOT NULL,
  `Trainee_Name` varchar(200) NOT NULL,
  `Action` varchar(50) NOT NULL,
  `Reason` varchar(200) NOT NULL,
  PRIMARY KEY (`attendanceSheet_no`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;



-- Dumping data for table: attendence

INSERT INTO `attendence` VALUES('46', '2019-12-11', ' ', ' ', ' 155', ' Punsara Wickramasinghe', ' Attend', ' ');
INSERT INTO `attendence` VALUES('47', '2019-12-11', ' ', ' ', ' 156', ' Kamani Siripala', ' Attend', ' ');
INSERT INTO `attendence` VALUES('48', '2019-12-11', ' ', ' ', ' 157', ' Thamali Wanasundara', ' Absent', ' not well');
INSERT INTO `attendence` VALUES('49', '2019-12-11', ' ', ' ', ' 158', ' Aksha Menuri Knanathilake', ' Absent', ' not well');
INSERT INTO `attendence` VALUES('50', '2019-12-11', ' 153', ' ', ' 155', ' Punsara Wickramasinghe', ' Attend', ' ');
INSERT INTO `attendence` VALUES('51', '2019-12-11', ' 153', ' ', ' 156', ' Kamani Siripala', ' Attend', ' ');
INSERT INTO `attendence` VALUES('52', '2019-12-11', ' 153', ' ', ' 157', ' Thamali Wanasundara', ' Absent', ' sick');
INSERT INTO `attendence` VALUES('53', '2019-12-11', ' 153', ' ', ' 158', ' Aksha Menuri Knanathilake', ' Attend', ' ');
INSERT INTO `attendence` VALUES('54', '2019-12-17', ' 153', ' ', ' 155', ' Punsara Wickramasinghe', ' Attend', ' ');
INSERT INTO `attendence` VALUES('55', '2019-12-17', ' 153', ' ', ' 156', ' Kamani Siripala', ' Attend', ' ');
INSERT INTO `attendence` VALUES('56', '2019-12-17', ' 153', ' ', ' 157', ' Thamali Wanasundara', ' Absent', ' aaaaaa');
INSERT INTO `attendence` VALUES('57', '2019-12-17', ' 153', ' ', ' 158', ' Aksha Menuri Knanathilake', ' Attend', ' ');
INSERT INTO `attendence` VALUES('58', '2019-12-11', ' 153', ' Normal Dressing', ' 155', ' Punsara Wickramasinghe', ' Attend', ' ');
INSERT INTO `attendence` VALUES('59', '2019-12-11', ' 153', ' Normal Dressing', ' 156', ' Kamani Siripala', ' Absent', ' ');
INSERT INTO `attendence` VALUES('60', '2019-12-11', ' 153', ' Normal Dressing', ' 157', ' Thamali Wanasundara', ' Attend', ' ');
INSERT INTO `attendence` VALUES('61', '2019-12-11', ' 153', ' Normal Dressing', ' 158', ' Aksha Menuri Knanathilake', ' Attend', ' ');


-- Dumping structure for table: `audit`

DROP TABLE IF EXISTS `audit`;
CREATE TABLE `audit` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `Time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Action` varchar(100) NOT NULL,
  `User_Id` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- Dumping data for table: audit



-- Dumping structure for table: `course_details`

DROP TABLE IF EXISTS `course_details`;
CREATE TABLE `course_details` (
  `session_id` varchar(50) NOT NULL,
  `trainer_id` varchar(50) NOT NULL,
  `trainer_name` varchar(200) NOT NULL,
  `course_title` varchar(200) NOT NULL,
  `attendence` int(50) NOT NULL,
  `course_date` date NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- Dumping data for table: course_details



-- Dumping structure for table: `creater`

DROP TABLE IF EXISTS `creater`;
CREATE TABLE `creater` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(255) NOT NULL,
  `NAME_C` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;



-- Dumping data for table: creater

INSERT INTO `creater` VALUES('1', 'rasee.rp@gmail.com', 'rasika');
INSERT INTO `creater` VALUES('2', 'rasee.rp@gmail.com', 'rasika');
INSERT INTO `creater` VALUES('3', 'rasee.rp@gmail.com', 'rasika');
INSERT INTO `creater` VALUES('4', 'rasee.rp@gmail.com', 'rasika');


-- Dumping structure for table: `images`

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- Dumping data for table: images

INSERT INTO `images` VALUES('1', '13729084_315162665538702_733506527147888451_n.jpg', '2019-12-11 14:43:42', '1');


-- Dumping structure for table: `installment_payment`

DROP TABLE IF EXISTS `installment_payment`;
CREATE TABLE `installment_payment` (
  `paymentID` int(50) NOT NULL,
  `traineeID` varchar(50) NOT NULL,
  `traineeName` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `paidAmount` int(10) NOT NULL,
  `paymentBAlance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- Dumping data for table: installment_payment



-- Dumping structure for table: `login`

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `c_id` varchar(3) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `passward` varchar(800) NOT NULL,
  `approved` varchar(1) NOT NULL,
  PRIMARY KEY (`c_id`(2))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- Dumping data for table: login

INSERT INTO `login` VALUES('1', 'Amali@gmail.com', '444', '1');
INSERT INTO `login` VALUES('2', 'Jayani@gmail.com', '555', '1');


-- Dumping structure for table: `marksheet`

DROP TABLE IF EXISTS `marksheet`;
CREATE TABLE `marksheet` (
  `sheet_id` int(10) NOT NULL AUTO_INCREMENT,
  `trainer_id` varchar(10) NOT NULL,
  `session_date` date NOT NULL,
  `trainee_id` varchar(10) NOT NULL,
  `trainee_name` varchar(200) NOT NULL,
  `course_title` varchar(200) NOT NULL,
  `cr_techniques` int(1) NOT NULL,
  `cr_creativity` int(1) NOT NULL,
  `cr_timemanagement` int(1) NOT NULL,
  `cr_confidance` int(1) NOT NULL,
  `cr_finaloutcome` int(1) NOT NULL,
  `totalmarks` int(2) NOT NULL,
  `grade` varchar(2) NOT NULL,
  `comments` varchar(500) NOT NULL,
  PRIMARY KEY (`sheet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;



-- Dumping data for table: marksheet

INSERT INTO `marksheet` VALUES('1', '153', '2019-12-09', '155', 'P.Wickramasinghe', 'Hair Dressing', '3', '3', '4', '2', '3', '15', 'B', 'Successfully Completed');
INSERT INTO `marksheet` VALUES('2', '153', '2019-12-11', '156', 'K.Siripala', 'Hair Cutting', '3', '3', '3', '3', '3', '15', 'B', 'Successfully Completed');
INSERT INTO `marksheet` VALUES('3', '153', '2019-12-10', '155', 'P.Wickramasinghe', 'Hair Cutting', '3', '2', '2', '2', '3', '12', 'B', 'Successful');
INSERT INTO `marksheet` VALUES('4', '153', '2019-12-08', '157', 'T.Wanasundara', 'Hair Cutting', '3', '4', '4', '3', '3', '17', 'A', 'Excellent');


-- Dumping structure for table: `registered_trainee`

DROP TABLE IF EXISTS `registered_trainee`;
CREATE TABLE `registered_trainee` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `title` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `address3` varchar(100) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `telephone_no` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passward` varchar(100) NOT NULL,
  `confirm_passward` varchar(100) NOT NULL,
  `approved` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=latin1;



-- Dumping data for table: registered_trainee

INSERT INTO `registered_trainee` VALUES('153', 'Trainer', 'Amali Siriwardane', 'Mrs.', 'A.Siriwardane', 'No.40', 'Main Street', 'Katunayake', '866923415v', '1989-11-06', '774586922', 'Amalis@gmail.com', 'Ama8869', 'Ama8869', '1');
INSERT INTO `registered_trainee` VALUES('154', 'cashier', 'Dahami Karunathilake', 'Ms.', 'D.Karunathilake', 'No.31/6', 'Beach Road', 'Panadura', '895634562v', '1989-07-22', '716586953', 'dahamik@gmail.com', 'dahami8956', 'dahami8956', '1');
INSERT INTO `registered_trainee` VALUES('155', 'trainee', 'Punsara Wickramasinghe', 'Ms.', 'P.Wickramasinghe', 'Udawathta Road,', 'Katepola,', 'Pelmadulla', '958645856v', '1995-06-11', '775698325', 'punsaraw@gmail.com', 'punsara9586', 'punsara9586', '1');
INSERT INTO `registered_trainee` VALUES('156', 'trainee', 'Kamani Siripala', 'Ms.', 'K.Siripala', 'No.600/2,', 'Pansala Patumaga,', 'Batuhena.', '948562531v', '1994-02-06', '715689564', 'kamanis@gmail.com', 'kamani9485', 'kamani9485', '1');
INSERT INTO `registered_trainee` VALUES('157', 'trainee', 'Thamali Wanasundara', 'Ms.', 'T.Wanasundara', 'No.31/A,', 'Gatangama Road,', 'Rathnapura', '948567523v', '1994-12-26', '774569865', 'thamaliw@gmail.com', 'thamali9485', 'thamali9485', '1');
INSERT INTO `registered_trainee` VALUES('158', 'trainee', 'Aksha Menuri Knanathilake', 'Ms.', 'A.M.Knanathilake', 'No.63,', 'Herassagala Road,', 'Pilimathalawa.', '958456723v', '1995-10-15', '714568231', 'akshak@gmail.com', 'aksha9584', 'aksha9584', '1');


-- Dumping structure for table: `request`

DROP TABLE IF EXISTS `request`;
CREATE TABLE `request` (
  `request_id` int(100) NOT NULL AUTO_INCREMENT,
  `senders_name` varchar(200) NOT NULL,
  `recipients_name` varchar(200) NOT NULL,
  `recipient_id` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `Message` varchar(1000) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;



-- Dumping data for table: request

INSERT INTO `request` VALUES('4', 'Ashi', 'Minuri', '', '2019-12-07', 'Please come soon');
INSERT INTO `request` VALUES('5', 'Aksha', 'Shashi', '', '2019-12-12', 'Yes,');
INSERT INTO `request` VALUES('6', '', '', '', '2019-12-04', '');


-- Dumping structure for table: `system_users`

DROP TABLE IF EXISTS `system_users`;
CREATE TABLE `system_users` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(100) NOT NULL,
  `client_address` varchar(800) NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=420 DEFAULT CHARSET=latin1;



-- Dumping data for table: system_users

INSERT INTO `system_users` VALUES('368', 'abc@gmail.com', '5000', '2019-07-14 11:54:55');
INSERT INTO `system_users` VALUES('369', 'abc@gmail.com', '1234', '2019-07-14 11:54:56');
INSERT INTO `system_users` VALUES('370', 'abc@gmail.com', '1234', '2019-07-14 11:55:03');
INSERT INTO `system_users` VALUES('371', 'sss@gmail.com', '2356', '2019-07-21 13:26:39');
INSERT INTO `system_users` VALUES('372', '', '', '2019-07-21 13:30:04');
INSERT INTO `system_users` VALUES('373', 'xyz@gmail.com', '789', '2019-07-21 13:51:49');
INSERT INTO `system_users` VALUES('374', 'xyz@gmail.com', '963', '2019-07-21 13:53:37');
INSERT INTO `system_users` VALUES('375', 'xyz@gmail.com', '123', '2019-07-21 14:04:22');
INSERT INTO `system_users` VALUES('376', 'xyz@gmail.com', '7899', '2019-07-21 14:05:46');
INSERT INTO `system_users` VALUES('377', 'xyz@gmail.com', '7899', '2019-07-21 14:05:51');
INSERT INTO `system_users` VALUES('378', 'xyz@gmail.com', 'cdcdc', '2019-07-21 14:07:40');
INSERT INTO `system_users` VALUES('379', 'xyz@gmail.com', 'sssss', '2019-07-21 14:07:57');
INSERT INTO `system_users` VALUES('380', 'sas@gmail.com', '1235', '2019-07-28 10:10:36');
INSERT INTO `system_users` VALUES('381', 'sas@gmail.com', '1235', '2019-07-28 10:10:39');
INSERT INTO `system_users` VALUES('382', 'sas@gmail.com', '1235', '2019-07-28 10:10:42');
INSERT INTO `system_users` VALUES('383', 'wer@gmail.com', '678', '2019-07-28 10:12:45');
INSERT INTO `system_users` VALUES('384', 'Abc@gmail.com', '1234', '2019-07-28 10:34:39');
INSERT INTO `system_users` VALUES('385', 'Abc@gmail.com', '1234', '2019-07-28 10:36:56');
INSERT INTO `system_users` VALUES('386', 'Abc@gmail.com', '1234', '2019-07-28 10:36:59');
INSERT INTO `system_users` VALUES('387', 'Abc@gmail.com', '1234', '2019-07-28 10:47:07');
INSERT INTO `system_users` VALUES('388', 'sas@gmail.com', '1989', '2019-07-28 12:30:24');
INSERT INTO `system_users` VALUES('389', 'sas@gmail.com', '1989', '2019-07-28 12:30:28');
INSERT INTO `system_users` VALUES('390', 'sas@gmail.com', '', '2019-07-28 12:33:15');
INSERT INTO `system_users` VALUES('391', '789@gmail.com', '7890', '2019-07-28 12:53:59');
INSERT INTO `system_users` VALUES('392', '345@gmail.com', '4567', '2019-07-28 12:59:56');
INSERT INTO `system_users` VALUES('393', 'aaa@gmail.com', 'bbb', '2019-08-07 23:58:27');
INSERT INTO `system_users` VALUES('394', 'aaa@gmail.com', 'sss', '2019-08-08 00:18:16');
INSERT INTO `system_users` VALUES('395', '', '', '2019-08-08 22:02:09');
INSERT INTO `system_users` VALUES('396', 'ert@gmail.com', '1234', '2019-08-11 09:56:45');
INSERT INTO `system_users` VALUES('397', 'azx@gmail.com', '2345', '2019-08-25 12:29:39');
INSERT INTO `system_users` VALUES('398', 'sdf@gmail.com', '2345', '2019-08-25 12:32:31');
INSERT INTO `system_users` VALUES('399', 'nnnn@gmail.com', '2007', '2019-08-25 12:35:29');
INSERT INTO `system_users` VALUES('400', 'nnnn@gmail.com', '2008', '2019-08-25 12:35:48');
INSERT INTO `system_users` VALUES('401', 'nnnn@gmail.com', '2009', '2019-08-25 12:36:09');
INSERT INTO `system_users` VALUES('402', 'nnnn@gmail.com', '2010', '2019-08-25 12:36:30');
INSERT INTO `system_users` VALUES('403', 'eee@gmail.com', 'ssss', '2019-08-31 10:00:30');
INSERT INTO `system_users` VALUES('404', 'ddd@gmail.com', '123', '2019-09-13 22:58:14');
INSERT INTO `system_users` VALUES('405', 'hhh@gmail.com', '1235', '2019-09-13 22:58:41');
INSERT INTO `system_users` VALUES('406', 'abf@gmail.com', '1234', '2019-11-05 22:36:33');
INSERT INTO `system_users` VALUES('407', 'abf@gmail.com', '1234', '2019-11-05 22:36:38');
INSERT INTO `system_users` VALUES('408', 'ac@gmail.com', '1234', '2019-11-05 22:38:51');
INSERT INTO `system_users` VALUES('409', 'bc@gmail.com', '1234', '2019-11-05 22:47:48');
INSERT INTO `system_users` VALUES('410', 'zzz@gmail.com', '1234', '2019-11-05 22:49:33');
INSERT INTO `system_users` VALUES('411', 'sss@gmail.com', '2356', '2019-11-05 23:04:06');
INSERT INTO `system_users` VALUES('412', 'ddd@gmail.com', '11111', '2019-11-05 23:05:48');
INSERT INTO `system_users` VALUES('413', 'sdf@gmail.com', '2f9959b230a44678dd2dc29f037ba1159f233aa9ab183ce3a0678eaae002e5aa6f27f47144a1a4365116d3db1b58ec47896623b92d85cb2f191705daf11858b8', '2019-11-24 13:58:39');
INSERT INTO `system_users` VALUES('414', 'abccc@gmail.com', '285356d2c799d0317aac9c184af6b8e589d575def5d716c113ed3af6f94bef3e890a68942335d4fbd18860d8cec174045958c25548a4e06862944e319db0b135', '2019-11-24 14:01:15');
INSERT INTO `system_users` VALUES('415', 'abdd@gmail.com', 'b3dd21e098359b27fd1fb88eee9c16fc633d0f0ef27339dcb8798faa615f06333c08465532e7b684fbe3a053f1d8c1b34d3c45915e38d2e8948d3ca2f509f8a9', '2019-11-24 14:01:54');
INSERT INTO `system_users` VALUES('416', 'abdd@gmail.com', 'b3dd21e098359b27fd1fb88eee9c16fc633d0f0ef27339dcb8798faa615f06333c08465532e7b684fbe3a053f1d8c1b34d3c45915e38d2e8948d3ca2f509f8a9', '2019-11-24 14:03:37');
INSERT INTO `system_users` VALUES('417', 'aaaaa@gmail.com', 'b0107db28511bb3c0dca2586ec33494bd4d26f6a9cb78221936dce4c2da4b09c701dc8da625383d0b455cf2a5e65aa7f27e1d9d97fb073233857c6884b8fa5b9', '2019-11-24 14:04:18');
INSERT INTO `system_users` VALUES('418', '', '19fa61d75522a4669b44e39c1d2e1726c530232130d407f89afee0964997f7a73e83be698b288febcf88e3e03c4f0757ea8964e59b63d93708b138cc42a66eb3', '2019-12-03 19:20:07');
INSERT INTO `system_users` VALUES('419', '', '19fa61d75522a4669b44e39c1d2e1726c530232130d407f89afee0964997f7a73e83be698b288febcf88e3e03c4f0757ea8964e59b63d93708b138cc42a66eb3', '2019-12-04 13:27:26');


SET FOREIGN_KEY_CHECKS=1; 

