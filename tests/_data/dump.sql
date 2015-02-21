-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: homestead
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_11_26_131626_create_years_table',1),('2014_11_26_131830_create_sponsors_table',1),('2014_11_28_004717_create_sponsor_year_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sponsor_year`
--

DROP TABLE IF EXISTS `sponsor_year`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sponsor_year` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sponsor_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=281 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sponsor_year`
--

LOCK TABLES `sponsor_year` WRITE;
/*!40000 ALTER TABLE `sponsor_year` DISABLE KEYS */;
INSERT INTO `sponsor_year` VALUES (1,1,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,2,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,3,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,4,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,5,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,5,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,6,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,6,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,7,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,8,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(11,8,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(12,9,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(13,9,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(14,10,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(15,10,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(16,11,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(17,11,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(18,12,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(19,12,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(20,13,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(21,14,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(22,15,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(23,16,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(24,17,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(25,18,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(26,19,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(27,20,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(28,21,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(29,22,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(30,23,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(31,24,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(32,25,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(33,26,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(34,26,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(35,27,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(36,27,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(37,28,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(38,29,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(39,29,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(40,30,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(41,30,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(42,31,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(43,31,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(44,32,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(45,32,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(46,33,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(47,33,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(48,34,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(49,35,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(50,36,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(51,37,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(52,38,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(53,39,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(54,40,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(55,41,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(56,42,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(57,43,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(58,44,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(59,45,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(60,46,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(61,47,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(62,47,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(63,48,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(64,48,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(65,49,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(66,50,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(67,50,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(68,51,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(69,51,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(70,52,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(71,52,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(72,53,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(73,53,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(74,54,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(75,54,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(76,55,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(77,56,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(78,57,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(79,58,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(80,59,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(81,60,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(82,61,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(83,62,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(84,63,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(85,64,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(86,65,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(87,66,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(88,67,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(89,68,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(90,68,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(91,69,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(92,69,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(93,70,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(94,71,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(95,71,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(96,72,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(97,72,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(98,73,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(99,73,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(100,74,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(101,74,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(102,75,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(103,75,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(104,76,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(105,77,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(106,78,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(107,79,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(108,80,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(109,81,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(110,82,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(111,83,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(112,84,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(113,85,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(114,86,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(115,87,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(116,88,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(117,89,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(118,89,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(119,90,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(120,90,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(121,91,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(122,92,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(123,92,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(124,93,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(125,93,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(126,94,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(127,94,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(128,95,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(129,95,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(130,96,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(131,96,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(132,97,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(133,98,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(134,99,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(135,100,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(136,101,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(137,102,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(138,103,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(139,104,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(140,105,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(141,106,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(142,107,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(143,108,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(144,109,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(145,110,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(146,110,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(147,111,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(148,111,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(149,112,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(150,113,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(151,113,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(152,114,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(153,114,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(154,115,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(155,115,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(156,116,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(157,116,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(158,117,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(159,117,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(160,118,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(161,119,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(162,120,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(163,121,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(164,122,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(165,123,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(166,124,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(167,125,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(168,126,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(169,127,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(170,128,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(171,129,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(172,130,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(173,131,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(174,131,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(175,132,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(176,132,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(177,133,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(178,134,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(179,134,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(180,135,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(181,135,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(182,136,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(183,136,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(184,137,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(185,137,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(186,138,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(187,138,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(188,139,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(189,140,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(190,141,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(191,142,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(192,143,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(193,144,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(194,145,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(195,146,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(196,147,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(197,148,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(198,149,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(199,150,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(200,151,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(201,152,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(202,152,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(203,153,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(204,153,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(205,154,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(206,155,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(207,155,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(208,156,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(209,156,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(210,157,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(211,157,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(212,158,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(213,158,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(214,159,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(215,159,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(216,160,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(217,161,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(218,162,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(219,163,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(220,164,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(221,165,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(222,166,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(223,167,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(224,168,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(225,169,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(226,170,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(227,171,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(228,172,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(229,173,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(230,173,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(231,174,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(232,174,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(233,175,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(234,176,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(235,176,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(236,177,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(237,177,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(238,178,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(239,178,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(240,179,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(241,179,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(242,180,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(243,180,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(244,181,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(245,182,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(246,183,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(247,184,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(248,185,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(249,186,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(250,187,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(251,188,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(252,189,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(253,190,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(254,191,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(255,192,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(256,193,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(257,194,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(258,194,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(259,195,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(260,195,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(261,196,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(262,197,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(263,197,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(264,198,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(265,198,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(266,199,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(267,199,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(268,200,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(269,200,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(270,201,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(271,201,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(272,202,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(273,203,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(274,204,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(275,205,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(276,206,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(277,207,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(278,208,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(279,209,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(280,210,2,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `sponsor_year` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sponsors`
--

