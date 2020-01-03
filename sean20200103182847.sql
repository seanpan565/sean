-- MySQL dump 10.13  Distrib 5.5.53, for Win32 (AMD64)
--
-- Host: localhost    Database: sean
-- ------------------------------------------------------
-- Server version	5.5.53

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `sean_address`
--

DROP TABLE IF EXISTS `sean_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '地址id',
  `user_id` int(11) NOT NULL COMMENT '所属用户id',
  `address_name` varchar(30) NOT NULL COMMENT '收货人姓名',
  `address_site` varchar(255) NOT NULL COMMENT '详细地址',
  `address_phone` varchar(14) NOT NULL COMMENT '收货人手机号码',
  `is_default` tinyint(4) NOT NULL COMMENT '是否设为默认',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='收货地址表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_address`
--

LOCK TABLES `sean_address` WRITE;
/*!40000 ALTER TABLE `sean_address` DISABLE KEYS */;
INSERT INTO `sean_address` VALUES (1,1,'盼盼','广西南宁市大学东路168号','15677550147',0),(2,1,'蒙聪聪','广东广州市荔湾区吃饭街32号','2147483647',1);
/*!40000 ALTER TABLE `sean_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_admin`
--

DROP TABLE IF EXISTS `sean_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员id',
  `nickname` varchar(20) DEFAULT NULL COMMENT '昵称',
  `name` varchar(100) NOT NULL COMMENT '管理员名称',
  `password` varchar(255) NOT NULL COMMENT '管理员密码',
  `thumb` int(11) NOT NULL DEFAULT '1' COMMENT '管理员头像',
  `create_time` int(11) NOT NULL COMMENT '创建时间',
  `update_time` int(11) NOT NULL COMMENT '修改时间',
  `login_time` int(11) DEFAULT NULL COMMENT '最后登录时间',
  `login_ip` varchar(100) DEFAULT NULL COMMENT '最后登录ip',
  `admin_cate_id` int(2) NOT NULL DEFAULT '1' COMMENT '管理员分组',
  PRIMARY KEY (`id`),
  KEY `id` (`id`) USING BTREE,
  KEY `admin_cate_id` (`admin_cate_id`) USING BTREE,
  KEY `nickname` (`nickname`) USING BTREE,
  KEY `create_time` (`create_time`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='管理员表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_admin`
--

LOCK TABLES `sean_admin` WRITE;
/*!40000 ALTER TABLE `sean_admin` DISABLE KEYS */;
INSERT INTO `sean_admin` VALUES (1,'sean','admin','9eb2b9ad495a75f80f9cf67ed08bbaae',5,1510885948,1572939899,1577615101,'0.0.0.0',1);
/*!40000 ALTER TABLE `sean_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_admin_cate`
--

DROP TABLE IF EXISTS `sean_admin_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_admin_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '权限id',
  `name` varchar(100) NOT NULL COMMENT '权限名称',
  `permissions` text COMMENT '权限菜单',
  `create_time` int(11) NOT NULL COMMENT '权限新增时间',
  `update_time` int(11) NOT NULL COMMENT '权限更新时间',
  `desc` text COMMENT '备注',
  PRIMARY KEY (`id`),
  KEY `id` (`id`) USING BTREE,
  KEY `name` (`name`) USING BTREE,
  KEY `create_time` (`create_time`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='管理员权限表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_admin_cate`
--

LOCK TABLES `sean_admin_cate` WRITE;
/*!40000 ALTER TABLE `sean_admin_cate` DISABLE KEYS */;
INSERT INTO `sean_admin_cate` VALUES (1,'超级管理员','51,4,5,6,7,8,11,13,14,16,17,19,20,21,49,61,62,64,25,26,28,29,47,48,54,55,57,58,59,34,35,37,38,39,40,42,43,44,45,67,68',0,1576837678,'超级管理员，拥有最高权限！');
/*!40000 ALTER TABLE `sean_admin_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_admin_log`
--

DROP TABLE IF EXISTS `sean_admin_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_admin_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '日志id',
  `admin_menu_id` int(11) NOT NULL COMMENT '操作菜单id',
  `admin_id` int(11) NOT NULL COMMENT '操作者id',
  `ip` varchar(100) DEFAULT NULL COMMENT '操作ip',
  `operation_id` varchar(200) DEFAULT NULL COMMENT '操作关联id',
  `create_time` int(11) NOT NULL COMMENT '操作时间',
  PRIMARY KEY (`id`),
  KEY `id` (`id`) USING BTREE,
  KEY `admin_id` (`admin_id`) USING BTREE,
  KEY `create_time` (`create_time`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=211 DEFAULT CHARSET=utf8 COMMENT='操作日志表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_admin_log`
--

LOCK TABLES `sean_admin_log` WRITE;
/*!40000 ALTER TABLE `sean_admin_log` DISABLE KEYS */;
INSERT INTO `sean_admin_log` VALUES (1,50,1,'0.0.0.0','',1572938301),(2,8,1,'0.0.0.0','',1572938316),(3,49,1,'0.0.0.0','2',1572938566),(4,7,1,'0.0.0.0','1',1572938569),(5,49,1,'0.0.0.0','3',1572939242),(6,34,1,'0.0.0.0','1',1572939262),(7,49,1,'0.0.0.0','4',1572939277),(8,37,1,'0.0.0.0','1',1572939277),(9,49,1,'0.0.0.0','5',1572939899),(10,7,1,'0.0.0.0','1',1572939899),(11,50,1,'0.0.0.0','',1572942047),(12,4,1,'0.0.0.0','46',1572952048),(13,4,1,'0.0.0.0','23',1572952100),(14,5,1,'0.0.0.0','22',1572952118),(15,4,1,'0.0.0.0','31',1572952237),(16,4,1,'0.0.0.0','33',1572952274),(17,4,1,'0.0.0.0','36',1572952294),(18,5,1,'0.0.0.0','32',1572952308),(19,45,1,'0.0.0.0','2',1572952319),(20,45,1,'0.0.0.0','1',1572952323),(21,4,1,'0.0.0.0','31',1572952666),(22,4,1,'0.0.0.0','52',1572952684),(23,4,1,'0.0.0.0','50',1572952729),(24,4,1,'0.0.0.0','52',1572952763),(25,4,1,'0.0.0.0','52',1572952899),(26,28,1,'0.0.0.0','1',1572952948),(27,4,1,'0.0.0.0','49',1572952993),(28,4,1,'0.0.0.0','49',1572953128),(29,51,1,'0.0.0.0','',1572953281),(30,4,1,'0.0.0.0','53',1572953545),(31,28,1,'0.0.0.0','1',1572953568),(32,28,1,'0.0.0.0','1',1572953597),(33,4,1,'0.0.0.0','49',1572953626),(34,4,1,'0.0.0.0','53',1572953657),(35,4,1,'0.0.0.0','53',1572954001),(36,4,1,'0.0.0.0','54',1573113050),(37,4,1,'0.0.0.0','55',1573113122),(38,28,1,'0.0.0.0','1',1573113133),(39,54,1,'0.0.0.0','0',1573113170),(40,55,1,'0.0.0.0','1',1573113232),(41,55,1,'0.0.0.0','2',1573113255),(42,55,1,'0.0.0.0','3',1573113259),(43,55,1,'0.0.0.0','4',1573113264),(44,55,1,'0.0.0.0','5',1573113268),(45,55,1,'0.0.0.0','6',1573113272),(46,55,1,'0.0.0.0','7',1573113275),(47,55,1,'0.0.0.0','8',1573113278),(48,55,1,'0.0.0.0','9',1573113281),(49,4,1,'0.0.0.0','56',1573116078),(50,4,1,'0.0.0.0','57',1573116132),(51,4,1,'0.0.0.0','58',1573116170),(52,4,1,'0.0.0.0','54',1573121355),(53,4,1,'0.0.0.0','54',1573121403),(54,4,1,'0.0.0.0','57',1573121427),(55,4,1,'0.0.0.0','59',1573121468),(56,4,1,'0.0.0.0','59',1573123136),(57,28,1,'0.0.0.0','1',1573123146),(58,4,1,'0.0.0.0','54',1573124977),(59,4,1,'0.0.0.0','55',1573124996),(60,4,1,'0.0.0.0','57',1573125006),(61,4,1,'0.0.0.0','58',1573125016),(62,4,1,'0.0.0.0','59',1573125025),(63,49,1,'0.0.0.0','6',1573132165),(64,49,1,'0.0.0.0','7',1573132535),(65,49,1,'0.0.0.0','8',1573132535),(66,49,1,'0.0.0.0','9',1573133009),(67,54,1,'0.0.0.0','0',1573381512),(68,49,1,'0.0.0.0','10',1573383309),(69,49,1,'0.0.0.0','11',1573385413),(70,57,1,'0.0.0.0','0',1573385866),(71,49,1,'0.0.0.0','12',1573386734),(72,49,1,'0.0.0.0','13',1573387601),(73,57,1,'0.0.0.0','0',1573387602),(74,49,1,'0.0.0.0','14',1573387708),(75,57,1,'0.0.0.0','0',1573387722),(76,49,1,'0.0.0.0','15',1573388006),(77,57,1,'0.0.0.0','0',1573388029),(78,49,1,'0.0.0.0','16',1573388073),(79,57,1,'0.0.0.0','0',1573388082),(80,57,1,'0.0.0.0','0',1573388155),(81,57,1,'0.0.0.0','0',1573388275),(82,57,1,'0.0.0.0','0',1573388363),(83,57,1,'0.0.0.0','0',1573388461),(84,57,1,'0.0.0.0','0',1573388514),(85,57,1,'0.0.0.0','0',1573388668),(86,57,1,'0.0.0.0','0',1573388685),(87,57,1,'0.0.0.0','0',1573388723),(88,57,1,'0.0.0.0','0',1573388867),(89,57,1,'0.0.0.0','0',1573389041),(90,57,1,'0.0.0.0','0',1573389074),(91,57,1,'0.0.0.0','0',1573389165),(92,39,1,'0.0.0.0','1',1573390219),(93,39,1,'0.0.0.0','1',1573390219),(94,39,1,'0.0.0.0','1',1573390220),(95,39,1,'0.0.0.0','1',1573390220),(96,38,1,'0.0.0.0','1',1573390228),(97,38,1,'0.0.0.0','1',1573390229),(98,38,1,'0.0.0.0','1',1573390229),(99,38,1,'0.0.0.0','1',1573390230),(100,38,1,'0.0.0.0','1',1573390230),(101,38,1,'0.0.0.0','1',1573390233),(102,38,1,'0.0.0.0','1',1573390234),(103,38,1,'0.0.0.0','1',1573390235),(104,38,1,'0.0.0.0','1',1573390235),(105,38,1,'0.0.0.0','1',1573390236),(106,39,1,'0.0.0.0','1',1573390236),(107,39,1,'0.0.0.0','1',1573390237),(108,49,1,'0.0.0.0','17',1573390714),(109,57,1,'0.0.0.0','0',1573390722),(110,49,1,'0.0.0.0','18',1573390820),(111,49,1,'0.0.0.0','19',1573391162),(112,49,1,'0.0.0.0','20',1573391187),(113,49,1,'0.0.0.0','21',1573391476),(114,49,1,'0.0.0.0','22',1573391606),(115,57,1,'0.0.0.0','0',1573391639),(116,40,1,'0.0.0.0','1',1573443945),(117,58,1,'0.0.0.0','2',1573447108),(118,49,1,'0.0.0.0','23',1573448088),(119,57,1,'0.0.0.0','0',1573448136),(120,49,1,'0.0.0.0','24',1573448858),(121,37,1,'0.0.0.0','2',1573448858),(122,49,1,'0.0.0.0','25',1573458188),(123,57,1,'0.0.0.0','0',1573458252),(124,58,1,'0.0.0.0','3',1573458601),(125,49,1,'0.0.0.0','26',1573459335),(126,57,1,'0.0.0.0','0',1573459350),(127,49,1,'0.0.0.0','27',1573459589),(128,57,1,'0.0.0.0','0',1573459597),(129,59,1,'0.0.0.0','1',1573459627),(130,49,1,'0.0.0.0','28',1573459728),(131,59,1,'0.0.0.0','1',1573459736),(132,54,1,'0.0.0.0','10',1573460086),(133,54,1,'0.0.0.0','11',1573460112),(134,54,1,'0.0.0.0','0',1573460369),(135,54,1,'0.0.0.0','0',1573460382),(136,54,1,'0.0.0.0','0',1573460390),(137,59,1,'0.0.0.0','1',1573460457),(138,49,1,'0.0.0.0','29',1573460490),(139,57,1,'0.0.0.0','0',1573460496),(140,59,1,'0.0.0.0','1',1573460745),(141,59,1,'0.0.0.0','2',1573460774),(142,50,1,'0.0.0.0','',1573706896),(143,13,1,'0.0.0.0','',1573709023),(144,54,1,'0.0.0.0','0',1574043944),(145,54,1,'0.0.0.0','0',1574043959),(146,54,1,'0.0.0.0','0',1574043983),(147,54,1,'0.0.0.0','0',1574044005),(148,49,1,'0.0.0.0','30',1574070898),(149,57,1,'0.0.0.0','0',1574070928),(150,49,1,'0.0.0.0','31',1574070984),(151,57,1,'0.0.0.0','0',1574071022),(152,49,1,'0.0.0.0','32',1574071061),(153,57,1,'0.0.0.0','0',1574071094),(154,49,1,'0.0.0.0','33',1574071141),(155,57,1,'0.0.0.0','0',1574071182),(156,49,1,'0.0.0.0','34',1574071226),(157,57,1,'0.0.0.0','0',1574071248),(158,49,1,'0.0.0.0','35',1574071307),(159,57,1,'0.0.0.0','0',1574071328),(160,49,1,'0.0.0.0','36',1574071361),(161,57,1,'0.0.0.0','0',1574071386),(162,49,1,'0.0.0.0','37',1574071427),(163,57,1,'0.0.0.0','0',1574071446),(164,49,1,'0.0.0.0','38',1574071529),(165,57,1,'0.0.0.0','0',1574071557),(166,57,1,'0.0.0.0','0',1574071557),(167,4,1,'0.0.0.0','60',1574411599),(168,4,1,'0.0.0.0','60',1574411627),(169,4,1,'0.0.0.0','60',1574411689),(170,4,1,'0.0.0.0','60',1574411780),(171,59,1,'0.0.0.0','1',1574422197),(172,50,1,'0.0.0.0','',1574579814),(173,4,1,'0.0.0.0','61',1574580739),(174,4,1,'0.0.0.0','62',1574580785),(175,28,1,'0.0.0.0','1',1574580825),(176,61,1,'0.0.0.0','',1574581334),(177,17,1,'0.0.0.0','156****0235',1574581525),(178,17,1,'0.0.0.0','156****0214',1574581836),(179,61,1,'0.0.0.0','',1574582353),(180,47,1,'0.0.0.0','2',1576733024),(181,47,1,'0.0.0.0','3',1576733027),(182,47,1,'0.0.0.0','1',1576733031),(183,11,1,'0.0.0.0','',1576752353),(184,4,1,'0.0.0.0','63',1576753267),(185,4,1,'0.0.0.0','64',1576753334),(186,28,1,'0.0.0.0','1',1576753354),(187,64,1,'0.0.0.0','',1576754405),(188,64,1,'0.0.0.0','',1576755168),(189,4,1,'0.0.0.0','65',1576755336),(190,4,1,'0.0.0.0','66',1576755392),(191,4,1,'0.0.0.0','67',1576837595),(192,4,1,'0.0.0.0','68',1576837636),(193,28,1,'0.0.0.0','1',1576837678),(194,4,1,'0.0.0.0','69',1577357193),(195,4,1,'0.0.0.0','70',1577357281),(196,4,1,'0.0.0.0','70',1577357303),(197,4,1,'0.0.0.0','69',1577357320),(198,50,1,'0.0.0.0','',1577615101),(199,38,1,'0.0.0.0','2',1577675234),(200,38,1,'0.0.0.0','2',1577675239),(201,38,1,'0.0.0.0','2',1577854341),(202,39,1,'0.0.0.0','2',1577854533),(203,49,1,'0.0.0.0','47',1577854756),(204,37,1,'0.0.0.0','3',1577854757),(205,38,1,'0.0.0.0','3',1577854765),(206,39,1,'0.0.0.0','3',1577862690),(207,13,1,'0.0.0.0','',1577872330),(208,13,1,'0.0.0.0','',1577872763),(209,13,1,'0.0.0.0','',1577873384),(210,13,1,'0.0.0.0','',1577874276);
/*!40000 ALTER TABLE `sean_admin_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_admin_menu`
--

DROP TABLE IF EXISTS `sean_admin_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_admin_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `module` varchar(50) NOT NULL COMMENT '模块',
  `controller` varchar(100) NOT NULL COMMENT '控制器',
  `function` varchar(100) NOT NULL COMMENT '方法',
  `parameter` varchar(50) DEFAULT NULL COMMENT '参数',
  `description` varchar(250) DEFAULT NULL COMMENT '描述',
  `is_display` int(1) NOT NULL DEFAULT '1' COMMENT '1显示在左侧菜单2只作为节点',
  `type` int(1) NOT NULL DEFAULT '1' COMMENT '1权限节点2普通节点',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '上级菜单0为顶级菜单',
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  `icon` varchar(100) DEFAULT NULL COMMENT '图标',
  `is_open` int(1) NOT NULL DEFAULT '0' COMMENT '0默认闭合1默认展开',
  `orders` int(11) NOT NULL DEFAULT '0' COMMENT '排序值，越小越靠前',
  PRIMARY KEY (`id`),
  KEY `id` (`id`) USING BTREE,
  KEY `module` (`module`) USING BTREE,
  KEY `controller` (`controller`) USING BTREE,
  KEY `function` (`function`) USING BTREE,
  KEY `is_display` (`is_display`) USING BTREE,
  KEY `type` (`type`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8 COMMENT='系统菜单表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_admin_menu`
--

LOCK TABLES `sean_admin_menu` WRITE;
/*!40000 ALTER TABLE `sean_admin_menu` DISABLE KEYS */;
INSERT INTO `sean_admin_menu` VALUES (1,'系统','','','','','系统设置。',1,2,0,0,1517015748,'fa-cog',1,0),(2,'菜单','','','','','菜单管理。',1,2,1,0,1517015764,'fa-paw',0,0),(51,'系统菜单排序','admin','menu','orders','','系统菜单排序。',2,1,3,1517562047,1517562047,'',0,0),(3,'系统菜单','admin','menu','index',NULL,'系统菜单管理',1,2,2,0,0,'fa-share-alt',0,0),(4,'新增/修改系统菜单','admin','menu','publish','','新增/修改系统菜单.',2,1,3,1516948769,1516948769,'',0,0),(5,'删除系统菜单','admin','menu','delete','','删除系统菜单。',2,1,3,1516948857,1516948857,'',0,0),(6,'个人','','','','','个人信息管理。',1,1,1,1516949308,1517021986,'fa-user',0,0),(7,'个人信息','admin','admin','personal','','个人信息修改。',1,1,6,1516949435,1516949435,'fa-user',0,0),(8,'修改密码','admin','admin','editpassword','','管理员修改个人密码。',1,1,6,1516949702,1517619887,'fa-unlock-alt',0,0),(9,'设置','','','','','系统相关设置。',1,2,1,1516949853,1517015878,'fa-cog',0,0),(10,'网站设置','admin','webconfig','index','','网站相关设置首页。',1,2,9,1516949994,1516949994,'fa-bullseye',0,0),(11,'修改网站设置','admin','webconfig','publish','','修改网站设置。',2,1,10,1516950047,1516950047,'',0,0),(12,'邮件设置','admin','emailconfig','index','','邮件配置首页。',1,2,9,1516950129,1516950129,'fa-envelope',0,0),(13,'修改邮件设置','admin','emailconfig','publish','','修改邮件设置。',2,1,12,1516950215,1516950215,'',0,0),(14,'发送测试邮件','admin','emailconfig','mailto','','发送测试邮件。',2,1,12,1516950295,1516950295,'',0,0),(15,'短信设置','admin','smsconfig','index','','短信设置首页。',1,2,9,1516950394,1516950394,'fa-comments',0,0),(16,'修改短信设置','admin','smsconfig','publish','','修改短信设置。',2,1,15,1516950447,1516950447,'',0,0),(17,'发送测试短信','admin','smsconfig','smsto','','发送测试短信。',2,1,15,1516950483,1516950483,'',0,0),(18,'URL 设置','admin','urlsconfig','index','','url 设置。',1,2,9,1516950738,1516950804,'fa-code-fork',0,0),(19,'新增/修改url设置','admin','urlsconfig','publish','','新增/修改url设置。',2,1,18,1516950850,1516950850,'',0,0),(20,'启用/禁用url美化','admin','urlsconfig','status','','启用/禁用url美化。',2,1,18,1516950909,1516950909,'',0,0),(21,' 删除url美化规则','admin','urlsconfig','delete','',' 删除url美化规则。',2,1,18,1516950941,1516950941,'',0,0),(52,'商品管理','','','','','商品管理',1,2,0,1572952684,1572952899,'',0,0),(23,'管理员','','','','','系统管理员管理。',1,2,1,1516951071,1572952100,'fa-user',0,0),(24,'管理员','admin','admin','index','','系统管理员列表。',1,2,23,1516951163,1516951163,'fa-user',0,0),(25,'新增/修改管理员','admin','admin','publish','','新增/修改系统管理员。',2,1,24,1516951224,1516951224,'',0,0),(26,'删除管理员','admin','admin','delete','','删除管理员。',2,1,24,1516951253,1516951253,'',0,0),(27,'权限组','admin','admin','admincate','','权限分组。',1,2,23,1516951353,1517018168,'fa-dot-circle-o',0,0),(28,'新增/修改权限组','admin','admin','admincatepublish','','新增/修改权限组。',2,1,27,1516951483,1516951483,'',0,0),(29,'删除权限组','admin','admin','admincatedelete','','删除权限组。',2,1,27,1516951515,1516951515,'',0,0),(30,'操作日志','admin','admin','log','','系统管理员操作日志。',1,2,23,1516951754,1517018196,'fa-pencil',0,0),(31,'文章管理','','','','','内容管理。',1,2,0,1516952262,1572952666,'fa-th-large',0,1),(33,'文章分类','admin','articlecate','index','','文章分类管理。',1,2,31,1516952856,1572952274,'fa-tag',0,0),(34,'新增/修改文章分类','admin','articlecate','publish','','新增/修改文章分类。',2,1,33,1516952896,1516952896,'',0,0),(35,'删除文章分类','admin','articlecate','delete','','删除文章分类。',2,1,33,1516952942,1516952942,'',0,0),(36,'文章','admin','article','index','','文章管理。',1,2,31,1516953011,1572952294,'fa-bookmark',0,0),(37,'新增/修改文章','admin','article','publish','','新增/修改文章。',2,1,36,1516953056,1516953056,'',0,0),(38,'审核/拒绝文章','admin','article','status','','审核/拒绝文章。',2,1,36,1516953113,1516953113,'',0,0),(39,'置顶/取消置顶文章','admin','article','is_top','','置顶/取消置顶文章。',2,1,36,1516953162,1516953162,'',0,0),(40,'删除文章','admin','article','delete','','删除文章。',2,1,36,1516953183,1516953183,'',0,0),(41,'附件','admin','attachment','index','','附件管理。',1,2,31,1516953306,1516953306,'fa-cube',0,0),(42,'附件审核','admin','attachment','audit','','附件审核。',2,1,41,1516953359,1516953440,'',0,0),(43,'附件上传','admin','attachment','upload','','附件上传。',2,1,41,1516953392,1516953392,'',0,0),(44,'附件下载','admin','attachment','download','','附件下载。',2,1,41,1516953430,1516953430,'',0,0),(45,'附件删除','admin','attachment','delete','','附件删除。',2,1,41,1516953477,1516953477,'',0,0),(46,'留言','admin','tomessages','index','','留言管理。',1,2,1,1516953526,1572952048,'fa-comments',0,0),(47,'留言处理','admin','tomessages','mark','','留言处理。',2,1,46,1516953605,1516953605,'',0,0),(48,'留言删除','admin','tomessages','delete','','留言删除。',2,1,46,1516953648,1516953648,'',0,0),(49,'图片上传','admin','common','upload','','图片上传。',1,1,9,1516954491,1572953626,'',0,0),(50,'管理员登录','admin','common','login','','管理员登录。',2,2,1,1516954517,1572952729,'',0,0),(53,'商品分类','admin','Goodscate','index','','商品分类管理',1,2,52,1572953545,1572954001,'',0,0),(54,'新增/修改管理员分类','admin','Goodscate','publish','','新增/修改管理员分类',2,1,53,1573113050,1573124977,'',0,0),(55,'删除管理员分类','admin','Goodscate','delete','','删除管理员分类',2,1,53,1573113122,1573124996,'',0,0),(56,'商品管理','admin','goods','index','','商品管理',1,2,52,1573116078,1573116078,'',0,0),(57,'新增商品','admin','goods','create','','新增商品',2,1,56,1573116132,1573125006,'',0,0),(58,'删除商品','admin','goods','delete','','删除商品',2,1,56,1573116170,1573125016,'',0,0),(59,'商品修改','admin','goods','edit','','商品修改',2,1,56,1573121468,1573125025,'',0,0),(60,'短信宝设置','admin','smspo','index','','短信宝短信设置首页',1,2,9,1574411599,1574411780,'',0,0),(61,' 修改短信宝设置','admin','smspo','save','',' 修改短信宝设置',2,1,60,1574580739,1574580739,'',0,0),(62,'短信宝发送设置','admin','smspo','note','','短信宝发送设置',2,1,60,1574580785,1574580785,'',0,0),(63,'虎皮椒支付','admin','hupi','index','','虎皮椒支付',1,2,9,1576753267,1576753267,'',0,0),(64,'虎皮椒设置','admin','hupi','save','','虎皮椒设置',2,1,63,1576753334,1576753334,'',0,0),(65,'订单管理','','','','','订单管理',1,2,0,1576755336,1576755336,'',0,0),(66,'订单列表','admin','order','index','','订单列表',1,2,65,1576755392,1576755392,'',0,0),(67,'发货页面','admin','order','addres','','发货页面',2,1,66,1576837595,1576837595,'',0,0),(68,'订单发货','admin','order','delivery','','订单发货',2,1,66,1576837636,1576837636,'',0,0),(69,'申请退款','admin','order','refundlist','','申请退款列表',1,2,65,1577357193,1577357320,'',0,0),(70,'商品评价列表','admin','order','commentlist','','',1,2,65,1577357281,1577357303,'',0,0);
/*!40000 ALTER TABLE `sean_admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_article`
--

DROP TABLE IF EXISTS `sean_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `title` varchar(255) NOT NULL COMMENT '文章标题',
  `tag` varchar(255) DEFAULT NULL COMMENT '文章',
  `description` varchar(255) DEFAULT NULL COMMENT '文章详情',
  `article_cate_id` int(11) NOT NULL COMMENT '文章栏目id',
  `thumb` int(11) DEFAULT NULL COMMENT '文章缩略图',
  `content` text COMMENT '文章内容',
  `admin_id` int(11) NOT NULL COMMENT '管理员id',
  `create_time` int(11) NOT NULL COMMENT '文章新增时间',
  `update_time` int(11) NOT NULL COMMENT '文章修改时间',
  `edit_admin_id` int(11) NOT NULL COMMENT '最后修改人',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '0待审核1已审核',
  `is_top` int(1) NOT NULL DEFAULT '0' COMMENT '1置顶0普通',
  `read_count` varchar(100) NOT NULL COMMENT '阅读数',
  PRIMARY KEY (`id`),
  KEY `id` (`id`) USING BTREE,
  KEY `status` (`status`) USING BTREE,
  KEY `is_top` (`is_top`) USING BTREE,
  KEY `article_cate_id` (`article_cate_id`) USING BTREE,
  KEY `admin_id` (`admin_id`) USING BTREE,
  KEY `create_time` (`create_time`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='文章表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_article`
--

LOCK TABLES `sean_article` WRITE;
/*!40000 ALTER TABLE `sean_article` DISABLE KEYS */;
INSERT INTO `sean_article` VALUES (2,'阿德飒飒的','撒打算','爱上放大',1,24,'<p>广泛大锅饭对方的</p>',1,1573448858,1573448858,1,1,1,'12'),(3,'文章测试','文章测试','文章测试',1,47,'<p>文章测试文章测试文章测试文章测试文章测试文章测试文章测试</p>',1,1577854757,1577854757,1,1,1,'2');
/*!40000 ALTER TABLE `sean_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_article_cate`
--

DROP TABLE IF EXISTS `sean_article_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_article_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章栏目id',
  `name` varchar(100) NOT NULL COMMENT '文章栏目名称',
  `tag` varchar(250) DEFAULT NULL COMMENT '关键词',
  `description` varchar(250) DEFAULT NULL COMMENT '文章栏目内容',
  `create_time` int(11) NOT NULL COMMENT '文章栏目新增时间',
  `update_time` int(11) NOT NULL COMMENT '文章栏目更新时间',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '文章栏目上级栏目',
  PRIMARY KEY (`id`),
  KEY `id` (`id`) USING BTREE,
  KEY `tag` (`tag`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='文章栏目表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_article_cate`
--

LOCK TABLES `sean_article_cate` WRITE;
/*!40000 ALTER TABLE `sean_article_cate` DISABLE KEYS */;
INSERT INTO `sean_article_cate` VALUES (1,'用户反馈','手上','132',1572939262,1572939262,0);
/*!40000 ALTER TABLE `sean_article_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_attachment`
--

DROP TABLE IF EXISTS `sean_attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_attachment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module` char(15) NOT NULL DEFAULT '' COMMENT '所属模块',
  `filename` char(50) NOT NULL DEFAULT '' COMMENT '文件名',
  `filepath` char(200) NOT NULL DEFAULT '' COMMENT '文件路径+文件名',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '文件大小',
  `fileext` char(10) NOT NULL DEFAULT '' COMMENT '文件后缀',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '会员ID',
  `uploadip` char(15) NOT NULL DEFAULT '' COMMENT '上传IP',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0未审核1已审核-1不通过',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `admin_id` int(11) NOT NULL COMMENT '审核者id',
  `audit_time` int(11) NOT NULL COMMENT '审核时间',
  `use` varchar(200) DEFAULT NULL COMMENT '用处',
  `download` int(11) NOT NULL DEFAULT '0' COMMENT '下载量',
  PRIMARY KEY (`id`),
  KEY `id` (`id`) USING BTREE,
  KEY `status` (`status`) USING BTREE,
  KEY `filename` (`filename`) USING BTREE,
  KEY `create_time` (`create_time`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='附件表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_attachment`
--

LOCK TABLES `sean_attachment` WRITE;
/*!40000 ALTER TABLE `sean_attachment` DISABLE KEYS */;
INSERT INTO `sean_attachment` VALUES (3,'admin','23855d25d1ea82d3c06c4409cbd88192.jpg','\\uploads\\admin\\article_thumb\\20191105\\23855d25d1ea82d3c06c4409cbd88192.jpg',41189,'jpg',1,'0.0.0.0',1,1572939241,1,1572939241,'article_thumb',0),(4,'admin','4d9b86ce6fc24a10c8536f4c165bdbdb.jpg','\\uploads\\admin\\article_thumb\\20191105\\4d9b86ce6fc24a10c8536f4c165bdbdb.jpg',4124,'jpg',1,'0.0.0.0',1,1572939277,1,1572939277,'article_thumb',0),(5,'admin','7c61e27c850e3282e6e62042a85635ca.jpg','\\uploads\\admin\\admin_thumb\\20191105\\7c61e27c850e3282e6e62042a85635ca.jpg',4124,'jpg',1,'0.0.0.0',1,1572939899,1,1572939899,'admin_thumb',0),(6,'admin','d8e7e71ffc3044092cbf205229a1cd0e.jpg','\\uploads\\admin\\admin_thumb\\20191107\\d8e7e71ffc3044092cbf205229a1cd0e.jpg',4124,'jpg',1,'0.0.0.0',1,1573132165,1,1573132165,'admin_thumb',0),(7,'admin','643058ab258109d2dabc231c984792f2.jpg','\\uploads\\admin\\admin_thumb\\20191107\\643058ab258109d2dabc231c984792f2.jpg',4242,'jpg',1,'0.0.0.0',1,1573132535,1,1573132535,'admin_thumb',0),(8,'admin','870fd3fa3da0367797fe75bd3daba80d.jpg','\\uploads\\admin\\admin_thumb\\20191107\\870fd3fa3da0367797fe75bd3daba80d.jpg',50255,'jpg',1,'0.0.0.0',1,1573132535,1,1573132535,'admin_thumb',0),(9,'admin','db85cd3653fe2b9d5ba571f9fa72e2d1.jpg','\\uploads\\admin\\admin_thumb\\20191107\\db85cd3653fe2b9d5ba571f9fa72e2d1.jpg',4124,'jpg',1,'0.0.0.0',1,1573133009,1,1573133009,'admin_thumb',0),(10,'admin','cf3aca1a89f2aeece0b49d858166d78a.jpg','\\uploads\\admin\\admin_thumb\\20191110\\cf3aca1a89f2aeece0b49d858166d78a.jpg',4124,'jpg',1,'0.0.0.0',1,1573383309,1,1573383309,'admin_thumb',0),(11,'admin','c0f870e611eff5d0010dc3f812137db7.jpg','\\uploads\\admin\\admin_thumb\\20191110\\c0f870e611eff5d0010dc3f812137db7.jpg',4124,'jpg',1,'0.0.0.0',1,1573385413,1,1573385413,'admin_thumb',0),(12,'admin','533d816cbf71169d1b7a8852833189aa.jpg','\\uploads\\admin\\admin_thumb\\20191110\\533d816cbf71169d1b7a8852833189aa.jpg',4242,'jpg',1,'0.0.0.0',1,1573386734,1,1573386734,'admin_thumb',0),(13,'admin','14b9cd2a916b12e7c8b91e339f1b377d.jpg','\\uploads\\admin\\admin_thumb\\20191110\\14b9cd2a916b12e7c8b91e339f1b377d.jpg',2532,'jpg',1,'0.0.0.0',1,1573387601,1,1573387601,'admin_thumb',0),(14,'admin','6dcc2bd7b1e2aa3511d0a2fcd38d0c8c.jpg','\\uploads\\admin\\admin_thumb\\20191110\\6dcc2bd7b1e2aa3511d0a2fcd38d0c8c.jpg',50255,'jpg',1,'0.0.0.0',1,1573387708,1,1573387708,'admin_thumb',0),(15,'admin','59b2e6cb5ca1419b2ec0bae4de4489cb.jpg','\\uploads\\admin\\admin_thumb\\20191110\\59b2e6cb5ca1419b2ec0bae4de4489cb.jpg',51002,'jpg',1,'0.0.0.0',1,1573388006,1,1573388006,'admin_thumb',0),(16,'admin','d6d9e7d3d0f56d23bcea3efe7b222cad.jpg','\\uploads\\admin\\admin_thumb\\20191110\\d6d9e7d3d0f56d23bcea3efe7b222cad.jpg',51002,'jpg',1,'0.0.0.0',1,1573388073,1,1573388073,'admin_thumb',0),(17,'admin','5b2c54456437a22590aed9d7bfd8062e.jpg','\\uploads\\admin\\admin_thumb\\20191110\\5b2c54456437a22590aed9d7bfd8062e.jpg',4124,'jpg',1,'0.0.0.0',1,1573390714,1,1573390714,'admin_thumb',0),(18,'admin','10a7e756d4d84fd8f6cdebc877079475.jpg','\\uploads\\admin\\admin_thumb\\20191110\\10a7e756d4d84fd8f6cdebc877079475.jpg',4242,'jpg',1,'0.0.0.0',1,1573390820,1,1573390820,'admin_thumb',0),(19,'admin','e69af282cb9a0e1c770990801f224a20.jpg','\\uploads\\admin\\admin_thumb\\20191110\\e69af282cb9a0e1c770990801f224a20.jpg',4124,'jpg',1,'0.0.0.0',1,1573391162,1,1573391162,'admin_thumb',0),(20,'admin','aef6585d2f3191730797ca7e1bed8490.jpg','\\uploads\\admin\\admin_thumb\\20191110\\aef6585d2f3191730797ca7e1bed8490.jpg',4242,'jpg',1,'0.0.0.0',1,1573391187,1,1573391187,'admin_thumb',0),(21,'admin','90af6a2adfcb7519d511d4997ce95078.jpg','\\uploads\\admin\\article_thumb\\20191110\\90af6a2adfcb7519d511d4997ce95078.jpg',4124,'jpg',1,'0.0.0.0',1,1573391476,1,1573391476,'article_thumb',0),(22,'admin','5e14caadf6674af9a9219b8c4683f481.jpg','\\uploads\\admin\\admin_thumb\\20191110\\5e14caadf6674af9a9219b8c4683f481.jpg',4124,'jpg',1,'0.0.0.0',1,1573391606,1,1573391606,'admin_thumb',0),(23,'admin','3d4038bea656f2838f69d4d36981cb79.jpg','\\uploads\\admin\\admin_thumb\\20191111\\3d4038bea656f2838f69d4d36981cb79.jpg',50255,'jpg',1,'0.0.0.0',1,1573448088,1,1573448088,'admin_thumb',0),(24,'admin','927f53315902850089d5128dc530a355.jpg','\\uploads\\admin\\article_thumb\\20191111\\927f53315902850089d5128dc530a355.jpg',3420,'jpg',1,'0.0.0.0',1,1573448858,1,1573448858,'article_thumb',0),(25,'admin','64118108916b7596de7603bbd8dd7680.jpg','\\uploads\\admin\\admin_thumb\\20191111\\64118108916b7596de7603bbd8dd7680.jpg',48051,'jpg',1,'0.0.0.0',1,1573458188,1,1573458188,'admin_thumb',0),(26,'admin','6d69fa96bec69c869643d700ad792928.jpg','\\uploads\\admin\\admin_thumb\\20191111\\6d69fa96bec69c869643d700ad792928.jpg',3360,'jpg',1,'0.0.0.0',1,1573459335,1,1573459335,'admin_thumb',0),(27,'admin','1a1f52cee1f8e8fcb77c8f9e56db454f.jpg','\\uploads\\admin\\admin_thumb\\20191111\\1a1f52cee1f8e8fcb77c8f9e56db454f.jpg',4124,'jpg',1,'0.0.0.0',1,1573459589,1,1573459589,'admin_thumb',0),(28,'admin','42cf04b17d60e845b2e10584918bbc59.jpg','\\uploads\\admin\\admin_thumb\\20191111\\42cf04b17d60e845b2e10584918bbc59.jpg',4124,'jpg',1,'0.0.0.0',1,1573459728,1,1573459728,'admin_thumb',0),(29,'admin','2b1b945dafe7ad82d6d7f5316f800575.jpg','\\uploads\\admin\\admin_thumb\\20191111\\2b1b945dafe7ad82d6d7f5316f800575.jpg',50255,'jpg',1,'0.0.0.0',1,1573460490,1,1573460490,'admin_thumb',0),(30,'admin','0909c4b6d732fb475d0dc6e8621c5e32.jpg','\\uploads\\admin\\admin_thumb\\20191118\\0909c4b6d732fb475d0dc6e8621c5e32.jpg',10696,'jpg',1,'0.0.0.0',1,1574070898,1,1574070898,'admin_thumb',0),(31,'admin','31ab3e9a097890e64fadd8a695be416f.jpg','\\uploads\\admin\\admin_thumb\\20191118\\31ab3e9a097890e64fadd8a695be416f.jpg',12806,'jpg',1,'0.0.0.0',1,1574070984,1,1574070984,'admin_thumb',0),(32,'admin','c32c4f6fe4766bd40b5d49c4ebf64c72.jpg','\\uploads\\admin\\admin_thumb\\20191118\\c32c4f6fe4766bd40b5d49c4ebf64c72.jpg',8807,'jpg',1,'0.0.0.0',1,1574071061,1,1574071061,'admin_thumb',0),(33,'admin','0060fb7fa5a66ec8d7e4d99a6ddf648b.jpg','\\uploads\\admin\\admin_thumb\\20191118\\0060fb7fa5a66ec8d7e4d99a6ddf648b.jpg',6761,'jpg',1,'0.0.0.0',1,1574071141,1,1574071141,'admin_thumb',0),(34,'admin','9abc9998a7c01f96b2e0a3af14af9e2e.jpg','\\uploads\\admin\\admin_thumb\\20191118\\9abc9998a7c01f96b2e0a3af14af9e2e.jpg',8460,'jpg',1,'0.0.0.0',1,1574071226,1,1574071226,'admin_thumb',0),(35,'admin','942f19efd4652101d279b1d3f4d0c62d.jpg','\\uploads\\admin\\admin_thumb\\20191118\\942f19efd4652101d279b1d3f4d0c62d.jpg',15346,'jpg',1,'0.0.0.0',1,1574071307,1,1574071307,'admin_thumb',0),(36,'admin','163c996d376d08e00cacc5ef910eec7a.jpg','\\uploads\\admin\\admin_thumb\\20191118\\163c996d376d08e00cacc5ef910eec7a.jpg',11131,'jpg',1,'0.0.0.0',1,1574071361,1,1574071361,'admin_thumb',0),(37,'admin','9878b5cd99e431bc6d928a2fefede738.jpg','\\uploads\\admin\\admin_thumb\\20191118\\9878b5cd99e431bc6d928a2fefede738.jpg',10639,'jpg',1,'0.0.0.0',1,1574071427,1,1574071427,'admin_thumb',0),(38,'admin','cf601ad5aa9cb6baaff0ebd890cb8df6.jpg','\\uploads\\admin\\admin_thumb\\20191118\\cf601ad5aa9cb6baaff0ebd890cb8df6.jpg',9699,'jpg',1,'0.0.0.0',1,1574071529,1,1574071529,'admin_thumb',0),(39,'admin','95dc8a384cd59d40b7e86394c5cb16f4.jpg','\\uploads\\index\\index_thumb\\20191125\\95dc8a384cd59d40b7e86394c5cb16f4.jpg',8041,'jpg',1,'0.0.0.0',1,1574670511,1,1574670511,'index_thumb',0),(40,'admin','b213cccd913e654369b04a8362711279.jpg','\\uploads\\index\\index_thumb\\20191125\\b213cccd913e654369b04a8362711279.jpg',8041,'jpg',1,'0.0.0.0',1,1574670552,1,1574670552,'index_thumb',0),(41,'admin','759d74f99f3880cc464103e294981dc3.jpg','\\uploads\\index\\index_thumb\\20191125\\759d74f99f3880cc464103e294981dc3.jpg',12127,'jpg',1,'0.0.0.0',1,1574670575,1,1574670575,'index_thumb',0),(42,'admin','1a041801921dc6c7f6367a4e33057b0a.jpg','\\uploads\\index\\index_thumb\\20191125\\1a041801921dc6c7f6367a4e33057b0a.jpg',10696,'jpg',1,'0.0.0.0',1,1574678551,1,1574678551,'index_thumb',0),(43,'admin','02a342a45ad6f793ca20ae89c374c0be.jpg','\\uploads\\index\\index_thumb\\20191125\\02a342a45ad6f793ca20ae89c374c0be.jpg',10696,'jpg',1,'0.0.0.0',1,1574678823,1,1574678823,'index_thumb',0),(44,'admin','0d4aee016874ac0dad6d54633cbbf47a.jpg','\\uploads\\index\\index_thumb\\20191125\\0d4aee016874ac0dad6d54633cbbf47a.jpg',10696,'jpg',1,'0.0.0.0',1,1574679198,1,1574679198,'index_thumb',0),(45,'admin','f9f77e50024e1d9dcff0c5e5c9f3d4f6.jpg','\\uploads\\index\\index_thumb\\20191125\\f9f77e50024e1d9dcff0c5e5c9f3d4f6.jpg',8600,'jpg',1,'0.0.0.0',1,1574680435,1,1574680435,'index_thumb',0),(46,'admin','60507992e17a4a6580d6ef6750fc9701.jpg','\\uploads\\index\\index_thumb\\20191125\\60507992e17a4a6580d6ef6750fc9701.jpg',10696,'jpg',1,'0.0.0.0',1,1574680520,1,1574680520,'index_thumb',0),(47,'admin','57ffe084421fa6b75b9985ea537cfef7.jpg','\\uploads\\admin\\article_thumb\\20200101\\57ffe084421fa6b75b9985ea537cfef7.jpg',27101,'jpg',1,'0.0.0.0',1,1577854756,1,1577854756,'article_thumb',0);
/*!40000 ALTER TABLE `sean_attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_cart`
--

DROP TABLE IF EXISTS `sean_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '购物车id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `goods_id` int(11) NOT NULL COMMENT '商品id',
  `goods_count` int(11) NOT NULL COMMENT '商品数量',
  `create_time` varchar(11) NOT NULL COMMENT '添加时间',
  `update_time` varchar(11) NOT NULL COMMENT '更新时间',
  `cart_status` int(2) NOT NULL DEFAULT '1' COMMENT '购物车状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='购物车表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_cart`
--

LOCK TABLES `sean_cart` WRITE;
/*!40000 ALTER TABLE `sean_cart` DISABLE KEYS */;
INSERT INTO `sean_cart` VALUES (1,1,2,2,'1577787173','1577789700',1),(3,1,3,1,'1577789520','',1);
/*!40000 ALTER TABLE `sean_cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_delivery`
--

DROP TABLE IF EXISTS `sean_delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_delivery` (
  `delivery_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '配送方式id',
  `delivery_en` varchar(20) NOT NULL DEFAULT '' COMMENT '配送方式英文名称',
  `delivery_name` varchar(50) NOT NULL DEFAULT '' COMMENT '配送方式名称',
  `delivery_desc` text NOT NULL COMMENT '配送方式描述',
  `delivery_status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '开启状态',
  `delivery_phone` varchar(50) DEFAULT NULL COMMENT '客服电话',
  `delivery_time` int(10) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`delivery_id`),
  KEY `delivery_status` (`delivery_status`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='配送方式表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_delivery`
--

LOCK TABLES `sean_delivery` WRITE;
/*!40000 ALTER TABLE `sean_delivery` DISABLE KEYS */;
INSERT INTO `sean_delivery` VALUES (1,'shunfeng','顺丰快递','顺丰快递最快速的快递',1,'95338',NULL),(2,'shentong','申通快递','',1,'95543',NULL),(3,'zhongtong','中通快递','',1,'95311',NULL),(4,'yuantong','圆通快递','',1,'95554',NULL),(5,'huitongkuaidi','百世汇通','',1,'95320',NULL),(6,'yunda','韵达快运','',1,'95546',NULL),(7,'ems','EMS邮政特快','',1,'11183',NULL),(8,'guotongkuaidi','国通快递','',1,'95327',NULL),(9,'tiantian','天天快递','',1,'400-188-8888',NULL),(10,'debangwuliu','德邦快递','',1,'95353',NULL),(11,'youshuwuliu','优速快递','',1,'4001111119',NULL);
/*!40000 ALTER TABLE `sean_delivery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_emailconfig`
--

DROP TABLE IF EXISTS `sean_emailconfig`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_emailconfig` (
  `email` varchar(5) NOT NULL COMMENT '邮箱配置标识',
  `from_email` varchar(50) NOT NULL COMMENT '邮件来源也就是邮件地址',
  `from_name` varchar(50) NOT NULL,
  `smtp` varchar(50) NOT NULL COMMENT '邮箱smtp服务器',
  `username` varchar(100) NOT NULL COMMENT '邮箱账号',
  `password` varchar(100) NOT NULL COMMENT '邮箱密码',
  `title` varchar(200) NOT NULL COMMENT '邮件标题',
  `content` text NOT NULL COMMENT '邮件模板',
  KEY `email` (`email`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='邮箱配置表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_emailconfig`
--

LOCK TABLES `sean_emailconfig` WRITE;
/*!40000 ALTER TABLE `sean_emailconfig` DISABLE KEYS */;
INSERT INTO `sean_emailconfig` VALUES ('email','seanzhui@126.com','水果鲜生','smtp.126.com','seanzhui@126.com','','水果鲜生商城','<p>水果商城后台邮件测试水果商城后台邮件测试水果商城后台邮件测试</p>');
/*!40000 ALTER TABLE `sean_emailconfig` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_goods`
--

DROP TABLE IF EXISTS `sean_goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `goods_cate_id` int(11) NOT NULL COMMENT '所属商品栏目id',
  `goods_name` varchar(100) NOT NULL COMMENT '商品名称',
  `goods_title` varchar(150) NOT NULL COMMENT '副标题',
  `goods_keyword` varchar(150) NOT NULL COMMENT '商品关键词',
  `goods_price` varchar(11) NOT NULL COMMENT '价格',
  `goods_vip` varchar(11) NOT NULL COMMENT '优惠价',
  `goods_number` int(11) NOT NULL COMMENT '商品货号',
  `goods_thumb` varchar(250) NOT NULL COMMENT '商品主图',
  `goods_create_time` int(11) NOT NULL COMMENT '新增时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='商品详情主表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_goods`
--

LOCK TABLES `sean_goods` WRITE;
/*!40000 ALTER TABLE `sean_goods` DISABLE KEYS */;
INSERT INTO `sean_goods` VALUES (1,1,'胡萝卜','胡萝卜的口感可脆可软，味道微甜，非常的美味','胡萝卜','22','20',2147483647,'\\uploads\\admin\\admin_thumb\\20191118\\0909c4b6d732fb475d0dc6e8621c5e32.jpg',1574070928),(2,1,'西兰花','原产意大利，是常见蔬菜。通称绿花菜，也被称为西兰花。二年生草本植物，是甘蓝的一种变种','西兰花','18','16',643451311,'\\uploads\\admin\\admin_thumb\\20191118\\31ab3e9a097890e64fadd8a695be416f.jpg',1574071022),(3,1,'生菜','生菜生菜生菜生菜','生菜生菜生菜','12','10.2',65416431,'\\uploads\\admin\\admin_thumb\\20191118\\c32c4f6fe4766bd40b5d49c4ebf64c72.jpg',1574071094),(4,2,'橙汁','橙汁橙汁橙汁橙汁','橙汁','15','12',746546541,'\\uploads\\admin\\admin_thumb\\20191118\\0060fb7fa5a66ec8d7e4d99a6ddf648b.jpg',1574071182),(5,2,'百香果汁','百香果汁百香果汁百香果汁百香果汁百香果汁','百香果汁','32','30',465131,'\\uploads\\admin\\admin_thumb\\20191118\\9abc9998a7c01f96b2e0a3af14af9e2e.jpg',1574071248),(6,3,'百香果','百香果百香果百香果百香果百香果百香果','百香果','30','28',2147483647,'\\uploads\\admin\\admin_thumb\\20191118\\942f19efd4652101d279b1d3f4d0c62d.jpg',1574071328),(7,3,'蓝莓','蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓','蓝莓','50','45',2147483647,'\\uploads\\admin\\admin_thumb\\20191118\\163c996d376d08e00cacc5ef910eec7a.jpg',1574071386),(8,4,'葡萄干','葡萄干葡萄干葡萄干葡萄干葡萄干葡萄干葡萄干葡萄干葡萄干','葡萄干','25','22',465413514,'\\uploads\\admin\\admin_thumb\\20191118\\9878b5cd99e431bc6d928a2fefede738.jpg',1574071446),(9,4,'糖滞红枣','糖滞红枣','糖滞红枣','16','13',543641321,'\\uploads\\admin\\admin_thumb\\20191118\\cf601ad5aa9cb6baaff0ebd890cb8df6.jpg',1574071557),(10,4,'盐滞红枣','盐滞红枣','盐滞红枣','16','13',543641321,'\\uploads\\admin\\admin_thumb\\20191118\\cf601ad5aa9cb6baaff0ebd890cb8df6.jpg',1574071557);
/*!40000 ALTER TABLE `sean_goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_goods_atlas`
--

DROP TABLE IF EXISTS `sean_goods_atlas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_goods_atlas` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '相册集表id',
  `goods_id` int(11) NOT NULL COMMENT '商品主表id',
  `goods_atlas_id` int(11) NOT NULL COMMENT '图集顺序id',
  `goods_atlas_url` varchar(150) NOT NULL COMMENT '图集路径',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COMMENT='商品相册集表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_goods_atlas`
--

LOCK TABLES `sean_goods_atlas` WRITE;
/*!40000 ALTER TABLE `sean_goods_atlas` DISABLE KEYS */;
INSERT INTO `sean_goods_atlas` VALUES (1,1,3,'/20191118/a8509d0b73b07ba82185a74eb3eabae3.jpg'),(2,1,1,'/20191118/66abf94f2297140ee96002e76687ac7b.jpg'),(3,1,2,'/20191118/3d215c7ba323e91a8fc264a6104d9912.jpg'),(4,1,3,'/20191118/a8509d0b73b07ba82185a74eb3eabae3.jpg'),(5,2,0,'/20191118/4f2928d20d7409350a80fc48c17eec25.jpg'),(6,2,1,'/20191118/dab1fbe636e19a4068dd5f178eb622d4.jpg'),(7,2,2,'/20191118/5862d2af6174f2e544d7322bfe244a00.jpg'),(8,2,3,'/20191118/8e7a5060515776fbf0e92cec36ab5e87.jpg'),(9,3,0,'/20191118/c87bd8b2e935da456b1369bbef3177e6.jpg'),(10,3,1,'/20191118/d20e569b1de00dfc86554fd1deed0e1b.jpg'),(11,3,2,'/20191118/ed179af2d044bb1e490911d27878a0a4.jpg'),(12,4,0,'/20191118/45405abb6ff6e33b882bdff84c10afab.jpg'),(13,4,1,'/20191118/e8fabf0770e94f22a65ec67dbae06a52.jpg'),(14,4,2,'/20191118/bbd2122559ab8ff8dc409cb052b524db.jpg'),(15,4,3,'/20191118/466968807512a0edb3aebd66ff704cdb.jpg'),(16,5,0,'/20191118/e6aa572cd0499f0765474b343b178338.jpg'),(17,5,1,'/20191118/b2bfa8e58ac51f0003c6203e9ef340c2.jpg'),(18,6,0,'/20191118/7ed472dd75ceccce7fc72cdf448ee83a.jpg'),(19,6,1,'/20191118/f11aa403321bf4247dec9607b81d8978.jpg'),(20,6,2,'/20191118/77c2eef78180d2bc4eb2167c5d088204.jpg'),(21,6,3,'/20191118/f8d40122c612237d69875320a7de417c.jpg'),(22,7,0,'/20191118/68cecfc92135ac9c5a9cfba6de05ebdd.jpg'),(23,7,1,'/20191118/a1272af9291025f915deb09d2f362b00.jpg'),(24,7,2,'/20191118/0b5bdba2550dd03d02ec25c4466ffb71.jpg'),(25,7,3,'/20191118/4399067392996bf327f6a30dd45e60c8.jpg'),(26,8,0,'/20191118/4f520088ccbf8cfad55ac1f3f44d628b.jpg'),(27,8,1,'/20191118/5632e5b15d52d6b88bf361731a3ad284.jpg'),(28,8,2,'/20191118/e054a6750b476e5afbb22c41a5c6cbcf.jpg'),(29,9,0,'/20191118/7fb17b4ee4a5a44508ab4506ecef6b00.jpg'),(30,9,1,'/20191118/37e537a5950b0d2b6533d90430d4c8a3.jpg'),(31,9,2,'/20191118/da763b82f0fe772f8a33bb237390840c.jpg'),(32,10,0,'/20191118/7fb17b4ee4a5a44508ab4506ecef6b00.jpg'),(33,10,1,'/20191118/37e537a5950b0d2b6533d90430d4c8a3.jpg'),(34,10,2,'/20191118/da763b82f0fe772f8a33bb237390840c.jpg');
/*!40000 ALTER TABLE `sean_goods_atlas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_goods_attr`
--

DROP TABLE IF EXISTS `sean_goods_attr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_goods_attr` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品属性表',
  `goods_id` int(11) NOT NULL COMMENT '商品主表id',
  `attr_name` varchar(200) NOT NULL COMMENT '属性名',
  `attr_value` varchar(250) NOT NULL COMMENT '属性值',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='商品属性表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_goods_attr`
--

LOCK TABLES `sean_goods_attr` WRITE;
/*!40000 ALTER TABLE `sean_goods_attr` DISABLE KEYS */;
INSERT INTO `sean_goods_attr` VALUES (1,1,'包装','盒装'),(2,1,'包装','盒装'),(3,2,'重量','500g'),(4,2,'包装','盒装'),(5,3,'重量','500g'),(6,3,'包装','袋装'),(7,4,'重量','320g'),(8,4,'包装','瓶装'),(9,5,'重量','320g'),(10,5,'包装','瓶装'),(11,6,'重量','500g'),(12,6,'包装','袋装'),(13,7,'重量','500g'),(14,7,'包装','盒装'),(15,8,'重量','500g'),(16,8,'包装','袋装'),(17,9,'重量','500g'),(18,9,'包装','袋装'),(19,10,'重量','500g'),(20,10,'包装','袋装');
/*!40000 ALTER TABLE `sean_goods_attr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_goods_cate`
--

DROP TABLE IF EXISTS `sean_goods_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_goods_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品栏目',
  `name` varchar(100) NOT NULL COMMENT '商品栏目名字',
  `tag` varchar(250) NOT NULL COMMENT '商品栏目关键词',
  `description` varchar(250) NOT NULL COMMENT '描述',
  `create_time` int(11) NOT NULL COMMENT '商品栏目新增时间',
  `update_time` int(11) NOT NULL COMMENT '商品栏目更新时间',
  `pid` int(11) NOT NULL COMMENT '商品栏目上级',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='商品栏目表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_goods_cate`
--

LOCK TABLES `sean_goods_cate` WRITE;
/*!40000 ALTER TABLE `sean_goods_cate` DISABLE KEYS */;
INSERT INTO `sean_goods_cate` VALUES (1,'现摘蔬菜','蔬菜','现摘蔬菜',1574043944,1574043944,0),(2,'鲜榨果汁','果汁','鲜榨果汁',1574043959,1574043959,0),(3,'新鲜水果','水果','新鲜水果',1574043983,1574043983,0),(4,'美味果脯','果脯','果脯',1574044005,1574044005,0);
/*!40000 ALTER TABLE `sean_goods_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_goods_collect`
--

DROP TABLE IF EXISTS `sean_goods_collect`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_goods_collect` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品收藏表id',
  `goods_id` int(11) NOT NULL COMMENT '商品id',
  `user_id` int(11) NOT NULL COMMENT '收藏该商品会员id',
  `collect_create` int(11) NOT NULL COMMENT '收藏时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='商品收藏表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_goods_collect`
--

LOCK TABLES `sean_goods_collect` WRITE;
/*!40000 ALTER TABLE `sean_goods_collect` DISABLE KEYS */;
INSERT INTO `sean_goods_collect` VALUES (15,5,1,1575025449),(11,2,1,1574595996),(14,1,1,1574853793),(9,3,1,1574595864);
/*!40000 ALTER TABLE `sean_goods_collect` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_goods_comment`
--

DROP TABLE IF EXISTS `sean_goods_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_goods_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品评论id',
  `goods_id` int(10) NOT NULL COMMENT '商品主表id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `order_sn` varchar(150) NOT NULL COMMENT '订单号',
  `goods_comment` text NOT NULL COMMENT '评论内容',
  `comment_status` int(2) NOT NULL DEFAULT '1' COMMENT '评论状态0待审核1已审核',
  `comment_create_time` varchar(150) NOT NULL COMMENT '评论时间',
  `comment_grade` int(5) NOT NULL DEFAULT '5' COMMENT '评论商品星级',
  `reply_content` text NOT NULL COMMENT '回复内容',
  `reply_create_time` varchar(150) NOT NULL COMMENT '回复时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='商品评论表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_goods_comment`
--

LOCK TABLES `sean_goods_comment` WRITE;
/*!40000 ALTER TABLE `sean_goods_comment` DISABLE KEYS */;
INSERT INTO `sean_goods_comment` VALUES (4,4,1,'20191218031628432165','橙汁不错',1,'1577083175',5,'橙汁不错','1577083175'),(6,2,1,'20191218031628432165','撒大苏打',0,'1577083903',0,'不粗个毛线',''),(9,4,1,'20191218031628432165','不错',1,'1577101667',5,'山东分公司','');
/*!40000 ALTER TABLE `sean_goods_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_goods_content`
--

DROP TABLE IF EXISTS `sean_goods_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_goods_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品详情副表id',
  `goods_id` int(11) NOT NULL COMMENT '商品主表id',
  `goods_contents` text NOT NULL COMMENT '商品详情',
  `goods_inventory` int(11) NOT NULL COMMENT '商品库存',
  `goods_unit` varchar(30) NOT NULL COMMENT '商品库存单位',
  `goods_putaway` tinyint(2) NOT NULL DEFAULT '1' COMMENT '是否上架',
  `goods_recommend` tinyint(2) NOT NULL DEFAULT '0' COMMENT '是否推荐',
  `goods_update_time` int(11) NOT NULL COMMENT '修改时间',
  `goods_collect` int(11) NOT NULL COMMENT '收藏数',
  `goods_sales` int(11) NOT NULL COMMENT '销量',
  `goods_comment` int(11) NOT NULL COMMENT '评论数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='商品详情副表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_goods_content`
--

LOCK TABLES `sean_goods_content` WRITE;
/*!40000 ALTER TABLE `sean_goods_content` DISABLE KEYS */;
INSERT INTO `sean_goods_content` VALUES (1,1,'<p><img src=\"/ueditor/php/upload/image/20191122/1574422195.jpg\" title=\"1574422195.jpg\" alt=\"13.jpg\"/>胡萝卜的口感可脆可软，味道微甜，非常的美味胡萝卜的口感可脆可软，味道微甜，非常的美味胡萝卜的口感可脆可软，味道微甜，非常的美味胡萝卜的口感可脆可软，味道微甜，非常的美味胡萝卜的口感可脆可软，味道微甜，非常的美味胡萝卜的口感可脆可软，味道微甜，非常的美味胡萝卜的口感可脆可软，味道微甜，非常的美味</p>',30,'斤',1,0,1574422197,0,0,0),(2,2,'<p>原产意大利，是常见蔬菜。通称绿花菜，也被称为西兰花。二年生草本植物，是甘蓝的一种变种原产意大利，是常见蔬菜。通称绿花菜，也被称为西兰花。二年生草本植物，是甘蓝的一种变种原产意大利，是常见蔬菜。通称绿花菜，也被称为西兰花。二年生草本植物，是甘蓝的一种变种原产意大利，是常见蔬菜。通称绿花菜，也被称为西兰花。二年生草本植物，是甘蓝的一种变种</p>',15,'斤',1,0,1574071022,0,5,0),(3,3,'<p>生菜生菜生菜生菜生菜生菜生菜生菜生菜生菜生菜生菜生菜生菜生菜</p>',25,'斤',1,1,1574071094,0,5,0),(4,4,'<p>橙汁橙汁橙汁橙汁橙汁橙汁橙汁橙汁橙汁橙汁橙汁橙汁橙汁橙汁橙汁橙汁</p>',48,'瓶',1,1,1574071182,0,2,0),(5,5,'<p>百香果汁百香果汁百香果汁百香果汁百香果汁百香果汁百香果汁百香果汁百香果汁百香果汁百香果汁百香果汁</p>',20,'瓶',1,1,1574071248,0,0,0),(6,6,'<p>百香果百香果百香果百香果百香果百香果百香果百香果百香果百香果百香果</p>',299,'件',1,1,1574071328,0,1,0),(7,7,'<p>蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓蓝莓</p>',399,'件',1,0,1574071386,0,1,0),(8,8,'<p>葡萄干葡萄干葡萄干葡萄干葡萄干葡萄干葡萄干葡萄干葡萄干葡萄干葡萄干葡萄干葡萄干葡萄干葡萄干</p>',420,'袋',1,0,1574071446,0,0,0),(9,9,'<p>糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣</p>',500,'袋',1,1,1574071557,0,0,0),(10,10,'<p>糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣糖滞红枣</p>',500,'袋',1,1,1574071557,0,0,0);
/*!40000 ALTER TABLE `sean_goods_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_hupi`
--

DROP TABLE IF EXISTS `sean_hupi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_hupi` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '支付id',
  `appid` varchar(50) NOT NULL COMMENT '账户',
  `appsecret` varchar(150) NOT NULL COMMENT '密匙',
  `title` varchar(50) NOT NULL COMMENT '二维码上的标题',
  `my_plugin_id` varchar(150) NOT NULL COMMENT '自定义插件ID',
  `pay_type` varchar(10) NOT NULL DEFAULT '2' COMMENT '支付方式1支付宝2微信',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='虎皮椒支付';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_hupi`
--

LOCK TABLES `sean_hupi` WRITE;
/*!40000 ALTER TABLE `sean_hupi` DISABLE KEYS */;
INSERT INTO `sean_hupi` VALUES (1,'201906124143','7446f33231cae4d1a2cdc99d3da17584','水果鲜生','shuiguo-plugins-id','2');
/*!40000 ALTER TABLE `sean_hupi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_messages`
--

DROP TABLE IF EXISTS `sean_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言表id',
  `create_time` int(11) NOT NULL COMMENT '留言新增时间',
  `ip` varchar(50) NOT NULL COMMENT '留言ip',
  `is_look` int(1) NOT NULL DEFAULT '0' COMMENT '0未读1已读',
  `update_time` int(11) NOT NULL COMMENT '留言更新时间',
  `message` text NOT NULL COMMENT '留言内容',
  `email` varchar(255) NOT NULL COMMENT '留言邮箱',
  `name` varchar(60) NOT NULL COMMENT '留言人名字',
  `message_title` varchar(100) NOT NULL COMMENT '标题',
  PRIMARY KEY (`id`),
  KEY `id` (`id`) USING BTREE,
  KEY `is_look` (`is_look`) USING BTREE,
  KEY `create_time` (`create_time`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='留言表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_messages`
--

LOCK TABLES `sean_messages` WRITE;
/*!40000 ALTER TABLE `sean_messages` DISABLE KEYS */;
INSERT INTO `sean_messages` VALUES (1,1574243694,'0.0.0.0',1,1576733031,'sdsd','seanpan565@gmail.com','ds','dsds'),(2,1574243727,'0.0.0.0',1,1576733024,'sdsd','seanpan565@gmail.com','ds','dsds'),(3,1574243755,'0.0.0.0',1,1576733027,'sdsd','seanpan565@gmail.com','ds','dssssssssssssssssssssssssssssssssssssssssssssssss');
/*!40000 ALTER TABLE `sean_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_order`
--

DROP TABLE IF EXISTS `sean_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_order` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '订单id',
  `main_order_id` int(10) NOT NULL COMMENT '主订单id',
  `order_sn` varchar(200) NOT NULL DEFAULT '' COMMENT '订单编号',
  `trade_no` varchar(200) DEFAULT '' COMMENT '支付宝或者微信订单号',
  `user_id` int(10) NOT NULL COMMENT '用户id',
  `order_source` tinyint(1) DEFAULT '0' COMMENT '订单来源0表示pc1表示wap',
  `order_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '订单状态0表示未付款1表示已付款2表示发货3待评价4已评价5已取消6订单关闭7已删除8订单处理中9订单付款超时',
  `pay_status` tinyint(1) DEFAULT '0' COMMENT '付款状态0表示未付款1表示已付款',
  `pay_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '支付方式1表示支付宝2表示微信',
  `old_order_status` tinyint(1) DEFAULT '0' COMMENT '退款时原来的订单状态',
  `shipping_price` decimal(10,2) DEFAULT '0.00' COMMENT '物流费',
  `pay_amount` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '订单总价',
  `real_amount` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '实付订单',
  `create_time` int(10) NOT NULL DEFAULT '0' COMMENT '订单创建时间',
  `pay_time` int(10) DEFAULT '0' COMMENT '订单付款时间',
  `send_time` int(10) DEFAULT '0' COMMENT '订单发货时间',
  `take_time` int(10) DEFAULT '0' COMMENT '订单确认收货时间',
  `comment_time` int(10) DEFAULT '0' COMMENT '订单评价时间',
  `cancel_time` int(10) DEFAULT NULL COMMENT '订单取消时间',
  `cancel_reason` tinytext COMMENT '取消原因',
  `close_time` int(10) DEFAULT NULL COMMENT '订单关闭时间',
  `delete_time` int(10) DEFAULT NULL COMMENT '订单删除时间',
  `refund_time` int(10) DEFAULT NULL COMMENT '订单处理中的时间',
  `over_pay_time` int(10) DEFAULT NULL COMMENT '超时未付款时间',
  `address_name` varchar(20) NOT NULL DEFAULT '' COMMENT '收货人姓名',
  `address_phone` varchar(50) NOT NULL DEFAULT '' COMMENT '收货人电话',
  `address_site` varchar(200) NOT NULL DEFAULT '' COMMENT '收货详细地址',
  `order_msg` varchar(200) DEFAULT '' COMMENT '订单留言',
  `is_comment` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0表示未评价1已评价',
  `order_ip` varchar(100) DEFAULT '0.0.0.0' COMMENT '订单ip',
  PRIMARY KEY (`order_id`),
  KEY `order_uid` (`user_id`),
  KEY `order_status` (`order_status`),
  KEY `pay_status` (`pay_status`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='订单表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_order`
--

LOCK TABLES `sean_order` WRITE;
/*!40000 ALTER TABLE `sean_order` DISABLE KEYS */;
INSERT INTO `sean_order` VALUES (1,0,'20191217073141163872','',1,0,-1,0,2,0,0.00,12.00,12.00,1576582301,0,0,0,0,1576666873,NULL,NULL,NULL,NULL,NULL,'蒙聪聪','2147483647','广东广州市荔湾区吃饭街32号','',0,'0.0.0.0'),(2,0,'20191217074536976085','',1,0,1,0,2,0,0.00,38.20,38.20,1576583136,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'蒙聪聪','2147483647','广东广州市荔湾区吃饭街32号','',0,'0.0.0.0'),(3,0,'20191217075127951374','',1,0,-1,0,2,0,0.00,45.00,45.00,1576583487,0,0,0,0,1576980264,NULL,NULL,NULL,NULL,NULL,'蒙聪聪','2147483647','广东广州市荔湾区吃饭街32号','',0,'0.0.0.0'),(4,0,'20191218031628432165','4200000468201912172474501105',1,0,4,1,2,0,0.00,56.00,56.00,1576653388,0,1576836510,0,1577101667,1577014860,NULL,NULL,NULL,NULL,NULL,'蒙聪聪','2147483647','广东广州市荔湾区吃饭街32号','',1,'0.0.0.0'),(5,0,'20191219072220587126','',1,0,0,0,2,0,0.00,12.00,12.00,1576754540,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'蒙聪聪','2147483647','广东广州市荔湾区吃饭街32号','',0,'0.0.0.0'),(6,0,'20191219072809439528','',1,0,4,0,2,0,0.00,12.00,12.00,1576754889,0,0,0,1577273164,1577272630,NULL,NULL,NULL,NULL,NULL,'蒙聪聪','2147483647','广东广州市荔湾区吃饭街32号','',1,'0.0.0.0'),(7,0,'20191219072955720591','',1,0,0,0,2,0,0.00,12.00,12.00,1576754995,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'蒙聪聪','2147483647','广东广州市荔湾区吃饭街32号','',0,'0.0.0.0'),(8,0,'20191219073101487935','',1,0,5,0,2,0,0.00,12.00,12.00,1576755061,0,0,0,0,1576986465,NULL,NULL,NULL,NULL,NULL,'蒙聪聪','2147483647','广东广州市荔湾区吃饭街32号','',0,'0.0.0.0'),(9,0,'20191219073301847163','',1,0,-1,0,2,0,0.00,12.00,12.00,1576755181,0,0,0,0,1576984339,NULL,NULL,NULL,NULL,NULL,'蒙聪聪','2147483647','广东广州市荔湾区吃饭街32号','',0,'0.0.0.0'),(10,0,'20191219074544925814','',1,0,-1,0,2,0,0.00,16.00,16.00,1576755944,0,0,0,0,1576980651,NULL,NULL,NULL,NULL,NULL,'蒙聪聪','2147483647','广东广州市荔湾区吃饭街32号','',0,'0.0.0.0'),(11,0,'20191225064041589701','',1,0,0,0,2,0,0.00,16.00,16.00,1577270441,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'蒙聪聪','2147483647','广东广州市荔湾区吃饭街32号','',0,'0.0.0.0'),(12,0,'20191225064132649125','',1,0,0,0,2,0,0.00,64.00,64.00,1577270492,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'蒙聪聪','2147483647','广东广州市荔湾区吃饭街32号','',0,'0.0.0.0');
/*!40000 ALTER TABLE `sean_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_order_goods`
--

DROP TABLE IF EXISTS `sean_order_goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_order_goods` (
  `order_goods_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) NOT NULL DEFAULT '0' COMMENT '订单id',
  `order_sn` varchar(200) NOT NULL COMMENT '订单编号',
  `user_id` int(10) NOT NULL DEFAULT '0' COMMENT '用户id',
  `goods_id` int(10) NOT NULL DEFAULT '0' COMMENT '商品id',
  `goods_name` varchar(200) DEFAULT '' COMMENT '商品名称',
  `goods_number` varchar(200) DEFAULT '' COMMENT '商品货号',
  `goods_vip` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '划线价',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '价格',
  `total_price` decimal(10,2) NOT NULL COMMENT '单件商品小计',
  `goods_count` int(10) NOT NULL DEFAULT '0' COMMENT '商品数量',
  `is_comment` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0表示未评价1表示已评价',
  `comment_time` int(10) NOT NULL DEFAULT '0' COMMENT '评价时间',
  `refund_type` tinyint(1) DEFAULT '0' COMMENT '退款类型1表示仅退款2表示退货退款',
  `return_status` tinyint(1) DEFAULT '0' COMMENT '-1取消申请1申请退款2退款成功3退款失败',
  `refund_money` decimal(10,2) DEFAULT '0.00' COMMENT '退款金额',
  `goods_thumb` varchar(200) DEFAULT '' COMMENT '商品图片',
  `shipping_id` mediumint(8) DEFAULT '0' COMMENT '快递id',
  `shipping_status` tinyint(1) DEFAULT '0' COMMENT '快递状态0表示未发货1表示已发货',
  `shipping_sn` varchar(200) DEFAULT NULL COMMENT '快递单号',
  `shipping_name` varchar(200) DEFAULT NULL COMMENT '配送方式名称',
  `send_time` int(10) DEFAULT '0' COMMENT '发货时间',
  PRIMARY KEY (`order_goods_id`),
  KEY `order_id` (`order_id`),
  KEY `order_uid` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='订单商品表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_order_goods`
--

LOCK TABLES `sean_order_goods` WRITE;
/*!40000 ALTER TABLE `sean_order_goods` DISABLE KEYS */;
INSERT INTO `sean_order_goods` VALUES (1,0,'20191217073141163872',1,4,'橙汁','',12.00,15.00,0.00,1,0,0,0,0,0.00,'\\uploads\\admin\\admin_thumb\\20191118\\0060fb7fa5a66ec8d7e4d99a6ddf648b.jpg',0,0,NULL,NULL,0),(2,0,'20191217074536976085',1,2,'西兰花','643451311',16.00,18.00,0.00,1,0,0,1,3,0.00,'\\uploads\\admin\\admin_thumb\\20191118\\31ab3e9a097890e64fadd8a695be416f.jpg',0,0,NULL,NULL,0),(3,0,'20191217074536976085',1,3,'生菜','65416431',10.20,12.00,0.00,1,0,0,1,3,0.00,'\\uploads\\admin\\admin_thumb\\20191118\\c32c4f6fe4766bd40b5d49c4ebf64c72.jpg',0,0,NULL,NULL,0),(4,0,'20191217074536976085',1,4,'橙汁','746546541',12.00,15.00,0.00,1,0,0,0,0,0.00,'\\uploads\\admin\\admin_thumb\\20191118\\0060fb7fa5a66ec8d7e4d99a6ddf648b.jpg',0,0,NULL,NULL,0),(5,0,'20191217075127951374',1,7,'蓝莓','',45.00,50.00,0.00,1,0,0,0,0,0.00,'\\uploads\\admin\\admin_thumb\\20191118\\163c996d376d08e00cacc5ef910eec7a.jpg',0,0,NULL,NULL,0),(6,0,'20191218031628432165',1,4,'橙汁','746546541',12.00,15.00,0.00,2,1,1577101667,1,3,0.00,'\\uploads\\admin\\admin_thumb\\20191118\\0060fb7fa5a66ec8d7e4d99a6ddf648b.jpg',11,1,'15677550147','优速快递',1576836510),(7,0,'20191218031628432165',1,2,'西兰花','643451311',16.00,18.00,0.00,2,1,1577083973,0,0,0.00,'\\uploads\\admin\\admin_thumb\\20191118\\31ab3e9a097890e64fadd8a695be416f.jpg',11,1,'15677550147','优速快递',1576836510),(8,0,'20191219072220587126',1,4,'橙汁','',12.00,15.00,0.00,1,0,0,0,0,0.00,'\\uploads\\admin\\admin_thumb\\20191118\\0060fb7fa5a66ec8d7e4d99a6ddf648b.jpg',0,0,NULL,NULL,0),(9,0,'20191219072809439528',1,4,'橙汁','',12.00,15.00,0.00,1,1,1577273164,2,-1,0.00,'\\uploads\\admin\\admin_thumb\\20191118\\0060fb7fa5a66ec8d7e4d99a6ddf648b.jpg',0,0,NULL,NULL,0),(10,0,'20191219072955720591',1,4,'橙汁','',12.00,15.00,0.00,1,0,0,0,0,0.00,'\\uploads\\admin\\admin_thumb\\20191118\\0060fb7fa5a66ec8d7e4d99a6ddf648b.jpg',0,0,NULL,NULL,0),(11,0,'20191219073101487935',1,4,'橙汁','',12.00,15.00,0.00,1,0,0,0,0,0.00,'\\uploads\\admin\\admin_thumb\\20191118\\0060fb7fa5a66ec8d7e4d99a6ddf648b.jpg',0,0,NULL,NULL,0),(12,0,'20191219073301847163',1,4,'橙汁','',12.00,15.00,0.00,1,0,0,0,0,0.00,'\\uploads\\admin\\admin_thumb\\20191118\\0060fb7fa5a66ec8d7e4d99a6ddf648b.jpg',0,0,NULL,NULL,0),(13,0,'20191219074544925814',1,2,'西兰花','',16.00,18.00,0.00,1,0,0,0,0,0.00,'\\uploads\\admin\\admin_thumb\\20191118\\31ab3e9a097890e64fadd8a695be416f.jpg',0,0,NULL,NULL,0),(14,0,'20191225064041589701',1,2,'西兰花','',16.00,18.00,16.00,1,0,0,0,0,0.00,'\\uploads\\admin\\admin_thumb\\20191118\\31ab3e9a097890e64fadd8a695be416f.jpg',0,0,NULL,NULL,0),(15,0,'20191225064132649125',1,2,'西兰花','643451311',16.00,18.00,64.00,4,0,0,0,0,0.00,'\\uploads\\admin\\admin_thumb\\20191118\\31ab3e9a097890e64fadd8a695be416f.jpg',0,0,NULL,NULL,0);
/*!40000 ALTER TABLE `sean_order_goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_order_log`
--

DROP TABLE IF EXISTS `sean_order_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_order_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_sn` varchar(50) DEFAULT '' COMMENT '订单编号',
  `user_id` int(10) NOT NULL DEFAULT '0' COMMENT '用户id',
  `order_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '订单方式0表示未付款1表示已付款2表示发货3确认收货4已评价5已取消6订单关闭7已删除8订单处理中9订单付款超时',
  `pay_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '付款状态',
  `log_action` varchar(255) DEFAULT NULL COMMENT '操作明细',
  `log_time` int(10) NOT NULL DEFAULT '0' COMMENT '操作时间',
  `order_money` varchar(200) NOT NULL COMMENT '订单金额',
  `trade_no` varchar(100) NOT NULL COMMENT '支付平台订单号',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='订单日志表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_order_log`
--

LOCK TABLES `sean_order_log` WRITE;
/*!40000 ALTER TABLE `sean_order_log` DISABLE KEYS */;
INSERT INTO `sean_order_log` VALUES (1,'20191217073141163872',1,5,1,'用户取消订单',1576666873,'',''),(2,'20191218031628432165',1,2,1,'卖家发货成功',1576836510,'',''),(3,'20191217075127951374',1,5,1,'用户取消订单',1576980264,'',''),(4,'20191219074544925814',1,5,1,'用户取消订单',1576980651,'',''),(5,'20191217075127951374',1,-1,0,'管理员删除订单',1576984079,'',''),(6,'20191219073301847163',1,5,0,'用户取消订单',1576984339,'',''),(7,'20191219073301847163',1,-1,0,'用户删除订单',1576986429,'',''),(8,'20191219073101487935',1,5,0,'用户取消订单',1576986465,'',''),(9,'20191218031628432165',1,3,1,'用户确认收货',1577014860,'',''),(10,'20191218031628432165',1,4,1,'用户商品评价',1577083973,'',''),(11,'20191218031628432165',1,4,1,'用户商品评价',1577100831,'',''),(12,'20191218031628432165',1,4,1,'用户商品评价',1577101667,'',''),(13,'20191219072809439528',1,3,0,'用户确认收货',1577272630,'',''),(14,'20191219072809439528',1,4,0,'用户商品评价',1577273164,'',''),(15,'20191218031628432165',1,10,1,'用户申请退款',1577273690,'',''),(16,'20191219072809439528',1,10,0,'用户申请退款',1577346367,'',''),(17,'20191217074536976085',1,10,0,'用户申请退款',1577785194,'',''),(18,'20191217074536976085',1,10,0,'用户申请退款',1577785870,'','');
/*!40000 ALTER TABLE `sean_order_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_order_main`
--

DROP TABLE IF EXISTS `sean_order_main`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_order_main` (
  `main_order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_sn` varchar(200) NOT NULL DEFAULT '' COMMENT '订单编号',
  `user_id` int(10) NOT NULL COMMENT '用户id',
  `pay_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '支付方式1表示支付宝2表示微信',
  `order_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '订单状态0表示未付款1表示已付款2表示发货3待评价4已评价5已取消6订单关闭7已删除8订单处理中9订单付款超时',
  `order_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '订单总价',
  `trade_no` varchar(200) DEFAULT '' COMMENT '虎皮椒订单号',
  `create_time` varchar(200) DEFAULT NULL COMMENT '新增时间',
  PRIMARY KEY (`main_order_id`),
  KEY `order_uid` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='订单主表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_order_main`
--

LOCK TABLES `sean_order_main` WRITE;
/*!40000 ALTER TABLE `sean_order_main` DISABLE KEYS */;
INSERT INTO `sean_order_main` VALUES (1,'20191217073141163872',1,2,-1,12.00,'',NULL),(2,'20191217074536976085',1,2,1,38.20,'',NULL),(3,'20191217075127951374',1,2,-1,45.00,'',NULL),(4,'20191218031628432165',1,2,3,56.00,'4200000468201912172474501105',NULL),(5,'20191219072220587126',1,2,0,12.00,'',NULL),(6,'20191219072809439528',1,2,3,12.00,'',NULL),(7,'20191219072955720591',1,2,0,12.00,'',NULL),(8,'20191219073101487935',1,2,5,12.00,'',NULL),(9,'20191219073301847163',1,2,-1,12.00,'',NULL),(10,'20191219074544925814',1,2,-1,16.00,'','1576755944'),(11,'20191225064041589701',1,2,0,16.00,'','1577270441'),(12,'20191225064132649125',1,2,0,64.00,'','1577270492');
/*!40000 ALTER TABLE `sean_order_main` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_order_return`
--

DROP TABLE IF EXISTS `sean_order_return`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_order_return` (
  `return_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned DEFAULT '0' COMMENT '订单id',
  `order_goods_id` int(10) NOT NULL DEFAULT '0' COMMENT '订单商品id',
  `return_sn` varchar(50) DEFAULT '' COMMENT '退款编号',
  `user_id` int(10) NOT NULL DEFAULT '0' COMMENT '用户id',
  `return_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1表示退款2表示退货退款',
  `return_pay` tinyint(1) DEFAULT '1' COMMENT '退款方式1表示支付宝2表示微信',
  `out_trade_no` varchar(50) DEFAULT NULL COMMENT '退款支付宝或者微信返回的订单号',
  `return_cause` varchar(255) DEFAULT NULL COMMENT '退款原因',
  `return_desc` text COMMENT '退款描述',
  `return_money` decimal(10,2) DEFAULT NULL COMMENT '退款金额',
  `return_imgs` text COMMENT '退款传图',
  `return_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态-1表示取消0表示申请中1表示申请通过2表示申请不通过',
  `return_time` int(10) DEFAULT NULL COMMENT '申请时间',
  `return_cancel_time` int(10) DEFAULT NULL COMMENT '取消时间',
  `return_seller_cause` varchar(200) DEFAULT NULL COMMENT '卖家拒绝原因',
  `return_seller_desc` text COMMENT '卖家拒绝描述',
  `return_seller_time` int(10) DEFAULT NULL COMMENT '卖家处理时间',
  PRIMARY KEY (`return_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='订单退货表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_order_return`
--

LOCK TABLES `sean_order_return` WRITE;
/*!40000 ALTER TABLE `sean_order_return` DISABLE KEYS */;
INSERT INTO `sean_order_return` VALUES (4,6,9,'20191226034607028543',1,2,1,NULL,'1','不想要了',0.00,NULL,-1,1577346367,1577620123,NULL,NULL,NULL),(5,2,2,'20191231053954046893',1,1,1,NULL,'1','不要了',0.00,NULL,2,1577785194,NULL,NULL,'不给退',1577785236),(6,2,3,'20191231055110069285',1,1,1,NULL,'1','测试',0.00,NULL,2,1577785870,NULL,NULL,'测试不给退',1577785909);
/*!40000 ALTER TABLE `sean_order_return` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_smsconfig`
--

DROP TABLE IF EXISTS `sean_smsconfig`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_smsconfig` (
  `sms` varchar(10) NOT NULL DEFAULT 'sms' COMMENT '标识',
  `appkey` varchar(200) NOT NULL,
  `secretkey` varchar(200) NOT NULL,
  `type` varchar(100) DEFAULT 'normal' COMMENT '短信类型',
  `name` varchar(100) NOT NULL COMMENT '短信签名',
  `code` varchar(100) NOT NULL COMMENT '短信模板ID',
  `content` text NOT NULL COMMENT '短信默认模板',
  KEY `sms` (`sms`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='短信配置';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_smsconfig`
--

LOCK TABLES `sean_smsconfig` WRITE;
/*!40000 ALTER TABLE `sean_smsconfig` DISABLE KEYS */;
INSERT INTO `sean_smsconfig` VALUES ('sms','','','','','','');
/*!40000 ALTER TABLE `sean_smsconfig` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_smspo`
--

DROP TABLE IF EXISTS `sean_smspo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_smspo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL COMMENT '短信宝用户名',
  `password` varchar(100) NOT NULL COMMENT '短信宝密码',
  `template` varchar(200) NOT NULL COMMENT '短信宝模板',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='短信宝配置表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_smspo`
--

LOCK TABLES `sean_smspo` WRITE;
/*!40000 ALTER TABLE `sean_smspo` DISABLE KEYS */;
INSERT INTO `sean_smspo` VALUES (1,'','','');
/*!40000 ALTER TABLE `sean_smspo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_stat_goods`
--

DROP TABLE IF EXISTS `sean_stat_goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_stat_goods` (
  `stat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(1) NOT NULL DEFAULT '0' COMMENT '商品id',
  `stat_num` int(10) NOT NULL DEFAULT '0' COMMENT '下单量',
  `stat_time` int(10) NOT NULL DEFAULT '0' COMMENT '统计时间每一天凌晨0点时间戳',
  PRIMARY KEY (`stat_id`),
  KEY `goods_stat_num` (`goods_id`,`stat_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='统计商品';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_stat_goods`
--

LOCK TABLES `sean_stat_goods` WRITE;
/*!40000 ALTER TABLE `sean_stat_goods` DISABLE KEYS */;
/*!40000 ALTER TABLE `sean_stat_goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_stat_goods_month`
--

DROP TABLE IF EXISTS `sean_stat_goods_month`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_stat_goods_month` (
  `stat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(1) NOT NULL DEFAULT '0' COMMENT '商品id',
  `stat_num` int(10) NOT NULL DEFAULT '0' COMMENT '下单量',
  `stat_time` varchar(11) NOT NULL DEFAULT '0' COMMENT '统计时间每一天凌晨0点时间戳',
  PRIMARY KEY (`stat_id`),
  KEY `goods_stat_num` (`goods_id`,`stat_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品月统计';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_stat_goods_month`
--

LOCK TABLES `sean_stat_goods_month` WRITE;
/*!40000 ALTER TABLE `sean_stat_goods_month` DISABLE KEYS */;
/*!40000 ALTER TABLE `sean_stat_goods_month` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_stat_user`
--

DROP TABLE IF EXISTS `sean_stat_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_stat_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stat_num` int(11) NOT NULL,
  `stat_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='会员统计';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_stat_user`
--

LOCK TABLES `sean_stat_user` WRITE;
/*!40000 ALTER TABLE `sean_stat_user` DISABLE KEYS */;
INSERT INTO `sean_stat_user` VALUES (1,7,1574352000);
/*!40000 ALTER TABLE `sean_stat_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_store`
--

DROP TABLE IF EXISTS `sean_store`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '店铺统计表id',
  `reg_num` varchar(200) NOT NULL COMMENT '店铺注册量',
  `store_money` varchar(200) NOT NULL COMMENT '店铺总收入',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='店铺统计表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_store`
--

LOCK TABLES `sean_store` WRITE;
/*!40000 ALTER TABLE `sean_store` DISABLE KEYS */;
/*!40000 ALTER TABLE `sean_store` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_urlconfig`
--

DROP TABLE IF EXISTS `sean_urlconfig`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_urlconfig` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '路由别名表id',
  `aliases` varchar(200) NOT NULL COMMENT '想要设置的别名',
  `url` varchar(200) NOT NULL COMMENT '原url结构',
  `desc` text COMMENT '备注',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '0禁用1使用',
  `create_time` int(11) NOT NULL COMMENT '路由别名表新增时间',
  `update_time` int(11) NOT NULL COMMENT '路由别名表更新时间',
  PRIMARY KEY (`id`),
  KEY `id` (`id`) USING BTREE,
  KEY `status` (`status`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='路由别名表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_urlconfig`
--

LOCK TABLES `sean_urlconfig` WRITE;
/*!40000 ALTER TABLE `sean_urlconfig` DISABLE KEYS */;
INSERT INTO `sean_urlconfig` VALUES (1,'admin_login','admin/common/login','后台登录地址。',0,1517621629,1517621629);
/*!40000 ALTER TABLE `sean_urlconfig` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_user`
--

DROP TABLE IF EXISTS `sean_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `user_name` varchar(100) NOT NULL COMMENT '用户名',
  `user_mobile` varchar(11) NOT NULL COMMENT '用户手机',
  `user_email` varchar(200) NOT NULL COMMENT '用户邮箱',
  `user_password` varchar(200) NOT NULL COMMENT '登录密码',
  `user_payword` varchar(200) NOT NULL COMMENT '支付密码',
  `user_salt` varchar(10) NOT NULL COMMENT '密匙',
  `thumb` text NOT NULL COMMENT '用户头像',
  `user_reg_time` int(11) NOT NULL COMMENT '新增时间',
  `user_reg_ip` varchar(20) NOT NULL COMMENT '新增ip',
  `user_login_time` int(11) NOT NULL COMMENT '登录时间',
  `user_login_ip` varchar(20) NOT NULL COMMENT '登录ip',
  `update_time` int(11) NOT NULL COMMENT '更新时间',
  `user_point` int(20) NOT NULL COMMENT '用户积分',
  `user_sex` tinyint(1) NOT NULL DEFAULT '1' COMMENT '用户性别 1男 0女',
  `address_id` int(20) NOT NULL COMMENT '默认地址',
  `user_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '用户状态 1正常 0停用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='用户表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_user`
--

LOCK TABLES `sean_user` WRITE;
/*!40000 ALTER TABLE `sean_user` DISABLE KEYS */;
INSERT INTO `sean_user` VALUES (1,'sean','15677550147','','b5d9e05bc58c8800793d82c3f63a5639','','f9205a','\\uploads\\index\\index_thumb\\20191125\\60507992e17a4a6580d6ef6750fc9701.jpg',1574417822,'0.0.0.0',1578020238,'0.0.0.0',1574417822,0,1,0,1);
/*!40000 ALTER TABLE `sean_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sean_webconfig`
--

DROP TABLE IF EXISTS `sean_webconfig`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sean_webconfig` (
  `web` varchar(20) NOT NULL COMMENT '网站配置标识',
  `name` varchar(200) NOT NULL COMMENT '网站名称',
  `keywords` text COMMENT '关键词',
  `desc` text COMMENT '描述',
  `is_log` int(1) NOT NULL DEFAULT '1' COMMENT '1开启日志0关闭',
  `file_type` varchar(200) DEFAULT NULL COMMENT '允许上传的类型',
  `file_size` bigint(20) DEFAULT NULL COMMENT '允许上传的最大值',
  `statistics` text COMMENT '统计代码',
  `black_ip` text COMMENT 'ip黑名单',
  `url_suffix` varchar(20) DEFAULT NULL COMMENT 'url伪静态后缀',
  KEY `web` (`web`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='网站配置';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sean_webconfig`
--

LOCK TABLES `sean_webconfig` WRITE;
/*!40000 ALTER TABLE `sean_webconfig` DISABLE KEYS */;
INSERT INTO `sean_webconfig` VALUES ('web','水果鲜生','水果鲜生，水果店，水果加盟店，水果超市，水果连锁店，水果店外卖，水果店','水果鲜生是一个基于互联网技术的新零售鲜果品牌，核心由奇果生态线下体验店+奇果智慧互联网购物平台+智能健康导购系统+智慧管理系统四大部分组成，旨在为中国消费者提供一站式高品质鲜果产品和个性化鲜果服务。',1,'jpg,png,gif,mp4,zip,jpeg',500,'','',NULL);
/*!40000 ALTER TABLE `sean_webconfig` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-03 18:28:49
