/*!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.8-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: db_penilaian_pak
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
-- Table structure for table `mst_berkas_upload`
--

DROP TABLE IF EXISTS `mst_berkas_upload`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_berkas_upload` (
  `id_berkas_upload` int(11) NOT NULL AUTO_INCREMENT,
  `berkas_name` varchar(100) NOT NULL,
  `berkas_singkatan` varchar(20) NOT NULL,
  `id_jenis_berkas` int(11) NOT NULL COMMENT 'relasi ke mst_jenis_berkas',
  PRIMARY KEY (`id_berkas_upload`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_berkas_upload`
--

LOCK TABLES `mst_berkas_upload` WRITE;
/*!40000 ALTER TABLE `mst_berkas_upload` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_berkas_upload` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_golongan`
--

DROP TABLE IF EXISTS `mst_golongan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_golongan` (
  `id_golongan` int(11) NOT NULL AUTO_INCREMENT,
  `golongan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_golongan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_golongan`
--

LOCK TABLES `mst_golongan` WRITE;
/*!40000 ALTER TABLE `mst_golongan` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_golongan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_institusi`
--

DROP TABLE IF EXISTS `mst_institusi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_institusi` (
  `id_institusi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_institusi` varchar(255) NOT NULL,
  `alamat_institusi` text DEFAULT NULL,
  PRIMARY KEY (`id_institusi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_institusi`
--

LOCK TABLES `mst_institusi` WRITE;
/*!40000 ALTER TABLE `mst_institusi` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_institusi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_jabatan`
--

DROP TABLE IF EXISTS `mst_jabatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_jabatan`
--

LOCK TABLES `mst_jabatan` WRITE;
/*!40000 ALTER TABLE `mst_jabatan` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_jabatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_jenis_berkas`
--

DROP TABLE IF EXISTS `mst_jenis_berkas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_jenis_berkas` (
  `id_jenis_berkas` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_berkas` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jenis_berkas`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_jenis_berkas`
--

LOCK TABLES `mst_jenis_berkas` WRITE;
/*!40000 ALTER TABLE `mst_jenis_berkas` DISABLE KEYS */;
INSERT INTO `mst_jenis_berkas` VALUES
(1,'Data Dukung'),
(2,'Data Penilaian PAK');
/*!40000 ALTER TABLE `mst_jenis_berkas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_pangkat`
--

DROP TABLE IF EXISTS `mst_pangkat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_pangkat` (
  `id_pangkat` int(11) NOT NULL AUTO_INCREMENT,
  `pangkat` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pangkat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_pangkat`
--

LOCK TABLES `mst_pangkat` WRITE;
/*!40000 ALTER TABLE `mst_pangkat` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_pangkat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_provinsi`
--

DROP TABLE IF EXISTS `mst_provinsi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_provinsi` (
  `id_provinsi` int(11) NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_provinsi`
--

LOCK TABLES `mst_provinsi` WRITE;
/*!40000 ALTER TABLE `mst_provinsi` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_provinsi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_tahun_ajaran`
--

DROP TABLE IF EXISTS `mst_tahun_ajaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_ajaran` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tahun_ajaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_tahun_ajaran`
--

LOCK TABLES `mst_tahun_ajaran` WRITE;
/*!40000 ALTER TABLE `mst_tahun_ajaran` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_tahun_ajaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_berkas`
--

DROP TABLE IF EXISTS `tbl_berkas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_berkas` (
  `id_berkas` int(11) NOT NULL AUTO_INCREMENT,
  `Id_pendukung_or_pak` varchar(50) NOT NULL,
  `nama_berkas` varchar(255) DEFAULT NULL,
  `id_jenis_berkas` int(11) NOT NULL COMMENT 'relasi mst_jenis_berkas',
  `status_berkas` int(11) NOT NULL COMMENT '0 = belum terverifikasi, 1 = terverifikasi, 2 = ditolak',
  `catatam` text DEFAULT NULL,
  PRIMARY KEY (`id_berkas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_berkas`
--

LOCK TABLES `tbl_berkas` WRITE;
/*!40000 ALTER TABLE `tbl_berkas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_berkas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_biodata`
--

DROP TABLE IF EXISTS `tbl_biodata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_biodata` (
  `nik` varchar(20) NOT NULL,
  `nip_nidn` varchar(50) DEFAULT NULL,
  `nama` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  `id_golongan` int(11) DEFAULT NULL,
  `id_pangkat` int(11) DEFAULT NULL,
  `id_jabatan_fungsional` int(11) DEFAULT NULL,
  `id_jabatan_usulan` int(11) DEFAULT NULL,
  `id_institusi` int(11) DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_biodata`
--

LOCK TABLES `tbl_biodata` WRITE;
/*!40000 ALTER TABLE `tbl_biodata` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_biodata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1 COMMENT '1 = user/dosen/pengajar ,  2 = Verifikator',
  `nik` varchar(20) NOT NULL COMMENT 'nik relation to tbl_biodata',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_verifikasi`
--

DROP TABLE IF EXISTS `tbl_verifikasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_verifikasi` (
  `id_verifikasi` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 = belum verifikasi, 1 = verifikasi',
  PRIMARY KEY (`id_verifikasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_verifikasi`
--

LOCK TABLES `tbl_verifikasi` WRITE;
/*!40000 ALTER TABLE `tbl_verifikasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_verifikasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_verifikasi_detail`
--

DROP TABLE IF EXISTS `tbl_verifikasi_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_verifikasi_detail` (
  `id_verifikasi_detail` int(11) NOT NULL,
  `id_data_pendukung` varchar(50) NOT NULL,
  `id_data_pak` varchar(50) NOT NULL,
  `no_surat_pengantar` varchar(100) NOT NULL,
  `tgl_surat_pengatar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_verifikasi_detail`
--

LOCK TABLES `tbl_verifikasi_detail` WRITE;
/*!40000 ALTER TABLE `tbl_verifikasi_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_verifikasi_detail` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-04 16:47:08