DROP TABLE IF EXISTS `sponsors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sponsors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `current` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=211 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sponsors`
--

LOCK TABLES `sponsors` WRITE;
/*!40000 ALTER TABLE `sponsors` DISABLE KEYS */;
INSERT INTO `sponsors` VALUES (190,'Vaco','http://www.vaco.com/','images/vacologo.jpg','Vaco','0','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(191,'EmergeMemphis','http://emergememphis.org/','images/EmergeMemphis-Logo.png','Emerge Memphis','0','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(192,'Lunaweb','http://www.lunaweb.com/','images/lunaweb-logo.jpg','Lunaweb','0','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(193,'Rackspace','http://www.rackspace.com/','images/Rackspace_Cloud_Company_Logo_clr.png','Rackspace','0','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(194,'Github','http://www.Github.com/','images/GitHub_Logo.png','Github','1','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(195,'GeekBlogTV','http://www.youtube.com/user/GeekBlogTV','images/geekblogtv-logo.png','GeekBlogTV','1','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(196,'JetBrains','http://www.jetbrains.com/','images/JetBrains-logo.png','JetBrains','0','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(197,'erf design','http://www.erfdesign.com/','images/erf-design-logo.jpg','erf design','1','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(198,'Modern Services','http://www.modernservicesinc.com/','images/modernservices.png','Modern Services','1','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(199,'RocketFuel','http://www.gorocketfuel.com/','images/rocketfuel-logo.png','RocketFuel','1','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(200,'O\'Reilly Media','http://oreilly.com/','images/oreilly-logo-460x84.gif','O\'Reilly Media','1','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(201,'MidsouthMakers','http://www.midsouthmakers.org/','images/stackedlarge-460x435.png','Memphis Area Makerspace','1','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(202,'foxycart!','http://www.foxycart.com/','images/foxycart.png','FoxyCart: A Shopping Cart Platform for Custom Ecommerce','1','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(203,'University of Memphis EECE','https://www.memphis.edu/eece/','images/uofmeece.png','The University of Memphis Department of Electrical and Computer Engineering','1','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(204,'Cowork Memphis','http://coworkmemphis.com/','images/coworkmemphis.png','Cowork Memphis is a collaborative coworking space.','1','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(205,'Survey Analytics','http://www.surveyanalytics.com/','images/surveyanalytics.jpg','enterprise grade research platform that provides companies with powerful tools','1','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(206,'Crews Center for Entrepreneurship','http://memphis.edu/crews','images/crews-center-logo.jpg','Hub of entrepreneurship at the University of Memphis','1','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(207,'FedEx Institute of Technology','http://www.memphis.edu/fedex','images/fit-logo.png','The FedEx Institute serves as a gateway to introduce business leaders to the university\'s research capabilities, thereby building value-added relationships with our corporate partners.','1','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(208,'Peatix','http://peatix.com','images/peatix-logo.png','Create sleek event pages in minutes!','1','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(209,'SparkFun','http://SparkFun.com','images/sparkfun-logo.png','SparkFun is an online retail store that sells the bits and pieces to make your electronics projects possible','1','','2014-11-29 18:16:24','2014-11-29 18:16:24'),(210,'Hacker Stickers','http://hackerstickers.com/','images/hs-logo-hr.png','Hacker Stickers for Security Geeks & Gamers T-Shirts Energy Candy and Hardware','1','','2014-11-29 18:16:24','2014-11-29 18:16:24');
/*!40000 ALTER TABLE `sponsors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `years`
--

DROP TABLE IF EXISTS `years`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `years` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `sponsor_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `years`
--

LOCK TABLES `years` WRITE;
/*!40000 ALTER TABLE `years` DISABLE KEYS */;
INSERT INTO `years` VALUES (1,2013,'','2014-11-29 18:16:23','2014-11-29 18:16:23'),(2,2014,'','2014-11-29 18:16:23','2014-11-29 18:16:23'),(3,2015,'','2014-11-29 18:16:23','2014-11-29 18:16:23'),(4,2016,'','2014-11-29 18:16:23','2014-11-29 18:16:23'),(5,2017,'','2014-11-29 18:16:23','2014-11-29 18:16:23'),(6,2018,'','2014-11-29 18:16:23','2014-11-29 18:16:23'),(7,2019,'','2014-11-29 18:16:23','2014-11-29 18:16:23'),(8,2020,'','2014-11-29 18:16:23','2014-11-29 18:16:23');
/*!40000 ALTER TABLE `years` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-29 18:17:08