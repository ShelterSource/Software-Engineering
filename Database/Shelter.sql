-- MySQL dump 10.13  Distrib 5.7.21, for macos10.13 (x86_64)
--
-- Host: localhost    Database: Shelter
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `county`
--

DROP TABLE IF EXISTS `county`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `county` (
  `county_id` int(11) NOT NULL,
  `county_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `county`
--

LOCK TABLES `county` WRITE;
/*!40000 ALTER TABLE `county` DISABLE KEYS */;
INSERT INTO `county` VALUES (1,'Dekalb'),(2,'Fulton');
/*!40000 ALTER TABLE `county` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `s_type`
--

DROP TABLE IF EXISTS `s_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `s_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `s_type`
--

LOCK TABLES `s_type` WRITE;
/*!40000 ALTER TABLE `s_type` DISABLE KEYS */;
INSERT INTO `s_type` VALUES (1,'Charitable Organization'),(2,'Women-Only Shelter'),(3,'Men-Only Shelter'),(4,'Family Shelter'),(5,'Youth Shelter'),(6,'Emergency Shelter');
/*!40000 ALTER TABLE `s_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shelter`
--

DROP TABLE IF EXISTS `shelter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shelter` (
  `shelter_id` int(11) NOT NULL,
  `shelter_name` varchar(100) DEFAULT NULL,
  `shelter_address` varchar(100) DEFAULT NULL,
  `disability` varchar(45) DEFAULT NULL,
  `veteran` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`shelter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shelter`
--

LOCK TABLES `shelter` WRITE;
/*!40000 ALTER TABLE `shelter` DISABLE KEYS */;
INSERT INTO `shelter` VALUES (1,'Aldersgate Homes','4105 Briarcliff Road Ne, Atlanta, GA 30345','yes','no'),(2,'All Empowered Inc.','219 Solomon Dr. Ellenwood, GA 30294','no','no'),(3,'Atlanta City Baptist Rescue Mission','316 Peters St SW, Atlanta, GA 30313 ','no','no'),(4,'The Atlanta Day Shelter for Women and Children','655 Ethel Street NW, Atlanta, GA, 30318','no','no'),(5,'Atlanta Mission: My Sister\'s House','921 Howell Mill Road, Atlanta, GA, 30318','no','no'),(6,'Atlanta Mission: Shepherd\'s Inn','165 Ivan Allen Blvd. NW, Atlanta, Georgia 30313','no','no'),(7,'Covenant House Georgia','1559 Johnson Rd. NW, Atlanta, GA 30318','no','no'),(8,'Crossroads Community Ministries','420 Courtland St, Atlanta, GA 30308','yes','no'),(9,'Decatur Cooperative Minestry','115 Church St, Decatur, GA 30030','no','yes'),(10,'Drake House','10500 Clara Drive, Roswell, GA 30075','no','no'),(11,'Gateway','275 Pryor St. SW Atlanta, GA, 30303','no','yes'),(12,'Laquintas Place','3598 Larkspur Terrace, Decatur, GA 30032','yes','no'),(13,'Nicholas House Atlanta','830 Boulevard SE, Atlanta, GA 30312','no','no'),(14,'Peachtree-Pine Overflow Shelter','477 Peachtree Street, Atlanta, GA 30308','no','no'),(15,'Serenity House of Atlanta Ministries','600 Main St, Atlanta, GA 30058','no','no');
/*!40000 ALTER TABLE `shelter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shelter_county`
--

DROP TABLE IF EXISTS `shelter_county`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shelter_county` (
  `shelter_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_id` int(11) NOT NULL,
  PRIMARY KEY (`shelter_id`,`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shelter_county`
--

LOCK TABLES `shelter_county` WRITE;
/*!40000 ALTER TABLE `shelter_county` DISABLE KEYS */;
INSERT INTO `shelter_county` VALUES (1,1),(2,1),(3,2),(4,2),(5,2),(6,2),(7,2),(8,2),(9,1),(10,2),(11,2),(12,1),(13,2),(14,2),(15,1);
/*!40000 ALTER TABLE `shelter_county` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shelter_type`
--

DROP TABLE IF EXISTS `shelter_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shelter_type` (
  `shelter_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`shelter_id`,`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shelter_type`
--

LOCK TABLES `shelter_type` WRITE;
/*!40000 ALTER TABLE `shelter_type` DISABLE KEYS */;
INSERT INTO `shelter_type` VALUES (1,1),(2,1),(3,3),(4,2),(4,4),(5,2),(5,4),(6,1),(6,3),(7,1),(7,5),(8,4),(9,2),(9,4),(9,6),(10,2),(10,6),(11,1),(11,3),(12,6),(13,4),(14,6),(15,1),(15,6);
/*!40000 ALTER TABLE `shelter_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-05 15:52:55
