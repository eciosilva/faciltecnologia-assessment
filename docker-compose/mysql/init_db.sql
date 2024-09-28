-- MySQL dump 10.13  Distrib 8.0.26, for macos11 (x86_64)
--
-- Host: localhost    Database: facil_tecnologia_assessment
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_banco`
--

DROP TABLE IF EXISTS `tb_banco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_banco` (
  `codigo` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_banco`
--

LOCK TABLES `tb_banco` WRITE;
/*!40000 ALTER TABLE `tb_banco` DISABLE KEYS */;
INSERT INTO `tb_banco` VALUES (1, 'BB');
INSERT INTO `tb_banco` VALUES (2, 'BRB');
INSERT INTO `tb_banco` VALUES (3, 'ITAÚ');
INSERT INTO `tb_banco` VALUES (4, 'SANTANDER');
/*!40000 ALTER TABLE `tb_banco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_convenio`
--

DROP TABLE IF EXISTS `tb_convenio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_convenio` (
  `codigo` INT NOT NULL AUTO_INCREMENT,
  `convenio` VARCHAR(255) NOT NULL,
  `verba` DECIMAL(10,2) NOT NULL,
  `banco` INT NOT NULL,
  PRIMARY KEY (`codigo`),
  CONSTRAINT `convenio_banco_fk` FOREIGN KEY (`banco`) REFERENCES `tb_banco` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_convenio`
--

LOCK TABLES `tb_convenio` WRITE;
/*!40000 ALTER TABLE `tb_convenio` DISABLE KEYS */;
INSERT INTO `tb_convenio` VALUES (1, 'CLARO CO', 1000.05, 1);
INSERT INTO `tb_convenio` VALUES (2, 'NET', 3500.00, 1);
INSERT INTO `tb_convenio` VALUES (3, 'CAESB', 5000.00, 2);
INSERT INTO `tb_convenio` VALUES (4, 'ENEL', 15000.00, 3);
/*!40000 ALTER TABLE `tb_convenio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_convenio_servico`
--

DROP TABLE IF EXISTS `tb_convenio_servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_convenio_servico` (
  `codigo` INT NOT NULL AUTO_INCREMENT,
  `convenio` INT NOT NULL,
  `servico` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`codigo`),
  CONSTRAINT `convenio_servico_convenio_fk` FOREIGN KEY (`convenio`) REFERENCES `tb_convenio` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_convenio_servico`
--

LOCK TABLES `tb_convenio_servico` WRITE;
/*!40000 ALTER TABLE `tb_convenio_servico` DISABLE KEYS */;
INSERT INTO `tb_convenio_servico` VALUES (1, 1, 'INTERNET BANDA LARGA');
INSERT INTO `tb_convenio_servico` VALUES (2, 1, 'TELEFONIA MÓVEL');
INSERT INTO `tb_convenio_servico` VALUES (3, 2, 'TV A CABO');
INSERT INTO `tb_convenio_servico` VALUES (4, 3, 'FORNECIMENTO DE ÁGUA/ESGOTO');
INSERT INTO `tb_convenio_servico` VALUES (5, 4, 'FORNECIMENTO DE ENERGIA ELÉTRICA');
/*!40000 ALTER TABLE `tb_convenio_servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_contrato`
--

DROP TABLE IF EXISTS `tb_contrato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_contrato` (
  `codigo` INT NOT NULL AUTO_INCREMENT,
  `prazo` INT NOT NULL,
  `valor` DECIMAL(10,2) NOT NULL,
  `data_inclusao` DATETIME NOT NULL,
  `convenio_servico` INT NOT NULL,
  PRIMARY KEY (`codigo`),
  CONSTRAINT `contrato_convenio_servico_fk` FOREIGN KEY (`convenio_servico`) REFERENCES `tb_convenio_servico` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_contrato`
--

LOCK TABLES `tb_contrato` WRITE;
/*!40000 ALTER TABLE `tb_contrato` DISABLE KEYS */;
INSERT INTO `tb_contrato` VALUES (1,  10, 100.0,  '2024-09-28 00:00:00', 1);
INSERT INTO `tb_contrato` VALUES (2,  20, 450.0,  '2024-09-27 00:00:00', 1);
INSERT INTO `tb_contrato` VALUES (3,  30, 620.0,  '2024-09-26 00:00:00', 2);
INSERT INTO `tb_contrato` VALUES (4,  10, 1000.0, '2024-09-25 00:00:00', 3);
INSERT INTO `tb_contrato` VALUES (5,  20, 480.0,  '2024-09-24 00:00:00', 4);
INSERT INTO `tb_contrato` VALUES (6,  30, 50.0,   '2024-09-23 00:00:00', 5);
INSERT INTO `tb_contrato` VALUES (7,  30, 900.0,  '2024-09-22 00:00:00', 5);
INSERT INTO `tb_contrato` VALUES (8,  10, 190.0,  '2024-09-21 00:00:00', 4);
INSERT INTO `tb_contrato` VALUES (9,  20, 220.0,  '2024-09-20 00:00:00', 3);
INSERT INTO `tb_contrato` VALUES (10, 30, 800.0,  '2024-09-19 00:00:00', 2);
/*!40000 ALTER TABLE `tb_contrato` ENABLE KEYS */;
UNLOCK TABLES;

-- 


/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-28 01:40:24
