/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : placement_m_s

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2019-04-05 22:18:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `add_placement`
-- ----------------------------
DROP TABLE IF EXISTS `add_placement`;
CREATE TABLE `add_placement` (
  `pid` int(20) NOT NULL AUTO_INCREMENT,
  `s_roll` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `job_profile` varchar(255) DEFAULT NULL,
  `job_location` varchar(255) DEFAULT NULL,
  `company_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pid`,`s_roll`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of add_placement
-- ----------------------------
INSERT INTO `add_placement` VALUES ('1', '0829cs151141', 'APPLE', '10', 'software developer', 'PUNE', 'Technical');
INSERT INTO `add_placement` VALUES ('2', '0829cs151142', 'TCS', '11', 'software developer', 'PUNE', 'Technical');
INSERT INTO `add_placement` VALUES ('3', '0829cs151143', 'WIPRO', '12', 'software developer', 'PUNE', 'Technical');
INSERT INTO `add_placement` VALUES ('4', '0829cs151144', 'TECHINFINI', '13', 'software developer', 'PUNE', 'Technical');
INSERT INTO `add_placement` VALUES ('5', '0829cs151145', 'TUDIP', '14', 'software developer', 'DEHLI', 'Technical');
INSERT INTO `add_placement` VALUES ('6', '0829cs151146', 'AMAZON', '15', 'software developer', 'DEHLI', 'Technical');
INSERT INTO `add_placement` VALUES ('7', '0829cs151147', 'FLIPKART', '16', 'software developer', 'DEHLI', 'Technical');
INSERT INTO `add_placement` VALUES ('8', '0829cs151148', 'AT&T', '17', 'software developer', 'DEHLI', 'Technical');
INSERT INTO `add_placement` VALUES ('9', '0829cs151149', 'MICROSOFT', '18', 'software developer', 'DEHLI', 'Technical');
INSERT INTO `add_placement` VALUES ('10', '0829cs151150', 'MI', '3', 'software developer', 'INDORE', 'Technical');
INSERT INTO `add_placement` VALUES ('11', '0829cs151151', 'NETFLIX', '3', 'software developer', 'INDORE', 'Non Technical');
INSERT INTO `add_placement` VALUES ('12', '0829cs151152', 'OPPO', '2', 'software developer', 'INDORE', 'Non Technical');
INSERT INTO `add_placement` VALUES ('13', '0829cs151153', 'VIVO', '22', 'software developer', 'INDORE', 'Non Technical');
INSERT INTO `add_placement` VALUES ('14', '0829cs151154', 'MICROMAX', '23', 'software developer', 'INDORE', 'Technical');
INSERT INTO `add_placement` VALUES ('15', '0829cs151155', 'techinfini', '09', 'software developer', 'bhopal', 'Technical');
INSERT INTO `add_placement` VALUES ('16', '0829cs151155', 'Amazom', '20', 'software developer', 'indore', 'Technical');
INSERT INTO `add_placement` VALUES ('17', '0829cs151143', 'Hexaware', '10', 'software developer', 'indore', 'Technical');
INSERT INTO `add_placement` VALUES ('19', '0829cs151168', 'digivalet', '5', 'software developer', 'indore', 'Technical');
INSERT INTO `add_placement` VALUES ('20', '0829cs151168', 'APPLE', '5', 'web developer', 'indore', 'Technical');
INSERT INTO `add_placement` VALUES ('21', '0829cs151144', 'AT&T', '6', 'software developer', 'indore', 'Technical');

-- ----------------------------
-- Table structure for `campus_info`
-- ----------------------------
DROP TABLE IF EXISTS `campus_info`;
CREATE TABLE `campus_info` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `campus_type` varchar(255) DEFAULT NULL,
  `campus_vanue` varchar(255) DEFAULT NULL,
  `reporting_time` time DEFAULT NULL,
  `batch` int(11) DEFAULT NULL,
  `eligible_10th` int(11) DEFAULT NULL,
  `eligible_12th` int(11) DEFAULT NULL,
  `eligible_ug` int(11) DEFAULT NULL,
  `eligible_pg` int(11) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `backlog` int(11) DEFAULT NULL,
  `passout` int(11) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `company_profile` varchar(255) DEFAULT NULL,
  `company_type` varchar(255) DEFAULT NULL,
  `job_profile` varchar(255) DEFAULT NULL,
  `job_location` varchar(255) DEFAULT NULL,
  `bond_duration` varchar(255) DEFAULT NULL,
  `joining_date` varchar(255) DEFAULT NULL,
  `selection_process` varchar(255) DEFAULT NULL,
  `require_skill` varchar(255) DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `registration_link` varchar(255) DEFAULT NULL,
  `other_detail` varchar(255) DEFAULT NULL,
  `status` int(10) DEFAULT '0',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10019 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of campus_info
-- ----------------------------
INSERT INTO `campus_info` VALUES ('10001', 'APPLE', '2019-01-19', 'close', 'sdbct', '09:54:00', '2019', '60', '60', '60', '60', null, '0', '2019', 'apple.com', 'xyz', 'Technical', 'TECH', 'PUNE', '1 year', '01/05/2019', 'GD,technical', 'c', '10 lpa', 'apple.com', 'visit website', '1');
INSERT INTO `campus_info` VALUES ('10002', 'TCS', '2019-01-10', 'close', 'sdbct', '10:54:00', '2019', '60', '60', '60', '60', 'CS,IT,ME', '0', '2019', 'tcs.com', 'xyz', 'Technical', 'TECH', 'PUNE', '1 year', '02/05/2019', 'GD,technical', 'c', '11 lpa', 'tcs.com', 'visit website', '1');
INSERT INTO `campus_info` VALUES ('10003', 'WIPRO', '2019-01-08', 'close', 'sdbct', '11:54:00', '2019', '60', '60', '60', '60', 'CS,IT,ME', '0', '2019', 'wipro.com', 'xyz', 'Technical', 'TECH', 'PUNE', '1 year', '03/05/2019', 'GD,technical', 'c', '12 lpa', 'wipro.com', 'visit website', '1');
INSERT INTO `campus_info` VALUES ('10004', 'TECHINFINI', '2019-01-02', 'close', 'sdbct', '12:54:00', '2019', '60', '60', '60', '60', 'CS,IT', '0', '2019', 'techinfi.com', 'xyz', 'Technical', 'TECH', 'PUNE', '1 year', '04/05/2019', 'GD,technical', 'c', '13 lpa', 'techinfi.com', 'visit website', '1');
INSERT INTO `campus_info` VALUES ('10005', 'TUDIP', '2018-12-25', 'close', 'sdbct', '13:54:00', '2019', '60', '60', '60', '60', 'CS,IT', '0', '2019', 'tudip.com', 'xyz', 'Technical', 'TECH', 'DEHLI', '1 year', '05/05/2019', 'GD,technical', 'c', '14 lpa', 'tudip.com', 'visit website', '1');
INSERT INTO `campus_info` VALUES ('10006', 'AMAZON', '2018-12-13', 'close', 'sdbct', '14:54:00', '2019', '60', '60', '60', '60', 'CS,IT', '0', '2019', 'amazon.com', 'xyz', 'Technical', 'NON TECH', 'DEHLI', '1 year', '06/05/2019', 'GD,technical', 'c', '15 lpa', 'amazon.com', 'visit website', '1');
INSERT INTO `campus_info` VALUES ('10007', 'FLIPKART', '2018-12-25', 'close', 'sdbct', '15:54:00', '2019', '60', '60', '60', '60', 'CS,IT', '0', '2019', 'flipkart.com', 'xyz', 'Technical', 'NON TECH', 'DEHLI', '1 year', '07/05/2019', 'GD,technical', 'c', '16 lpa', 'flipkart.com', 'visit website', '1');
INSERT INTO `campus_info` VALUES ('10008', 'AT&T', '2018-12-04', 'close', 'sdbct', '16:54:00', '2019', '60', '60', '60', '60', 'CS,IT,ME', '0', '2019', 'att.com', 'xyz', 'Technical', 'NON TECH', 'DEHLI', '1.5 year', '08/05/2019', 'GD,technical', 'c++', '17 lpa', 'att.com', 'visit website', '1');
INSERT INTO `campus_info` VALUES ('10009', 'MICROSOFT', '2018-11-28', 'close', 'sdbct', '17:54:00', '2019', '60', '60', '60', '60', 'CS,IT,ME', '0', '2019', 'microsoft.com', 'xyz', 'Technical', 'NON TECH', 'DEHLI', '1.5 year', '09/05/2019', 'GD,technical', 'c++', '18 lpa', 'microsoft.com', 'visit website', '1');
INSERT INTO `campus_info` VALUES ('10010', 'MI', '2018-11-13', 'close', 'sdbct', '18:54:00', '2019', '60', '60', '60', '60', 'CS,IT,ME & CIVIL', '0', '2019', 'mi.com', 'xyz', 'Technical', 'NON TECH', 'INDORE', '1.5 year', '10/05/2019', 'GD,technical', 'c++', '19 lpa', 'mi.com', 'visit website', '1');
INSERT INTO `campus_info` VALUES ('10011', 'NETFLIX', '2018-11-06', 'close', 'sdbct', '19:54:00', '2019', '60', '60', '60', '60', 'CS,IT,ME & CIVIL', '0', '2019', 'netflix.com', 'xyz', 'Technical', 'TECH & NON TECH', 'INDORE', '1.5 year', '11/05/2019', 'GD,technical', 'c++', '20 lpa', 'netflix.com', 'visit website', '1');
INSERT INTO `campus_info` VALUES ('10012', 'OPPO', '2019-05-05', 'close', 'sdbct', '20:54:00', '2019', '60', '60', '60', '60', 'CS,IT', '0', '2019', 'oppo.com', 'xyz', 'Technical', 'xyz', 'INDORE', '1.5', '2019-03-28', 'GD,technical', 'php', '21', 'oppo.com', 'visit website', '1');
INSERT INTO `campus_info` VALUES ('10013', 'VIVO', '2019-02-27', 'close', 'sdbct', '21:54:00', '2019', '60', '60', '60', '60', 'CS,IT,ME & CIVIL', '0', '2019', 'vivo.com', 'xyz', 'Technical', 'TECH & NON TECH', 'INDORE', '1.5 year', '13/05/2019', 'GD,technical', 'php', '22 lpa', 'vivo.com', 'visit website', '0');
INSERT INTO `campus_info` VALUES ('10014', 'MICROMAX', '2019-02-09', 'close', 'sdbct', '22:54:00', '2019', '60', '60', '60', '60', 'CS,IT,ME', '0', '2019', 'micromax.com', 'xyz', 'Technical', 'TECH & NON TECH', 'INDORE', '1.5 year', '14/05/2019', 'GD,technical', 'php', '23 lpa', 'micromax.com', 'visit website', '1');
INSERT INTO `campus_info` VALUES ('10015', 'techinfini', '2019-02-03', 'pool', 'sdbce', '09:00:00', '2020', '60', '60', '60', '60', 'CS,IT,ME & CIVIL', '0', '2020', 'techinifni.com', 'xyz', 'Technical', 'NON-TECH', 'bhopal', '1.5 year', '2019-02-06', 'GD,technical', 'c,c++,java', '3.0', 'techinfini/register.com', 'All unplaced & interested students are required to register on the given registration link today only i.e. 15/01/2019 by 6:00 PM. Campus participation will be compulsory for registered student only. ', '1');
INSERT INTO `campus_info` VALUES ('10016', 'MICROMAX1', '2019-03-22', 'close', 'sdbct', '21:00:00', '2019', '60', '60', '60', null, 'CS,IT,ME & EC', '0', '2019', 'aas', 'xyz', 'Technical', 'a', 'indore', '2', '2019-03-29', 'only unplaced students allow', 'c,c++,java', '3.0', 'www.sdbct.com', 'APT,GD', '1');
INSERT INTO `campus_info` VALUES ('10018', 'digivalet', '2019-03-22', 'open', 'sdbce0', '22:00:00', '2021', '140', '150', '160', null, 'CS,IT,ME & CIVIL', '0', '2021', 's0', 'xyz0', 'Non Technical', 'xyz0', 'ss0', '20', '2019-03-22', 'h0', 'h0', '20', 'www.sdbct.com2', 'h0', '0');

-- ----------------------------
-- Table structure for `contact`
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `datec` date DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('1', 'shubham yaduwanshi', 'shubhamyaduwanshi1997@gmail.com', 'hello', 'metting arrangement', '2019-03-03');
INSERT INTO `contact` VALUES ('6', 'shubham Gupta', 'gupta444@gmail.com', 'placement 2018', 'nice\r\n', '2019-04-04');

-- ----------------------------
-- Table structure for `departmenttbl`
-- ----------------------------
DROP TABLE IF EXISTS `departmenttbl`;
CREATE TABLE `departmenttbl` (
  `deptid` int(11) NOT NULL AUTO_INCREMENT,
  `deptname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`deptid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of departmenttbl
-- ----------------------------
INSERT INTO `departmenttbl` VALUES ('1', 'TRAINING PLACEMENT DEPARTMENT', '1');
INSERT INTO `departmenttbl` VALUES ('2', 'COMPUTER SCIENCE', '1');
INSERT INTO `departmenttbl` VALUES ('3', 'INFORMATION TECHNOLOGY', '1');
INSERT INTO `departmenttbl` VALUES ('4', 'MECHANICAL', '1');
INSERT INTO `departmenttbl` VALUES ('5', 'CIVIL', '1');

-- ----------------------------
-- Table structure for `feedback`
-- ----------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `feedid` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postdate` date NOT NULL,
  PRIMARY KEY (`feedid`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of feedback
-- ----------------------------
INSERT INTO `feedback` VALUES ('24', 'placement 2018', 'awesome placements', '2018-03-19');
INSERT INTO `feedback` VALUES ('26', 'placement', 'very nice\r\n', '2019-03-28');

-- ----------------------------
-- Table structure for `noticetbl`
-- ----------------------------
DROP TABLE IF EXISTS `noticetbl`;
CREATE TABLE `noticetbl` (
  `noteid` int(11) NOT NULL AUTO_INCREMENT,
  `notice` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `postdate` date DEFAULT NULL,
  PRIMARY KEY (`noteid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of noticetbl
-- ----------------------------
INSERT INTO `noticetbl` VALUES ('10', 'farewell ', 'It\'s an official announcement to all CSC. College is also organizing farewell party for us (All Final Year Students). And 200 / person.', 'student', '2019-04-23');
INSERT INTO `noticetbl` VALUES ('13', 'major project', 'Students for major project final internal exam prepare PPT presentation which covers all the points of final report.', 'student', '2019-04-24');
INSERT INTO `noticetbl` VALUES ('17', 'collecting the data for alumni association of college  ', 'We are collecting the data for alumni association of college  Kindly fill up following form  https://forms.gle/C1Dhoe7D8wN1BHTz6', 'public', '2019-04-26');
INSERT INTO `noticetbl` VALUES ('23', 'campus', 'next company for computer science students', 'student', '2019-04-05');

-- ----------------------------
-- Table structure for `studenttbl`
-- ----------------------------
DROP TABLE IF EXISTS `studenttbl`;
CREATE TABLE `studenttbl` (
  `stid` int(20) NOT NULL AUTO_INCREMENT,
  `s_roll` varchar(255) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `gender` varchar(11) DEFAULT NULL,
  `10th` int(11) DEFAULT NULL,
  `12th` int(11) DEFAULT NULL,
  `backlog` int(11) DEFAULT NULL,
  `ug` int(11) DEFAULT NULL,
  `pyear` int(11) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT 'TPM@2019',
  `college` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_1` varchar(20) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT '',
  `file` varchar(55) DEFAULT '67766.png',
  `status` int(20) DEFAULT '0',
  `debarred` int(20) DEFAULT '1',
  `verified` int(20) DEFAULT '0',
  `block` int(20) DEFAULT '0',
  `rdate` date DEFAULT NULL,
  PRIMARY KEY (`stid`,`s_roll`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of studenttbl
-- ----------------------------
INSERT INTO `studenttbl` VALUES ('1', '0829cs151141', 'Riya', 'Neema', 'Male', '70', '70', '0', '70', '2014', 'CS', 'BE', '123456', 'SDBCT', 'student5@gmail.com', '4758956695', 'Aalok nagar', '2019-03-18', '560742.jpg', '1', '0', '1', '0', '2019-03-29');
INSERT INTO `studenttbl` VALUES ('2', '0829cs151142', 'Rubee', 'Agrawal', 'Female', '60', '65', '0', '55', '2019', 'CS', 'BE', '123456', 'SDBCT', 'student7@gmail.com ', '7354819733', '78 A indore', '07/01/1997', '67766.png', '1', '1', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('3', '0829cs151143', 'Rupali', 'Guru', 'Male', '70', '59', '0', '55', '2016', 'CS', 'BE', '123456', 'SDBCT', 'student8@gmail.com ', '7354819734', '79 A indore', '1997-08-07', '496262.jpg', '1', '0', '1', '0', '2026-03-19');
INSERT INTO `studenttbl` VALUES ('4', '0829cs151144', 'Saksham', 'Jain', 'Male', '71', '71', '1', '71', '2016', 'CS', 'BE', '123456', 'SDBCT', 'student19@gmail.com', '7354819731', '80 A mitra bandhu indore', '2019-03-13', '887534.jpg', '1', '0', '1', '0', '2019-03-27');
INSERT INTO `studenttbl` VALUES ('5', '0829cs151145', 'Sakshi', 'Choudhary', 'Female', '70', '69', '0', '60', '2019', 'CS', 'BE', '123456', 'SDBC1', 'student10@gmail.com', '7354819731', '81 A indore1', '10/01/1998', '67766.png', '1', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('6', '0829cs151146', 'Saloni', 'Agrawal', 'Female', '70', '69', '0', '60', '2019', 'CS', 'BE', '123456', 'SDBCT', 'student11@gmail.com ', '7354819737', '82 A indore', '11/01/1997', '67766.png', '1', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('7', '0829cs151147', 'Sandesh', 'Agrawal', 'Male', '70', '69', '0', '60', '2019', 'CS', 'BE', '123456', 'SDBCT', 'student12@gmail.com ', '7354819738', '83 A indore', '12/01/1997', '67766.png', '1', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('8', '0829cs151148', 'Sayyed Shadma', 'Hussain', 'Female', '70', '69', '0', '60', '2019', 'CS', 'BE', '123456', 'SDBCT', 'student13@gmail.com ', '7354819739', '84 A indore', '13/01/1997', '67766.png', '1', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('9', '0829cs151149', 'Shalini', 'Mishra', 'Female', '70', '69', '0', '60', '2019', 'IT', 'BE', '123456', 'SDBCT', 'student14@gmail.com ', '7354819740', '85 A indore', '14/01/1997', '67766.png', '1', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('10', '0829cs151150', 'Shivam', 'Shukla', 'Male', '70', '69', '0', '60', '2019', 'IT', 'BE', '123456', 'SDBCT', 'student16@gmail.com ', '7354819742', '87 A indore', '16/01/1997', '67766.png', '1', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('11', '0829cs151151', 'Shraddha', 'Jain', 'Female', '75', '61', '0', '60', '2019', 'IT', 'BE', '123456', 'SDBCT', 'student17@gmail.com ', '7354819743', '88 A indore', '17/01/1997', '67766.png', '1', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('12', '0829cs151152', 'Sharddha', 'Joshi', 'Female', '75', '61', '0', '60', '2019', 'IT', 'BE', '123456', 'SDBCE', 'student18@gmail.com ', '7354819744', '89 A indore', '18/01/1997', '67766.png', '1', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('13', '0829cs151153', 'Shrey', 'Somani', 'Male', '75', '61', '0', '60', '2019', 'IT', 'BE', '123456', 'SDBCE', 'student19@gmail.com ', '7354819745', '90 A indore', '19/01/1997', '67766.png', '1', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('14', '0829cs151154', 'Shubham', 'Yaduwanshi', 'Male', '75', '75', '0', '75', '2016', 'CS', 'BE', '123456', 'SDBCT', 'student20@gmail.com', '741852963.', '96 A mitra bandhu nagar indore', '2019-03-19', '575163.jpg', '1', '0', '1', '0', '2019-03-29');
INSERT INTO `studenttbl` VALUES ('15', '0829cs151155', 'Shubham', 'Gupta', 'Male', '75', '61', '0', '65', '2019', 'IT', 'BE', '123456', 'SDBCE', 'student21@gmail.com ', '7354819747', '92 A indore', '21/01/1997', '67766.png', '1', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('16', '0829cs151156', 'Shipra', 'Mishra', 'Female', '70', '69', '0', '60', '2019', 'IT', 'BE', '123456', 'SDBCT', 'student15@gmail.com ', '7354819741', '86 A indore', '15/01/1997', '67766.png', '0', '1', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('17', '0829cs151157', 'Shubhesh', 'Shukla', 'Male', '75', '61', '0', '65', '2019', 'ME', 'BE', '123456', 'SDBCE', 'student23@gmail.com ', '7354819749', '94 A indore', '23/01/1997', '67766.png', '0', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('18', '0829cs151158', 'Shyam Sundar', 'Patidar', 'Male', '75', '61', '0', '65', '2019', 'ME', 'BE', '123456', 'SDBCE', 'student24@gmail.com ', '7354819750', '95 A indore', '24/01/1997', '67766.png', '0', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('19', '0829cs151159', 'Sonu ', 'Ahirwar', 'Female', '75', '61', '0', '65', '2019', 'ME', 'BE', '123456', 'SDBCE', 'student25@gmail.com ', '7354819751', '96 A indore', '25/01/1997', '67766.png', '0', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('20', '0829cs151160', 'Surbhi', 'Jaiswal', 'Female', '75', '61', '0', '65', '2019', 'ME', 'BE', '123456', 'SDBCE', 'student26@gmail.com ', '7354819752', '97 A indore', '26/01/1997', '67766.png', '0', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('22', '0829cs151161', 'Swati', 'Piplode', 'Female', '75', '78', '0', '83', '2016', 'ME', 'BE', '123456', 'SDBCE', 'student28@gmail.com', '7354819754', '99 A indore', '', '186879.jpg', '0', '0', '1', '0', '2019-03-31');
INSERT INTO `studenttbl` VALUES ('23', '0829cs151162', 'Tanu', 'Purohit', 'Female', '75', '61', '0', '65', '2019', 'ME', 'BE', '123456', 'SDBCE', 'student29@gmail.com ', '7354819755', '100 A indore', '29/01/1997', '67766.png', '0', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('24', '0829cs151163', 'Tarun', 'Sharma', 'Male', '75', '70', '0', '70', '2019', 'ME', 'BE', '123456', 'SDBCE', 'student30@gmail.com ', '7354819756', '101 A indore', '30/01/1997', '67766.png', '0', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('25', '0829cs151164', 'Tejas', 'Sharma', 'Male', '75', '70', '0', '70', '2019', 'ME', 'BE', '123456', 'SDBCE', 'student31@gmail.com ', '7354819757', '102 A indore', '31/01/1997', '67766.png', '0', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('26', '0829cs151165', 'Vaibhav ', 'Saxena', 'Male', '75', '70', '0', '70', '2019', 'CIVIL', 'BE', '123456', 'SDBCE', 'student32@gmail.com ', '7354819758', '103 A indore', '01/02/1997', '67766.png', '0', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('27', '0829cs151166', 'Vidhi', 'Sisodiya', 'Female', '75', '70', '0', '70', '2019', 'CIVIL', 'BE', '123456', 'SDBCE', 'student33@gmail.com ', '7354819759', '104 A indore', '02/02/1997', '67766.png', '0', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('28', '0829cs151167', 'Vishal1', 'Jat1', 'Female', '75', '70', '0', '70', '2019', 'CIVIL', 'BE', '123456', 'SDBCE', 'student35@gmail.com ', '7354819761', '106 A indore', '04/02/1997', '67766.png', '0', '0', '1', '0', '0000-00-00');
INSERT INTO `studenttbl` VALUES ('31', '0829cs151168', 'ram', 'lakhan', 'Male', '50', '50', '0', '50', '2016', 'CS', 'BE', '123456', 'SDBCT', 'Ayushyadav@gmail.com', '7354819727', '72 A, mitra bandhu nagar,indore', '2019-03-26', '67766.png', '0', '1', '1', '0', '2025-03-19');
INSERT INTO `studenttbl` VALUES ('34', '0829cs151169', 'Ayush', 'yadav', 'Male', '81', '71', '0', '52', '2016', 'CS', 'BE', '123456', 'SDBCE', 'Ayushyadav@gmail.com', '7354819731', '72 A, mitra bandhu nagar,indore', '1999-03-16', '158526.jpg', '0', '1', '0', '0', '2019-03-28');

-- ----------------------------
-- Table structure for `usertbl`
-- ----------------------------
DROP TABLE IF EXISTS `usertbl`;
CREATE TABLE `usertbl` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `blood` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cpassword` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deptname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `catname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of usertbl
-- ----------------------------
INSERT INTO `usertbl` VALUES ('21', 'admin', 'user', 'Male', 'O+', 'admin@admin.com', '7354819727', '8482838002', '123456', '', '1997-03-14', 'mitra bandhu nagar indore', 'TRAINING PLACEMENT DEPARTMENT', '', '24048.png', '1');
INSERT INTO `usertbl` VALUES ('22', 'shubham', 'yaduwanshi', 'Male', 'O+', 'shubhamyaduwanshi1997@gmail.com', '7354819727', '8482838002', '123456', '', '2019-03-27', '72 A mitra bandhu nagar indore', 'deptname', '', '600223.jpg', '1');
