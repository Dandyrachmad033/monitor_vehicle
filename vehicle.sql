-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: ordervehicle
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `history_order`
--

DROP TABLE IF EXISTS `history_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `history_order` (
  `history_order_id` int NOT NULL AUTO_INCREMENT,
  `id_vehicle` int NOT NULL,
  `id_users` int NOT NULL,
  `order_date` datetime NOT NULL,
  PRIMARY KEY (`history_order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history_order`
--

LOCK TABLES `history_order` WRITE;
/*!40000 ALTER TABLE `history_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `history_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordering`
--

DROP TABLE IF EXISTS `ordering`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ordering` (
  `ordering_id` int NOT NULL AUTO_INCREMENT,
  `id_approval1` int NOT NULL,
  `id_vehicle` int NOT NULL,
  `order_date` date NOT NULL,
  `aprroval_status` varchar(45) DEFAULT NULL,
  `id_approval2` int DEFAULT NULL,
  `id_driver` int DEFAULT NULL,
  `status_approval1` int DEFAULT NULL,
  `status_approval2` int DEFAULT NULL,
  PRIMARY KEY (`ordering_id`),
  KEY `id_vehicle_idx` (`id_vehicle`),
  KEY `id_driver_idx` (`id_driver`),
  KEY `id_approval1_idx` (`id_approval1`),
  KEY `id_approval2_idx` (`id_approval2`),
  CONSTRAINT `id_approval1` FOREIGN KEY (`id_approval1`) REFERENCES `users` (`users_id`),
  CONSTRAINT `id_approval2` FOREIGN KEY (`id_approval2`) REFERENCES `users` (`users_id`),
  CONSTRAINT `id_driver` FOREIGN KEY (`id_driver`) REFERENCES `tb_driver` (`driver_id`),
  CONSTRAINT `id_vehicle` FOREIGN KEY (`id_vehicle`) REFERENCES `vehicle` (`vehicle_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordering`
--

LOCK TABLES `ordering` WRITE;
/*!40000 ALTER TABLE `ordering` DISABLE KEYS */;
INSERT INTO `ordering` VALUES (2,5,2,'2024-01-02','approved',4,1,1,1),(3,6,3,'2024-02-03','approved',4,3,1,1),(4,5,1,'2024-02-09','approved',4,2,1,1),(5,5,4,'2024-03-09','approved',6,4,1,1);
/*!40000 ALTER TABLE `ordering` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_approval`
--

DROP TABLE IF EXISTS `tb_approval`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_approval` (
  `approval_id` int NOT NULL AUTO_INCREMENT,
  `id_order` int NOT NULL,
  `id_approval_1` int NOT NULL,
  `aprroval_date` datetime NOT NULL,
  `note` text,
  `id_approval_2` int NOT NULL,
  PRIMARY KEY (`approval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_approval`
--

LOCK TABLES `tb_approval` WRITE;
/*!40000 ALTER TABLE `tb_approval` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_approval` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_driver`
--

DROP TABLE IF EXISTS `tb_driver`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_driver` (
  `driver_id` int NOT NULL AUTO_INCREMENT,
  `driver_name` varchar(45) NOT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `status_driver` varchar(45) NOT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_driver`
--

LOCK TABLES `tb_driver` WRITE;
/*!40000 ALTER TABLE `tb_driver` DISABLE KEYS */;
INSERT INTO `tb_driver` VALUES (1,'Rizaldy Aristyo','987654323456','ordered'),(2,'Rizal Yoga','678909876543','ordered'),(3,'Rizal Bdul','236789045678','ordered'),(4,'Upi','456789876543','ordered'),(5,'abi','56789987654','available');
/*!40000 ALTER TABLE `tb_driver` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `users_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'admin','$2y$12$ZYcoYiEQUFXdWN4sEVcLd.yg9G3BxMkpziosJPMxVQQRcCIlR7.Aa','admin'),(4,'Ahmad Irsyad','$2y$12$A13QhpB0pgyMomhn/JEzSODYbW.WhzFheTLqE.qEXFSQJHWih3Iy2','approval'),(5,'Dimas Arya','$2y$12$GMGpK8vEOO2IpDWstz/8zuw9G15bgJFbwR4BP6hsb3F3N6sCST73S','approval'),(6,'Yogi Nugraha','$2y$12$CmIBforNQuxvuHysP4PgGuUsHvfWzJ3TlQ460Fp1hRQL6dMIm491u','approval'),(7,'Naufal Samba','$2y$12$ALslUnd/vQQm2LN2/KOsFOpzKxpw9ctR9bDTaDRGgvf.qunzzcJM.','approval');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vehicle` (
  `vehicle_id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `status_order` varchar(45) NOT NULL,
  `fuel` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  PRIMARY KEY (`vehicle_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicle`
--

LOCK TABLES `vehicle` WRITE;
/*!40000 ALTER TABLE `vehicle` DISABLE KEYS */;
INSERT INTO `vehicle` VALUES (1,'pickup','ordered','Solar','kendaraan_barang'),(2,'pickup','ordered','Bensin','kendaraan_barang'),(3,'truck','ordered','Solar','kendaraan_barang'),(4,'trailer','ordered','Solar','kendaraan_barang'),(5,'van','available','Bensin','kendaraan_barang'),(6,'van','available','Solar','kendaraan_barang');
/*!40000 ALTER TABLE `vehicle` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-26 16:38:31
