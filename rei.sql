-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: c9
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

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
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abouts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abouts`
--

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` VALUES (1,'1.jpg','খাই ঘুমাই আর পাখি পালি মাঝে মাঝে পড়ি বড় বড় স্বপ্ন দেখি ,একটা প্রোগ্রাম রান করতে পারলে তার পর ১৫ দিন প্রোগ্রামিং করিনা আর বাকি ১৫ দিন চিন্তা করি ক্যামনে GOOGLE এ চাকরি করুম ।','2018-03-04 00:00:00','2018-03-04 00:00:00');
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'প্রোগ্রামিং','programming',NULL,NULL),(2,' সি প্রোগ্রামিং ','c-programming',NULL,NULL),(3,'অ্যালগরিদম','algorithm',NULL,NULL),(4,'ওয়েব ডেভলপমেন্ট','web-development',NULL,NULL),(5,'লারাভেল','laravel',NULL,NULL),(6,'পিএইচপি','php',NULL,NULL),(7,'ওয়ার্ডপ্রেস','wordpress',NULL,NULL),(8,'ওয়েব ডিজাইন','web-design',NULL,NULL),(9,'এইচটিএমএল','html',NULL,NULL),(10,'সিএসএস','css',NULL,NULL),(11,'বুটস্ট্রাপ','bootstrap',NULL,NULL),(12,'জাভাস্ক্রিপ্ট','javascript',NULL,NULL),(13,'Vue JS','Vue-JS',NULL,NULL),(14,'Underscore JS','Underscore-js',NULL,NULL),(15,'Angular JS','angular-JS',NULL,NULL),(16,'React JS','react-js',NULL,NULL),(17,'পাইথন','python',NULL,NULL),(18,'জাবা','java',NULL,NULL),(19,'গ্রাফিক্স','graphics',NULL,NULL),(20,'স্ট্যাটিক গ্রাফিক্স','statistics-graphics',NULL,NULL),(21,'ফটোশপ','photoshop',NULL,NULL),(22,'ইলাস্ট্রেটর','illustrator',NULL,NULL),(23,'মোশন গ্রাফিক্স','motion-graphics',NULL,NULL),(24,'এডোবি প্রিমিয়ার প্রো','adobe-premiere-pro',NULL,NULL),(25,'এডোবি আফটার ইফেক্ট','adobe-after-effects',NULL,NULL),(26,'ডাটাবেজ','database',NULL,NULL),(27,'MySql','MySql',NULL,NULL),(28,'Orachol','Orachol',NULL,NULL),(29,'শখ','hobby',NULL,NULL),(30,'একুরিয়ামে মাছ পালন','aquarium-fish',NULL,NULL),(31,'বাগান করা ','gardening',NULL,NULL),(32,'পাখি পালন','Keeping-the-birds',NULL,NULL),(33,'কবুতর পালন','Keeping-the-kabutara',NULL,NULL),(34,'মাছ শিকার','fish-hunting',NULL,NULL),(35,'টাকা সংগ্রহ করা','Collect-money',NULL,NULL),(36,'সিনেমা দেখা','Watch-movies',NULL,NULL),(37,'গল্প লিখার চেষ্টা করা','Trying-to-write-stories',NULL,NULL),(38,'আমার ছেলেবেলা ','my-childhood',NULL,NULL),(39,'বই  ','book',NULL,NULL),(40,'ভ্রমণ ','Traveling',NULL,NULL),(41,'সাইন্স ফিকশন ','science-fiction',NULL,NULL),(42,'jQuery','jquery',NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_post`
--

DROP TABLE IF EXISTS `category_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_post` (
  `category_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`category_id`,`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_post`
--

LOCK TABLES `category_post` WRITE;
/*!40000 ALTER TABLE `category_post` DISABLE KEYS */;
INSERT INTO `category_post` VALUES (1,1),(1,2),(1,3),(1,4),(1,5),(1,6),(2,1),(2,2),(2,5),(2,6),(3,2),(3,4),(3,5),(4,3),(5,1),(5,3),(5,5),(6,1),(6,2),(29,4),(29,5),(37,6),(41,6);
/*!40000 ALTER TABLE `category_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (1,'Cox\'s Bazar','কক্সবাজার ','Coxs-Bazar',NULL,NULL),(2,'Barguna','বরগুনা','Barguna',NULL,NULL),(3,'Barisal','বরিশাল','Barisal',NULL,NULL),(4,'Bhola','ভোলা','Bhola',NULL,NULL),(5,'Jhalokati','ঝালকাঠি','Jhalokati',NULL,NULL),(6,'Patuakhali','পটুয়াখালী','Patuakhali',NULL,NULL),(7,'Pirojpur','পিরোজপুর','Pirojpur',NULL,NULL),(8,'Bandarban','বান্দরবান','Bandarban',NULL,NULL),(9,'Brahmanbaria','ব্রাহ্মণবাড়ীয়া','Brahmanbaria',NULL,NULL),(10,'Chandpur','চাঁদপুর','Chandpur',NULL,NULL),(11,'Chittagong','চট্টগ্রাম','Chittagong',NULL,NULL),(12,'Comilla','কুমিল্লা','Comilla',NULL,NULL),(13,'Feni','ফেনী','Feni',NULL,NULL),(14,'Khagrachhari','খাগড়াছড়ি','Khagrachhari',NULL,NULL),(15,'Lakshmipur','লক্ষ্মীপুর','Lakshmipur',NULL,NULL),(16,'Noakhali','নোয়াখালী','Noakhali',NULL,NULL),(17,'Rangamati','রাঙ্গামাটি','Rangamati',NULL,NULL),(18,'Dhaka','ঢাকা','Dhaka',NULL,NULL),(19,'Faridpur','ফরিদপুর','Faridpur',NULL,NULL),(20,'Gazipur','গাজীপুর','Gazipur',NULL,NULL),(21,'Gopalganj','গোপালগঞ্জ','Gopalganj',NULL,NULL),(22,'Kishoreganj','কিশোরগঞ্জ','Kishoreganj',NULL,NULL),(23,'Madaripur','মাদারীপুর','Madaripur',NULL,NULL),(24,'Manikganj','মানিকগঞ্জ','Manikganj',NULL,NULL),(25,'Munshiganj','মুন্সীগঞ্জ','Munshiganj',NULL,NULL),(26,'Narayanganj','নারায়ণগঞ্জ','Narayanganj',NULL,NULL),(27,'Narsingdi','নরসিংদী','Narsingdi',NULL,NULL),(28,'Rajbari','রাজবাড়ী','Rajbari',NULL,NULL),(29,'Shariatpur','শরীয়তপুর','Shariatpur',NULL,NULL),(30,'Tangail','টাঙ্গাইল','Tangail',NULL,NULL),(31,'Bagerhat','বাগেরহাট','Bagerhat',NULL,NULL),(32,'Chuadanga','চুয়াডাঙ্গা','Chuadanga',NULL,NULL),(33,'Jessore','যশোর','Jessore',NULL,NULL),(34,'Jhenaidah','ঝিনাইদহ','Jhenaidah',NULL,NULL),(35,'Khulna','খুলনা','Khulna',NULL,NULL),(36,'Kushtia','কুষ্টিয়া','Kushtia',NULL,NULL),(37,'Magura','মাগুরা','Magura',NULL,NULL),(38,'Meherpur','মেহেরপুর','Meherpur',NULL,NULL),(39,'Narail','নড়াইল','Narail',NULL,NULL),(40,'Satkhira','সাতক্ষিরা','Satkhira',NULL,NULL),(41,'Jamalpur','জামালপুর','Jamalpur',NULL,NULL),(42,'Mymensingh','ময়মনসিংহ','Mymensingh',NULL,NULL),(43,'Netrakona','নেত্রকোনা','Netrakona',NULL,NULL),(44,'Sherpur','শেরপুর','Sherpur',NULL,NULL),(45,'Bogra','বগুড়া','Bogra',NULL,NULL),(46,'Joypurhat','জয়পুরহাট','Joypurhat',NULL,NULL),(47,'Naogaon','নওগাঁ','Naogaon',NULL,NULL),(48,'Natore','নাটোর','Natore',NULL,NULL),(49,'Chapainawabganj','নওয়াবগঞ্জ','Chapainawabganj',NULL,NULL),(50,'Pabna','পাবনা','Pabna',NULL,NULL),(51,'Rajshahi','রাজশাহী','Rajshahi',NULL,NULL),(52,'Sirajgonj','সিরাজগঞ্জ','Sirajgonj',NULL,NULL),(53,'Dinajpur','দিনাজপুর','Dinajpur',NULL,NULL),(54,'Gaibandha','গাইবান্ধা','Gaibandha',NULL,NULL),(55,'Kurigram','কুড়িগ্রাম','Kurigram',NULL,NULL),(56,'Lalmonirhat','লালমনিরহাট','Lalmonirhat',NULL,NULL),(57,'Nilphamari','নীলফামারী','Nilphamari',NULL,NULL),(58,'Panchagarh','পঞ্চগড়','Panchagarh',NULL,NULL),(59,'Rangpur','রংপুর','Rangpur',NULL,NULL),(60,'Thakurgaon','ঠাকুরগাঁও','Thakurgaon',NULL,NULL),(61,'Habiganj','হবিগঞ্জ','Habiganj',NULL,NULL),(62,'Moulvibazar','মৌলভীবাজার','Moulvibazar',NULL,NULL),(63,'Sunamganj','সুনামগঞ্জ','Sunamganj',NULL,NULL),(64,'Sylhet','সিলেট','Sylhet',NULL,NULL);
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=265 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'AF','Afghanistan',NULL,NULL),(2,'AL','Albania',NULL,NULL),(3,'DZ','Algeria',NULL,NULL),(4,'AS','American Samoa',NULL,NULL),(5,'AD','Andorra',NULL,NULL),(6,'AO','Angola',NULL,NULL),(7,'AI','Anguilla',NULL,NULL),(8,'AQ','Antarctica',NULL,NULL),(9,'AG','Antigua and Barbuda',NULL,NULL),(10,'AR','Argentina',NULL,NULL),(11,'AM','Armenia',NULL,NULL),(12,'AW','Aruba',NULL,NULL),(13,'AU','Australia',NULL,NULL),(14,'AT','Austria',NULL,NULL),(15,'AZ','Azerbaijan',NULL,NULL),(16,'BS','Bahamas',NULL,NULL),(17,'BH','Bahrain',NULL,NULL),(18,'BD','Bangladesh',NULL,NULL),(19,'BB','Barbados',NULL,NULL),(20,'BY','Belarus',NULL,NULL),(21,'BE','Belgium',NULL,NULL),(22,'BZ','Belize',NULL,NULL),(23,'BJ','Benin',NULL,NULL),(24,'BM','Bermuda',NULL,NULL),(25,'BT','Bhutan',NULL,NULL),(26,'BO','Bolivia',NULL,NULL),(27,'BA','Bosnia and Herzegovina',NULL,NULL),(28,'BW','Botswana',NULL,NULL),(29,'BV','Bouvet Island',NULL,NULL),(30,'BR','Brazil',NULL,NULL),(31,'BQ','British Antarctic Territory',NULL,NULL),(32,'IO','British Indian Ocean Territory',NULL,NULL),(33,'VG','British Virgin Islands',NULL,NULL),(34,'BN','Brunei',NULL,NULL),(35,'BG','Bulgaria',NULL,NULL),(36,'BF','Burkina Faso',NULL,NULL),(37,'BI','Burundi',NULL,NULL),(38,'KH','Cambodia',NULL,NULL),(39,'CM','Cameroon',NULL,NULL),(40,'CA','Canada',NULL,NULL),(41,'CT','Canton and Enderbury Islands',NULL,NULL),(42,'CV','Cape Verde',NULL,NULL),(43,'KY','Cayman Islands',NULL,NULL),(44,'CF','Central African Republic',NULL,NULL),(45,'TD','Chad',NULL,NULL),(46,'CL','Chile',NULL,NULL),(47,'CN','China',NULL,NULL),(48,'CX','Christmas Island',NULL,NULL),(49,'CC','Cocos [Keeling] Islands',NULL,NULL),(50,'CO','Colombia',NULL,NULL),(51,'KM','Comoros',NULL,NULL),(52,'CG','Congo - Brazzaville',NULL,NULL),(53,'CD','Congo - Kinshasa',NULL,NULL),(54,'CK','Cook Islands',NULL,NULL),(55,'CR','Costa Rica',NULL,NULL),(56,'HR','Croatia',NULL,NULL),(57,'CU','Cuba',NULL,NULL),(58,'CY','Cyprus',NULL,NULL),(59,'CZ','Czech Republic',NULL,NULL),(60,'CI','Côte d’Ivoire',NULL,NULL),(61,'DK','Denmark',NULL,NULL),(62,'DJ','Djibouti',NULL,NULL),(63,'DM','Dominica',NULL,NULL),(64,'DO','Dominican Republic',NULL,NULL),(65,'NQ','Dronning Maud Land',NULL,NULL),(66,'DD','East Germany',NULL,NULL),(67,'EC','Ecuador',NULL,NULL),(68,'EG','Egypt',NULL,NULL),(69,'SV','El Salvador',NULL,NULL),(70,'GQ','Equatorial Guinea',NULL,NULL),(71,'ER','Eritrea',NULL,NULL),(72,'EE','Estonia',NULL,NULL),(73,'ET','Ethiopia',NULL,NULL),(74,'FK','Falkland Islands',NULL,NULL),(75,'FO','Faroe Islands',NULL,NULL),(76,'FJ','Fiji',NULL,NULL),(77,'FI','Finland',NULL,NULL),(78,'FR','France',NULL,NULL),(79,'GF','French Guiana',NULL,NULL),(80,'PF','French Polynesia',NULL,NULL),(81,'TF','French Southern Territories',NULL,NULL),(82,'FQ','French Southern and Antarctic Territories',NULL,NULL),(83,'GA','Gabon',NULL,NULL),(84,'GM','Gambia',NULL,NULL),(85,'GE','Georgia',NULL,NULL),(86,'DE','Germany',NULL,NULL),(87,'GH','Ghana',NULL,NULL),(88,'GI','Gibraltar',NULL,NULL),(89,'GR','Greece',NULL,NULL),(90,'GL','Greenland',NULL,NULL),(91,'GD','Grenada',NULL,NULL),(92,'GP','Guadeloupe',NULL,NULL),(93,'GU','Guam',NULL,NULL),(94,'GT','Guatemala',NULL,NULL),(95,'GG','Guernsey',NULL,NULL),(96,'GN','Guinea',NULL,NULL),(97,'GW','Guinea-Bissau',NULL,NULL),(98,'GY','Guyana',NULL,NULL),(99,'HT','Haiti',NULL,NULL),(100,'HM','Heard Island and McDonald Islands',NULL,NULL),(101,'HN','Honduras',NULL,NULL),(102,'HK','Hong Kong SAR China',NULL,NULL),(103,'HU','Hungary',NULL,NULL),(104,'IS','Iceland',NULL,NULL),(105,'IN','India',NULL,NULL),(106,'ID','Indonesia',NULL,NULL),(107,'IR','Iran',NULL,NULL),(108,'IQ','Iraq',NULL,NULL),(109,'IE','Ireland',NULL,NULL),(110,'IM','Isle of Man',NULL,NULL),(111,'IL','Israel',NULL,NULL),(112,'IT','Italy',NULL,NULL),(113,'JM','Jamaica',NULL,NULL),(114,'JP','Japan',NULL,NULL),(115,'JE','Jersey',NULL,NULL),(116,'JT','Johnston Island',NULL,NULL),(117,'JO','Jordan',NULL,NULL),(118,'KZ','Kazakhstan',NULL,NULL),(119,'KE','Kenya',NULL,NULL),(120,'KI','Kiribati',NULL,NULL),(121,'KW','Kuwait',NULL,NULL),(122,'KG','Kyrgyzstan',NULL,NULL),(123,'LA','Laos',NULL,NULL),(124,'LV','Latvia',NULL,NULL),(125,'LB','Lebanon',NULL,NULL),(126,'LS','Lesotho',NULL,NULL),(127,'LR','Liberia',NULL,NULL),(128,'LY','Libya',NULL,NULL),(129,'LI','Liechtenstein',NULL,NULL),(130,'LT','Lithuania',NULL,NULL),(131,'LU','Luxembourg',NULL,NULL),(132,'MO','Macau SAR China',NULL,NULL),(133,'MK','Macedonia',NULL,NULL),(134,'MG','Madagascar',NULL,NULL),(135,'MW','Malawi',NULL,NULL),(136,'MY','Malaysia',NULL,NULL),(137,'MV','Maldives',NULL,NULL),(138,'ML','Mali',NULL,NULL),(139,'MT','Malta',NULL,NULL),(140,'MH','Marshall Islands',NULL,NULL),(141,'MQ','Martinique',NULL,NULL),(142,'MR','Mauritania',NULL,NULL),(143,'MU','Mauritius',NULL,NULL),(144,'YT','Mayotte',NULL,NULL),(145,'FX','Metropolitan France',NULL,NULL),(146,'MX','Mexico',NULL,NULL),(147,'FM','Micronesia',NULL,NULL),(148,'MI','Midway Islands',NULL,NULL),(149,'MD','Moldova',NULL,NULL),(150,'MC','Monaco',NULL,NULL),(151,'MN','Mongolia',NULL,NULL),(152,'ME','Montenegro',NULL,NULL),(153,'MS','Montserrat',NULL,NULL),(154,'MA','Morocco',NULL,NULL),(155,'MZ','Mozambique',NULL,NULL),(156,'MM','Myanmar [Burma]',NULL,NULL),(157,'NA','Namibia',NULL,NULL),(158,'NR','Nauru',NULL,NULL),(159,'NP','Nepal',NULL,NULL),(160,'NL','Netherlands',NULL,NULL),(161,'AN','Netherlands Antilles',NULL,NULL),(162,'NT','Neutral Zone',NULL,NULL),(163,'NC','New Caledonia',NULL,NULL),(164,'NZ','New Zealand',NULL,NULL),(165,'NI','Nicaragua',NULL,NULL),(166,'NE','Niger',NULL,NULL),(167,'NG','Nigeria',NULL,NULL),(168,'NU','Niue',NULL,NULL),(169,'NF','Norfolk Island',NULL,NULL),(170,'KP','North Korea',NULL,NULL),(171,'VD','North Vietnam',NULL,NULL),(172,'MP','Northern Mariana Islands',NULL,NULL),(173,'NO','Norway',NULL,NULL),(174,'OM','Oman',NULL,NULL),(175,'PC','Pacific Islands Trust Territory',NULL,NULL),(176,'PK','Pakistan',NULL,NULL),(177,'PW','Palau',NULL,NULL),(178,'PS','Palestinian Territories',NULL,NULL),(179,'PA','Panama',NULL,NULL),(180,'PZ','Panama Canal Zone',NULL,NULL),(181,'PG','Papua New Guinea',NULL,NULL),(182,'PY','Paraguay',NULL,NULL),(183,'YD','People\'s Democratic Republic of Yemen',NULL,NULL),(184,'PE','Peru',NULL,NULL),(185,'PH','Philippines',NULL,NULL),(186,'PN','Pitcairn Islands',NULL,NULL),(187,'PL','Poland',NULL,NULL),(188,'PT','Portugal',NULL,NULL),(189,'PR','Puerto Rico',NULL,NULL),(190,'QA','Qatar',NULL,NULL),(191,'RO','Romania',NULL,NULL),(192,'RU','Russia',NULL,NULL),(193,'RW','Rwanda',NULL,NULL),(194,'RE','Réunion',NULL,NULL),(195,'BL','Saint Barthélemy',NULL,NULL),(196,'SH','Saint Helena',NULL,NULL),(197,'KN','Saint Kitts and Nevis',NULL,NULL),(198,'LC','Saint Lucia',NULL,NULL),(199,'MF','Saint Martin',NULL,NULL),(200,'PM','Saint Pierre and Miquelon',NULL,NULL),(201,'VC','Saint Vincent and the Grenadines',NULL,NULL),(202,'WS','Samoa',NULL,NULL),(203,'SM','San Marino',NULL,NULL),(204,'SA','Saudi Arabia',NULL,NULL),(205,'SN','Senegal',NULL,NULL),(206,'RS','Serbia',NULL,NULL),(207,'CS','Serbia and Montenegro',NULL,NULL),(208,'SC','Seychelles',NULL,NULL),(209,'SL','Sierra Leone',NULL,NULL),(210,'SG','Singapore',NULL,NULL),(211,'SK','Slovakia',NULL,NULL),(212,'SI','Slovenia',NULL,NULL),(213,'SB','Solomon Islands',NULL,NULL),(214,'SO','Somalia',NULL,NULL),(215,'ZA','South Africa',NULL,NULL),(216,'GS','South Georgia and the South Sandwich Islands',NULL,NULL),(217,'KR','South Korea',NULL,NULL),(218,'ES','Spain',NULL,NULL),(219,'LK','Sri Lanka',NULL,NULL),(220,'SD','Sudan',NULL,NULL),(221,'SR','Suriname',NULL,NULL),(222,'SJ','Svalbard and Jan Mayen',NULL,NULL),(223,'SZ','Swaziland',NULL,NULL),(224,'SE','Sweden',NULL,NULL),(225,'CH','Switzerland',NULL,NULL),(226,'SY','Syria',NULL,NULL),(227,'ST','São Tomé and Príncipe',NULL,NULL),(228,'TW','Taiwan',NULL,NULL),(229,'TJ','Tajikistan',NULL,NULL),(230,'TZ','Tanzania',NULL,NULL),(231,'TH','Thailand',NULL,NULL),(232,'TL','Timor-Leste',NULL,NULL),(233,'TG','Togo',NULL,NULL),(234,'TK','Tokelau',NULL,NULL),(235,'TO','Tonga',NULL,NULL),(236,'TT','Trinidad and Tobago',NULL,NULL),(237,'TN','Tunisia',NULL,NULL),(238,'TR','Turkey',NULL,NULL),(239,'TM','Turkmenistan',NULL,NULL),(240,'TC','Turks and Caicos Islands',NULL,NULL),(241,'TV','Tuvalu',NULL,NULL),(242,'UM','U.S. Minor Outlying Islands',NULL,NULL),(243,'PU','U.S. Miscellaneous Pacific Islands',NULL,NULL),(244,'VI','U.S. Virgin Islands',NULL,NULL),(245,'UG','Uganda',NULL,NULL),(246,'UA','Ukraine',NULL,NULL),(247,'SU','Union of Soviet Socialist Republics',NULL,NULL),(248,'AE','United Arab Emirates',NULL,NULL),(249,'GB','United Kingdom',NULL,NULL),(250,'US','United States',NULL,NULL),(251,'ZZ','Unknown or Invalid Region',NULL,NULL),(252,'UY','Uruguay',NULL,NULL),(253,'UZ','Uzbekistan',NULL,NULL),(254,'VU','Vanuatu',NULL,NULL),(255,'VA','Vatican City',NULL,NULL),(256,'VE','Venezuela',NULL,NULL),(257,'VN','Vietnam',NULL,NULL),(258,'WK','Wake Island',NULL,NULL),(259,'WF','Wallis and Futuna',NULL,NULL),(260,'EH','Western Sahara',NULL,NULL),(261,'YE','Yemen',NULL,NULL),(262,'ZM','Zambia',NULL,NULL),(263,'ZW','Zimbabwe',NULL,NULL),(264,'AX','Åland Islands',NULL,NULL);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=630 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (612,'2014_10_12_000000_create_users_table',1),(613,'2014_10_12_100000_create_password_resets_table',1),(614,'2017_09_16_194930_create_countries_table',1),(615,'2017_09_18_150853_create_roles_table',1),(616,'2017_09_18_150935_create_permissions_table',1),(617,'2017_09_18_151107_create_role_user_table',1),(618,'2017_09_18_151214_create_permission_user_table',1),(619,'2017_09_18_151256_create_permission_role_table',1),(620,'2017_09_21_195615_create_cities_table',1),(621,'2018_03_28_225655_create_messages_table',1),(622,'2018_03_31_042138_create_categories_table',1),(623,'2018_03_31_063643_create_tags_table',1),(624,'2018_03_31_064430_create_posts_table',1),(625,'2018_04_03_023744_create_settings_table',1),(626,'2018_04_03_083457_create_sliders_table',1),(627,'2018_04_03_094220_create_abouts_table',1),(628,'2018_10_02_094527_create_videos_table',2),(629,'2018_10_03_194704_create_contacts_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_user` (
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_user`
--

LOCK TABLES `permission_user` WRITE;
/*!40000 ALTER TABLE `permission_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'App\\Http\\Controllers\\DashboardController@getDashboard',NULL,NULL),(2,'App\\Http\\Controllers\\UsersController@getAllUser',NULL,NULL),(3,'App\\Http\\Controllers\\UsersController@getBlockUser',NULL,NULL),(4,'App\\Http\\Controllers\\UsersController@getBlockUsers',NULL,NULL),(5,'App\\Http\\Controllers\\UsersController@getSubscriber',NULL,NULL),(6,'App\\Http\\Controllers\\UsersController@getUserCreate',NULL,NULL),(7,'App\\Http\\Controllers\\UsersController@roleToPremissions',NULL,NULL),(8,'App\\Http\\Controllers\\MyProfile@getEditProfile',NULL,NULL),(9,'App\\Http\\Controllers\\MyProfile@getProfile',NULL,NULL),(10,'App\\Http\\Controllers\\MyProfile@changePassword',NULL,NULL),(11,'App\\Http\\Controllers\\PermissionController@create',NULL,NULL),(12,'App\\Http\\Controllers\\PermissionController@show',NULL,NULL),(13,'App\\Http\\Controllers\\PermissionController@edit',NULL,NULL),(14,'App\\Http\\Controllers\\RolesController@create',NULL,NULL),(15,'App\\Http\\Controllers\\RolesController@show',NULL,NULL),(16,'App\\Http\\Controllers\\RolesController@edit',NULL,NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_tag`
--

DROP TABLE IF EXISTS `post_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_tag` (
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`,`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tag`
--

LOCK TABLES `post_tag` WRITE;
/*!40000 ALTER TABLE `post_tag` DISABLE KEYS */;
INSERT INTO `post_tag` VALUES (1,1),(1,2),(1,5),(1,6),(2,1),(2,2),(2,3),(2,6),(3,1),(3,4),(3,5),(4,1),(5,1),(5,2),(5,3),(5,5),(5,29),(6,1);
/*!40000 ALTER TABLE `post_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL,
  `is_home` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,'Comilla Victorians','Comilla-Victorians','1.jpg','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.',1,'0','2018-03-04 00:00:00','2018-03-04 00:00:00'),(2,1,'Comilla Victorians1','Comilla-Victorians1','big_post.jpg','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.',1,'0','2018-03-04 00:00:00','2018-03-04 00:00:00'),(3,1,'Comilla Victorians3','Comilla-Victorians3','big_post.jpg','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.',1,'0','2018-03-04 00:00:00','2018-03-04 00:00:00'),(4,2,'Comilla Victorians4','Comilla-Victorians4','big_post.jpg','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.',1,'0','2018-03-04 00:00:00','2018-09-28 00:49:05'),(5,2,'Comilla Victorians5','Comilla-Victorians5','big_post.jpg','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.',1,'1','2018-03-04 00:00:00','2018-09-28 00:49:56'),(6,2,'Comilla Victorians6','Comilla-Victorians6','big_post.jpg','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.',1,'1','2018-03-04 00:00:00','2018-04-18 22:27:06');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'dev',NULL,NULL),(2,'superadmin',NULL,NULL),(3,'admin',NULL,NULL),(4,'user',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `website_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_description` text COLLATE utf8mb4_unicode_ci,
  `website_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'রিয়াজ সাহেবের আড্ডাখানা ','Abodu Halim Reiaz','logo.png','Abdul Halim Reiaz web Devoloper (reiazbubt@gmail.com)','laravel, php, html5, css3,java,wordpress','https://www.facebook.com/infreiaz','https://www.facebook.com/infreiaz','https://www.facebook.com/infreiaz','https://www.facebook.com/infreiaz','https://www.facebook.com/infreiaz','https://www.facebook.com/infreiaz','https://www.facebook.com/infreiaz',NULL,NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (1,'Comilla Victorians','1.jpg','2018-03-04 00:00:00','2018-03-04 00:00:00'),(2,'Comilla Victorians2','1.jpg','2018-03-04 00:00:00','2018-03-04 00:00:00'),(3,'Comilla Victorians3','1.jpg','2018-03-04 00:00:00','2018-03-04 00:00:00'),(4,'Comilla Victorians4','1.jpg','2018-03-04 00:00:00','2018-03-04 00:00:00'),(5,'Comilla Victorians5','1.jpg','2018-03-04 00:00:00','2018-03-04 00:00:00'),(6,'Comilla Victorians6','1.jpg','2018-03-04 00:00:00','2018-03-04 00:00:00');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'প্রোগ্রামিং','programming',NULL,NULL),(2,' সি প্রোগ্রামিং ','c-programming',NULL,NULL),(3,'অ্যালগরিদম','algorithm',NULL,NULL),(4,'ওয়েব ডেভলপমেন্ট','web-development',NULL,NULL),(5,'লারাভেল','laravel',NULL,NULL),(6,'পিএইচপি','php',NULL,NULL),(7,'ওয়ার্ডপ্রেস','wordpress',NULL,NULL),(8,'ওয়েব ডিজাইন','web-design',NULL,NULL),(9,'এইচটিএমএল','html',NULL,NULL),(10,'সিএসএস','css',NULL,NULL),(11,'বুটস্ট্রাপ','bootstrap',NULL,NULL),(12,'জাভাস্ক্রিপ্ট','javascript',NULL,NULL),(13,'Vue JS','Vue-JS',NULL,NULL),(14,'Underscore JS','Underscore-js',NULL,NULL),(15,'Angular JS','angular-JS',NULL,NULL),(16,'React JS','react-js',NULL,NULL),(17,'পাইথন','python',NULL,NULL),(18,'জাবা','java',NULL,NULL),(19,'গ্রাফিক্স','graphics',NULL,NULL),(20,'স্ট্যাটিক গ্রাফিক্স','statistics-graphics',NULL,NULL),(21,'ফটোশপ','photoshop',NULL,NULL),(22,'ইলাস্ট্রেটর','illustrator',NULL,NULL),(23,'মোশন গ্রাফিক্স','motion-graphics',NULL,NULL),(24,'এডোবি প্রিমিয়ার প্রো','adobe-premiere-pro',NULL,NULL),(25,'এডোবি আফটার ইফেক্ট','adobe-after-effects',NULL,NULL),(26,'ডাটাবেজ','database',NULL,NULL),(27,'MySql','MySql',NULL,NULL),(28,'Orachol','Orachol',NULL,NULL),(29,'শখ','hobby',NULL,NULL),(30,'একুরিয়ামে মাছ পালন','aquarium-fish',NULL,NULL),(31,'বাগান করা ','gardening',NULL,NULL),(32,'পাখি পালন','Keeping-the-birds',NULL,NULL),(33,'কবুতর পালন','Keeping-the-kabutara',NULL,NULL),(34,'মাছ শিকার','fish-hunting',NULL,NULL),(35,'বই  ','book',NULL,NULL),(36,'ভ্রমণ ','Traveling',NULL,NULL),(37,'সাইন্স ফিকশন ','science-fiction',NULL,NULL);
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parmanent_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_me` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_contact_unique` (`contact`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Abdul Halim ','Reiaz','ahreiaz','reiazbubt@gmail.com','$2y$10$K.2cNCpcb3qDy/y3RxEsE.HOwg67eTonUXQikSb28aMSYDX9xnO2G','1','10','1','1206','male ','Mirpur - 14','Dhaka.',NULL,'/public/admin/images/me.jpg','01831004996','1',NULL,NULL,NULL),(2,'Super','Admin','superadmin','superadmin@app.com','$2y$10$M9aRoMQDR7FHN/4ZIfa2hOe54lEq9haFAFfysyvtMwdTDKB1.u60G','2','10','1','1206','male ','Mirpur - 14','Dhaka.',NULL,'/public/admin/images/me.jpg','01831004997','1','WEmk6y5DfMtUKwhSAHow9xcXxKqavO0CYuoI1ayFaLtL4aMbJdoO7gZmvNc4',NULL,NULL),(3,' ','Admin','admin','admin@app.com','$2y$10$a7Tr5UdrKk.nSOl.8j13ueNF5f5l4o5D1./rd4Ef2zflL7GZ8K7bu','3','10','1','1206','male ','Mirpur - 14','Dhaka.',NULL,'/public/admin/images/me.jpg','01831004998','1',NULL,NULL,NULL),(4,' ','User','user','user@app.com','$2y$10$H5uu/mGoKex3KDVdfm2Z3.nnG5MHr.lcfd19H7N4HEf/QbcqjaYYi','3','10','1','1206','male ','Mirpur - 14','Dhaka.',NULL,'/public/admin/images/me.jpg','01831004999','1',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'হয়তো তোমারি জন্য...','https://www.youtube.com/embed/YwCLDAC1aEw','2018-10-03 00:00:00','2018-10-02 11:20:56');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-03 20:43:24
