-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 08:28 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advisortest`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `advisor_id` int(10) NOT NULL COMMENT 'รหัสการเป็นที่ปรึกษา',
  `group_id` varchar(11) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'รหัสกลุ่มเรียน',
  `user_id` varchar(50) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'รหัสประจำตัวผู้ใช้งานระบบ',
  `co_advisor_status` enum('y','n','','') COLLATE utf8_thai_520_w2 NOT NULL DEFAULT 'n' COMMENT 'สถานะการเป็นครูที่ปรึกษาร่วม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `advisor`
--

INSERT INTO `advisor` (`advisor_id`, `group_id`, `user_id`, `co_advisor_status`) VALUES
(1, '62390105', 'Alongkorn_Phukongka', 'n'),
(2, '632090102', '1349900045616', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `general_user`
--

CREATE TABLE `general_user` (
  `user_id` varchar(50) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'รหัสประจำตัวผู้ใช้งานระบบ',
  `prefix` varchar(50) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'คำนำหน้า',
  `user_name` varchar(30) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'ชื่อผู้ใช้งาน',
  `user_lastname` varchar(30) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'นามสกุลผู้ใช้งานระบบ',
  `user_position` varchar(10) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'ตำแหน่ง',
  `technical_position` varchar(40) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ตำแหน่งทางวิชาการ',
  `position_level` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ระดับ',
  `academic_position` text COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ตำแหน่งหน้าที่พิเศษ',
  `user_email` varchar(50) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'อีเมล์ผู้ใช้งานระบบ',
  `user_pass` varchar(15) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'รหัสผ่านผู้ใช้งานระบบ',
  `major_code` varchar(10) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'รหัสสาขาวิชา',
  `minor_id` varchar(7) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'รหัสสาขางาน',
  `signature_id` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'รหัสภาพลายเซนต์',
  `group_id` varchar(11) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'รหัสกลุ่มเรียน',
  `user_tel` varchar(10) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'เบอร์โทรศัพท์ผู้ใช้ระบบ',
  `view_id` varchar(4) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'รหัสระดับสิทธิ์การมองเห็น',
  `login_status` int(1) NOT NULL DEFAULT 0 COMMENT 'สถานะการล็อกอิน',
  `login_last_time` datetime NOT NULL COMMENT 'เวลาที่อยู่ในระบบล่าสุด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `general_user`
--

INSERT INTO `general_user` (`user_id`, `prefix`, `user_name`, `user_lastname`, `user_position`, `technical_position`, `position_level`, `academic_position`, `user_email`, `user_pass`, `major_code`, `minor_id`, `signature_id`, `group_id`, `user_tel`, `view_id`, `login_status`, `login_last_time`) VALUES
('1349900045616', 'นาย', 'วชิรบดินทร์', 'ศุภธีรารักษ์', 'ครู', 'ไม่มี', 'คศ. 1', 'ผู้ช่วยหัวหน้างานศูนย์ข้อมูล', 'homeworkmacka@gmail.com', 'holyfire', '3901', NULL, NULL, '632090102', '0866525611', 'lv01', 1, '2021-05-10 13:21:55'),
('Alongkorn_Phukongka', 'นาย', 'อลงกรณ์', 'ภูคงคา', 'ครู', 'ครูชำนาญการพิเศษ', 'คศ. 3', 'หัวหน้างานศูนย์ข้อมูล', 'phukongka@ccollege.ac.th', '123456', '3901', NULL, NULL, '62390105', '0811111111', 'lv01', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `signature_pic`
--

CREATE TABLE `signature_pic` (
  `signature_id` varchar(50) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'รหัสหมายเลขลายมือชื่อ',
  `signature_name` varchar(60) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'ลายมือชื่อในระบบ',
  `user_id` varchar(50) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'ชื่อผู้ใช้งานในระบบ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(11) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'รหัสประจำตัวนักเรียน',
  `prefix` enum('นาย','นางสาว','เด็กชาย','เด็กหญิง','นาง') COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'คำนำหน้า',
  `std_name` varchar(20) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'ชื่อนักเรียน',
  `std_lastname` varchar(20) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'นามสกุลนักเรียน',
  `gender` enum('ช','ญ') COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'เพศ',
  `village` varchar(30) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'หมู่บ้าน',
  `Add_number` varchar(6) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'บ้านเลขที่',
  `swine` int(5) DEFAULT NULL COMMENT 'หมู่',
  `district` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'อำเภอ',
  `sub_distric` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ตำบล',
  `Roard` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ถนน',
  `street` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ซอย',
  `province` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'จังหวัด',
  `postal_code` varchar(5) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'รหัสไปรษณีย์',
  `std_phone` varchar(10) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'หมายเลขโทรศัพท์นักเรียน',
  `std_Mail` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'อีเมล์นักเรียน',
  `std_line` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ไลน์ไอดี',
  `std_level` varchar(6) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ระดับชั้น',
  `subject_type` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ประเภทวิชา',
  `std_status` varchar(15) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'สถานะ normal, retile, drop',
  `parental_status` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'สถานภาพผู้ปกครอง',
  `prefix_dad` varchar(15) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'คำนำหน้าชื่อบิดา',
  `dad_name` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ชื่อบิดา',
  `dad_lname` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'นามสกุลบิดา',
  `village_dad` varchar(30) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'หมู่บ้านบิดา',
  `Add_number_dad` varchar(6) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'บ้านเลขที่บิดา',
  `group_dad` int(5) DEFAULT NULL COMMENT 'หมู่บิดา',
  `district_dad` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'อำเภอบิดา',
  `sub_distric_dad` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ตำบลบิดา',
  `Roard_dad` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ถนนบิดา',
  `street_dad` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ซอยบิดา',
  `province_dad` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'จังหวัดบิดา',
  `postal_code_dad` varchar(5) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'รหัสไปรษณีย์บิดา',
  `dad_tel` varchar(10) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'เบอร์โทรศัพท์บิดา',
  `living_dad` varchar(15) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'การคงชีวิตของบิดา',
  `Disability_dad` varchar(15) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ความพิการของบิดา',
  `occupation_dad` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'อาชีพบิดา',
  `dad_salary` int(5) DEFAULT NULL COMMENT 'เงินเดือนบิดา',
  `prefix_mum` varchar(15) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'คำนำหน้ามารดา',
  `mum_name` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ชื่อมารดา',
  `mum_lname` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'นามสกุลมารดา',
  `village_mum` varchar(30) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'หมู่บ้านมารดา',
  `Add_number_mum` varchar(6) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'บ้านเลขที่มารดา',
  `group_mum` int(5) DEFAULT NULL COMMENT 'หมู่มารดา',
  `district_mum` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'อำเภอมารดา',
  `sub_distric_mum` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ตำบลมารดา',
  `Roard_mum` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ถนนมารดา',
  `street_mum` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ซอยมารดา',
  `province_mum` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'จังหวัดมารดา',
  `postal_code_mum` varchar(5) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'รหัสไปรษณีย์มารดา',
  `living_mum` varchar(15) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'การคงชีวิตของมารดา',
  `Disability_mum` varchar(15) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ความพิการของมารดา',
  `occupation_mum` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'อาชีพมารดา',
  `mum_salary` int(5) DEFAULT NULL COMMENT 'เงินเดือนมารดา',
  `mum_tel` varchar(10) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'เบอร์โทรศัพท์มารดา',
  `prefix_parents` varchar(15) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'คำนำหน้าผู้ปกครอง',
  `parents_name` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ชื่อผู้ปกครอง',
  `parents_lname` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'นามสกุลผู้ปกครอง',
  `village_parents` varchar(30) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'หมู่บ้านผู้ปกครอง',
  `Add_number_parents` varchar(6) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'บ้านเลขที่ผู้ปกครอง',
  `group_parents` int(5) DEFAULT NULL COMMENT 'หมู่ผู้ปกครอง',
  `district_parents` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'อำเภอผู้ปกครอง',
  `sub_distric_parents` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ตำบลผู้ปกครอง',
  `Roard_parents` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ถนนผู้ปกครอง',
  `street_parents` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ซอยผู้ปกครอง',
  `province_parents` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'จังหวัดผู้ปกครอง',
  `postal_code_parents` varchar(5) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'รหัสไปรษณีย์ผู้ปกครอง',
  `occupation_parents` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'อาชีพผู้ปกครอง',
  `parents_salary` int(5) DEFAULT NULL COMMENT 'เงินเดือนผู้ปกครอง',
  `parents_tel` varchar(10) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'เบอร์โทรศัพท์ผู้ปกครอง',
  `village_Caddress` varchar(30) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'หมู่บ้านปัจจุบัน/หอพัก',
  `Add_number_Caddress` varchar(6) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'บ้านเลขที่ปัจจุบัน/หอพัก',
  `group_Caddress` int(5) DEFAULT NULL COMMENT 'หมู่ปัจจุบัน/หอพัก',
  `district_Caddress` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'อำเภอปัจจุบัน/หอพัก',
  `sub_distric_Caddress` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ตำบลปัจจุบัน/หอพัก',
  `Roard_Caddress` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ถนนปัจจุบัน/หอพัก',
  `street_Caddress` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'ซอยปัจจุบัน/หอพัก',
  `province_Caddress` varchar(20) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'จังหวัดปัจจุบัน/หอพัก',
  `postal_code_Caddress` varchar(5) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'รหัสไปรษณีย์ปัจจุบัน/หอพัก',
  `tel_Caddress` varchar(10) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'เบอร์โทรศัพท์ที่อยู่ปัจจุบัน/หอพัก',
  `Address_location` varchar(30) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'พิกัดบ้านตามทะเบียนบ้าน/ติดต่อได้',
  `Cur_Address_location` varchar(30) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'พิกัดบ้านพัก/หอพัก',
  `std_pass` varchar(15) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'รหัสผ่านเข้าสู่ระบบ',
  `major_id` varchar(10) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'รหัสสาขาวิชา',
  `minor_id` varchar(9) COLLATE utf8_thai_520_w2 DEFAULT NULL COMMENT 'รหัสสาขางาน',
  `group_id` varchar(11) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'รหัสกลุ่มเรียน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `prefix`, `std_name`, `std_lastname`, `gender`, `village`, `Add_number`, `swine`, `district`, `sub_distric`, `Roard`, `street`, `province`, `postal_code`, `std_phone`, `std_Mail`, `std_line`, `std_level`, `subject_type`, `std_status`, `parental_status`, `prefix_dad`, `dad_name`, `dad_lname`, `village_dad`, `Add_number_dad`, `group_dad`, `district_dad`, `sub_distric_dad`, `Roard_dad`, `street_dad`, `province_dad`, `postal_code_dad`, `dad_tel`, `living_dad`, `Disability_dad`, `occupation_dad`, `dad_salary`, `prefix_mum`, `mum_name`, `mum_lname`, `village_mum`, `Add_number_mum`, `group_mum`, `district_mum`, `sub_distric_mum`, `Roard_mum`, `street_mum`, `province_mum`, `postal_code_mum`, `living_mum`, `Disability_mum`, `occupation_mum`, `mum_salary`, `mum_tel`, `prefix_parents`, `parents_name`, `parents_lname`, `village_parents`, `Add_number_parents`, `group_parents`, `district_parents`, `sub_distric_parents`, `Roard_parents`, `street_parents`, `province_parents`, `postal_code_parents`, `occupation_parents`, `parents_salary`, `parents_tel`, `village_Caddress`, `Add_number_Caddress`, `group_Caddress`, `district_Caddress`, `sub_distric_Caddress`, `Roard_Caddress`, `street_Caddress`, `province_Caddress`, `postal_code_Caddress`, `tel_Caddress`, `Address_location`, `Cur_Address_location`, `std_pass`, `major_id`, `minor_id`, `group_id`) VALUES
('6239010022', 'นางสาว', 'ปวีณอร', 'กุลจำเริญ', 'ญ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3901', NULL, '62390105'),
('6239010023', 'นาย', 'ณัฐภูมิ', 'มอญจัตุรัส', 'ช', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3901', NULL, '62390105'),
('63209010022', 'นาย', 'พงศ์ภัค', 'ใจดี', 'ช', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20901', '209012200', '632090102'),
('63209010024', 'นางสาว', 'ชุติมณฑน์', 'เลขาโชค', 'ญ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20901', '209012200', '632090102');

-- --------------------------------------------------------

--
-- Table structure for table `student_group`
--

CREATE TABLE `student_group` (
  `group_id` varchar(11) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'รหัสกลุ่มเรียน',
  `group_code` varchar(2) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'ชื่อกลุ่มเรียน',
  `user_id` varchar(13) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'รหัสประจำตัวผู้ใช้งานระบบ',
  `advisor_id` int(10) NOT NULL COMMENT 'รหัสการเป็นที่ปรึกษา'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

-- --------------------------------------------------------

--
-- Table structure for table `user_picture`
--

CREATE TABLE `user_picture` (
  `picture_id` varchar(60) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'รหัสภาพผู้ใช้งาน',
  `picture_name` varchar(60) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'ชื่อภาพผู้ใช้งาน',
  `user_id` varchar(50) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'รหัสผู้ใช้งานระบบ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `user_picture`
--

INSERT INTO `user_picture` (`picture_id`, `picture_name`, `user_id`) VALUES
('advisor0001', 'default0000.jpg', '1349900045616'),
('advisor0002', 'default0000.jpg', 'Alongkorn_Phukongka');

-- --------------------------------------------------------

--
-- Table structure for table `view_level`
--

CREATE TABLE `view_level` (
  `view_id` varchar(4) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'รหัสระดับการเข้าถึงข้อมูล',
  `view_lv` varchar(50) COLLATE utf8_thai_520_w2 NOT NULL COMMENT 'ระดับสิทธิ์การมองเห็น'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `view_level`
--

INSERT INTO `view_level` (`view_id`, `view_lv`) VALUES
('lv01', 'ครู'),
('lv02', 'เจ้าหน้าที่งานครูที่ปรึกษา'),
('lv03', 'หัวหน้างานครูที่ปรึกษา'),
('lv04', 'หัวหน้าสาขาวิชา'),
('lv05', 'ผู้บริหาร');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`advisor_id`);

--
-- Indexes for table `general_user`
--
ALTER TABLE `general_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `signature_pic`
--
ALTER TABLE `signature_pic`
  ADD PRIMARY KEY (`signature_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_group`
--
ALTER TABLE `student_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `user_picture`
--
ALTER TABLE `user_picture`
  ADD PRIMARY KEY (`picture_id`);

--
-- Indexes for table `view_level`
--
ALTER TABLE `view_level`
  ADD PRIMARY KEY (`view_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advisor`
--
ALTER TABLE `advisor`
  MODIFY `advisor_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการเป็นที่ปรึกษา', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
