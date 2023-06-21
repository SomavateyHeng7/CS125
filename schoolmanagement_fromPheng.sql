/*
 Navicat Premium Data Transfer

 Source Server         : SchoolManagement
 Source Server Type    : MySQL
 Source Server Version : 50736 (5.7.36)
 Source Host           : 0.tcp.ap.ngrok.io:10834
 Source Schema         : schoolmanagement

 Target Server Type    : MySQL
 Target Server Version : 50736 (5.7.36)
 File Encoding         : 65001

 Date: 01/09/2022 19:15:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admission
-- ----------------------------
DROP TABLE IF EXISTS `admission`;
CREATE TABLE `admission`  (
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `desc1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `desc2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `desc3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `desc4` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `desc5` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `desc6` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `desc7` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of admission
-- ----------------------------
INSERT INTO `admission` VALUES ('Bachelor\'s Admission', 'Admission criteria and Process MAMA University accepts both national and international students who meet the admission requirements. Students applying to MAMA for a Bachelor\'s degree are required to submit all', ' necessary documentation for admission and have acceptable scores and grades in their previous education. MAMA is glad to provide education to students from different backgrounds and cultures.', 'International students help to enhance the learning environment and collegiate experience. If transferring from another institution, you may be eligible to receive credit for coursework completed.', ' The decision on the transfer of coursework is at the sole discretion of MAMA. Students who wish to transfer coursework must provide official transcripts and the syllabus of the courses they took.', NULL, NULL, NULL);
INSERT INTO `admission` VALUES ('Master\'s Admission', 'MAMA is accepting local and international students who meet the minimum Master\'s admission criteria.Students applying to MAMA for a Master\'s degree are required to submit all necessary documentation for', 'admission and have acceptable scores and grades in their previous education. MAMA is happy to provide education to students from different backgrounds and cultures. International students help to enhance the', 'learning environment and collegiate experience.', NULL, NULL, NULL, NULL);
INSERT INTO `admission` VALUES ('International Student Admission', 'Welcome International Students to MAMA!\r\nMAMA UNIVERISTY is committed to helping international students fulfill their educational dreams and goals. We will work closely with our prospective students to help them through the admission process as well as', ' with housing, orientation, obtaining a bachelor\'s degree, seeking career opportunities, and much more. The University has a new campus with state-of-the-art classrooms,', ' a strong U.K. academic curriculum and provides opportunities to work closely with faculty members in a safe and welcoming environment.', NULL, NULL, NULL, NULL);
INSERT INTO `admission` VALUES ('International students have a great opportunity to:', 'Study with highly-qualified faculty with significant international experience as well as other international and Cambodian students.', 'Transfer to our University partners in the United States under 1+1 transfer program, meaning after successfully studying one year at MAMA students can transfer to one of MAMA\'s partners in the U.K.', 'Transfer to our University partners in the United States under 2+2 transfer program, meaning after successfully studying two years at MAMA students can transfer to one of MAMA\'s partners to complete their undergraduate program in the U.K.', 'Study the entire four years at MAMA, obtaining two degree, one from MAMA and the other from one of MAMA\'s partners.', 'For more information about MAMA, please explore our website at <span>www.mama.edu.kh</span> or email us at info@mama.edu.kh or 023 123 456.', NULL, NULL);
INSERT INTO `admission` VALUES ('English Prepartory School', 'The English Preparatory Program at the MAMA is designed to advance studentsâ€™ English and develop readiness to join collegiate courses.', ' Students will study integrated language skills, develop the soft skills that are needed to succeed in university using Project Based Learning, and complete personalized and individualized learning tasks. ', 'In the integrated skills section, they will develop their fluency while learning vocabulary and grammar for both academic and social situations. The use of Extensive Reading as part of their', ' personalized and individualized learning allows them to read for fun, but at the same time, recycle the English they have learned enabling language acquisition to take place.', NULL, NULL, NULL);
INSERT INTO `admission` VALUES (NULL, '<div> <div class=\"cell\">Classes</div> <div class=\"cell\">EPS 1</div> <div class=\"cell\">EPS 2</div> <div class=\"cell\">EPS 3</div> <div class=\"cell\">EPS 4</div> </div>', '<div> <div class=\"cell\">Tuition</div> <div class=\"cell\">$5,000</div> <div class=\"cell\">$5,000</div> <div class=\"cell\">$5,000</div> <div class=\"cell\">$5,000</div> </div>', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `admission` VALUES ('Tuiton fees\r\nTuiton fees\r\nTuition fees', 'MAMA provides a dual degree program in Accounting and Finance, Architecture, Business Administration', ' Banking and Finance, Civil Engineering, Computer Science, Economics, International Relations, Laws. ', 'Through a dual degree program, students can earn fully accredited U.K degrees while studying in Cambodia and save 5 to 7 times the cost of studying abroad.', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Lastname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Phonenumber` int(11) NULL DEFAULT NULL,
  `Message` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES (1, 'sdfsadfsadf', 'sdfasdf', 'ssamnang@asdfasdf', 1231, 'sdfasdf');
INSERT INTO `contact` VALUES (2, 'asdfasdfs', 'asdfasdf', 'hengsomavatey2004@gmail.com', 123123, 'sdfasdfasdf');

-- ----------------------------
-- Table structure for registration
-- ----------------------------
DROP TABLE IF EXISTS `registration`;
CREATE TABLE `registration`  (
  `firstname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `citizenship` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nationality` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `gender` tinyint(4) NULL DEFAULT NULL,
  `birthdate` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emer_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emer_phone` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emer_email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emer_relation` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `school` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grad` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tests` int(11) NULL DEFAULT NULL,
  `major` int(11) NULL DEFAULT NULL,
  `emer_address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of registration
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_academic
-- ----------------------------
DROP TABLE IF EXISTS `tbl_academic`;
CREATE TABLE `tbl_academic`  (
  `fac_id` int(11) NOT NULL AUTO_INCREMENT,
  `fac_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fac_description` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `fac_category` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`fac_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_academic
-- ----------------------------
INSERT INTO `tbl_academic` VALUES (1, 'Faculty of Laws', 'The Faculty of Laws is grounded in ethics and provides a wide range of courses in the areas of substantive law such as business law, contracts, criminal law,', 1);
INSERT INTO `tbl_academic` VALUES (2, 'Faculty of Engineering', 'The Faculty of Engineering at MAMA University strives to prepare its students with the highest quality education and research who will endure the challenges of the industry and the society competently.', 1);
INSERT INTO `tbl_academic` VALUES (3, 'Faculty of Information and Computer Technology (ICT)', 'The faculty offers a leading undergraduate program and graduate program in Information Computer Technology. The Information and Communications Technology (ICT) program is designed to develop graduates with the ability to manage and lead computer-based information systems.', 1);
INSERT INTO `tbl_academic` VALUES (4, 'Faculty of Economic and Administrative Science', 'The Faculty of Economics and Administrative Sciences (EAS) at MAMA University offers four undergraduate degree majors.The Faculty values student-centered and problem-based learning.', 1);
INSERT INTO `tbl_academic` VALUES (5, 'English Preparation School', 'English Preparatory School (EPS) is an intensive English program aimed at the advancement of language performance by potential freshmen candidates. Based on the results of the MAMA University entrance exam (aka Proficiency Exam), students lacking the required English language proficiency are admitted to the EPS to enhance their language competence.', 1);
INSERT INTO `tbl_academic` VALUES (6, 'Master of Business Administration', 'An MBA degree is an opportunity for professionals in different fields to learn the necessary skills for career growth and leadership. The program provides an interactive learning environment tailored to the needs of students and opportunities for networking with professionals. The core of the program includes leadership, human resource management, marketing, and finance units. The selection of elective courses provides an opportunity for students to specialize in certain files of management.', 2);
INSERT INTO `tbl_academic` VALUES (7, 'Master of Arts in International Relation', 'The M.A. in International Relations program at MAMA University aims to equip graduate students with a deeper understanding of the theories and issues in international affairs, so that they can analyze, comprehend, and have better insights about current global affairs. Graduates of the MA program in International Relations can pursue careers in diplomatic corps, foreign affairs ministries, international affairs offices, international organizations (such as the UN bodies), higher education institutions, as well as in governmental and non-governmental institutions.', 2);
INSERT INTO `tbl_academic` VALUES (8, 'Master of Science in Management of Information System\r\n', 'This Master of Science in Management of Information Systems is designed to prepare students for challenging careers involving the design, analysis, implementation and operation of computer-based information systems. MIS involves the use of technologies in organizations and the integration of computer skills with the functionalareas of management. MIS professionals are the communication bridge between business needs and technology. Graduates of the MIS program can pursue careers as Business Analysts, IT Consultants, Systems Analysts, IT Development Project Leaders, Database Administrators, Business Intelligence Analysts, Data Analysts, Web Developers and Information Systems Managers', 2);

-- ----------------------------
-- Table structure for tbl_academic_category
-- ----------------------------
DROP TABLE IF EXISTS `tbl_academic_category`;
CREATE TABLE `tbl_academic_category`  (
  `cate_fac_id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_fac_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`cate_fac_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_academic_category
-- ----------------------------
INSERT INTO `tbl_academic_category` VALUES (1, 'Bachelor Degree');
INSERT INTO `tbl_academic_category` VALUES (2, 'Master Degree');

-- ----------------------------
-- Table structure for tbl_students
-- ----------------------------
DROP TABLE IF EXISTS `tbl_students`;
CREATE TABLE `tbl_students`  (
  `stu_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_fullname` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `stu_phone` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `stu_email` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `stu_password` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`stu_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_students
-- ----------------------------
INSERT INTO `tbl_students` VALUES (1, 'Ratana SOTH', '012201285', 'ratana.soth@gmail.com', '123456');
INSERT INTO `tbl_students` VALUES (2, 'Ratana SOTH', '012201285', 'ratana.soth@gmail.com', '123456');
INSERT INTO `tbl_students` VALUES (3, 'Ratana SOTH', '012201285', 'ratana.soth@gmail.com', '123456');
INSERT INTO `tbl_students` VALUES (4, 'Ratana SOTH', '012201285', 'ratana.soth@gmail.com', '123456');
INSERT INTO `tbl_students` VALUES (5, 'Jonh Panha', '055 55 55 89', 'john@panha.com', '1234');
INSERT INTO `tbl_students` VALUES (6, 'Jonh Panha', '055 55 55 89', 'john@panha.com', '1234');
INSERT INTO `tbl_students` VALUES (7, 'Jonh Panha', '055 55 55 89', 'john@panha.com', '1234');
INSERT INTO `tbl_students` VALUES (8, 'Jonh Panha', '055 55 55 89', 'john@panha.com', '1234');
INSERT INTO `tbl_students` VALUES (9, 'Jonh Panha', '055 55 55 89', 'john@panha.com', '1234');
INSERT INTO `tbl_students` VALUES (10, 'Jonh Panha', '055 55 55 89', 'john@panha.com', '123');
INSERT INTO `tbl_students` VALUES (11, 'Jonh Panha', '055 55 55 89', 'john@panha.com', '123');
INSERT INTO `tbl_students` VALUES (12, 'Jonh Panha', '055 55 55 89', 'john@panha.com', '123');
INSERT INTO `tbl_students` VALUES (13, 'Jonh Panha', '055 55 55 89', 'john@panha.com', '123');

SET FOREIGN_KEY_CHECKS = 1;
