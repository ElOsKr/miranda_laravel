-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: miranda_laravel
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookings` (
  `booking_id` varchar(120) NOT NULL,
  `booking_photo` varchar(2000) NOT NULL,
  `booking_guest` varchar(120) NOT NULL,
  `booking_orderDate` datetime NOT NULL,
  `booking_checkin` datetime NOT NULL,
  `booking_checkout` datetime NOT NULL,
  `room_id` varchar(120) NOT NULL,
  `booking_price` int(11) NOT NULL,
  `booking_amenities` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`booking_amenities`)),
  `booking_description` varchar(120) NOT NULL,
  `booking_specialRequest` varchar(220) DEFAULT NULL,
  `booking_status` varchar(120) NOT NULL,
  PRIMARY KEY (`booking_id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES ('00143157-88b9-4a53-8f34-e96e92add0b1','https://www.riazorhotel.com/wp-content/blogs.dir/1623/files/home/HOME_SLIDER_1-1.jpg','Marcia Lehner','2023-01-06 04:51:05','2023-01-13 07:17:52','2023-01-27 06:22:01','dffea801-ba91-43a3-8ec3-36e68bfd11fb',458,'[\"local\",\"cohesive\"]','Triple-buffered static approach','Open-source','checkOut'),('2344ea7f-b119-40c1-a0c3-6e741040e53d','https://www.riazorhotel.com/wp-content/blogs.dir/1623/files/home/HOME_SLIDER_1-1.jpg','Leslie Ritchie','2023-01-04 15:18:38','2023-01-17 12:46:33','2023-01-27 18:26:08','49028da7-4888-4b7f-9c59-f0e83aede248',383,'[\"methodical\",\"even-keeled\"]','Operative encompassing instruction set','Optional','checkIn'),('7012caf6-a195-446b-86c9-fd74ae1ca499','https://www.riazorhotel.com/wp-content/blogs.dir/1623/files/home/HOME_SLIDER_1-1.jpg','Sheila Marvin','2023-01-03 13:19:53','2023-01-18 11:46:11','2023-01-23 18:19:00','5f3303d6-939c-4592-a1ae-f4b838b6eccb',380,'[\"hybrid\",\"discrete\"]','Assimilated interactive focus group','Synergistic','checkOut'),('873e8a3f-548b-48df-83d1-1ed1be5f4529','https://www.riazorhotel.com/wp-content/blogs.dir/1623/files/home/HOME_SLIDER_1-1.jpg','Lana Ryan','2023-01-10 14:56:38','2023-01-14 04:35:07','2023-01-26 12:34:09','e3ba80c7-5268-4ef2-890f-de01036d6be2',104,'[\"object-oriented\",\"high-level\"]','Expanded analyzing website','Ergonomic','checkOut'),('885334f7-2265-4434-b539-f8b0317f73a1','https://www.riazorhotel.com/wp-content/blogs.dir/1623/files/home/HOME_SLIDER_1-1.jpg','Jeremy Dach','2023-01-01 08:08:57','2023-01-13 17:00:05','2023-01-26 11:01:19','ec6ac12b-aaf7-4be0-a0e1-b46903ee68d8',415,'[\"system-worthy\",\"zero tolerance\"]','Reactive content-based standardization','Multi-tiered','inProgress'),('93ba76b2-2626-43b6-a960-6c9717d85074','https://www.riazorhotel.com/wp-content/blogs.dir/1623/files/home/HOME_SLIDER_1-1.jpg','Christian Swaniawski','2023-01-05 12:32:28','2023-01-15 09:13:31','2023-01-25 08:54:56','0230b602-5490-45ee-82b4-3a149922267a',346,'[\"next generation\",\"global\"]','Decentralized zero defect success','Business-focused','checkOut'),('9b1f7440-6b3e-48a0-b456-0192a86fb745','https://www.riazorhotel.com/wp-content/blogs.dir/1623/files/home/HOME_SLIDER_1-1.jpg','Caroline Franecki','2023-01-03 07:07:00','2023-01-16 18:38:55','2023-01-25 01:28:56','5e9e5b67-c2cb-4d54-9415-802662f1d268',359,'[\"contextually-based\",\"24/7\"]','Future-proofed interactive workforce','Synergized','checkIn'),('ae27bc2e-d177-49d0-b28c-320dc059fa9b','https://www.riazorhotel.com/wp-content/blogs.dir/1623/files/home/HOME_SLIDER_1-1.jpg','Loretta Hilpert','2023-01-06 04:56:10','2023-01-18 14:33:10','2023-01-25 16:32:22','c0570be5-a9cc-4f4a-bbdf-f5edaa6e1112',291,'[\"human-resource\",\"mission-critical\"]','Organic grid-enabled methodology','Business-focused','inProgress'),('d17793d3-b246-457a-b6c8-6c7159eed230','https://www.riazorhotel.com/wp-content/blogs.dir/1623/files/home/HOME_SLIDER_1-1.jpg','Jenna Halvorson','2023-01-06 14:20:56','2023-01-19 01:20:14','2023-01-28 17:06:52','2b2ffc05-260e-4219-91ae-5433c7c52035',296,'[\"modular\",\"leading edge\"]','Persevering discrete alliance','Adaptive','checkOut'),('da11e1f6-5ba5-421f-a58c-0213c4c9e138','https://www.riazorhotel.com/wp-content/blogs.dir/1623/files/home/HOME_SLIDER_1-1.jpg','Sidney Wolff','2023-01-02 23:34:02','2023-01-18 18:15:21','2023-01-30 08:51:52','128e74df-8551-47cf-b514-7f038416ad39',158,'[\"real-time\",\"radical\"]','Reduced executive open system','Business-focused','checkIn');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `contact_id` varchar(120) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_phone` varchar(100) NOT NULL,
  `contact_subject` varchar(2000) NOT NULL,
  `contact_comment` varchar(100) NOT NULL,
  `contact_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES ('1b79a121-4f20-48eb-b74f-5125f18e3784','Micheal Jerde','Donny.Bergnaum22@example.com','674671977','reinvent synergistic convergence','mobile',1),('247defa6-c4c0-4818-a860-fb2e938e8a3c','ByOscar16','oscaromg777@gmail.com','111111111','awdawdawd','adawdawdawd',0),('28220193-f82f-4a0c-a05d-92f18e33c6b8','Christopher Kovacek V','Kaycee97@example.org','602159854','reintermediate innovative deliverables','impactful',0),('578c344e-a4b5-4fcd-ac05-29a7bcb51653','Lola Kiehn','Amiya_Connelly60@example.net','699390343','synthesize best-of-breed e-services','attitude-oriented',0),('8c29fce2-aa9d-4c56-9580-be8e61063f46','Grant Jones','Domingo.Corwin16@example.org','693139645','strategize B2C convergence','heuristic',1),('907fbfc0-26ca-4d1c-94a8-85d0336adbf1','Jamie Reinger','Jamison.Renner@example.net','684637719','deliver global initiatives','asynchronous',1),('90bf7157-a4d5-4e7c-b152-cb9db9fcb477','Oscar','eloskr16@gmail.com','606606060','a','a',0),('9bff32aa-fc2d-4db4-aa6f-71760c1cf3f4','Orlando Bins','Howard50@example.org','601695314','matrix 24/365 blockchains','stable',0),('9ed011ec-b506-4145-9f69-486f33b90388','Scott Kub','Edwina_Schmidt@example.net','622169461','reinvent world-class e-business','4th generation',1),('b571bb48-610c-4c04-a27c-2e0aa4eb900e','Prueba','oscaromg777@gmail.com','111111111','1','test',0),('c7992482-890a-482f-b18b-569df504ca3f','Seth Carter II','Abdiel.Marvin93@example.net','609302431','unleash mission-critical portals','homogeneous',1),('c85edfce-85d6-41c4-9b55-4652554f1bd9','jhon','jhon@jhon.jhon','123456789','hi','how are yyou?',0),('dcd6bce4-17c1-4710-9042-23434d8f21c8','Warren Bahringer','Harmony43@example.net','679058971','engineer end-to-end supply-chains','intangible',1),('f7910f89-0fea-4c7c-8916-df4e6b02734a','Penny Jaskolski','Clifton14@example.net','699493175','scale global paradigms','bandwidth-monitored',0);
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms` (
  `room_id` varchar(120) NOT NULL,
  `room_number` int(11) NOT NULL,
  `room_photo` varchar(2000) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `room_amenities` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`room_amenities`)),
  `room_price` int(11) NOT NULL,
  `room_offer` int(11) DEFAULT NULL,
  `room_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES ('0230b602-5490-45ee-82b4-3a149922267a',7,'https://www.hotelbecquer.com/wp-content/uploads/sites/2100/nggallery/01-home//HOME_03_HABITACIONES_SLIDER_1.jpg','double bed','[\"cleaning\",\"security\",\"shower\",\"air\",\"kitchen\",\"breakfast\"]',429,73,1),('128e74df-8551-47cf-b514-7f038416ad39',465,'https://q-xx.bstatic.com/xdata/images/hotel/max1024x768/376374041.jpg?k=33f539035e74461bd374023afc086f01c5a7849d5a3cfa6df49baa41177a2c52&o=','double bed','[\"breakfast\",\"kitchen\",\"wifi\",\"bed\",\"team\"]',388,15,1),('2b2ffc05-260e-4219-91ae-5433c7c52035',236,'https://www.hotelbecquer.com/wp-content/uploads/sites/2100/nggallery/01-home//HOME_03_HABITACIONES_SLIDER_1.jpg','duplex','[\"kitchen\",\"bed\",\"cleaning\",\"security\",\"air\"]',308,5,1),('49028da7-4888-4b7f-9c59-f0e83aede248',220,'https://q-xx.bstatic.com/xdata/images/hotel/max1024x768/376374041.jpg?k=33f539035e74461bd374023afc086f01c5a7849d5a3cfa6df49baa41177a2c52&o=','duplex','[\"grocery\",\"breakfast\",\"bed\",\"support\",\"security\",\"team\",\"towels\",\"kitchen\",\"wifi\",\"key\",\"shop\"]',489,62,1),('5e9e5b67-c2cb-4d54-9415-802662f1d268',61,'https://e00-elmundo.uecdn.es/assets/multimedia/imagenes/2022/06/15/16552986712590.jpg','double bed','[\"cleaning\",\"shower\",\"wifi\"]',121,49,0),('5f3303d6-939c-4592-a1ae-f4b838b6eccb',70,'https://q-xx.bstatic.com/xdata/images/hotel/max1024x768/376374041.jpg?k=33f539035e74461bd374023afc086f01c5a7849d5a3cfa6df49baa41177a2c52&o=','double bed','[\"support\",\"towels\",\"shower\",\"security\",\"key\",\"cleaning\",\"shop\",\"breakfast\"]',149,96,1),('c0570be5-a9cc-4f4a-bbdf-f5edaa6e1112',32,'https://www.hotelbecquer.com/wp-content/uploads/sites/2100/nggallery/01-home//HOME_03_HABITACIONES_SLIDER_1.jpg','single','[\"wifi\",\"team\",\"support\",\"breakfast\",\"cleaning\"]',115,84,0),('dffea801-ba91-43a3-8ec3-36e68bfd11fb',325,'https://e00-elmundo.uecdn.es/assets/multimedia/imagenes/2022/06/15/16552986712590.jpg','duplex','[\"wifi\",\"bed\",\"cleaning\",\"support\",\"grocery\",\"air\",\"towels\"]',225,52,0),('e3ba80c7-5268-4ef2-890f-de01036d6be2',290,'https://www.hotelbecquer.com/wp-content/uploads/sites/2100/nggallery/01-home//HOME_03_HABITACIONES_SLIDER_1.jpg','duplex','[\"shower\",\"kitchen\",\"towels\",\"wifi\",\"air\",\"grocery\",\"cleaning\"]',296,23,0),('ec6ac12b-aaf7-4be0-a0e1-b46903ee68d8',257,'https://q-xx.bstatic.com/xdata/images/hotel/max1024x768/376374041.jpg?k=33f539035e74461bd374023afc086f01c5a7849d5a3cfa6df49baa41177a2c52&o=','duplex','[\"security\",\"cleaning\",\"key\",\"grocery\",\"wifi\",\"breakfast\",\"support\"]',138,48,0);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` varchar(120) NOT NULL,
  `user_name` varchar(120) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_photo` varchar(2000) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_contact` int(11) DEFAULT NULL,
  `user_description` varchar(120) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('0001e511-9dcf-40c8-9e71-4b4e94eb6d4e','Michelle Schmeler','$2b$10$ULZ1Cpw.vQmuWkW0LLtrv.IursNOjPHbDOeoAaAYNZwGytzJgTrNS','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/947.jpg','Dylan_Rogahn50@example.net',600173996,'synergize',1),('470020aa-4c2a-4cec-9b2f-41d784c09387','Kristopher Terry','$2b$10$ULZ1Cpw.vQmuWkW0LLtrv.ykJzqsM13VZy3H2gNjRblI/YTicOuzm','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/657.jpg','Lincoln.Kessler@example.org',621573541,'implement',0),('4a3e34d2-fc50-454c-8bf3-bbafa01e33bc','Lonnie Langosh','$2b$10$ULZ1Cpw.vQmuWkW0LLtrv.96iwfLrOAmZwJQYIWQ8wx814N0sEO3y','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/0.jpg','Fletcher23@example.org',647381935,'incubate',0),('4f71a726-4ab3-4e4f-b1e5-36468c28c440','Sharon Kuhic','$2b$10$ULZ1Cpw.vQmuWkW0LLtrv.Fx7mYrIxMODhk5n4epNQ3hqcsNWxS46','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/738.jpg','Evie88@example.org',602946151,'engage',1),('6ab97cf0-8469-453d-a7fd-e6acdebe4226','Kim Cruickshank','$2b$10$ULZ1Cpw.vQmuWkW0LLtrv.WiWn4aB9h.sjy97B4R4a.n8ebkBDPY6','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/584.jpg','Ernestine.Marquardt77@example.org',657359925,'incentivize',1),('6d418aa8-3d74-414b-9eed-64e866556b9f','Winifred Simonis','$2b$10$ULZ1Cpw.vQmuWkW0LLtrv.RFWAdZmeVTMPsAOttKPZXf7f936J/3m','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/75.jpg','Jazmin.Hermiston36@example.com',604031377,'orchestrate',0),('a9482b69-07cb-4157-b93e-b58b25663706','Eva Legros DVM','$2b$10$ULZ1Cpw.vQmuWkW0LLtrv.K8.lsvP6VTALG9XWClV39VqrZZ3U/QO','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/647.jpg','Laron.Kuhn67@example.net',616651727,'benchmark',1),('b9762c13-8b41-48cf-a6f8-0de759e59f97','Sheri Kessler','$2b$10$ULZ1Cpw.vQmuWkW0LLtrv./4k42n7.I10zGv1K0NBwEUaQMq17j8i','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1065.jpg','Coby.Pagac@example.org',638088685,'reintermediate',1),('d82b2a64-294a-4617-bb97-c381ee78f74c','Josephine Wunsch','$2b$10$ULZ1Cpw.vQmuWkW0LLtrv.VMdIhTD/GoGMcaLNrmzfZ/nOX8sGh32','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1074.jpg','Mallie.Abbott@example.org',622641054,'synthesize',1),('f73f1bd8-94d3-4b62-bf20-42fd8683c1e6','Alyssa Welch','$2b$10$ULZ1Cpw.vQmuWkW0LLtrv.y7UxXzTE/BUJUAvz1bshLUmdb3fHrJO','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1186.jpg','Desiree.Jacobi@example.org',637545002,'scale',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-06  9:25:41
