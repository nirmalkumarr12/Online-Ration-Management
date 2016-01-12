-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: localhost    Database: pds
-- ------------------------------------------------------
-- Server version	5.6.24-log

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
-- Table structure for table `userdetails`
--

DROP TABLE IF EXISTS `userdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userdetails` (
  `AadharId` int(15) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `income` int(15) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `doorno` varchar(5) DEFAULT NULL,
  `streetname` varchar(20) DEFAULT NULL,
  `Taluk` varchar(20) DEFAULT NULL,
  `City` varchar(15) DEFAULT NULL,
  `District` varchar(15) DEFAULT NULL,
  `Nationality` varchar(10) DEFAULT NULL,
  `Profession` varchar(15) DEFAULT NULL,
  `Contact` int(10) DEFAULT NULL,
  `LPGCustomerID` varchar(10) DEFAULT NULL,
  `CardNo` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`AadharId`),
  KEY `LPGCustomerID` (`LPGCustomerID`),
  KEY `CardNo` (`CardNo`),
  CONSTRAINT `userdetails_ibfk_1` FOREIGN KEY (`LPGCustomerID`) REFERENCES `lpgdetails` (`LPGCustomerID`),
  CONSTRAINT `userdetails_ibfk_2` FOREIGN KEY (`CardNo`) REFERENCES `carddetails` (`CardNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userdetails`
--

LOCK TABLES `userdetails` WRITE;
/*!40000 ALTER TABLE `userdetails` DISABLE KEYS */;
INSERT INTO `userdetails` VALUES (2,'rithick','nirmal@xyz.com','1997-01-22',0,'M','01','street1','Mettupalayam','Coimbatore','Coimbatore','India','Student',1234567890,'LPGID1','73111210A1'),(3,'ravichandran','nirmal@xyz.com','1985-06-22',20000,'M','01','street1','Mettupalayam','Coimbatore','Coimbatore','India','Student',1234567890,'LPGID1','73111210A1'),(4,'indrani','nirmal@xyz.com','1988-06-22',0,'F','01','street1','Mettupalayam','Coimbatore','Coimbatore','India','Student',1234567890,'LPGID1','73111210A1'),(11,'vinoth','vinoth@xyz.com','1994-06-22',0,'M','03','street2','Mettupalayam','Coimbatore','Coimbatore','India','Student',1234567890,'LPGID2','7311210A2'),(12,'madhan','vinoth@xyz.com','1992-06-22',50000,'M','03','street2','Mettupalayam','Coimbatore','Coimbatore','India','Student',1234567890,'LPGID2','7311210A2'),(13,'nirmals','vinoth@xyz.com','1990-06-22',0,'M','03','street2','Mettupalayam','Coimbatore','Coimbatore','India','Student',1234567890,'LPGID2','7311210A2'),(14,'priya','vinoth@xyz.com','1993-06-22',0,'F','03','street2','Mettupalayam','Coimbatore','Coimbatore','India','Student',1234567890,'LPGID2','7311210A2'),(21,'kumar','kumar@xyz.com','1996-07-04',20000,'M','07','street3','Mettupalayam','Coimbatore','Coimbatore','India','Student',1234567770,'LPGID3','7311210A3'),(22,'magesh','kumar@xyz.com','1992-07-04',0,'M','07','street3','Mettupalayam','Coimbatore','Coimbatore','India','Student',1234567770,'LPGID3','7311210A3'),(23,'logesh','kumar@xyz.com','1990-07-04',10000,'M','07','street3','Mettupalayam','Coimbatore','Coimbatore','India','Student',1234567770,'LPGID3','7311210A3'),(24,'divya','kumar@xyz.com','1991-07-04',0,'M','07','street3','Mettupalayam','Coimbatore','Coimbatore','India','Student',1234567770,'LPGID3','7311210A3'),(101,'sujesh','sujesh@xyz.com','1991-05-02',0,'M','01','street1','Sirumugai','Coimbatore','Coimbatore','India','Student',1275567770,'LPGID4','7311210B1'),(102,'krish','sujesh@xyz.com','1997-05-02',0,'M','01','street1','Sirumugai','Coimbatore','Coimbatore','India','Student',1275567770,'LPGID4','7311210B1'),(103,'ravi','sujesh@xyz.com','1988-05-02',20000,'M','01','street1','Sirumugai','Coimbatore','Coimbatore','India','Student',1275567770,'LPGID4','7311210B1'),(104,'kavi','sujesh@xyz.com','1989-05-02',20000,'M','01','street1','Sirumugai','Coimbatore','Coimbatore','India','Student',1275567770,'LPGID4','7311210B1'),(111,'arun','arun@xyz.com','1990-09-06',0,'M','09','street2','Sirumugai','Coimbatore','Coimbatore','India','Student',1275567770,'LPGID5','7311210B2'),(112,'tharun','arun@xyz.com','1993-09-06',0,'M','09','street2','Sirumugai','Coimbatore','Coimbatore','India','Student',1275567770,'LPGID5','7311210B2'),(113,'siva','arun@xyz.com','1988-09-06',25000,'M','09','street2','Sirumugai','Coimbatore','Coimbatore','India','Student',1275567770,'LPGID5','7311210B2'),(114,'lita','arun@xyz.com','1989-09-06',0,'F','09','street2','Sirumugai','Coimbatore','Coimbatore','India','Student',1275567770,'LPGID5','7311210B2'),(121,'lincy','arun@xyz.com','1989-09-01',20000,'F','13','street3','Sirumugai','Coimbatore','Coimbatore','India','Student',1275237770,'LPGID6','7311210B3'),(122,'rani','rani@xyz.com','1984-09-01',200000,'F','13','street3','Sirumugai','Coimbatore','Coimbatore','India','Student',1275237770,'LPGID6','7311210B3'),(123,'ramu','rani@xyz.com','1991-09-01',0,'M','13','street3','Sirumugai','Coimbatore','Coimbatore','India','Student',1275237770,'LPGID6','7311210B3'),(201,'ranjith','ranjith@xyz.com','1977-04-01',10000,'M','02','street1','Kilkotagiri','Ooty','The nilgiris','India','Student',1905237770,'LPGID7','7311210C1'),(202,'renu','ranjith@xyz.com','1988-07-01',0,'F','02','street1','Kilkotagiri','Ooty','The nilgiris','India','Student',1905237770,'LPGID7','7311210C1'),(211,'ramkumar','ramkumar@xyz.com','1990-07-01',8000,'M','07','street2','Kilkotagiri','Ooty','The nilgiris','India','Student',890523770,'LPGID8','7311210C2'),(212,'mallai','ramkumar@xyz.com','1997-07-01',0,'M','07','street2','Kilkotagiri','Ooty','The nilgiris','India','Student',890523770,'LPGID8','7311210C2'),(221,'ranjitha','ranjitha@xyz.com','1990-12-11',30000,'F','97','street3','Kilkotagiri','Ooty','The nilgiris','India','Student',890523790,'LPGID9','7311210C3'),(222,'gopal','ranjitha@xyz.com','1999-11-11',0,'M','97','street3','Kilkotagiri','Ooty','The nilgiris','India','Student',890523790,'LPGID9','7311210C3'),(229,'gopal','ranjitha@xyz.com','1999-11-11',0,'M','97','street3','Kilkotagiri','Ooty','The nilgiris','India','Student',890523790,'LPGID9','731121003'),(98701,'Nirmal','nirmal@xyz.com','1995-02-22',10000,'M','01','street1','Mettupalayam','Coimbatore','Coimbatore','India','Student',1234567890,'LPGID1','73111210A1');
/*!40000 ALTER TABLE `userdetails` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-13 10:51:19
