-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: localhost    Database: ccntransporte
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `ccn_comments`
--

DROP TABLE IF EXISTS `ccn_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ccn_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `client` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ccn_comments`
--

LOCK TABLES `ccn_comments` WRITE;
/*!40000 ALTER TABLE `ccn_comments` DISABLE KEYS */;
INSERT INTO `ccn_comments` VALUES (1,3,'Augusto','Foi bem massinha.','2015-07-28 14:31:36'),(2,3,'JoÃ£o','Mensagem legal sobre a empresa','2015-07-28 14:34:37'),(3,3,'Agatha','Bem atendida e pans','2015-07-28 14:36:17');
/*!40000 ALTER TABLE `ccn_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ccn_news`
--

DROP TABLE IF EXISTS `ccn_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ccn_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ccn_news`
--

LOCK TABLES `ccn_news` WRITE;
/*!40000 ALTER TABLE `ccn_news` DISABLE KEYS */;
INSERT INTO `ccn_news` VALUES (1,3,'Noticias Teste','Tnoiisdaasd','2015-07-28 13:26:20'),(2,3,'Noticias teste 2','Algum texto aÃ­','2015-07-28 13:36:16'),(3,3,'Testando ','Outra aÃ­','2015-07-28 14:08:38'),(4,3,'SÃ³ outra','Para fechar as 4 notÃ­cias','2015-07-28 14:10:25'),(5,3,'Nova noty','Sei lÃ¡ essa parada','2015-07-28 14:35:54');
/*!40000 ALTER TABLE `ccn_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ccn_users`
--

DROP TABLE IF EXISTS `ccn_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ccn_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ccn_users`
--

LOCK TABLES `ccn_users` WRITE;
/*!40000 ALTER TABLE `ccn_users` DISABLE KEYS */;
INSERT INTO `ccn_users` VALUES (2,'angreh@hotmail.com','123','2015-07-27 21:09:10'),(3,'angreh@gmail.com','202cb962ac59075b964b07152d234b70','2015-07-28 12:13:28'),(4,'contato@homebrasil.com','202cb962ac59075b964b07152d234b70','2015-07-28 14:37:07');
/*!40000 ALTER TABLE `ccn_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-28 17:11:46
