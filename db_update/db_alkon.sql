/*!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.8-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db_alkon
-- ------------------------------------------------------
-- Server version	10.11.8-MariaDB-0ubuntu0.24.04.1

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
-- Table structure for table `tbl_data_alkon`
--

DROP TABLE IF EXISTS `tbl_data_alkon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_data_alkon` (
  `id_alkon` int(11) NOT NULL AUTO_INCREMENT,
  `nama_alkon` varchar(100) DEFAULT NULL,
  `id_jns_alkon` int(11) DEFAULT NULL COMMENT 'Relation to tbl_mst_jns_alkon',
  `satuan` varchar(50) NOT NULL COMMENT 'Bentuk satuan alkon',
  `stock_awal` int(11) NOT NULL COMMENT 'Stok awal di gudang',
  PRIMARY KEY (`id_alkon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Data dari alkon yang ada';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_data_alkon`
--

LOCK TABLES `tbl_data_alkon` WRITE;
/*!40000 ALTER TABLE `tbl_data_alkon` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_data_alkon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_mst_faskes`
--

DROP TABLE IF EXISTS `tbl_mst_faskes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_mst_faskes` (
  `id_faskes` int(11) NOT NULL AUTO_INCREMENT,
  `nama_faskes` varchar(255) NOT NULL,
  `alamat_faskes` text DEFAULT NULL,
  PRIMARY KEY (`id_faskes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Table Faskes';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_mst_faskes`
--

LOCK TABLES `tbl_mst_faskes` WRITE;
/*!40000 ALTER TABLE `tbl_mst_faskes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_mst_faskes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_mst_jns_alkon`
--

DROP TABLE IF EXISTS `tbl_mst_jns_alkon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_mst_jns_alkon` (
  `id_jns_alkon` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id Jenis Alkon',
  `jns_alkon` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jns_alkon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Jenis-jenis alkon';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_mst_jns_alkon`
--

LOCK TABLES `tbl_mst_jns_alkon` WRITE;
/*!40000 ALTER TABLE `tbl_mst_jns_alkon` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_mst_jns_alkon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_supplier`
--

DROP TABLE IF EXISTS `tbl_supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_supplier` (
  `id_supplier` int(11) NOT NULL AUTO_INCREMENT,
  `nama_supplier` varchar(255) NOT NULL,
  `alamat_supplier` text DEFAULT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Master Data Supplier';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_supplier`
--

LOCK TABLES `tbl_supplier` WRITE;
/*!40000 ALTER TABLE `tbl_supplier` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL COMMENT '0 = super admin, 1 =  petugas, 2  = pimpinana',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='user pengelola';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-08  1:20:10
