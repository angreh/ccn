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
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ccn_comments`
--

LOCK TABLES `ccn_comments` WRITE;
/*!40000 ALTER TABLE `ccn_comments` DISABLE KEYS */;
INSERT INTO `ccn_comments` VALUES (1,3,'Augustor','Foi bem massinha.',0,'2015-07-28 14:31:36'),(2,3,'JoÃ£o','Mensagem legal sobre a empresa',0,'2015-07-28 14:34:37'),(3,3,'Agatha','Bem atendida e pans',0,'2015-07-28 14:36:17');
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
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ccn_news`
--

LOCK TABLES `ccn_news` WRITE;
/*!40000 ALTER TABLE `ccn_news` DISABLE KEYS */;
INSERT INTO `ccn_news` VALUES (1,3,'Noticias Teste','Tnoiisdaasd',1,'2015-07-28 13:26:20'),(2,3,'Noticias teste 2','Algum texto aÃ­',1,'2015-07-28 13:36:16'),(3,3,'Testando','Sei nao 2',1,'2015-07-28 14:08:38'),(4,3,'SÃ³ outra','Para fechar as 4 notÃ­cias',1,'2015-07-28 14:10:25'),(5,3,'Nova nota','Sei lÃ¡ essa parada',1,'2015-07-28 14:35:54'),(6,3,'massa essa parada','uashd uash dua shduahsduahsdua shdu ahsdua usdah sud hausd hausd',1,'2015-07-29 17:03:34'),(7,3,'serviÃ§os','A CCN Transportes realiza serviÃ§os de DistribuiÃ§Ã£o, Cross Docking, Logistica Reversa, Entregas Agendadas, Armazenagens, PalatizaÃ§Ã£o e Cargas LotaÃ§Ã£o.',0,'2015-07-29 19:17:32'),(8,3,'distribuiÃ§Ã£o fracionada','Especializada em DistribuiÃ§Ã£o Fracionada com foco em mercadorias com Alto Valor Agregado.',0,'2015-07-29 19:18:04'),(9,3,'identificaÃ§Ã£o de volumes','ApÃ³s a chegada de sua mercadoria em nosso terminal todos os volumes coletados sÃ£o etiquetados e identificados atravÃ©s de cÃ³digo de barras possibilitando assim uma maior qualidade, velocidade na conferencia das mercadorias.',0,'2015-07-29 19:18:22'),(10,3,'tecnologia e informaÃ§Ã£o','ApÃ³s a realizaÃ§Ã£o da entrega, ainda no Portal de InformaÃ§Ãµes o cliente tambÃ©m tem disponÃ­vel seus comprovantes de entrega digitalizados.',0,'2015-07-29 19:18:43');
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
  `deleted` tinyint(1) unsigned NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ccn_users`
--

LOCK TABLES `ccn_users` WRITE;
/*!40000 ALTER TABLE `ccn_users` DISABLE KEYS */;
INSERT INTO `ccn_users` VALUES (2,'angreh@hotmail.com','202cb962ac59075b964b07152d234b70',1,'2015-07-27 21:09:10'),(3,'angreh@gmail.com','202cb962ac59075b964b07152d234b70',1,'2015-07-28 12:13:28'),(4,'contato@homebrasil.com','202cb962ac59075b964b07152d234b70',1,'2015-07-28 14:37:07'),(5,'lidia','202cb962ac59075b964b07152d234b70',1,'2015-07-29 17:28:34'),(6,'bethy','d9b1d7db4cd6e70935368a1efb10e377',1,'2015-07-29 17:29:27'),(7,'teste','202cb962ac59075b964b07152d234b70',1,'2015-07-29 17:33:59'),(8,'outro','202cb962ac59075b964b07152d234b70',1,'2015-07-29 17:35:53'),(9,'angreh@cre8.ag','202cb962ac59075b964b07152d234b70',1,'2015-07-29 17:43:07'),(10,'candal','26442effb42e24d42f179f343c89e419',0,'2015-07-29 19:46:48');
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

-- Dump completed on 2015-07-29 16:49:41
