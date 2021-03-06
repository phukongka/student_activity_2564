/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : activity_62

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-05-05 09:27:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `teacher`
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `teacher_id` bigint(3) unsigned NOT NULL AUTO_INCREMENT,
  `teacher_code` varchar(30) NOT NULL DEFAULT '',
  `teacher_name` varchar(60) DEFAULT NULL,
  `teacher_posi` varchar(50) DEFAULT NULL,
  `teacher_posi1` varchar(20) DEFAULT NULL,
  `teacher_posi2` varchar(30) DEFAULT NULL,
  `teacher_posi3` varchar(30) DEFAULT NULL,
  `teacher_dep` varchar(50) DEFAULT NULL,
  `teacher_tel` varchar(12) DEFAULT NULL,
  `teacher_bri` varchar(14) DEFAULT NULL,
  `std_gro1` varchar(10) DEFAULT NULL,
  `std_gro2` varchar(10) DEFAULT NULL,
  `std_gro3` varchar(10) DEFAULT NULL,
  `std_gname` varchar(100) DEFAULT NULL,
  `std_gro4` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=MyISAM AUTO_INCREMENT=262 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES ('1', '6061001', 'นายชัยรัตน์  สุตภักดี', 'คอ.บ.วิศวกรรมโยธา', 'ครู  คศ.2', 'ปริญญาโท', '', 'ช่างก่อสร้าง', '0818784216', null, '59310601', '0', '0', '6061', '0');
