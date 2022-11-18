-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.27
-- รุ่นของ PHP: 5.2.1
-- 
-- ฐานข้อมูล: `tree`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `address`
-- 

CREATE TABLE `address` (
  `ad_id` int(5) NOT NULL auto_increment,
  `ad_name` varchar(200) character set tis620 collate tis620_bin NOT NULL,
  `ad_ad` text NOT NULL,
  `ad_pd` int(10) NOT NULL,
  `ad_Email` varchar(200) NOT NULL,
  `ad_od` varchar(200) NOT NULL,
  PRIMARY KEY  (`ad_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `address`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `admin`
-- 

CREATE TABLE `admin` (
  `a_id` int(5) NOT NULL auto_increment,
  `a_name` varchar(100) collate tis620_bin NOT NULL,
  `a_user` varchar(100) collate tis620_bin NOT NULL,
  `a_pwd` varchar(100) collate tis620_bin NOT NULL,
  PRIMARY KEY  (`a_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=tis620 COLLATE=tis620_bin AUTO_INCREMENT=4 ;

-- 
-- dump ตาราง `admin`
-- 

INSERT INTO `admin` VALUES (1, 0x6b616e79616e6174206e616e7461, 0x61646d696e, 0x3831646339626462353264303464633230303336646264383331336564303535);
INSERT INTO `admin` VALUES (2, 0x4d696c6464204e617474616b616e, 0x61646d696e32, 0x6439333539316264663738363065316534656532666361373939393131323135);
INSERT INTO `admin` VALUES (3, 0x41726179612041726e6368616e7475656b, 0x61646d696e33, 0x3637346633633263316138613666393034363165386136366662353535306261);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `orders`
-- 

CREATE TABLE `orders` (
  `oid` int(7) unsigned zerofill NOT NULL auto_increment,
  `ototal` int(7) NOT NULL,
  `odate` datetime NOT NULL,
  `c_id` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`oid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;

-- 
-- dump ตาราง `orders`
-- 

INSERT INTO `orders` VALUES (0000001, 3685, '2017-11-14 12:56:27', '0');
INSERT INTO `orders` VALUES (0000002, 5080, '2017-11-14 12:57:15', '0');
INSERT INTO `orders` VALUES (0000003, 2690, '2021-10-08 13:31:35', '0');
INSERT INTO `orders` VALUES (0000004, 2690, '2021-10-08 16:43:57', '0');
INSERT INTO `orders` VALUES (0000005, 0, '2021-10-09 22:57:03', '0');
INSERT INTO `orders` VALUES (0000006, 2690, '2021-10-09 22:57:24', '0');
INSERT INTO `orders` VALUES (0000007, 2690, '2021-10-09 23:15:48', '0');
INSERT INTO `orders` VALUES (0000008, 1770, '2021-10-14 22:31:08', '0');
INSERT INTO `orders` VALUES (0000009, 690, '2021-10-14 22:35:50', '0');
INSERT INTO `orders` VALUES (0000010, 750, '2021-10-14 22:36:58', '0');
INSERT INTO `orders` VALUES (0000011, 750, '2021-10-14 22:40:08', '0');
INSERT INTO `orders` VALUES (0000012, 0, '2021-10-14 22:42:51', '0');
INSERT INTO `orders` VALUES (0000013, 1010, '2021-10-14 22:43:01', '0');
INSERT INTO `orders` VALUES (0000014, 860, '2021-10-14 23:00:25', '0');
INSERT INTO `orders` VALUES (0000015, 1050, '2021-10-14 23:24:47', '0');
INSERT INTO `orders` VALUES (0000016, 1340, '2021-10-14 23:45:02', '0');
INSERT INTO `orders` VALUES (0000017, 60, '2021-10-15 11:12:58', '0');
INSERT INTO `orders` VALUES (0000018, 1160, '2021-10-15 12:11:54', '0');
INSERT INTO `orders` VALUES (0000019, 450, '2021-10-15 13:23:01', '0');
INSERT INTO `orders` VALUES (0000020, 150, '2021-10-15 13:45:54', '0');
INSERT INTO `orders` VALUES (0000021, 880, '2021-10-15 14:18:04', '0');
INSERT INTO `orders` VALUES (0000022, 810, '2021-10-15 14:34:34', 'maodesu');
INSERT INTO `orders` VALUES (0000023, 630, '2021-10-15 14:49:45', 'maodesu');
INSERT INTO `orders` VALUES (0000024, 290, '2021-10-15 15:13:21', 'far kanyan');
INSERT INTO `orders` VALUES (0000025, 670, '2021-10-15 15:13:35', '');
INSERT INTO `orders` VALUES (0000026, 150, '2021-10-15 16:39:38', 'far kanyan');
INSERT INTO `orders` VALUES (0000027, 360, '2021-10-15 17:08:09', 'manatsanan');
INSERT INTO `orders` VALUES (0000028, 1510, '2021-10-15 17:08:39', '');
INSERT INTO `orders` VALUES (0000029, 2050, '2021-10-15 18:09:39', '');
INSERT INTO `orders` VALUES (0000030, 530, '2021-10-15 19:25:43', 'maodesu');
INSERT INTO `orders` VALUES (0000031, 450, '2021-10-15 19:41:21', 'far kanyan');
INSERT INTO `orders` VALUES (0000032, 450, '2021-10-15 19:45:03', 'far kanyan');
INSERT INTO `orders` VALUES (0000033, 1560, '2021-10-15 20:29:33', 'far kanyan');
INSERT INTO `orders` VALUES (0000034, 280, '2021-10-15 20:32:50', 'maodesu');
INSERT INTO `orders` VALUES (0000035, 750, '2021-10-15 20:59:51', 'kanyanat');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `orders_detail`
-- 

CREATE TABLE `orders_detail` (
  `od_id` int(6) NOT NULL auto_increment,
  `oid` int(7) unsigned zerofill NOT NULL,
  `pid` int(7) NOT NULL,
  `item` int(7) NOT NULL,
  PRIMARY KEY  (`od_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC AUTO_INCREMENT=75 ;

-- 
-- dump ตาราง `orders_detail`
-- 

INSERT INTO `orders_detail` VALUES (1, 0000001, 7, 2);
INSERT INTO `orders_detail` VALUES (2, 0000001, 1, 1);
INSERT INTO `orders_detail` VALUES (3, 0000001, 9, 3);
INSERT INTO `orders_detail` VALUES (4, 0000002, 6, 2);
INSERT INTO `orders_detail` VALUES (5, 0000002, 4, 1);
INSERT INTO `orders_detail` VALUES (6, 0000003, 1, 1);
INSERT INTO `orders_detail` VALUES (7, 0000004, 1, 1);
INSERT INTO `orders_detail` VALUES (8, 0000005, 0, 0);
INSERT INTO `orders_detail` VALUES (9, 0000005, 0, 0);
INSERT INTO `orders_detail` VALUES (10, 0000006, 1, 1);
INSERT INTO `orders_detail` VALUES (11, 0000007, 1, 1);
INSERT INTO `orders_detail` VALUES (12, 0000008, 3, 4);
INSERT INTO `orders_detail` VALUES (13, 0000008, 4, 1);
INSERT INTO `orders_detail` VALUES (14, 0000008, 22, 1);
INSERT INTO `orders_detail` VALUES (15, 0000009, 22, 2);
INSERT INTO `orders_detail` VALUES (16, 0000009, 4, 1);
INSERT INTO `orders_detail` VALUES (17, 0000010, 3, 1);
INSERT INTO `orders_detail` VALUES (18, 0000010, 4, 1);
INSERT INTO `orders_detail` VALUES (19, 0000011, 3, 1);
INSERT INTO `orders_detail` VALUES (20, 0000011, 4, 1);
INSERT INTO `orders_detail` VALUES (21, 0000013, 3, 1);
INSERT INTO `orders_detail` VALUES (22, 0000013, 9, 1);
INSERT INTO `orders_detail` VALUES (23, 0000013, 5, 1);
INSERT INTO `orders_detail` VALUES (24, 0000014, 3, 2);
INSERT INTO `orders_detail` VALUES (25, 0000014, 10, 1);
INSERT INTO `orders_detail` VALUES (26, 0000014, 12, 1);
INSERT INTO `orders_detail` VALUES (27, 0000015, 3, 2);
INSERT INTO `orders_detail` VALUES (28, 0000015, 4, 1);
INSERT INTO `orders_detail` VALUES (29, 0000016, 3, 1);
INSERT INTO `orders_detail` VALUES (30, 0000016, 4, 1);
INSERT INTO `orders_detail` VALUES (31, 0000016, 5, 1);
INSERT INTO `orders_detail` VALUES (32, 0000017, 12, 1);
INSERT INTO `orders_detail` VALUES (33, 0000018, 5, 1);
INSERT INTO `orders_detail` VALUES (34, 0000018, 4, 1);
INSERT INTO `orders_detail` VALUES (35, 0000018, 9, 1);
INSERT INTO `orders_detail` VALUES (36, 0000019, 4, 1);
INSERT INTO `orders_detail` VALUES (37, 0000020, 9, 1);
INSERT INTO `orders_detail` VALUES (38, 0000020, 13, 1);
INSERT INTO `orders_detail` VALUES (39, 0000021, 5, 1);
INSERT INTO `orders_detail` VALUES (40, 0000021, 6, 1);
INSERT INTO `orders_detail` VALUES (41, 0000022, 7, 2);
INSERT INTO `orders_detail` VALUES (42, 0000022, 4, 1);
INSERT INTO `orders_detail` VALUES (43, 0000022, 10, 1);
INSERT INTO `orders_detail` VALUES (44, 0000023, 12, 1);
INSERT INTO `orders_detail` VALUES (45, 0000023, 4, 1);
INSERT INTO `orders_detail` VALUES (46, 0000023, 9, 1);
INSERT INTO `orders_detail` VALUES (47, 0000024, 6, 1);
INSERT INTO `orders_detail` VALUES (48, 0000025, 5, 1);
INSERT INTO `orders_detail` VALUES (49, 0000025, 7, 1);
INSERT INTO `orders_detail` VALUES (50, 0000026, 9, 1);
INSERT INTO `orders_detail` VALUES (51, 0000026, 13, 1);
INSERT INTO `orders_detail` VALUES (52, 0000027, 12, 1);
INSERT INTO `orders_detail` VALUES (53, 0000027, 10, 1);
INSERT INTO `orders_detail` VALUES (54, 0000027, 8, 1);
INSERT INTO `orders_detail` VALUES (55, 0000028, 4, 2);
INSERT INTO `orders_detail` VALUES (56, 0000028, 6, 2);
INSERT INTO `orders_detail` VALUES (57, 0000028, 13, 1);
INSERT INTO `orders_detail` VALUES (58, 0000029, 29, 3);
INSERT INTO `orders_detail` VALUES (59, 0000029, 30, 3);
INSERT INTO `orders_detail` VALUES (60, 0000029, 7, 1);
INSERT INTO `orders_detail` VALUES (61, 0000029, 6, 1);
INSERT INTO `orders_detail` VALUES (62, 0000029, 13, 1);
INSERT INTO `orders_detail` VALUES (63, 0000030, 7, 1);
INSERT INTO `orders_detail` VALUES (64, 0000030, 4, 1);
INSERT INTO `orders_detail` VALUES (65, 0000031, 4, 1);
INSERT INTO `orders_detail` VALUES (66, 0000032, 4, 1);
INSERT INTO `orders_detail` VALUES (67, 0000033, 4, 2);
INSERT INTO `orders_detail` VALUES (68, 0000033, 7, 1);
INSERT INTO `orders_detail` VALUES (69, 0000033, 6, 2);
INSERT INTO `orders_detail` VALUES (70, 0000034, 7, 1);
INSERT INTO `orders_detail` VALUES (71, 0000034, 8, 2);
INSERT INTO `orders_detail` VALUES (72, 0000035, 4, 1);
INSERT INTO `orders_detail` VALUES (73, 0000035, 10, 1);
INSERT INTO `orders_detail` VALUES (74, 0000035, 8, 1);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `product`
-- 

CREATE TABLE `product` (
  `c_id` int(5) NOT NULL auto_increment,
  `c_title` varchar(200) NOT NULL,
  `c_detail` text NOT NULL,
  `c_price` int(6) NOT NULL,
  `c_picture` varchar(50) NOT NULL,
  `c_type` int(4) NOT NULL,
  `c_ext` varchar(100) character set tis620 collate tis620_bin NOT NULL,
  PRIMARY KEY  (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

-- 
-- dump ตาราง `product`
-- 

INSERT INTO `product` VALUES (42, 'ต้นไม้ฟอกอากาศ:55555555', '33333333', 1000, 'jpg', 0, 0x2e6a7067);
INSERT INTO `product` VALUES (43, 'nanata', 'วยดูดซับและกำจัดสารเบนซีน ฟอร์มาลดีไฮด์ ไตรคลอโรเอทิลีน ไซลีน และโทลูอีน ออกจากอากาศได้ เป็นไม้เถาเลื้อย ใบเป็นแฉกคล้ายใบตำลึง มีหลากสี หลายพันธุ์ ปรับตัวได้ดี ดูแลไม่ยาก', 900, '', 0, 0x2e6a7067);
INSERT INTO `product` VALUES (40, '111111ต้นไม้ฟอกอากาศ:ตีนตุ๊กแกฝรั่ง (English Ivy, ชื่อวิทยาศาสตร์คือ Hedera helix)', 'ดูดซับและกำจัดสารเบนซีน ฟอร์มาลดีไฮด์ ไตรคลอโรเอทิลีน ไซลีน และโทลูอีน ออกจากอากาศได้ เป็นไม้เถาเลื้อย ใบเป็นแฉกคล้ายใบตำลึง มีหลากสี หลายพันธุ์ ปรับตัวได้ดี ดูแลไม่ยาก', 500, 'jpg', 1, 0x2e6a7067);
INSERT INTO `product` VALUES (4, 'ต้นไม้ฟอกอากาศ ซานาดู (Xanadu)', 'สามารถฟอกอากาศภายในบ้านได้เป็นอย่างดี ', 500, '4.jpg', 1, '');
INSERT INTO `product` VALUES (5, '33333ต้นไม้ฟอกอากาศ: มอนสเตอร่า (Monstera)', 'เป็นพืชที่ไม่ชอบแสงแดดจัด การวางไว้ในที่ๆมีแดดโดยตรง', 600, 'jpg', 1, '');
INSERT INTO `product` VALUES (6, 'ต้นไม้ฟอกอากาศ:ยางอินเดีย (Rubber Plant)', 'เป็นพืชที่เลี้ยงได้ทั้งในอาคารที่มีแสงแดดส่องเข้ามารำไร ', 290, '6.jpg', 1, '');
INSERT INTO `product` VALUES (7, 'ต้นไม้ฟอกอากาศ:พลูด่าง (Money Plant)', ' เป็นไม้เลื้อยอิงอาศัย ลักษณะลำต้นกลม แบ่งเป็นข้อๆ ต้นแก่สีเขียวออกน้ำตาล ต้นอ่อนสีเขียวโคนใบมน', 80, '7.jpg', 1, '');
INSERT INTO `product` VALUES (8, 'ต้นไม้ฟอกอากาศ : เศรษฐีเรือนใน (Spider Plant)', 'เศรษฐีเรือนใน มีคุณสมบัติในการดูดสารพิษภายในอาคารได้เป็นอย่างดี เศรษฐีเรือนในเป็นไม้กอขนาดเล็ก โดยปลูกในกระถางแขวนหรือปลูกเป็นพืชคลุมดินก็ได้ ใบมีลักษณะคล้ายใบหญ้า ขอบใบมีสีเขียวยาวตลอดใบ กลางใบเป็นสีขาว ', 100, '8.jpg', 1, '');
INSERT INTO `product` VALUES (9, 'ต้นไม้ฟอกอากาศ : สาวน้อยประแป้ง (Dumbcane Exotical)', 'เป็นไม้ใบประดับอีกกลุ่มหนึ่งที่ได้รับความนิยมปลูกเลี้ยงไว้ประดับอาคารบ้านเรือนและสำนักงานอย่างแพร่หลายไม่ต่างไปจากเขียวหมื่นปี ไม้ในกลุ่มนี้ส่วนใหญ่นำเข้าจากต่างประเทศ ', 120, '9.jpg', 1, '');
INSERT INTO `product` VALUES (10, 'ยิมโน / หัวสี (Variegated Gymnocalycium)', '', 200, '10.jpg', 2, '');
INSERT INTO `product` VALUES (11, 'ยิมโน / ออกโซ (Gymnocalycium Ochoterenae)', '', 60, '11.jpg', 2, '');
INSERT INTO `product` VALUES (12, 'ยิมโน / บัลเดียนัม (Gymnocalycium Baldianum)', '', 60, '12.jpg', 2, '');
INSERT INTO `product` VALUES (13, 'ยิมโน / ลูกชุบ หรือ ยิมโนแม่ลูกดก (Gymnocalycium Damsii f.variegata) ', '', 30, '13.jpg', 2, '');
INSERT INTO `product` VALUES (14, 'แอสโตรไฟตัม / แอสทีเรียส(Astrophytum asterias)', '', 100, '14.jpg', 3, '');
INSERT INTO `product` VALUES (15, 'แอสโตรไฟตัม / ซุปเปอร์ คาบูโต (Astrophytum asterias super Kabuto)', '', 300, '15.jpg', 3, '');
INSERT INTO `product` VALUES (16, 'แอสโตรไฟตัม / นูดัม (Astrophytum asterias nudum)', '', 30, '16.jpg', 3, '');
INSERT INTO `product` VALUES (17, 'แอสโตรไฟตัม / นูดัม (Astrophytum asterias nudum)', '', 80, '17.jpg', 3, '');
INSERT INTO `product` VALUES (18, 'แอสโตรไฟตัม / หมวกสังฆราช (Astrophytum myriostigma)', '', 80, '18.jpg', 3, '');
INSERT INTO `product` VALUES (19, 'แมมมิลลาเรีย / ชูแมน  (Mammillaria schomanii)', '', 50, '19.jpg', 4, '');
INSERT INTO `product` VALUES (20, 'แมมมิลลาเรีย / ขนนกเหลือง (Mammillaria schiedeana)', '', 80, '20.jpg', 4, '');
INSERT INTO `product` VALUES (21, 'แมมมิลลาเรีย / ขนนกขาว (Mammillaria Plumosa)', '', 150, '21.jpg', 4, '');
INSERT INTO `product` VALUES (22, 'แมมมิลลาเรีย / ขนแมว  (Mammillaria Beneckei)', '', 120, '22.jpg', 4, '');
INSERT INTO `product` VALUES (41, ' เยอบีรา (Gerbera Daisy)', 'ช่วยดูดซึมสารพิษในอากาศและผลิตออกซิเจนในระดับสูงตอนกลางคืน เป็นประโยชน์อย่างมากสำหรับผู้ที่มีภาวะหยุดหายใจขณะหลับหรือผู้ที่มีอาการหายใจผิดปกติ', 800, '', 0, 0x2e6a7067);
INSERT INTO `product` VALUES (44, '0000', 'วยดูดซับและกำจัดสารเบนซีน ฟอร์มาลดีไฮด์ ไตรคลอโรเอทิลีน ไซลีน และโทลูอีน ออกจากอากาศได้ เป็นไม้เถาเลื้อย ใบเป็นแฉกคล้ายใบตำลึง มีหลากสี หลายพันธุ์ ปรับตัวได้ดี ดูแลไม่ยาก', 1000, '', 0, 0x2e6a7067);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tree_type`
-- 

CREATE TABLE `tree_type` (
  `tt_id` int(11) NOT NULL,
  `tt_name` varchar(200) NOT NULL,
  PRIMARY KEY  (`tt_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `tree_type`
-- 

INSERT INTO `tree_type` VALUES (1, 'ต้นไม้ฟอกอากาศ');
INSERT INTO `tree_type` VALUES (2, 'ยิมโน');
INSERT INTO `tree_type` VALUES (3, 'แอสโตรไฟตัม');
INSERT INTO `tree_type` VALUES (4, 'แมมมิลลาเรีย');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `uploadfile`
-- 

CREATE TABLE `uploadfile` (
  `fileID` int(5) NOT NULL auto_increment,
  `fileupload` varchar(200) collate tis620_bin NOT NULL,
  `dateup` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`fileID`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620 COLLATE=tis620_bin AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `uploadfile`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `user`
-- 

CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- 
-- dump ตาราง `user`
-- 

INSERT INTO `user` VALUES (6, 'maodesu', 'panithan1410@hotmail.com', 'e152089987e56f17ff2f3d3338f0734a');
INSERT INTO `user` VALUES (7, 'L1BraX', 'tulltinn@gmail.com', '086826228ffadd4b18285b38e86d4261');
INSERT INTO `user` VALUES (8, 'manatsanan', 'galaxywufan21@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `user` VALUES (9, 'far kanyanat', '62010912542@msu.ac.th', 'e43ede37996cfda5b9988dc92cc93aab');
INSERT INTO `user` VALUES (10, 'wtf', 'wtf001x@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `user` VALUES (11, 'kanyanat', '6592@gmail.com', '521740fa707f2ad9abc10ba8557eb8dc');