INSERT INTO `teacher` VALUES ('2', '3331001', 'นายประดิษฐ์  บุญมี', 'ปวส. ปม.ช่างกลโรงงาน', 'ครู  คศ.2', 'ต่ำกว่าปริญญาตรี', '', 'ช่างกลโรงงาน', '0870208032', null, '58310207', '58310208', '0', '3331', '0');
INSERT INTO `teacher` VALUES ('3', '4041002', 'นายสุพี  ทิมจันทึก', 'คศ.บ.บริหารการศึกษา', 'ครู  คศ.3', 'ปริญญาตรี', '', 'เทคนิคพื้นฐาน', '0812827323', null, '59210201', '59210202', '0', '4041', '0');
INSERT INTO `teacher` VALUES ('4', '0002001', 'นางสาวบุษบารัตน์  ละสามา', 'กศ.บ.(คณิตศาสตร์)', 'ครู  คศ.2', 'ปริญญาตรี', null, 'สัมพันธ์', '0892835473', null, '59210502', '0', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('5', '5052002', 'นายอนุซิต มาตรสงคราม', '', 'ครู ', 'ปริญญาโท', '', 'ช่างอิเล็กทรอนิกส์', '0810655142', null, '59210503', '0', '0', '5052', '0');
INSERT INTO `teacher` VALUES ('6', '6063101', 'นายสกนธ์  หมั่นกิจ', 'ค.อ.บ.(โยธา)', 'ครู  คศ.3', 'ปริญญาตรี', '6063', 'ช่างโยธา', '0819774280', null, '59312101', '59312105', '59312106', '6063', '0');
INSERT INTO `teacher` VALUES ('7', '4041001', 'นายวัชรินทร์  โตนชัยภูมิ', 'คอ.บ.วิศวกรรมเครื่องกล', 'ครู  คศ.2', 'ปริญญาตรี', '', 'เทคนิคพื้นฐาน', '0813892111', null, '57210201', '57210202', '0', '', '0');
INSERT INTO `teacher` VALUES ('8', '5051002', 'นายดุสิต  สูรย์ราช', '-', 'ครู  คศ.3', 'ปริญญาโท', null, 'ไฟฟ้ากำลัง', '0818768459', null, '57210402', '58410401', '0', '5051', '0');
INSERT INTO `teacher` VALUES ('9', '6061003', 'นางสมหมาย  คำหงษา', 'ปทส.ก่อสร้าง', 'ครู  คศ.1', 'ปริญญาตรี', '', 'ช่างก่อสร้าง', '0887117748', null, '57210601', '0', '0', '6061', '0');
INSERT INTO `teacher` VALUES ('10', '6061002', 'นายฉลอง  ม่วงทิพย์', 'ค.อ.บ.วิศวกรรมโยธา', 'ครู  คศ.2', 'ปริญญาตรี', '6061', 'ช่างก่อสร้าง', '0833653323', null, '59210601', '59310605', '0', '6061', '0');
INSERT INTO `teacher` VALUES ('11', '6062002', 'ว่าที่ ร.ต.แสวง  ไชยบาล', 'วศ.บ.เทคโนโลยีอุตสาหกรรม', 'ครู  คศ.2', 'ปริญญาตรี', '', 'สถาปัตยกรรม', '0831253984', null, '58210601', '0', '0', '6062', '0');
INSERT INTO `teacher` VALUES ('12', '6062001', 'นายสุวัฒน์  อุตมะพันธุ์', 'ค.อ.ม.เทคโนโลยีผลิตภัณฑ์อุตสาหกรรม', 'ครู  คศ.3', 'ปริญญาโท', '6062', 'สถาปัตยกรรม', '0818786519', null, '57210801', '0', '0', '6062', '0');
INSERT INTO `teacher` VALUES ('13', '3331013', 'นายสุคต  แจ่มกลาง', 'ค.อ.บ.วิศวกรรมเครื่องกล', 'ครู  คศ.3', 'ปริญญาตรี', '', 'ช่างกลโรงงาน', '0896267901', null, '58310203', '0', '0', '3032', '0');
INSERT INTO `teacher` VALUES ('14', '3032002', 'นายชาญศักดิ์  จำรัสจันทร์', 'คบ.อุตสาหกรรมศิลป์', 'ครู  คศ.2', 'ปริญญาตรี', null, 'ช่างเชื่อมโลหะการ', '0872824743', null, '57210301', '0', '0', '3032', '0');
INSERT INTO `teacher` VALUES ('15', '3032004', 'นายสุระ  นิระวรรณ', 'ค.อ.บ.วิศวกรรมอุตสาหกรรม', 'ครู  คศ.2', 'ปริญญาตรี', '', 'ช่างเชื่อมโลหะการ', '0817092409', null, '58310301', '0', '0', '3032', '0');
INSERT INTO `teacher` VALUES ('16', '3032001', 'นายเจริญ  กฤษกลาง', 'ค.อ.ม.วิศวกรรมเครื่องกล', 'ครู  คศ.2', 'ปริญญาโท', '', 'ช่างเชื่อมโลหะการ', '0819670043', null, '57210301', '0', '0', '3032', '0');
INSERT INTO `teacher` VALUES ('17', '3032005', 'นายอภิสิทธิ์  ชัยนิติกุล', 'ค.อ.บ.วิศวกรรมเครื่องกล', 'ครู  คศ.3', 'ปริญญาตรี', '', 'ช่างเชื่อมโลหะการ', '0872608170', null, '57210301', '0', '0', '3032', '0');
INSERT INTO `teacher` VALUES ('18', '3032007', 'นายอดิศร  สิทธิวงศ์', 'คอ.ม.เทคโนโลยีสารสื่อสารการศึกษา', 'ครู  คศ.2', 'ปริญญาโท', '', 'ช่างเชื่อมโลหะการ', '0854149795', null, '58210301', '0', '0', '3032', '0');
INSERT INTO `teacher` VALUES ('19', '3032006', 'นายยุทธนา  บรรเทิงใจ', 'คบ.อุตสาหกรรมศิลป์', 'ครู  คศ.2', 'ปริญญาตรี', '3032', 'ช่างเชื่อมโลหะการ', '0815937960', null, '59410201', '58410201', '59310301', '3032', '59310305');
INSERT INTO `teacher` VALUES ('20', '4041003', 'นายอภิสิทธิ์  ชัยนิติกุล', 'ศษ.บ.เอกประถม', 'ครู  คศ.3', 'ปริญญาตรี', '', 'เทคนิคพื้นฐาน', '0868741055', null, '59210203', '0', '0', '4041', '0');
INSERT INTO `teacher` VALUES ('21', '2011003', 'นายธีรพงษ์   อินทรสมบัติ', '-', 'ครูจ้างสอน', 'ปริญญาตรี', null, 'ช่างยนต์', '-', null, '57210111', '0', '0', '2011', '0');
INSERT INTO `teacher` VALUES ('22', '2011004', 'นายอาทิตย์  บุตรสุด', '-', 'ครู  คศ.1', 'ปริญญาตรี', null, 'ช่างยนต์', '0819990977', null, '57310101', '57310102', '57310103', '2011', '0');
INSERT INTO `teacher` VALUES ('23', '2011001', 'นายเสถียร  มะสุทธิ', 'ค.อ.บ.วิศวกรรมเครื่องกล', 'ครู  คศ.3', 'ปริญญาตรี', '2011', 'ช่างยนต์', '0818765165', null, '58310101', '0', '0', '2011', '0');
INSERT INTO `teacher` VALUES ('24', '2011007', 'นายคงฤทธิ์  สีชำนิ', '-', 'ครู  คศ.1', 'ปริญญาตรี', '', 'ช่างยนต์', '0818762951', null, '59410101', '0', '0', '2011', '0');
INSERT INTO `teacher` VALUES ('25', '2011006', 'นายบุญมี  โคตรประทุม', '-', 'ครู  คศ.2', 'ปริญญาตรี', '', 'ช่างยนต์', '0868700706', null, '58210101', '58210102', '58410101', '2011', '0');
INSERT INTO `teacher` VALUES ('144', '7071001', 'นายกัมปนาท  หวะสุวรรณ', null, 'ครูประจำ', 'ปริญญาตรี', '', 'เทคโนโลยีสารสนเทศ', null, null, '59390105', '0', '0', '7071', '0');
INSERT INTO `teacher` VALUES ('26', '5051001', 'นายสุรพงษ์  เกลียวสีนาค', '-', 'ครู  คศ.3', 'ปริญญาโท', '', 'ไฟฟ้ากำลัง', '0862566161', null, '59210407', '59310409', '0', '', '0');
INSERT INTO `teacher` VALUES ('27', '5051003', 'นายสมชาย  สุขะเกตุ', '-', 'ครู  คศ.2', 'ปริญญาตรี', '', 'ไฟฟ้ากำลัง', '0899460613', null, '57310401', '0', '0', '5051', '0');
INSERT INTO `teacher` VALUES ('28', '5051009', 'นายปัญญา  สีจุ้ย', '-', 'ครู  คศ.2', 'ปริญญาโท', '', 'ไฟฟ้ากำลัง', '0896272112', null, '57210403', '0', '0', '5051', '0');
INSERT INTO `teacher` VALUES ('29', '5051007', 'นายอลงกรณ์  ภูคงคา', 'คอม.คอมพิวเตอร์และเทคโนโลยีสารสนเทศ', 'ครู  คศ.2', 'ปริญญาโท', '', 'ไฟฟ้ากำลัง', '0899321624', null, '55310405', '55310405', '0', '5051', '0');
INSERT INTO `teacher` VALUES ('30', '5051004', 'นายภควา  อ้อทอง', '-', 'ครู  คศ.1', 'ปริญญาตรี', '', 'ไฟฟ้ากำลัง', '0819970173', null, '59210403', '0', '0', '5051', '0');
INSERT INTO `teacher` VALUES ('31', '5051005', 'นายกฤษะ  ฤาชา', '-', 'ครูอัตราจ้าง', 'ปริญญาตรี', null, 'ช่างไฟฟ้ากำลัง', '0897129870', null, '58310401', '0', '0', '5051', '0');
INSERT INTO `teacher` VALUES ('32', '5051011', 'นางกรณิกา  สีจุ้ย', '-', 'ครู  คศ.2', 'ปริญญาโท', '', 'ไฟฟ้ากำลัง', '0894230514', null, '58210401', '0', '0', '5051', '0');
INSERT INTO `teacher` VALUES ('33', '5051008', 'นายวัฒนา  แพงคำดี', 'คอ.ม.วิศวกรรมไฟฟ้า', 'ครู  คศ.2', 'ปริญญาโท', '', 'ไฟฟ้ากำลัง', '0898475354', null, '58310405', '59410401', '0', '5051', '0');
INSERT INTO `teacher` VALUES ('34', '5051010', 'นายสมรัก  พรหมจารย์', 'ค.อ.บ.ไฟฟ้ากำลัง', 'ครู  คศ.2', 'ปริญญาตรี', '', 'ไฟฟ้ากำลัง', '0849618515', null, '59210405', '59210406', '0', '5051', '0');
INSERT INTO `teacher` VALUES ('35', '5051012', 'นายสยาม  โพธิ์เพ็ชร', '-', 'ครู  คศ.2', 'ปริญญาตรี', '5051', 'ไฟฟ้ากำลัง', '0862559018', null, '59310401', '59310402', '0', '5051', '0');
INSERT INTO `teacher` VALUES ('36', '5051006', 'นายธนกฤต  คเชนทร์รัตนกุล', '-', 'ครู  คศ.1', 'ปริญญาตรี', '', 'ไฟฟ้ากำลัง', '0817922455', null, '57210401', '0', '0', '', '0');
INSERT INTO `teacher` VALUES ('37', '5051013', 'นายกิตติพร  ทองขัติ', '-', 'ครู  คศ.2', 'ปริญญาตรี', '', 'ไฟฟ้ากำลัง', '0878734979', null, '58210403', '0', '0', '5051', '0');
INSERT INTO `teacher` VALUES ('38', '5052001', 'นายสุพิน  ปานะสุนทร', 'ค.อ.ม.การศึกษา', 'ครู  คศ.3', 'ปริญญาโท', '5052', 'ช่างอิเล็กทรอนิกส์', '0817893644', null, '59410501', '58410501', '0', '5052', '0');
INSERT INTO `teacher` VALUES ('39', '5052005', 'นายจีรปัฎน์  พุ่มศฤงฆาร', 'ค.อ.บ.วิศวกรรมโทรคมนาคม', 'ครู  คศ.2', 'ปริญญาตรี', '', 'ช่างอิเล็กทรอนิกส์', '0819673053', null, '59310501', '0', '0', '5052', '0');
INSERT INTO `teacher` VALUES ('40', '5052007', 'นายประภาส  สุวรรณเพชร', 'คอ.ม.ไฟฟ้า', 'ครู  คศ.2', 'ปริญญาโท', '', 'ช่างอิเล็กทรอนิกส์', '0862578230', null, '58310501', '0', '0', '5052', '0');
INSERT INTO `teacher` VALUES ('41', '5052009', 'นางสาวปาณิศา  ทองสกุล', 'อุตสาหกรรมบัณฑิต  สาขาโทรคมนาคม', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างอิเล็กทรอนิกส์', '0868029777', null, '55210408', '0', '0', '5052', '0');
INSERT INTO `teacher` VALUES ('42', '5052006', 'นายทิพยา  สุวรรณชัย', 'คอ.ม.คอมพิวเตอร์สารสนเทศ', 'ครู  คศ.2', 'ปริญญาโท', '', 'ช่างอิเล็กทรอนิกส์', '0862578230', null, '59310502', '0', '0', '5052', '0');
INSERT INTO `teacher` VALUES ('43', '5052008', 'นายสุขสรรค์  พรธิอั้ว', 'คอ.บ.การบริหารการศึกษา', 'ครู  คศ.3', 'ปริญญาโท', '', 'ช่างอิเล็กทรอนิกส์', '0804754910', null, '58310502', '0', '0', '5052', '0');
INSERT INTO `teacher` VALUES ('173', '0002018', 'Mr.Bryan K. Freeman', null, 'ครูจ้างสอนต่างชาติ', 'ครูต่างชาติ', null, 'สัมพันธ์', null, null, '0', '0', '0', '0002', null);
INSERT INTO `teacher` VALUES ('45', '8081001', 'นางเรณู  ปานะสุนทร', 'บธ.ม.บริหารธุรกิจ', 'ครู  คศ.3', 'ปริญญาโท', '8081', 'การบัญชี', '0872469422', null, '59320107', '58420101', '0', '8081', '0');
INSERT INTO `teacher` VALUES ('46', '8081002', 'นางอุบลโพยม  ด้วงนิล', 'บธ.ม.บริหารธุรกิจ', 'ครู  คศ.2', 'ปริญญาโท', '', 'การบัญชี', '0837418605', null, '59320106', '0', '0', '8081', '0');
INSERT INTO `teacher` VALUES ('47', '8081003', 'นางสาวปาริฉัตร  บุญเชิด', 'บธ.ม.บริหารธุรกิจ', '', '', '', 'การบัญชี', '0819976127', null, '59220101', '58320106', '0', '8081', '0');
INSERT INTO `teacher` VALUES ('48', '8082001', 'นางพิศมัย  สุขะเกตุ', 'บธ.ม.บริหารธุรกิจ', 'ครู  คศ.2', 'ปริญญาโท', '8082', 'การขายการตลาด', '0862651202', null, '59320201', '59320205', '0', '8082', '0');
INSERT INTO `teacher` VALUES ('49', '8084001', 'นางประภัสสร  อนิลบล', 'คอ.ม.คอมพิวเตอร์ศึกษา', 'ครู  คศ.2', 'ปริญญาโท', '8084', 'คอมพิวเตอร์ธุรกิจ', '0896260273', null, '58320401', '58420401', '0', '8084', '0');
INSERT INTO `teacher` VALUES ('50', '8083003', 'นางณิชมนย์  ตรงจันทึก', 'บธ.บ.การจัดการทั่วไป, ปว.ค.', 'ครู  คศ.2', 'ปริญญาตรี', '', 'เลขานุการ', '0814700699', null, '59321605', '0', '0', '8083', '0');
INSERT INTO `teacher` VALUES ('51', '0002002', 'นางสรีระ  โยธาสมบัติ', 'ศษ.บ.ชีววิทยา,เคมี', 'ครู  คศ.2', 'ปริญญาตรี', null, 'สัมพันธ์', '0896273466', null, '56220101', '0', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('52', '0002004', 'นางอุบลรัตน์  ผลสนอง', 'คม.หลักสูตรและการสอน', 'ครู  คศ.3', 'ปริญญาโท', '', 'สัมพันธ์', '0819669069', null, '58290101', '58290102', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('168', '0001001', 'นายบัญชา  กลิ่นจันทร์แดง', null, 'ครู  คศ.2', 'ปริญญาตรี', null, 'สามัญ', null, null, '58210201', '0', '0', '0001', '0');
INSERT INTO `teacher` VALUES ('55', '0001002', 'นายสมพงษ์  มณีวรรณ', 'กศ.บ.ภาษาไทย', 'ครู  คศ.3', 'ปริญญาตรี', '', 'สามัญ', '0898489612', null, '58320106', '0', '0', '0001', '0');
INSERT INTO `teacher` VALUES ('56', '0001004', 'นางรุ่งทิวา  อินทรมา', 'ค.บ.บรรณารักษ์ศาสตร์', 'ครู  คศ.3', 'ปริญญาตรี', '', 'สามัญ', '0851478572', null, '59210205', '0', '0', '0001', '0');
INSERT INTO `teacher` VALUES ('57', '5051015', 'นายเสกสิทธิ์  แพชัยภูมิ', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ไฟฟ้ากำลัง', '0866525943', null, '59210401', '59210402', '0', '5051', '0');
INSERT INTO `teacher` VALUES ('58', '5051016', 'นายนรินทร์  สีหะนาม', 'วิศวกรรมไฟฟ้า', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ไฟฟ้ากำลัง', '0866865235', null, '58310407', '58310408', '0', '5051', '0');
INSERT INTO `teacher` VALUES ('59', '2011009', 'นายมนูศักดิ์  สารผล', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างยนต์', '0876765982', null, '58310103', '0', '0', '2011', '0');
INSERT INTO `teacher` VALUES ('60', '2011010', 'นายวิธวัฒน์  สารโภค', 'วิศวกรรมศาสตร์ วิศวเครื่องกล', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างยนต์', '0812687585', null, '58310105', '58310106', '0', '2011', '0');
INSERT INTO `teacher` VALUES ('61', '2011008', 'นายชัชชัย  จุงอินทะ', '-', 'ครู  คศ.2', 'ปริญญาตรี', '', 'ช่างยนต์', '0844294057', null, '59210101', '59210102', '0', '2011', '0');
INSERT INTO `teacher` VALUES ('147', '0002003', 'นางสาวจิรนันท์  โคกอ่อน', null, 'ครู  คศ.2', 'ปริญญาตรี', '', 'สัมพันธ์', null, null, '58310206', '0', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('62', '3331002', 'นายบรรพต  มหาคาม', 'คอ.บ.วิศวกรรมอุตสาหกรรม', 'ครู  คศ.1', 'ปริญญาตรี', '3331', 'ช่างกลโรงงาน', '', null, '59310205', '0', '0', '3331', '0');
INSERT INTO `teacher` VALUES ('63', '3331003', 'นายภัทรพล พรมชัย', 'วท.บ.เทคโนโลยีอุสาหกรรม(การผลิต)', 'ครู  ', 'ปริญญาตรี', '', 'ช่างกลโรงงาน', '0862454515', null, '59310203', '0', '0', '3331', '0');
INSERT INTO `teacher` VALUES ('64', '3331005', 'นายศุภวุฒิ  อันสนธิ์', 'วิศวอุตสาหกรรมบัณฑิต(สาขาเครื่องกล)', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างกลโรงงาน', '0876927302', null, '59310207', '0', '0', '3331', '0');
INSERT INTO `teacher` VALUES ('65', '8081006', 'นางณัฐพร  สุวรรณชัย', 'ศศ.บ.เศรษฐศาสตร์การเกษตร', 'ครู  คศ.1', 'ปริญญาตรี', '', 'การบัญชี', '0827507254', null, '56220103', '0', '0', '8081', '0');
INSERT INTO `teacher` VALUES ('66', '8081007', 'นางดอกแก้ว  ลีโนนอด', 'บธ.ม.บัญชีมหาบัณฑิต', 'ครู  คศ.2', 'ปริญญาโท', '', 'การบัญชี', '0895754896', null, '58320101', '0', '0', '8081', '0');
INSERT INTO `teacher` VALUES ('67', '8084006', 'นายพูนศักดิ์  ศรีดี', 'วิทยาศาสตร์บัณฑิตระบบสารสนเทศเพื่อการจัดการ', 'ครูจ้างสอน', 'ปริญญาตรี', null, 'คอมพิวเตอร์ธุรกิจ', '0876782754', null, '55320402', '54320405', '-', '8084', null);
INSERT INTO `teacher` VALUES ('69', '8084005', 'นายยอดเยี่ยม  เหล่านนท์ชัย', 'วท.ม.เทคโนโลยีอินเตอร์เน็ตและสารสนเทศ', 'ครู  คศ.1', 'ปริญญาโท', '', 'คอมพิวเตอร์ธุรกิจ', '0854401991', null, '57220401', '0', '0', '8084', '0');
INSERT INTO `teacher` VALUES ('70', '8082002', 'นางสาวนงค์นุช  สีสะใบ', 'บธ.บ.การตลาด', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'การขายการตลาด', '0898473938', null, '57220201', '58320201', '58320205', '8082', '0');
INSERT INTO `teacher` VALUES ('71', '8082003', 'นางสาวปทุมพร  ประสาร', 'บธ.บ.การตลาด', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'การขายการตลาด', '0897187595', null, '59220201', '58220201', '0', '8082', '0');
INSERT INTO `teacher` VALUES ('72', '8083002', 'นางสุภัชชา  นาคสระเกษ', 'คบ.ภาษาอังกฤษ', 'ครู  คศ.2', 'ปริญญาตรี', '8083', 'เลขานุการ', '0898446476', null, '59220301', '59321605', '0', '8083', '0');
INSERT INTO `teacher` VALUES ('73', '5052011', 'นายเกียรติศักดิ์  บุรีจันทร์', '', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างอิเล็กทรอนิกส์', '', null, '55310501', '0', '0', '5052', null);
INSERT INTO `teacher` VALUES ('74', '5052013', 'นายศราวุธ  ดีแสง', 'สถาปัตยกรรมศาสตร์บัณฑิต', 'ครูจ้างสอน', 'ปริญญาตรี', null, 'ช่างอิเล็กทรอนิกส์', '-', null, '57210502', '0', '0', '5052', '0');
INSERT INTO `teacher` VALUES ('75', '5052010', 'นายอภิรักษ์  รักษากุล', 'วิศวกรรมศาสตร์ - วิศวกรรมไฟฟ้า', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างอิเล็กทรอนิกส์', '0898445675', null, '58210502', '0', '0', '5052', '0');
INSERT INTO `teacher` VALUES ('76', '7071002', 'จ่าสิบเอกเอกศักดิ์  แหชัยภูมิ', 'ครุศษสตร์อุตสาหกรรมบัณฑิต สาขาคอมพิวเตอร์', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'เทคโนโลยีสารสนเทศ', '0806085870', null, '59290101', '59290102', '0', '7071', '0');
INSERT INTO `teacher` VALUES ('77', '0001007', 'นายวัลลภ  บุญมาก', 'พุทธศาสตร์บัณฑิต(สาขารัฐศาสตร์)', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สามัญ', '', null, '59220103', '0', '0', '0001', '0ั');
INSERT INTO `teacher` VALUES ('78', '0001005', 'นางสาวรุ่งราตรี  พรหมสิริบูรณ์', 'สังคมศาสตร์ สาขารัฐศาสตร์', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สามัญ', '', null, '59210501', '0', '0', '0001', '0');
INSERT INTO `teacher` VALUES ('79', '0002007', 'นายคมกริช  กันทำ', 'ครุศาสตร์บัณฑิต(ภาษาอังกฤษ)', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สัมพันธ์', '', null, '58310505', '0', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('80', '0002005', 'นางนิติดา  นิมิตรบรรณสาร', 'คอ.ม.การบริหารการศึกษา', 'ครู  คศ.2', 'ปริญญาโท', null, 'สัมพันธ์', '0852032074', null, '59320101', '0', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('81', '0002006', 'นายสุขสันต์  หงษ์โพธิ์', 'ครุศาสตรบัณฑิต(ภาษาอังกฤษ)', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สัมพันธ์', '', null, '59310206', '0', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('82', '0002012', 'นางสาวณัฐฐาพร   นันทรัตน์', 'วิทยาศาสตร์/ฟิสิกส์', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สัมพันธ์', '0883099227', null, '58210202', '0', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('83', '0002011', 'นายวิทยา  ปัตตาเทสัง', 'คบ.คณิตสาสตร์', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สัมพันธ์', '', null, '56310105', '0', '0', '0002', null);
INSERT INTO `teacher` VALUES ('84', '0002010', 'นางดารุณี  คุ้มคง', 'คบ.คณิตศาสตร์', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สัมพันธ์', '0872419739', null, '57210206', '0', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('85', '0002008', 'นายยุทธพงษ์  จำปาแก้ว', 'วิทยาศาสตร์', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สัมพันธ์', '', null, '59210206', '0', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('170', '6063103', 'นายณรงค์ฤทธิ์  เจริญภูมิ', null, 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างโยธา', null, null, '58212101', '0', '0', '6063', '0');
INSERT INTO `teacher` VALUES ('164', '3331011', 'นายวีระชาติ  สมน้อย', null, 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างกลโรงงาน', null, null, '58210205', '0', '0', '3331', '0');
INSERT INTO `teacher` VALUES ('166', '4041005', 'นายวชิรวิทย์  อินต๊ะนอน', null, 'ครูจ้างสอน', 'ปริญญาตรี', '', 'เทคนิคพื้นฐาน', null, null, '57210201', '0', '0', '4041', '0');
INSERT INTO `teacher` VALUES ('87', '2011005', 'นายนิวัฒน์  ศิริวุฒิ', 'คอ.บ. (วิศวกรรมเครื่องกล)', 'ครู  คศ.2', 'ปริญญาตรี', '', 'ช่างยนต์', '0818768116', null, '59310101', '0', '0', '2011', '0');
INSERT INTO `teacher` VALUES ('88', '1001008', 'นางสาวิชชุฎา  คำนนท์', 'ศึกษาศาสตร์บัณฑิต สาขาภาษาไทย', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สามัญ', '0801629129', null, '56320106', '0', '0', '0001', '0');
INSERT INTO `teacher` VALUES ('89', '0002013', 'นายปรีชา  สิทธิสาร', 'วิทยาศาสตร์/ฟิสิกส์', 'คศ.1', 'ปริญญาตรี', '', 'สัมพันธ์', '', null, '58310605', '0', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('90', '3331006', 'นายจักรินทร์  ชีวะเสรีย์', 'ครุศาสตร์อุตสาหกรรมบัณฑิต(สาขาวิศวอุตสาหกรรม)', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างกลโรงงาน', '0850235961', null, '57210205', '0', '0', '3331', '0');
INSERT INTO `teacher` VALUES ('91', '3331010', 'นายธนากร  แดงบำรุง', 'วิศวกรรมศาสตร์เครื่องกล', 'ครูจ้างสอน', 'ปริญญาตรี', null, 'ช่างกลโรงงาน', '0818721124', null, '57310206', '56310206', '0', '3331', '0');
INSERT INTO `teacher` VALUES ('92', '3331007', 'นายสุชาติ  สุเพ็งคำ', 'คอ.บ.วิศวกรรมอุตสาหการ(ออกแบบการผลิต)', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างกลโรงงาน', '', null, '58210203', '58210207', '0', '3331', '0');
INSERT INTO `teacher` VALUES ('93', '5052012', 'นายกาญจน์  เหลืองดอกไม้', 'ครุศาสตร์อุตสาหกรรมบัณฑิต สาขาวิศวกรรมอิเล็กท', 'ครูจ้างสอน', 'ปริญญาตรี', null, 'ช่างอิเล็กทรอนิกส์', '0854687988', null, '57210501', '0', '0', '5052', '0');
INSERT INTO `teacher` VALUES ('94', '5051014', 'นายมนูญ  นาจวง', '-', 'ครู  คศ.2', 'ปริญญาโท', '', 'ไฟฟ้ากำลัง', '0897096547', null, '59310407', '59310408', '0', '5051', '0');
INSERT INTO `teacher` VALUES ('95', '3331009', 'นายประเสริฐ  บรรจง', 'อุตสาหกรรมศาสตร์บัณฑิต(สาขาเครื่องกล)', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างกลโรงงาน', '0894245323', null, '59310201', '59310202', '0', '3331', '0');
INSERT INTO `teacher` VALUES ('96', '0002014', 'นายไพทูรย์  สว่างตา', 'ภาษาอังกฤษ', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สัมพันธ์', '0831471687', null, '57310206', '0', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('97', '0002015', 'นางอารีรัตน์  อารีวงษ์', 'ครุศาสตร์บัณฑิต(ภาษาอังกฤษ)', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สัมพันธ์', '0881758356', null, '55210402', '0', '0', '0002', null);
INSERT INTO `teacher` VALUES ('98', '8081004', 'นางนิตยดา  ทิมจันทึก', 'บธ.บ.การเงิน', 'ครู  คศ.3', 'ปริญญาตรี', '', 'การบัญชี', '0854923847', null, '57220102', '0', '0', '8081', '0');
INSERT INTO `teacher` VALUES ('99', '8081005', 'นางนันทนา  สุวรรณเพชร', 'บธ.บ.การเงินการธนาคาร', 'ครู  คศ.2', 'ปริญญาตรี', '', 'การบัญชี', '0810739326', null, '58220101', '0', '0', '8081', '0');
INSERT INTO `teacher` VALUES ('100', '8084007', 'นางสาวเสาวลักษณ์  ตันติพัฒนานนท์', 'บริหารธุรกิจบัณฑิต  สาาคอมพิวเตอร์', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'คอมพิวเตอร์ธุรกิจ', '0877791953', null, '58320405', '0', '0', '8084', '0');
INSERT INTO `teacher` VALUES ('101', '8084008', 'นางสาวรำไพ  อมรเจริญกุล', '-', 'ครู  คศ.1', 'ปริญญาโท', '', 'คอมพิวเตอร์ธุรกิจ', '0868750027', null, '58320401', '0', '0', '8084', '0');
INSERT INTO `teacher` VALUES ('102', '4041004', 'นายสหชัย  วัดเมือง', 'คบ.อุตสาหกรรมศิลป์', 'ครู  คศ.2', 'ปริญญาตรี', '4041', 'เทคนิคพื้นฐาน', '0814705226', null, '57210203', '0', '0', '4041', '0');
INSERT INTO `teacher` VALUES ('103', '8081008', 'นางพรปภัทร สุวรรณธร', 'บธ.ม.บัญชีมหาบัณฑิต', 'ครู  คศ.1', 'ปริญญาโท', '', 'การบัญชี', '0878633695', null, '58320105', '0', '0', '8081', '0');
INSERT INTO `teacher` VALUES ('104', '0001003', 'นางเสาวภา  ดิเรกโภค', 'ค.บ.บรรณารักษ์ศาสตร์', 'ครู  คศ.2', 'ปริญญาตรี', '', 'สามัญ', '0895803591', null, '59310403', '59310404', '58310403', '0001', '58310404');
INSERT INTO `teacher` VALUES ('105', '2011011', 'นายศักดิ์สิทธิ์  บุญมาก', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างยนต์', '0894243544', null, '57210103', '57210104', '0', '2011', '0');
INSERT INTO `teacher` VALUES ('106', '5052004', 'นายวิรุฬห์  คเชนทร์รัตนกุล', 'คอ.บ.วิศวกรรมโทรคมนาคม', 'ครู  คศ.2', 'ปริญญาตรี', '', 'ช่างอิเล็กทรอนิกส์', '0862472884', null, '59310505', '0', '0', '5052', '0');
INSERT INTO `teacher` VALUES ('107', '6063102', 'นายยศวัฒน์  บุญมาปัด', 'คอ.ม.วิศวกรรมโยธา', 'ครู  คศ.1', 'ปริญญาโท', '', 'ช่างโยธา', '0892814443', null, '57212101', '57212102', '58312101', '6063', '58312105');
INSERT INTO `teacher` VALUES ('109', '8081009', 'นางศิริพร  ปรมะ', 'บริหารธุรกิจบัณฑิต สาขาการบัญชี', 'ครู  คศ.2', 'ปริญญาตรี', '', 'การบัญชี', '0810660654', null, '57220101', '58320106', '59420101', '8081', '0');
INSERT INTO `teacher` VALUES ('110', '8084009', 'นางสาวมณีรัตน์  พระไตรยะ', 'ครุศาสตร์อุตสาหกรรมบัณฑิต สาขาคอมพิวเตอร์', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'คอมพิวเตอร์ธุรกิจ', '-', null, '0', '59220401', '58220404', '8084', '0');
INSERT INTO `teacher` VALUES ('111', '8083001', 'นางเจียมจิตต์  โพธิ์ถิรเลิศ', 'คอ.บ.วิศวกรรมอุตสาหกรรม', 'ครู  คศ.2', 'ปริญญาตรี', '', 'เลขานุการ', '0896262226', null, '59220301', '0', '0', '8083', '0');
INSERT INTO `teacher` VALUES ('112', '0002009', 'นางสาวลลิตา  ทัพธานี', 'ครุศาสตร์บัณฑิตวิทยาศาสตร์ทั่วไป', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สัมพันธ์', '0892803468', null, '59220102', '0', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('113', '0002016', 'นางสาวสร้อยสุดา  โพธิ์ชัยภูมิ', 'ครุศาสตร์บัณฑิต(คณิตศาสตร์)', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สัมพันธ์', '', null, '59310208', '0', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('114', '2011012', 'นายสมชาย  เจริญผล', '-', 'ครู  คศ.3', 'ปริญญาตรี', '', 'ช่างยนต์', '0823051936', null, '59310103', '0', '0', '2011', '0');
INSERT INTO `teacher` VALUES ('115', '6062003', 'นายชยางกูร  ไชยกิตติ', 'คอ.ม.สถาปัตยกรรม', 'ครู  คศ.1', 'ปริญญาโท', '', 'สถาปัตยกรรม', '0867180638', null, '59210801', '0', '0', '6062', '0');
INSERT INTO `teacher` VALUES ('116', '5052003', 'นายจุลศักดิ์  ศิริโชติ', 'คอ.ม.บริหารการศึกษา', 'ครู  คศ.2', 'ปริญญาโท', '', 'ช่างอิเล็กทรอนิกส์', '-', null, '58210501', '0', '0', '5052', '0');
INSERT INTO `teacher` VALUES ('117', '8081010', 'นางสาวชลลดา  จันทรแดง', 'บริหารธุรกิจบัณฑิต สาขาการบัญชี', 'ครู  คศ.1', 'ปริญญาตรี', '', 'การบัญชี', '0872412355', '', '58220102', '0', '0', '8081', '0');
INSERT INTO `teacher` VALUES ('118', '8084002', 'นายปิยะ  วันทาแท่น', '-', 'ครู  คศ.1', 'ปริญญาโท', '', 'คอมพิวเตอร์ธุรกิจ', '0898562209', null, '58320402', '0', '0', '', '0');
INSERT INTO `teacher` VALUES ('119', '8081011', 'นางสาวนิภาวรรณ   ภุูศรีจัน', 'บริหารธุรกิจบัณฑิต สาขาบัญชี', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'การบัญชี', '0833839990', null, '59320105', '0', '0', '8081', '0');
INSERT INTO `teacher` VALUES ('120', '8084003', 'นางสารภี  แต่งผิว', 'คอมพิวเตอร์และเทคโนโลยีสารสนเทศ(คอม.)', 'ครู  คศ.1', 'ปริญญาโท', '', 'คอมพิวเตอร์และเทคโนโลยีสารสนเทศ(คอม.)', '0897162237', null, '58220402', '58220403', '0', '', '0');
INSERT INTO `teacher` VALUES ('121', '3331004', 'นายอุทัย  คตภูธร', 'คอ.บ.วิศวกรรมอุตสาหกรรม', 'ครู  คศ.1', 'ปริญญาตรี', '', 'ช่างกลโรงงาน', '0801958145', null, '59310209', '59310210', '58310201', '3331', '58310202');
INSERT INTO `teacher` VALUES ('122', '0001006', 'นายปรีชา  อารีวงษ์', 'ศิลปศาตร์บัณฑิต สาขาสังคม', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สามัญ', '0879585566', null, '58310601', '0', '0', '0001', '0');
INSERT INTO `teacher` VALUES ('123', '6062005', 'นางสุจิตราภรณ์  ศรีสวัสดิ์', 'ครุศาสตร์บัณฑิต สาขาเทคนิคสถาปัตยกรรม', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สถาปัตยกรรม', '0812657826', null, '58210801', '58310801', '58310805', '6062', '0');
INSERT INTO `teacher` VALUES ('124', '6062006', 'นายจักพันธ์  ประสพเงิน', 'ครุศาสตร์บัณฑิต สาขาเทคนิคสถาปัตยกรรม', 'ครูจ้างสอน', 'ปริญญาตรี', null, 'สถาปัตยกรรม', '0869977212', null, '59310801', '59310805', '0', '6062', '0');
INSERT INTO `teacher` VALUES ('125', '2011013', 'นายกิตติพงษ์  ยืดยาว', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างยนต์', '', null, '56210105', '56210106', '0', '2011', '0');
INSERT INTO `teacher` VALUES ('126', '2011014', 'นายพิทักษ์  รวมขุนทด', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างยนต์', '', null, '59210105', '59210106', '0', '2011', '0');
INSERT INTO `teacher` VALUES ('127', '2011002', 'นายวินัย  จันทร์ขามป้อม', '-', 'ครู  คศ.2', 'ปริญญาตรี', '', 'ช่างยนต์', '', null, '57210101', '57210102', '0', '2011', '0');
INSERT INTO `teacher` VALUES ('162', '3032008', 'นายกฤษณชนม์  คำศรีสุข', null, 'ครู คศ.1', 'ปริญญาตรี', '', 'ช่างเชื่อมโลหะการ', null, null, '59210301', '0', '0', '3032', '0');
INSERT INTO `teacher` VALUES ('128', '5051017', 'นายไพบูลย์  ตั้งจรูญถาวร', 'บธ.ม.บริหารธุรกิจ', 'ครู  คศ.1', 'ปริญญาโท', '', 'ไฟฟ้ากำลัง', '0815479117', null, '58210402', '0', '0', '5051', '0');
INSERT INTO `teacher` VALUES ('130', '8084004', 'นายปรีชา  ปรือปรัง', 'ครุศาสตร์อุตสาหกรรมบัณฑิต สาขาคอมพิวเตอร์ธุรก', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'คอมพิวเตอร์ธุรกิจ', '-', null, '56320403', '0', '0', '8084', '0');
INSERT INTO `teacher` VALUES ('172', '0002019', 'Mr. Divine Toh kom', null, 'ครูจ้างสอนต่างชาติ', 'ครูต่างชาติ', null, 'สัมพันธ์', null, null, '0', '0', '0', '0002', null);
INSERT INTO `teacher` VALUES ('174', '2011015', 'นายอนุชา คำนนอินทร์', null, 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างยนต์', null, null, '56210103', '56210104', '0', '2011', '0');
INSERT INTO `teacher` VALUES ('179', '5051018', 'นายโกวิท  พันธุ์ทอง', 'ค.อ.บ วิศวกรรรมไฟฟ้ากำลัง', 'ครู  คศ.2', 'ปริญญาตรี', '', 'ไฟฟ้ากำลัง', null, null, '59310405', '59310406', '0', '5051', '0');
INSERT INTO `teacher` VALUES ('180', '0002020', 'Mr.Glen  H.Weyer  II', null, 'ครูจ้างสอนต่างชาติ', 'ครูต่างชาติ', null, 'สัมพันธ์', null, null, null, null, null, '0002', null);
INSERT INTO `teacher` VALUES ('181', '7071003', 'นางสาวกฤษณา  แนววิเศษ', 'คอม.คอมพิวเตอร์และเทคโนโลยีสารสนเทศ', 'ครูประจำ', 'ปริญญาโท', '7071', 'เทคโนโลยีสารสนเทศ', null, null, '57290101', '57290102', '58390105', '7071', '58390106');
INSERT INTO `teacher` VALUES ('182', '0002017', 'นางเข็มพร  ทันสมัย', null, 'ครูจ้างสอนต่างชาติ', 'ครูต่างชาติ', null, 'สัมพันธ์', null, null, null, null, null, '0002', null);
INSERT INTO `teacher` VALUES ('183', '6062007', 'นายอนุรักษ์  หม่องนัน', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'สถาปัตยกรรม', null, null, null, null, null, '6062', null);
INSERT INTO `teacher` VALUES ('184', '6062008', 'นายดนุพล  ทาบุญ', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'สถาปัตยกรรม', null, null, null, null, null, '6062', null);
INSERT INTO `teacher` VALUES ('186', 'admin', 'ผู้ดูแลระบบ', 'ผู้ดูแลระบบ', 'ครูจ้างสอน', null, null, null, null, null, null, null, null, '', null);
INSERT INTO `teacher` VALUES ('187', '5052014_14', 'นางชุติญา  อัยยะ', null, 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างอิเล็กทรอนิกส์', null, null, '56310506', '0', '0', '5052', null);
INSERT INTO `teacher` VALUES ('188', '2011016', 'นายไกรภูมิ  คำนาค', null, 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างยนต์', null, null, '59310104', '0', '0', '2011', '0');
INSERT INTO `teacher` VALUES ('189', '0002021', 'นางสาวเณตรนรินทร์   ชื่นใส', null, 'ครู  คศ.2', 'ปริญญาตรี', null, 'สัมพันธ์', null, null, '57210202', '0', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('190', '2011017', 'นายเฉลิมวุฒิ  อาจกมล', null, 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างยนต์', null, null, '58210105', '58210106', '58210111', '2011', '0');
INSERT INTO `teacher` VALUES ('191', '6063104', 'นายสุริยา  พลทะยาน', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'ช่างโยธา', null, null, '55210602', '55210603', '0', '6063', '0');
INSERT INTO `teacher` VALUES ('192', '8084010', 'นางสาวมณีรัตน์  ประดับค่าย', null, 'ครูจ้างสอน', 'ปริญญาตรี', '', 'คอมพิวเตอร์ธุรกิจ', null, null, '59220402', '59220403', '0', '8084', '0');
INSERT INTO `teacher` VALUES ('200', '8084011', 'นางนันท์นภัส  คำวชิรพิทักษ์', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'คอมพิวเตอร์ธุรกิจ', null, null, '58220401', '59320401', '0', '8084', '0');
INSERT INTO `teacher` VALUES ('201', '3331012', 'นายอภิโชค  พรหมจันทร์', null, 'ครูอัตราจ้าง', 'ปริญญาตรี', '', 'ช่างกลโรงงาน', null, null, '58210201', '0', '0', '3331', '0');
INSERT INTO `teacher` VALUES ('203', '0002022', 'นายอนุศาสน์   ปาทา', null, 'ครู  คศ.2', 'ปริญญาตรี', '0001', 'สัมพันธ์', null, null, '58210601', '0', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('204', '0002023', 'Mrs.Edela Mojoko Eko Molue', null, 'ครูจ้างสอนต่างชาติ', 'ครูต่างชาติ', null, 'สัมพันธ์/ภาษาอังกฤษ', null, null, null, null, null, '0002', null);
INSERT INTO `teacher` VALUES ('205', '0002024', 'Mr.Mathew  Williams', null, 'ครูจ้างสอนต่างชาติ', 'ครูต่างชาติ/ภาษาอังกฤษ', null, 'สัมพันธ์', null, null, null, null, null, '0002', null);
INSERT INTO `teacher` VALUES ('206', '9009', 'งานกิจกรรม', 'งานกิจกรรม', 'งานกิจกรรม', null, null, 'งานกิจกรรม', null, null, null, null, null, null, null);
INSERT INTO `teacher` VALUES ('208', '7071004', 'นายอลงกรณ์  ภูคงคา', null, 'ครู  คศ.3', 'ปริญญาโท', null, 'เทคโนโลยีสารสนเทศ', null, null, '58290101', '58290102', '0', '7071', '0');
INSERT INTO `teacher` VALUES ('210', '3331014', 'นายบุรินทร์  อ่อนมี', null, 'ครู  คศ.1', 'ปริญญาตรี', null, 'ช่างกลโรงงาน', null, null, '58310205', '0', '0', null, '0');
INSERT INTO `teacher` VALUES ('211', '2011020', 'นายศรรตยา  พิณพาทย์', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'ช่างยนต์', null, null, '58310107', '58310108', '0', null, '0');
INSERT INTO `teacher` VALUES ('212', '2011018', 'นายวสันต์  สมวงษ์สา', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'ช่างยนต์', null, null, '59310107', '59310108', '0', null, '0');
INSERT INTO `teacher` VALUES ('213', '2011019', 'นายณัฐกรณ์  พั้วสุ', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'ช่างยนต์', null, null, '59210103', '59210104', '0', null, '0');
INSERT INTO `teacher` VALUES ('214', '8084012', 'นางตุ๊กตา  นารีรักษ์', null, 'ครู', 'ปริญญาตรี', null, 'แผนกคอมพิวเตอร์ธุระกิจ', null, null, '59220403', '0', '0', null, '0');
INSERT INTO `teacher` VALUES ('215', '0002027', 'นางพัชรี  ภูสีอ่อน', null, 'ครู', 'ปริญญาตรี', null, 'สัมพันธ์', null, null, '58210206', '0', '0', null, '0');
INSERT INTO `teacher` VALUES ('216', '0002028', 'นายพุทธิศักดิ์  อุดมเศรษฐ์', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'แผนกสัมพันธ์', null, null, '57210601', '0', '0', null, '0');
INSERT INTO `teacher` VALUES ('217', '0002025', 'Ms.Hu Jie', null, 'ครูจ้างสอนต่างชาติ', 'ครูต่างชาติ/ภาษาจีน', null, 'แผนกสัมพันธ์', null, null, null, null, null, null, null);
INSERT INTO `teacher` VALUES ('218', '0002026', 'Ms.Liu  Meng Jun', null, 'ครูจ้างสอนต่างชาติ', 'ครูต่างชาติ/ภาษาจีน', null, 'ครู', null, null, null, null, null, null, null);
INSERT INTO `teacher` VALUES ('219', '2011021', 'นายธีรศักดิ์  สาวะถี', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'ช่างยนต์', null, null, '59210110', '59210111', '0', null, '0');
INSERT INTO `teacher` VALUES ('220', '2011022', 'นายณัฐวุฒิ  ดื่มโชค', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'ช่างยนต์', null, null, '59310105', '59310106', '0', null, '0');
INSERT INTO `teacher` VALUES ('221', '2011023', 'นายภัทรพล  ระโยธี', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'ช่างยนต์', null, null, '58210103', '58210104', '0', null, '0');
INSERT INTO `teacher` VALUES ('222', '3331015', 'นายฉัตรมงคล  มาตรเมือง', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'ช่างกลโรงงาน', null, null, '59210207', '0', '0', null, '0');
INSERT INTO `teacher` VALUES ('223', '8084012', 'นางตุ๊กตา  นารีรักษ์', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'คอมพิวเตอร์ธุระกิจ', null, null, '59220403', '0', '0', null, '0');
INSERT INTO `teacher` VALUES ('224', '8084013', 'นายกฤตเมธ  เกิดบ้านเป้า', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'คอมพิวเตอร์ธุระกิจ', null, null, '57220402', '59320403', '0', null, '0');
INSERT INTO `teacher` VALUES ('225', '5051019', 'นายอนันท์  รักษาวัง', null, 'ครูอัตราจ้าง', 'ปริญญาตรี', null, 'ไฟฟ้ากำลัง', null, null, '58310406', '0', '0', null, '0');
INSERT INTO `teacher` VALUES ('226', '5051020', 'นายณฐปกรณ์  อิ่มเหว่า', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'ไฟฟ้ากำลัง', null, null, '59210404', '0', '0', null, '0');
INSERT INTO `teacher` VALUES ('227', '5051021', 'นายจักรพันธุ์  ทองจำรูญ', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'ไฟฟ้ากำลัง', null, null, '59310410', '0', '0', null, '0');
INSERT INTO `teacher` VALUES ('228', '0002029', 'Mr.Brian  J.Harrison', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'สัมพันธ์', null, null, null, null, null, null, null);
INSERT INTO `teacher` VALUES ('229', '3331016', 'นายสุพล  หาญชนะ', '-', 'ครู', 'ปริญญาตรี', '', 'ช่างกลโรงงาน', '0866525943', null, '59210401', '59210402', '0', '3331016', '0');
INSERT INTO `teacher` VALUES ('230', '0002030', 'นางปัณฑิกา  ไชยกิตติ ', '-', 'ครู', 'ปริญญาตรี', '', 'สัมพันธ์/ภาษาอังกฤษ', '0866525943', null, '59210401', '59210402', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('231', '0002031', 'นางอารีรัตน์  อารีวงษ์ ', '-', 'ครู', 'ปริญญาตรี', '', 'สัมพันธ์/ภาษาอังกฤษ', '0866525943', null, '59210401', '59210402', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('232', '0001008', 'นายณัฐวัฒน์  เข็มตรง', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สัมพันธ์/พลานามัย', '0866525943', null, '59210401', '59210402', '0', '0001', '0');
INSERT INTO `teacher` VALUES ('233', '0001009', 'นางพิมพาพร  กลิ่นจันทร์แดง ', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สัมพันธ์/พลานามัย', '0866525943', null, '59210401', '59210402', '0', '0001', '0');
INSERT INTO `teacher` VALUES ('234', '4041006', 'นายศุภกฤต  จัตุเรศ ', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'เทคนิคพื้นฐาน', '0866525943', null, '59210401', '59210402', '0', '4041', '0');
INSERT INTO `teacher` VALUES ('235', '3032009', 'นางสาวรัญญา  ชื่นเมือง ', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างเชื่อมโลหะการ', '0866525943', null, '59210401', '59210402', '0', '3032', '0');
INSERT INTO `teacher` VALUES ('236', '5052014', 'นายณัฐดนัย  ชมภูพาน', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างอิเล็กทรอนิกส์', '0866525943', null, '59210401', '59210402', '0', '5052', '0');
INSERT INTO `teacher` VALUES ('237', '5052015', 'นายวัชราวุธ  สอนชัยภูมิ ', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ช่างอิเล็กทรอนิกส์', '0866525943', null, '59210401', '59210402', '0', '5052', '0');
INSERT INTO `teacher` VALUES ('238', '7071005', 'นายเจษฎา  มาประเสริฐ ', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'เทคโนโลยีสารสนเทศ', '0866525943', null, '59290101', '59290102', '0', '7071', '0');
INSERT INTO `teacher` VALUES ('239', '0002032', 'Mr.Bishnu Rai ', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สัมพันธ์/ภาษาอังกฤษ', '0866525943', null, '59210401', '59210402', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('240', '0002033', 'Mr.Namgay  Wangdi ', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'สัมพันธ์/ภาษาอังกฤษ', '0866525943', null, '59210401', '59210402', '0', '0002', '0');
INSERT INTO `teacher` VALUES ('241', '5051022', 'นางสาวกมลทิพย์  วรพล', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ไฟฟ้ากำลัง', '0862559018', null, '59310401', '59310402', '0', '', '0');
INSERT INTO `teacher` VALUES ('242', '5051023', 'นายสุรพงศ์  พรมชีลอง', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ไฟฟ้ากำลัง', '0862559018', null, '59310401', '59310402', '0', '', '0');
INSERT INTO `teacher` VALUES ('243', '5051024', 'นายนคร  ยืนนาน', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', 'ไฟฟ้ากำลัง', '0862559018', null, '59310401', '59310402', '0', '', '0');
INSERT INTO `teacher` VALUES ('244', '6063105', 'นายวันชัย  ชำนาญศรี', '-', 'รองผู้อำนวยการฝ่ายวิ', 'ปริญญาโท', '', '', '', null, '', '', '0', '', '0');
INSERT INTO `teacher` VALUES ('245', '8082004', 'นางสาวจารุณี  คบสหาย', '-', 'ครูจ้างสอน', 'ปริญญาตรี', '', '', '', null, '', '', '0', '', '0');
INSERT INTO `teacher` VALUES ('246', '3331008', 'นายโชคชัย  มูลกว้าง', null, 'ครู ค.ศ.1', 'ปริญญาตรี', null, 'ช่างกลโรางงาน', null, null, '55210602', '55210603', '0', '6063', '0');
INSERT INTO `teacher` VALUES ('247', '0001010', 'นายมงคล  ภูสิลิต', null, 'ครูอัตราจ้าง', 'ปริญญาตรี', null, 'สามัญ', null, null, '55210602', '55210603', '0', '6063', '0');
INSERT INTO `teacher` VALUES ('248', '8082005', 'นายรัชภูมิ  คุ้มบุ่งคล้า', null, 'ครูอัตราจ้าง', 'ปริญญาตรี', null, 'การขายและการตลาด', null, null, '55210602', '55210603', '0', '6063', '0');
INSERT INTO `teacher` VALUES ('249', '6061004', 'นางใจแก้ว  ศิริโชติ', null, 'ครูอัตราจ้าง', 'ปริญญาตรี', null, 'ช่างก่อสร้าง', null, null, '55210602', '55210603', '0', '6063', '0');
INSERT INTO `teacher` VALUES ('250', '3032010', 'นายกฤษดา  อภัยนอก', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'ช่างเชื่อมโลหะ', null, null, '55210602', '55210603', '0', '6063', '0');
INSERT INTO `teacher` VALUES ('251', '6063107', 'นายเจษฎา  จิตแสง', null, 'ครูจ้างสอน', 'ปริญญาตรี', null, 'ช่างโยธา', null, null, '55210602', '55210603', '0', '6063', '0');
INSERT INTO `teacher` VALUES ('252', '3331017', 'นายชัยชนะ  ชิระบุตร', '', 'ครูอัตราจ้าง', 'ปริญญาตรี', '', 'ช่างกลโรงงาน', '', null, '', '0', '0', '', '0');
INSERT INTO `teacher` VALUES ('253', '5051025', 'นายนภัทร  จงใจภักดิ์', '', 'ครูอัตราจ้าง', 'ปริญญาตรี', '', 'ช่างไฟฟ้ากำลัง', '', null, '', '0', '0', '', '0');
INSERT INTO `teacher` VALUES ('254', '5051026', 'นายณัฐวัฒน์  ชูศรี', '', 'ครูอัตราจ้าง', 'ปริญญาตรี', '', 'ช่างไฟฟ้ากำลัง', '', null, '', '0', '0', '', '0');
INSERT INTO `teacher` VALUES ('255', '6063106', 'นางสาวพัชรี   ศรีน้อย', '', 'ครูอัตราจ้าง', 'ปริญญาตรี', '', 'ช่างโยธา', '', null, '', '0', '0', '', '0');
INSERT INTO `teacher` VALUES ('261', '6061005', 'นางสาวนุชรี   ตามบุญ', '', '', 'ครูจ้างสอน', '', 'ปริญญาตรี', '', null, '', '0', '0', '', '0');
