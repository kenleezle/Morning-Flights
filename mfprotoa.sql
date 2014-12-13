CREATE DATABASE  IF NOT EXISTS `morningflight1` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `morningflight1`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mfprotoa
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `tbl_mfcountdates`
--

DROP TABLE IF EXISTS `tbl_mfcountdates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_mfcountdates` (
  `DateID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary key for table; autonumber',
  `MFDate` date DEFAULT NULL COMMENT 'Date count conducted',
  `Sunrise` time DEFAULT NULL COMMENT 'Time of sunrise standard time',
  `BeginTime` time DEFAULT NULL COMMENT 'Time count started standard time',
  `EndTime` time DEFAULT NULL COMMENT 'Time count ended standard time',
  `CounterID` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Relates thecount date record to the observer record of primary counter; related to tbl_mfcounters',
  `Comments` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Comments regarding overall conditions forthe day.',
  PRIMARY KEY (`DateID`),
  KEY `fk_mfcounter_idx` (`CounterID`),
  CONSTRAINT `fk_mfcounter` FOREIGN KEY (`CounterID`) REFERENCES `tbl_mfcounters` (`CounterID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='The master table for  recording the dates counts conducted. For accurate record keeping, a record will be added for each day of the count period. Comments can be used to record reason why a count was not completed for the day. The hourly records will be related to this table.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_mfcountdates`
--

LOCK TABLES `tbl_mfcountdates` WRITE;
/*!40000 ALTER TABLE `tbl_mfcountdates` DISABLE KEYS */;
INSERT INTO `tbl_mfcountdates` VALUES (1,'2012-08-29','05:26:00','05:11:00','10:26:00','OBRIENM',NULL),(2,'2012-08-30','05:27:00','05:12:00','09:27:00','REEDT',NULL);
/*!40000 ALTER TABLE `tbl_mfcountdates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_mfcounters`
--

DROP TABLE IF EXISTS `tbl_mfcounters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_mfcounters` (
  `CounterID` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Alpha code for counter. Utilize last name and first initial.',
  `CountFirst` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'First name of counter',
  `CountMid` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Middle name of counter',
  `CountLast` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Last name of counter',
  `CountEmail` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Email for counter',
  `CountComments` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Comments re: counter to be maintained for program.',
  PRIMARY KEY (`CounterID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Look-up table for personnel conducting morning flight counts.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_mfcounters`
--

LOCK TABLES `tbl_mfcounters` WRITE;
/*!40000 ALTER TABLE `tbl_mfcounters` DISABLE KEYS */;
INSERT INTO `tbl_mfcounters` VALUES ('MAGARIANT','Thomas',NULL,'Magarian',NULL,NULL),('OBRIENM','Michael',NULL,'O\'Brien',NULL,NULL),('REEDT','Thomas',NULL,'Reed',NULL,NULL);
/*!40000 ALTER TABLE `tbl_mfcounters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_mfcounts`
--

DROP TABLE IF EXISTS `tbl_mfcounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_mfcounts` (
  `CountID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary key; autonumber',
  `HoursID` int(11) DEFAULT NULL COMMENT 'Relates the species count record to the hour of count for a certain date; related to tbl_mfhours',
  `SpeciesID` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Code for species counted; restricted to species codes in related tbl_mfspecies',
  `SpeciesCount` mediumint(8) unsigned DEFAULT NULL COMMENT 'Number of individuals counted for the hour',
  PRIMARY KEY (`CountID`),
  KEY `HoursID` (`HoursID`),
  KEY `SpeciesID` (`SpeciesID`),
  CONSTRAINT `fk_counthrs` FOREIGN KEY (`HoursID`) REFERENCES `tbl_mfhours` (`HoursID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_species` FOREIGN KEY (`SpeciesID`) REFERENCES `tbl_mfspecies` (`SpeciesID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=195 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='The table for species counts. These records are related to the Hours Table (tbl_mfhours). Records will be added only for species counted in the hour.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_mfcounts`
--

LOCK TABLES `tbl_mfcounts` WRITE;
/*!40000 ALTER TABLE `tbl_mfcounts` DISABLE KEYS */;
INSERT INTO `tbl_mfcounts` VALUES (2,1,'EAKI',10),(3,1,'CEDW',55),(4,1,'YEWA',1),(5,1,'AMRE',5),(6,1,'HOWA',1),(7,1,'UNWA',4),(8,1,'BLGR',1),(9,2,'RTHU',7),(10,2,'RBWO',1),(11,2,'EAKI',7),(12,2,'REVI',3),(13,2,'RBNU',31),(14,2,'AMRO',1),(15,2,'CEDW',583),(16,2,'BWWA',1),(17,2,'TEWA',2),(18,2,'NAWA',2),(19,2,'NOPA',9),(20,2,'YEWA',11),(21,2,'CSWA',7),(22,2,'MAWA',4),(23,2,'CMWA',2),(24,2,'BTBW',16),(25,2,'BTNW',2),(26,2,'BLPW',1),(27,2,'AMRE',245),(28,2,'NOWA',15),(29,2,'UNWA',132),(30,2,'SUTA',1),(31,2,'SCTA',1),(32,2,'INBU',2),(33,2,'DICK',1),(34,2,'BOBO',169),(35,2,'BAOR',15),(36,2,'PUFI',2),(37,2,'HOFI',10),(38,2,'MODO',8),(39,3,'EAKI',2),(40,3,'PHVI',1),(41,3,'REVI',24),(42,3,'RBNU',110),(43,3,'BGGN',11),(44,3,'CEDW',140),(45,3,'TEWA',2),(46,3,'NAWA',1),(47,3,'NOPA',6),(48,3,'YEWA',22),(49,3,'CSWA',6),(50,3,'MAWA',6),(51,3,'CMWA',4),(52,3,'BTBW',19),(53,3,'MYWA',1),(54,3,'BLBW',1),(55,3,'PRAW',2),(56,3,'BAWW',12),(57,3,'AMRE',163),(58,3,'NOWA',8),(59,3,'LOWA',1),(60,3,'UNWA',52),(61,3,'SCTA',1),(62,3,'LASP',1),(63,3,'INBU',1),(64,3,'BOBO',55),(65,3,'BAOR',63),(66,3,'PUFI',1),(67,3,'BRWA',1),(68,3,'HOFI',16),(69,3,'YBCU',1),(70,4,'RTHU',1),(71,4,'BEKI',1),(72,4,'REVI',6),(73,4,'RBNU',142),(74,4,'BGGN',6),(75,4,'CEDW',37),(76,4,'TEWA',1),(77,4,'NAWA',1),(78,4,'NOPA',3),(79,4,'YEWA',7),(80,4,'CSWA',2),(81,4,'BTBW',4),(82,4,NULL,NULL),(83,4,'CMWA',5),(84,4,'BTNW',4),(85,4,'BLBW',1),(86,4,'PIWA',1),(87,4,'BAWW',7),(88,4,'AMRE',39),(89,4,'WEWA',1),(90,4,'OVEN',2),(91,4,'NOWA',11),(92,4,'WIWA',1),(93,4,'CAWA',1),(94,4,'UNWA',33),(95,4,'LASP',1),(96,4,'DICK',1),(97,4,'BOBO',13),(98,4,'BAOR',89),(99,4,'PUFI',1),(100,4,'OSFL',1),(101,5,'RTHU',4),(102,5,'EAWP',2),(103,5,'UNEM',2),(104,5,'EAKI',1),(105,5,'REVI',4),(106,5,'RBNU',86),(107,5,'AMRO',4),(108,5,'NOMO',1),(109,5,'CEDW',8),(110,5,'YEWA',4),(111,5,'CMWA',1),(112,5,'BTBW',10),(113,5,'PRAW',1),(114,5,'BAWW',3),(115,5,'AMRE',20),(116,5,'NOWA',4),(117,5,'UNWA',2),(118,5,'SCTA',1),(119,5,'INBU',2),(120,5,'BOBO',17),(121,5,'BAOR',7),(122,6,'RBNU',5),(123,6,'CEDW',6),(124,6,'AMRE',1),(125,6,'NOWA',1),(126,8,'NOWA',12),(127,8,'UNWA',2),(128,8,'BLGR',1),(129,8,'MODO',3),(130,9,'RTHU',3),(131,9,'EAKI',19),(132,9,'REVI',2),(133,9,'RBNU',7),(134,9,'BGGN',1),(135,9,'CEDW',29),(136,9,'TEWA',1),(137,9,'NOPA',3),(138,9,'YEWA',28),(139,9,'MAWA',2),(140,9,'BTBW',5),(141,9,'BAWW',17),(142,9,'AMRE',86),(143,9,'NOWA',71),(144,9,'UNWA',40),(145,9,'SCTA',1),(146,9,'BLGR',1),(147,9,'INBU',2),(148,9,'BOBO',5),(149,9,'BAOR',24),(150,9,'MODO',13),(151,9,'HOFI',5),(152,10,'RTHU',3),(153,10,'EAKI',22),(154,10,'REVI',1),(155,10,'BGGN',1),(156,10,'CEDW',11),(157,10,'NOPA',4),(158,10,'YEWA',17),(159,10,'CSWA',1),(160,10,'BTBW',2),(161,10,'PRAW',4),(162,10,'BAWW',8),(163,10,'AMRE',60),(164,10,'OVEN',1),(165,10,'NOWA',24),(166,10,'UNWA',18),(167,10,'RBGR',1),(168,10,'MODO',1),(169,10,'HOFI',11),(170,11,'RTHU',5),(171,11,'UNEM',1),(172,11,'EAKI',2),(173,11,'RBNU',10),(174,11,'NOMO',1),(175,11,'CEDW',8),(176,11,'NOPA',1),(177,11,'YEWA',5),(178,11,'PRAW',1),(179,11,'AMRE',8),(180,11,'NOWA',19),(181,11,'UNWA',6),(182,11,'INBU',3),(183,11,'BOBO',33),(184,11,'BAOR',5),(185,11,'MODO',1),(186,11,'HOFI',1),(187,12,'BEKI',1),(188,12,'RBNU',3),(189,12,'NOPA',1),(190,12,'YEWA',3),(191,12,'CMWA',1),(192,12,'BLBW',1),(193,12,'AMRE',2),(194,12,'BAOR',1);
/*!40000 ALTER TABLE `tbl_mfcounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_mfhours`
--

DROP TABLE IF EXISTS `tbl_mfhours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_mfhours` (
  `HoursID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary key; autonumber',
  `DateID` int(11) DEFAULT NULL COMMENT 'Relates the hourly record to the date record; related to tbl_mfcountdates',
  `HourNum` enum('-15','1','2','3','4','5','6') COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Identification of hour counted:limited to list of the hour number',
  `HourTime` time DEFAULT NULL COMMENT 'Time count hour started based on increment from sunrise time',
  `Minutes` tinyint(4) DEFAULT NULL COMMENT 'Number of minutes countconducted during the hour',
  `Comments` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Comments regarding the conditions during specific hour',
  PRIMARY KEY (`HoursID`),
  KEY `DateID` (`DateID`),
  CONSTRAINT `fk_dates` FOREIGN KEY (`DateID`) REFERENCES `tbl_mfcountdates` (`DateID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Table to record the hours of the count. These records are related to the Date of Count Table (tbl_mfcountdates).';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_mfhours`
--

LOCK TABLES `tbl_mfhours` WRITE;
/*!40000 ALTER TABLE `tbl_mfhours` DISABLE KEYS */;
INSERT INTO `tbl_mfhours` VALUES (1,1,'-15','05:11:00',15,NULL),(2,1,'1','05:26:00',60,NULL),(3,1,'2','06:26:00',60,NULL),(4,1,'3','07:26:00',60,NULL),(5,1,'4','08:26:00',60,NULL),(6,1,'5','09:26:00',60,NULL),(7,1,'6','10:26:00',0,'No count conducted this hour'),(8,2,'-15','05:12:00',15,NULL),(9,2,'1','05:27:00',60,NULL),(10,2,'2','06:27:00',60,NULL),(11,2,'3','07:27:00',60,NULL),(12,2,'4','08:27:00',60,NULL),(13,2,'5','09:27:00',0,'No count conducted this hour'),(14,2,'6','10:27:00',0,'No count conducted this hour');
/*!40000 ALTER TABLE `tbl_mfhours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_mfspecies`
--

DROP TABLE IF EXISTS `tbl_mfspecies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_mfspecies` (
  `SpeciesID` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Species code - alpha code based primarily onthe four character code system by the USGS BBL.',
  `FamilySci` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Species scientific family name',
  `FamilyCommon` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Species common family name',
  `Genus` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Species genus name',
  `SpeciesSci` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Species complete scientific name',
  `SpeciesCommon` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Species common name',
  `FormSwitch` enum('Y','N') COLLATE utf8_unicode_ci DEFAULT 'N' COMMENT 'Switch to determine species that should standardly appear on data entry form',
  `FormRank` tinyint(3) unsigned DEFAULT NULL COMMENT 'Number system determining order species should appear on data entry form',
  `TaxonRank` smallint(5) unsigned DEFAULT NULL COMMENT 'Number system putting species list in taxonomic order',
  PRIMARY KEY (`SpeciesID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Look-up table for a list of species observed during morning flight counts.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_mfspecies`
--

LOCK TABLES `tbl_mfspecies` WRITE;
/*!40000 ALTER TABLE `tbl_mfspecies` DISABLE KEYS */;
INSERT INTO `tbl_mfspecies` VALUES ('ACFL','Tyrannidae','Tyrant Flycatchers','Empidonax ','Empidonax virescens','Acadian Flycatcher','N',0,260),('ALFL','Tyrannidae','Tyrant Flycatchers','Empidonax ','Empidonax alnorum','Alder Flycatcher','Y',10,270),('AMPI','Motacillidae','Wagtails and Pipits','Anthus ','Anthus rubescens','American Pipit','Y',30,520),('AMRE','Parulidae','Wood-Warblers','Setophaga ','Setophaga ruticilla','American Redstart','Y',54,700),('AMRO','Turdidae','Thrushes','Turdus ','Turdus migratorius','American Robin','Y',28,500),('BAOR','Icteridae','Blackbirds','Icterus ','Icterus galbula','Baltimore Oriole ','Y',83,1170),('BAPW','Parulidae','Wood-Warblers','Setophaga ','Setophaga castanea/striata','\"Baypoll\" warbler','Y',51,805),('BAWW','Parulidae','Wood-Warblers','Setophaga ','Setophaga castanea','Black-and-white Warbler','Y',53,760),('BBCU','Cuculidae','Cuckoos, Roadrunners, and Anis','Coccyzus ','Coccyzus erythropthalmus','Black-billed Cuckoo','N',0,130),('BBWA','Parulidae','Wood-Warblers','Setophaga ','Setophaga castanea','Bay-breasted Warbler','Y',49,750),('BEKI','Alcedinidae','Kingfishers','Megaceryle ','Megaceryle alcyon','Belted Kingfisher','Y',2,160),('BGGN','Polioptilidae','Gnatcatchers and Gnatwrens','Polioptila ','Polioptila caerulea','Blue-gray Gnatcatcher','Y',26,440),('BHVI','Vireonidae','Vireos','Vireo ','Vireo solitarius','Blue-headed Vireo','N',0,350),('BLBW','Parulidae','Wood-Warblers','Setophaga ','Setophaga fusca','Blackburnian Warbler','Y',45,770),('BLGR','Cardinalidae','Cardinals, Piranga Tanagers and Allies','Passerina ','Passerina caerulea','Blue Grosbeak','Y',76,1060),('BLPW','Parulidae','Wood-Warblers','Setophaga ','Setophaga striata','Blackpoll Warbler','Y',50,800),('BOBO','Icteridae','Blackbirds','Dolichonyx ','Dolichonyx oryzivorus','Bobolink','Y',79,1090),('BRCR','Certhiidae','Creepers','Certhia ','Certhia americana','Brown Creeper','N',0,430),('BRWA','Parulidae','Wood-Warblers','Vermivora ','Vermivora hybrid1','Brewster\'s Warbler','N',0,601),('BTBW','Parulidae','Wood-Warblers','Setophaga ','Setophaga caerulescens','Black-throated Blue Warbler','Y',41,810),('BTGR','Icteridae','Blackbirds','Quiscalus ','Quiscalus major','Boat-tailed Grackle','N',0,1150),('BTNW','Parulidae','Wood-Warblers','Setophaga ','Setophaga virens','Black-throated Green Warbler','Y',44,890),('BTYW','Parulidae','Wood-Warblers','Setophaga ','Setophaga nigrescens','Black-throated Gray Warbler','Y',43,870),('BWWA','Parulidae','Wood-Warblers','Vermivora ','Vermivora cyanoptera','Blue-winged Warbler','Y',32,600),('CAWA','Parulidae','Wood-Warblers','Cardellina ','Cardellina canadensis','Canada Warbler','Y',64,900),('CCSP','Emberizidae','Emberizids','Spizella ','Spizella pallida','Clay-colored Sparrow','Y',69,930),('CEDW','Bombycillidae','Waxwings','Bombycilla ','Bombycilla cedrorum','Cedar Waxwing','Y',31,530),('CERW','Parulidae','Wood-Warblers','Setophaga ','Setophaga cerulea','Cerulean Warbler','Y',52,720),('CHSP','Emberizidae','Emberizids','Spizella ','Spizella passerina','Chipping Sparrow','Y',68,920),('CMWA','Parulidae','Wood-Warblers','Setophaga ','Setophaga tigrina','Cape May Warbler','Y',40,710),('COGR','Icteridae','Blackbirds','Quiscalus ','Quiscalus quiscula','Common Grackle','N',0,1140),('CONW','Parulidae','Wood-Warblers','Oporornis ','Oporornis agilis','Connecticut Warbler','Y',60,650),('COYE','Parulidae','Wood-Warblers','Geothlypis ','Geothlypis trichas','Common Yellowthroat','Y',61,680),('CSWA','Parulidae','Wood-Warblers','Setophaga ','Setophaga pensylvanica','Chestnut-sided Warbler','Y',38,790),('DICK','Cardinalidae','Cardinals, Piranga Tanagers and Allies','Spiza ','Spiza americana','Dickcissel','Y',78,1080),('DOWO','Picidae','Woodpeckers and Allies','Picoides ','Picoides pubescens','Downy Woodpecker','Y',6,210),('EABL','Turdidae','Thrushes','Sialia ','Sialia sialis','Eastern Bluebird','N',0,470),('EAKI','Tyrannidae','Tyrant Flycatchers','Tyrannus ','Tyrannus tyrannus','Eastern Kingbird','Y',16,320),('EAME','Icteridae','Blackbirds','Sturnella ','Sturnella magna','Eastern Meadowlark','Y',80,1110),('EAPH','Tyrannidae','Tyrant Flycatchers','Sayornis ','Sayornis phoebe','Eastern Phoebe','Y',13,290),('EAWP','Tyrannidae','Tyrant Flycatchers','Contopus ','Contopus virens','Eastern Wood-Pewee','Y',9,250),('FISP','Emberizidae','Emberizids','Spizella ','Spizella pusilla','Field Sparrow','N',0,940),('FOSP','Emberizidae','Emberizids','Passerella ','Passerella iliaca','Fox Sparrow','N',0,990),('GCFL','Tyrannidae','Tyrant Flycatchers','Myiarchus ','Myiarchus crinitus','Great-crested Flycatcher','Y',14,300),('GCKI','Regulidae','Kinglets','Regulus ','Regulus satrapa','Golden-crowned Kinglet','Y',23,450),('GWWA','Parulidae','Wood-Warblers','Vermivora ','Vermivora chrysoptera','Golden-winged Warbler','N',0,590),('HAWO','Picidae','Woodpeckers and Allies','Picoides ','Picoides villosus','Hairy Woodpecker','Y',7,220),('HETH','Turdidae','Thrushes','Setophaga ','Setophaga occidentalis','Hermit Thrush','N',0,880),('HOFI','Fringillidae','Fringilline and Cardueline Finches and Allies','Haemorhous ','Haemorhous mexicanus','House Finch','N',0,1180),('HOLA','Alaudidae','Larks','Eremophila ','Eremophila alpestris','Horned Lark','Y',20,390),('HOSP','Passeridae','Old World Sparrows','Passer ','Passer domesticus','House Sparrow','N',0,1210),('HOWA','Parulidae','Wood-Warblers','Setophaga ','Setophaga citrina','Hooded Warbler','Y',62,690),('INBU','Cardinalidae','Cardinals, Piranga Tanagers and Allies','Passerina ','Passerina cyanea','Indigo Bunting','Y',77,1070),('KEWA','Parulidae','Wood-Warblers','Geothlypis ','Geothlypis formosa','Kentucky Warbler','N',0,670),('LASP','Emberizidae','Emberizids','Chondestes ','Chondestes grammacus','Lark Sparrow','Y',71,960),('LAWA','Parulidae','Wood-Warblers','Vermivora ','Vermivora hybrid2','Lawrence\'s Warbler','N',0,602),('LEFL','Tyrannidae','Tyrant Flycatchers','Empidonax ','Empidonax minimus','Least Flycatcher','Y',11,280),('LOWA','Parulidae','Wood-Warblers','Parkesia ','Parkesia motacilla','Louisiana Waterthrush','Y',59,570),('MAWA','Parulidae','Wood-Warblers','Setophaga ','Setophaga magnolia','Magnolia Warbler','Y',39,740),('MODO','Columbidae','Pigeons and Doves','Zenaida ','Zenaida macroura','Mourning Dove','N',0,110),('MOWA','Parulidae','Wood-Warblers','Geothlypis ','Geothlypis philadelphia','Mourning Warbler','N',0,660),('MYWA','Parulidae','Wood-Warblers','Setophaga ','Setophaga coronata','Yellow-rumped Warbler','Y',42,840),('NAWA','Parulidae','Wood-Warblers','Oreothlypis ','Oreothlypis ruficapilla','Nashville Warbler','Y',35,640),('NOMO','Mimidae','Mockingbirds and Thrashers','Mimus ','Mimus polyglottos','Northern Mockingbird','Y',29,510),('NOPA','Parulidae','Wood-Warblers','Setophaga ','Setophaga americana','Northern Parula','Y',36,730),('NOWA','Parulidae','Wood-Warblers','Parkesia ','Parkesia noveboracensis','Northern Waterthrush','Y',58,580),('NSHR','Laniidae','Shrikes','Lanius ','Lanius excubitor','Northern Shrike','N',0,330),('OCWA','Parulidae','Wood-Warblers','Oreothlypis ','Oreothlypis celata','Orange-crowned Warbler','Y',34,630),('OROR','Icteridae','Blackbirds','Icterus ','Icterus spurius','Orchard Oriole','Y',82,1160),('OSFL','Tyrannidae','Tyrant Flycatchers','Contopus ','Contopus cooperi','Olive-sided Flycatcher','N',0,240),('OVEN','Parulidae','Wood-Warblers','Seiurus ','Seiurus aurocapilla','Ovenbird','Y',57,550),('PHVI','Vireonidae','Vireos','Vireo ','Vireo philadelphicus','Philadelphia Vireo','Y',18,370),('PISI','Fringillidae','Fringilline and Cardueline Finches and Allies','Spinus ','Spinus pinus','Pine Siskin','Y',85,1200),('PIWA','Parulidae','Wood-Warblers','Setophaga ','Setophaga pinus','Pine Warbler','Y',46,830),('PRAW','Parulidae','Wood-Warblers','Setophaga ','Setophaga discolor','Prairie Warbler','Y',47,860),('PROW','Parulidae','Wood-Warblers','Protonotaria ','Protonotaria citrea','Prothonotary Warbler','Y',55,610),('PUFI','Fringillidae','Fringilline and Cardueline Finches and Allies','Haemorhous ','Haemorhous purpureus','Purple Finch','Y',84,1190),('RBGR','Cardinalidae','Cardinals, Piranga Tanagers and Allies','Pheucticus ','Pheucticus ludovicianus','Rose-breasted Grosbeak','Y',75,1050),('RBNU','Sittidae','Nuthatches','Sitta ','Sitta canadensis','Red-breasted Nuthatch','Y',21,410),('RBWO','Picidae','Woodpeckers and Allies','Melanerpes ','Melanerpes carolinus','Red-bellied Woodpecker','Y',4,180),('RCKI','Regulidae','Kinglets','Regulus ','Regulus calendula','Ruby-crowned Kinglet','Y',24,460),('REVI','Vireonidae','Vireos','Vireo ','Vireo olivaceus','Red-eyed Vireo','Y',19,380),('RHWO','Picidae','Woodpeckers and Allies','Melanerpes ','Melanerpes erythrocephalus','Red-headed Woodpecker','Y',3,170),('RTHU','Trochilidae','Hummingbirds','Archilochus ','Archilochus colubris','Ruby-throated Hummingbird','Y',1,140),('RUBL','Icteridae','Blackbirds','Euphagus ','Euphagus carolinus','Rusty Blackbird','Y',81,1130),('RUHU','Trochilidae','Hummingbirds','Selasphorus ','Selasphorus rufus','Rufous Hummingbird','N',0,150),('RWBL','Icteridae','Blackbirds','Agelaius ','Agelaius phoeniceus','Red-winged Blackbird','N',0,1100),('SAVS','Emberizidae','Emberizids','Passerculus ','Passerculus sandwichensis','Savannah Sparrow','Y',72,970),('SCJU','Emberizidae','Emberizids','Junco ','Junco hyemalis','Dark-eyed Junco','Y',74,1020),('SCTA','Cardinalidae','Cardinals, Piranga Tanagers and Allies','Piranga ','Piranga olivacea','Scarlet Tanager','Y',67,1040),('SESP','Emberizidae','Emberizids','Ammodramus ','Ammodramus maritimus','Seaside Sparrow','N',0,980),('SNBU','Calcariidae','Longspurs and Snow Buntings','Plectrophenax ','Plectrophenax nivalis','Snow Bunting','N',0,540),('SUTA','Cardinalidae','Cardinals, Piranga Tanagers and Allies','Piranga ','Piranga rubra','Summer Tanager','Y',66,1030),('SWTH','Turdidae','Thrushes','Catharus ','Catharus ustulatus','Swainson\'s Thrush','N',0,490),('TEWA','Parulidae','Wood-Warblers','Oreothlypis ','Oreothlypis peregrina','Tennessee Warbler','Y',33,620),('TRFL','Tyrannidae','Tyrant Flycatchers','Empidonax ','Empidonax alnorum/trailii','Traill\'s Flycatcher','N',0,281),('TUTI','Paridae','Chickadees and Titmice','Baeolophus ','Baeolophus bicolor','Tufted Titmouse','N',0,400),('UNCA','Turdidae','Thrushes','Catharus ','Catharus sp.','Catharus sp.','Y',27,495),('UNEM','Tyrannidae','Tyrant Flycatchers','Empidonax ','Empidonax sp.','Empidonax sp.','Y',12,285),('UNFI','Fringillidae','Fringilline and Cardueline Finches and Allies','Haemorhous ','Haemorhous mexicanus/purpureus','House/ Purple Finch','N',0,1195),('UNHU','Trochilidae','Hummingbirds','Trochilidae sp.','Hummingbird sp.','Hummingbird sp.','N',0,155),('UNKI','Regulidae','Kinglets','Regulus ','Kinglet sp.','Kinglet sp.','Y',25,465),('UNOR','Parulidae','Wood-Warblers','Oreothlypis ','Oreothlypis sp.','Tennessee/Orange-crowned Warbler','N',0,625),('UNPH','Vireonidae','Vireos','Vireo ','Vireo philadelphicus/gilvus','Warbling/ Philadelphia Vireo sp.','N',0,375),('UNSP','Emberizidae','Emberizids','Emberizidae sp.','Emberizidae sp.','Sparrow sp.','N',0,1015),('UNVI','Vireonidae','Vireos','Vireo ','Vireo sp.','Vireo sp.','N',0,385),('UNWA','Parulidae','Wood-Warblers','Parulidae sp.','Parulidae sp.','Warbler sp.','Y',65,905),('VEER','Turdidae','Thrushes','Catharus ','Catharus fuscescens','Veery','N',0,480),('VESP','Emberizidae','Emberizids','Pooecetes ','Pooecetes gramineus','Vesper Sparrow','Y',70,950),('WAVI','Vireonidae','Vireos','Vireo ','Vireo gilvus','Warbling Vireo','Y',17,360),('WBNU','Sittidae','Nuthatches','Sitta ','Sitta carolinensis','White-breasted Nuthatch','Y',22,420),('WCSP','Emberizidae','Emberizids','Zonotrichia ','Zonotrichia leucophrys','White-crowned Sparrow','Y',73,1010),('WEKI','Tyrannidae','Tyrant Flycatchers','Tyrannus ','Tyrannus verticalis','Western Kingbird','Y',15,310),('WEWA','Parulidae','Wood-Warblers','Helmitheros ','Helmitheros vermivorum','Worm-eating Warbler','Y',56,560),('WIWA','Parulidae','Wood-Warblers','Cardellina ','Cardellina pusilla','Wilson\'s Warbler','Y',63,910),('WTSP','Emberizidae','Emberizids','Zonotrichia ','Zonotrichia albicollis','White-throated Sparrow','N',0,1000),('WWDO','Columbidae','Pigeons and Doves','Zenaida ','Zenaida asiatica','White-winged Dove','N',0,100),('YBCU','Cuculidae','Cuckoos, Roadrunners, and Anis','Coccyzus ','Coccyzus americanus','Yellow-billed Cuckoo','N',0,120),('YBFL','Tyrannidae','Tyrant Flycatchers','Sphyrapicus ','Sphyrapicus varius','Yellow-bellied Flycatcher','N',0,200),('YBSA','Picidae','Woodpeckers and Allies','Sphyrapicus ','Sphyrapicus varius','Yellow-bellied Sapsucker','Y',5,190),('YEWA','Parulidae','Wood-Warblers','Setophaga ','Setophaga petechia','Yellow Warbler','Y',37,780),('YHBL','Icteridae','Blackbirds','Xanthocephalus ','Xanthocephalus xanthocephalus','Yellow-headed Blackbird','N',0,1120),('YPWA','Parulidae','Wood-Warblers','Setophaga ','Setophaga palmarum','Palm Warbler','Y',48,820),('YSFL','Picidae','Woodpeckers and Allies','Colaptes ','Colaptes auratus','Northern Flicker (Yellow-shafted)','Y',8,230),('YTVI','Vireonidae','Vireos','Vireo ','Vireo flavifrons','Yellow-thoated Vireo','N',0,340),('YTWA','Parulidae','Wood-Warblers','Setophaga ','Setophaga dominica','Yellow-throated Warbler','N',0,850);
/*!40000 ALTER TABLE `tbl_mfspecies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_mfweatherstations`
--

DROP TABLE IF EXISTS `tbl_mfweatherstations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_mfweatherstations` (
  `StationID` varchar(16) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Station code utilizing the WBAN unique weather station code for definition',
  `StationType` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Alphnumeric code used by weather stations to deermine station type. See metadata for definitions.',
  `StationName` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Name of the weather station',
  `Latitude` float DEFAULT NULL COMMENT 'Latitude of station',
  `Longitude` float DEFAULT NULL COMMENT 'Longitude of station',
  `SourceURL` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Station URL where data was retrieved',
  `Metadata` mediumtext COLLATE utf8_unicode_ci COMMENT 'Metadata documents describing hourly weather station data',
  `Comments` varchar(4096) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Comments regarding data retrieved and conversions of original data to formats for database',
  PRIMARY KEY (`StationID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Look-up table defining weather stations used to retrieve hourly weather records.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_mfweatherstations`
--

LOCK TABLES `tbl_mfweatherstations` WRITE;
/*!40000 ALTER TABLE `tbl_mfweatherstations` DISABLE KEYS */;
INSERT INTO `tbl_mfweatherstations` VALUES ('NCDCACY',NULL,'Atlantic City International Airport',39.449,-74.567,'http://cdo.ncdc.noaa.gov/ulcd/ULCD',NULL,'WBAN: 93730'),('NCDCCAPEMAY',NULL,'Wildwood:Cape May County Airport',39.008,-74.567,'http://cdo.ncdc.noaa.gov/ulcd/ULCD',NULL,'WBAN: 03726'),('WESTCAPEMAY',NULL,'West Cape May Local Weather Station',NULL,NULL,NULL,NULL,'Data provided as download to CMBO director.');
/*!40000 ALTER TABLE `tbl_mfweatherstations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_ncdcweather`
--

DROP TABLE IF EXISTS `tbl_ncdcweather`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_ncdcweather` (
  `NCDCID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'NCDC Hourly record primary key; autonumber',
  `HoursID` int(11) DEFAULT NULL COMMENT 'Relates the horly weather record to the hour of count for a certain date; related to tbl_mfhours',
  `StationID` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Relates the hourly weather record to a station description; related to tbl_mfweatherstations',
  `WeatherTime` time DEFAULT NULL COMMENT 'Time of hourly reading',
  `SkyCondition` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Sky conditions below 12,000 feet above ground level',
  `SkyConditionFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `Visibility` tinyint(3) DEFAULT NULL COMMENT 'Visibility in statute miles',
  `VisibilityFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `WeatherType` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Code system for weather condition types; can be characterized with + or - sign',
  `WeatherTypeFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `DryBulbFarenheit` tinyint(3) DEFAULT NULL COMMENT 'Dry bulb temperature in whole degrees F',
  `DryBulbFarenheitFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `DryBulbCelsius` float DEFAULT NULL COMMENT 'Dry bulb temperatures in degrees to the tenths C',
  `DryBulbCelsiusFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `WetBulbFarenheit` tinyint(3) DEFAULT NULL COMMENT 'Wet bulb temperature in whole degrees F',
  `WetBulbFarenheitFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Codes ''S'' for suspect data',
  `WetBulbCelsius` float DEFAULT NULL COMMENT 'Wet bulb temperature in degrees to the tenths C',
  `WetBulbCelsiusFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `DewPointFarenheit` tinyint(3) DEFAULT NULL COMMENT 'Dew point temperature in whole degrees F',
  `DewPointFarenheitFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `DewPointCelsius` float DEFAULT NULL COMMENT 'Dew point temperature in degrees to the tenths C',
  `DewPointCelsiusFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect',
  `RelativeHumidity` tinyint(3) DEFAULT NULL COMMENT 'Relative humidity in percent',
  `RelativeHumidityFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `WindSpeed` mediumint(9) DEFAULT NULL COMMENT 'Wind speed in mph',
  `WindSpeedFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `WindDirection` mediumint(8) DEFAULT NULL COMMENT 'Wind direction in degrees from true north',
  `WindDirectionFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `ValueforWindCharacter` mediumint(9) DEFAULT NULL COMMENT 'Wind characteristic gusts in mph',
  `ValueforWindCharacterFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `StationPressure` float DEFAULT NULL COMMENT 'Station pressure in inches to hundredths',
  `StationPressureFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `PressureTendency` tinyint(3) DEFAULT NULL COMMENT 'Code system for pressure tendency',
  `PressureTendencyFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `PressureChange` tinyint(3) DEFAULT NULL COMMENT 'Net 3 hour pressure change in millebars',
  `PressureChangeFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `SeaLevelPressure` float DEFAULT NULL COMMENT 'Sea level pressure in inches to hundredths',
  `SeaLevelPressureFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `RecordType` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Type of hourly report: coded AA for routine; SP for special conditions',
  `RecordTypeFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `HourlyPrecip` float DEFAULT NULL COMMENT 'Hourly precipitation in inches to hundredths',
  `HourlyPrecipFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `Altimeter` float DEFAULT NULL COMMENT 'Altimeter reading in inches to hundredths',
  `AltimeterFlag` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Coded ''S'' for suspect data',
  `Comments` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Comments regarding data',
  `WindDirAlpha` enum('N','NE','E','SE','S','SW','W','NW') COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Interpretation of wind degrees from north to conventional alpha terms. Limited to list of eight basic directions.',
  PRIMARY KEY (`NCDCID`),
  KEY `HoursID` (`HoursID`),
  KEY `StationID` (`StationID`),
  CONSTRAINT `fk_ncdcstations` FOREIGN KEY (`StationID`) REFERENCES `tbl_mfweatherstations` (`StationID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ncdcweatherhrs` FOREIGN KEY (`HoursID`) REFERENCES `tbl_mfhours` (`HoursID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='The table for maintaining hourly weather records from NCDC weather stations. These records are related to the Hours Table (tbl_mfhours).';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ncdcweather`
--

LOCK TABLES `tbl_ncdcweather` WRITE;
/*!40000 ALTER TABLE `tbl_ncdcweather` DISABLE KEYS */;
INSERT INTO `tbl_ncdcweather` VALUES (1,1,'NCDCCAPEMAY','05:15:00','CLR',' ',10,' ',' ',' ',66,' ',19,' ',61,' ',15.9,' ',57,' ',14,' ',73,' ',5,' ',30,' ',0,' ',29.91,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',29.94,' ','Sea level pressure missing; set to -1.','NE'),(2,2,'NCDCCAPEMAY','05:35:00','CLR',' ',10,' ',' ',' ',64,' ',18,' ',61,' ',16.1,' ',59,' ',15,' ',84,' ',6,' ',30,' ',0,' ',29.93,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',29.95,' ','Sea level pressure missing; set to -1.','NE'),(3,2,'NCDCCAPEMAY','05:55:00','CLR',' ',10,' ',' ',' ',66,' ',19,' ',62,' ',16.5,' ',59,' ',15,' ',78,' ',7,' ',30,' ',0,' ',29.93,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',29.96,' ','Sea level pressure missing; set to -1.','N'),(4,3,'NCDCCAPEMAY','06:15:00','CLR',' ',10,' ',' ',' ',66,' ',19,' ',62,' ',16.5,' ',59,' ',15,' ',78,' ',8,' ',20,' ',0,' ',29.93,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',29.96,' ','Sea level pressure missing; set to -1.','N'),(5,3,'NCDCCAPEMAY','06:35:00','CLR',' ',10,' ',' ',' ',66,' ',19,' ',62,' ',16.5,' ',59,' ',15,' ',78,' ',7,' ',20,' ',0,' ',29.95,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',29.97,' ','Sea level pressure missing; set to -1.','N'),(6,3,'NCDCCAPEMAY','06:55:00','CLR',' ',10,' ',' ',' ',68,' ',20,' ',63,' ',17,' ',59,' ',15,' ',73,' ',9,' ',10,' ',0,' ',29.95,' ',2,' ',20,' ',-1,' ','AA',' ',0,' ',29.97,' ','Sea level pressure missing; set to -1.','N'),(7,4,'NCDCCAPEMAY','07:15:00','CLR',' ',10,' ',' ',' ',70,' ',21,' ',65,' ',18,' ',61,' ',16,' ',73,' ',8,' ',10,' ',0,' ',29.96,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',29.98,' ','Sea level pressure missing; set to -1.','N'),(8,4,'NCDCCAPEMAY','07:35:00','FEW060',' ',10,' ',' ',' ',70,' ',21,' ',65,' ',18,' ',61,' ',16,' ',73,' ',9,' ',20,' ',0,' ',29.96,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',29.98,' ','Sea level pressure missing; set to -1.','N'),(9,4,'NCDCCAPEMAY','07:55:00','BKN060 BKN075',' ',10,' ',' ',' ',70,' ',21,' ',65,' ',18,' ',61,' ',16,' ',73,' ',6,' ',30,' ',0,' ',29.96,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',29.99,' ','Sea level pressure missing; set to -1.','NE'),(10,5,'NCDCCAPEMAY','08:15:00','SCT065 SCT075',' ',10,' ',' ',' ',72,' ',22,' ',65,' ',18.4,' ',61,' ',16,' ',68,' ',9,' ',10,' ',0,' ',29.96,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',29.99,' ','Sea level pressure missing; set to -1.','N'),(11,5,'NCDCCAPEMAY','08:35:00','CLR',' ',10,' ',' ',' ',73,' ',23,' ',66,' ',18.6,' ',61,' ',16,' ',66,' ',8,' ',20,' ',0,' ',29.96,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',29.99,' ','Sea level pressure missing; set to -1.','N'),(12,5,'NCDCCAPEMAY','08:55:00','CLR',' ',10,' ',' ',' ',75,' ',24,' ',67,' ',19.6,' ',63,' ',17,' ',66,' ',8,' ',30,' ',0,' ',29.98,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30,' ','Sea level pressure missing; set to -1.','NE'),(13,6,'NCDCCAPEMAY','09:15:00','CLR',' ',10,' ',' ',' ',75,' ',24,' ',67,' ',19.6,' ',63,' ',17,' ',66,' ',8,' ',20,' ',0,' ',29.98,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30,' ','Sea level pressure missing; set to -1.','N'),(14,6,'NCDCCAPEMAY','09:35:00','CLR',' ',8,' ',' ',' ',75,' ',24,' ',68,' ',20,' ',64,' ',18,' ',69,' ',6,' ',20,' ',0,' ',29.98,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30,' ','Sea level pressure missing; set to -1.','N'),(15,6,'NCDCCAPEMAY','09:55:00','FEW080',' ',-1,' ',' ',' ',77,' ',25,' ',69,' ',20.3,' ',64,' ',18,' ',64,' ',11,' ',50,' ',0,' ',29.98,' ',2,' ',14,' ',-1,' ','AA',' ',0,' ',30.01,' ','Sea level pressure missing; set to -1. Visibility missing; set to -1','NE'),(16,7,'NCDCCAPEMAY','10:15:00','FEW032 FEW080',' ',-1,' ',' ',' ',77,' ',25,' ',69,' ',20.3,' ',64,' ',18,' ',64,' ',6,' ',60,' ',0,' ',29.98,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.01,' ','Sea level pressure missing; set to -1. Visibility missing; set to -1','NE'),(17,7,'NCDCCAPEMAY','10:35:00','FEW032 SCT075',' ',-1,' ',' ',' ',79,' ',26,' ',69,' ',20.7,' ',64,' ',18,' ',60,' ',7,' ',70,' ',0,' ',29.98,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.01,' ','Sea level pressure missing; set to -1. Visibility missing; set to -1','E'),(18,7,'NCDCCAPEMAY','10:55:00','CLR',' ',-1,' ',' ',' ',77,' ',25,' ',68,' ',20,' ',63,' ',17,' ',62,' ',7,' ',60,' ',0,' ',29.98,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.01,' ','Sea level pressure missing; set to -1. Visibility missing; set to -1','NE'),(19,8,'NCDCCAPEMAY','05:15:00','CLR',' ',10,' ',' ',' ',64,' ',18,' ',63,' ',17.4,' ',63,' ',17,' ',97,' ',0,' ',0,' ',0,' ',30.04,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.07,' ','Sea level pressure missing; set to -1.','N'),(20,9,'NCDCCAPEMAY','05:35:00','CLR',' ',10,' ',' ',' ',64,' ',18,' ',63,' ',17.4,' ',63,' ',17,' ',97,' ',0,' ',0,' ',0,' ',30.04,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.07,' ','Sea level pressure missing; set to -1.','N'),(21,9,'NCDCCAPEMAY','05:55:00','CLR',' ',10,' ',' ',' ',64,' ',18,' ',63,' ',17.4,' ',63,' ',17,' ',97,' ',0,' ',0,' ',0,' ',30.04,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.07,' ','Sea level pressure missing; set to -1.','N'),(22,10,'NCDCCAPEMAY','06:15:00','CLR',' ',10,' ',' ',' ',64,' ',18,' ',63,' ',17.4,' ',63,' ',17,' ',97,' ',0,' ',0,' ',0,' ',30.04,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.07,' ','Sea level pressure missing; set to -1.','N'),(23,10,'NCDCCAPEMAY','06:35:00','CLR',' ',10,' ',' ',' ',66,' ',19,' ',65,' ',18.2,' ',64,' ',18,' ',93,' ',0,' ',0,' ',0,' ',30.06,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.09,' ','Sea level pressure missing; set to -1.','N'),(24,10,'NCDCCAPEMAY','06:55:00','CLR',' ',10,' ',' ',' ',70,' ',21,' ',67,' ',19.7,' ',66,' ',19,' ',87,' ',0,' ',0,' ',0,' ',30.08,' ',2,' ',17,' ',-1,' ','AA',' ',0,' ',30.1,' ','Sea level pressure missing; set to -1.','N'),(25,11,'NCDCCAPEMAY','07:15:00','CLR',' ',10,' ',' ',' ',73,' ',23,' ',70,' ',20.9,' ',68,' ',20,' ',84,' ',5,' ',290,' ',0,' ',30.08,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.1,' ','Sea level pressure missing; set to -1.','NW'),(26,11,'NCDCCAPEMAY','07:35:00','CLR',' ',10,' ',' ',' ',73,' ',23,' ',69,' ',20.2,' ',66,' ',19,' ',79,' ',5,' ',290,' ',0,' ',30.09,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.11,' ','Sea level pressure missing; set to -1.','NW'),(27,11,'NCDCCAPEMAY','07:55:00','CLR',' ',10,' ',' ',' ',73,' ',23,' ',70,' ',20.9,' ',68,' ',20,' ',84,' ',5,' ',340,' ',0,' ',30.09,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.11,' ','Sea level pressure missing; set to -1.','NW'),(28,12,'NCDCCAPEMAY','08:15:00','CLR',' ',10,' ',' ',' ',73,' ',23,' ',69,' ',20.2,' ',66,' ',19,' ',79,' ',3,' ',340,' ',0,' ',30.09,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.12,' ','Sea level pressure missing; set to -1.','NW'),(29,12,'NCDCCAPEMAY','08:35:00','CLR',' ',10,' ',' ',' ',73,' ',23,' ',69,' ',20.2,' ',66,' ',19,' ',79,' ',3,' ',340,' ',0,' ',30.11,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.13,' ','Sea level pressure missing; set to -1.','NW'),(30,12,'NCDCCAPEMAY','08:55:00','CLR',' ',-1,' ',' ',' ',75,' ',24,' ',69,' ',20.6,' ',66,' ',19,' ',74,' ',0,' ',0,' ',0,' ',30.11,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.13,' ','Sea level pressure missing; set to -1. Visibility missing; set to -1','N'),(31,13,'NCDCCAPEMAY','09:15:00','CLR',' ',-1,' ',' ',' ',75,' ',24,' ',68,' ',20,' ',64,' ',18,' ',69,' ',3,' ',320,' ',0,' ',30.11,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.13,' ','Sea level pressure missing; set to -1. Visibility missing; set to -1','NW'),(32,13,'NCDCCAPEMAY','09:35:00','CLR',' ',-1,' ',' ',' ',77,' ',25,' ',69,' ',20.3,' ',64,' ',18,' ',64,' ',0,' ',0,' ',0,' ',30.11,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.13,' ','Sea level pressure missing; set to -1. Visibility missing; set to -1','N'),(33,13,'NCDCCAPEMAY','09:55:00','CLR',' ',-1,' ',' ',' ',79,' ',26,' ',69,' ',20.7,' ',64,' ',18,' ',60,' ',0,' ',0,' ',0,' ',30.11,' ',2,' ',14,' ',-1,' ','AA',' ',0,' ',30.14,' ','Sea level pressure missing; set to -1. Visibility missing; set to -1','N'),(34,14,'NCDCCAPEMAY','10:15:00','CLR',' ',-1,' ',' ',' ',79,' ',26,' ',69,' ',20.4,' ',63,' ',17,' ',58,' ',3,' ',310,' ',0,' ',30.11,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.13,' ','Sea level pressure missing; set to -1. Visibility missing; set to -1','NW'),(35,14,'NCDCCAPEMAY','10:35:00','CLR',' ',-1,' ',' ',' ',79,' ',26,' ',68,' ',19.8,' ',61,' ',16,' ',54,' ',0,' ',0,' ',0,' ',30.11,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.13,' ','Sea level pressure missing; set to -1. Visibility missing; set to -1','N'),(36,14,'NCDCCAPEMAY','10:55:00','CLR',' ',-1,' ',' ',' ',79,' ',26,' ',69,' ',20.7,' ',64,' ',18,' ',60,' ',0,' ',0,' ',0,' ',30.11,' ',0,' ',0,' ',-1,' ','AA',' ',0,' ',30.14,' ','Sea level pressure missing; set to -1. Visibility missing; set to -1','N');
/*!40000 ALTER TABLE `tbl_ncdcweather` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_wcmweather`
--

DROP TABLE IF EXISTS `tbl_wcmweather`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_wcmweather` (
  `WCMID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'West Cape May Hourly record primary key; autonumber',
  `HoursID` int(11) DEFAULT NULL COMMENT 'Relates the hourly weather record to the hour of count for a certain date; related to tbl_mfhours',
  `StationID` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Relates the hourly weather record to a station description; related to tbl_mfweatherstations',
  `WeatherTime` time DEFAULT NULL COMMENT 'Time of hourly reading',
  `TempAvg` float DEFAULT NULL COMMENT 'Average temperature in degrees F',
  `TempMin` float DEFAULT NULL COMMENT 'Minimum temperature in degrees F',
  `TempMax` float DEFAULT NULL COMMENT 'Maximum temperature in degrees F',
  `RelHumAvg` float DEFAULT NULL COMMENT 'Average relative humidity in percent to the tenths',
  `RelHumMin` float DEFAULT NULL COMMENT 'Minimum relative humidity in percent to the tenths',
  `RelHumMax` float DEFAULT NULL COMMENT 'Maximum relative humidity in percent to the tenths',
  `DewPointAvg` float DEFAULT NULL COMMENT 'Average dew point temperature in degrees F',
  `DewPointMin` float DEFAULT NULL COMMENT 'Minimum dew point temperature in degrees F',
  `DewPointMax` float DEFAULT NULL,
  `Precip` float DEFAULT NULL COMMENT 'Precipitation in inches to hundredths',
  `WindSpeedAvg` float DEFAULT NULL COMMENT 'Average wind speed',
  `WindDirAvg` float DEFAULT NULL COMMENT 'Average wind direction in degrees from true north',
  `WindSpeedMax` float DEFAULT NULL COMMENT 'Maximum wind speed',
  `WindDirMax` float DEFAULT NULL COMMENT 'Maximum wind direction in degrees from true north',
  `Comments` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Comments regarding data',
  `WindDirAlpha` enum('N','NE','E','SE','S','SW','W','NW') COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Interpretation of wind degrees from north to conventional alpha terms. Limited to list of eight basic directions.',
  PRIMARY KEY (`WCMID`),
  KEY `HoursID` (`HoursID`,`StationID`),
  KEY `StationID` (`StationID`),
  CONSTRAINT `fk_wcmstations` FOREIGN KEY (`StationID`) REFERENCES `tbl_mfweatherstations` (`StationID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_wcmweatherhrs` FOREIGN KEY (`HoursID`) REFERENCES `tbl_mfhours` (`HoursID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='The table for maintaining hourly weather records from local West Cape May weather station. These records are related to the Hours Table (tbl_mfhours).';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_wcmweather`
--

LOCK TABLES `tbl_wcmweather` WRITE;
/*!40000 ALTER TABLE `tbl_wcmweather` DISABLE KEYS */;
INSERT INTO `tbl_wcmweather` VALUES (1,1,'WESTCAPEMAY','05:00:00',70.0445,69.512,70.664,70.4708,68.42,72.7,59.978,58.712,61.034,0,4.8612,0,13.0302,0,'No wind direction provided',''),(2,2,'WESTCAPEMAY','05:00:00',70.0445,69.512,70.664,70.4708,68.42,72.7,59.978,58.712,61.034,0,4.8612,0,13.0302,0,'No wind direction provided',''),(3,3,'WESTCAPEMAY','06:00:00',68.7695,67.73,69.584,71.6908,68.82,75.2,59.2415,58.748,59.72,0,4.3982,0,10.5136,0,'No wind direction provided',''),(4,4,'WESTCAPEMAY','07:00:00',67.685,67.334,67.964,73.8167,72.4,75.2,59.0225,58.388,59.648,0,4.4522,0,10.5136,0,'No wind direction provided',''),(5,5,'WESTCAPEMAY','08:00:00',68.927,67.658,70.016,70.6633,67.16,74.3,58.991,58.262,59.864,0,5.1863,0,12.1913,0,'No wind direction provided',''),(6,6,'WESTCAPEMAY','09:00:00',70.3775,69.782,71.042,69.6883,65.96,72.6,59.9885,58.676,61.268,0,5.0214,0,12.1913,0,'No wind direction provided',''),(7,7,'WESTCAPEMAY','10:00:00',73.3265,70.826,75.488,66.5717,60.8,72.6,61.4975,59.252,64.562,0,3.4743,0,7.997,0,'No wind direction provided',''),(8,8,'WESTCAPEMAY','05:00:00',68.2205,66.146,70.034,89.6333,84.9,94.5,65.0285,64.22,65.75,0,0.7676,0,4.6416,0,'No wind direction provided',''),(9,9,'WESTCAPEMAY','05:00:00',68.2205,66.146,70.034,89.6333,84.9,94.5,65.0285,64.22,65.75,0,0.7676,0,4.6416,0,'No wind direction provided',''),(10,10,'WESTCAPEMAY','06:00:00',66.029,65.606,66.578,95.95,94.2,97,64.8275,64.274,65.624,0,0.5594,0,2.1251,0,'No wind direction provided',''),(11,11,'WESTCAPEMAY','07:00:00',67.652,66.416,69.044,95.0917,93.3,97.1,66.1745,65.3,67.46,0,0.9966,0,3.8028,0,'No wind direction provided',''),(12,12,'WESTCAPEMAY','08:00:00',71.48,69.044,73.58,89.9833,86.5,95,68.369,66.56,70.106,0,1.8947,0,6.3193,0,'No wind direction provided',''),(13,13,'WESTCAPEMAY','09:00:00',74.2385,73.4,75.092,83.2083,75.5,88.4,68.78,66.776,70.07,0,4.6711,0,9.6747,0,'No wind direction provided',''),(14,14,'WESTCAPEMAY','10:00:00',76.3685,75.002,78.08,70.7708,59.72,78.8,66.137,61.826,68.054,0,3.8708,0,9.6747,0,'No wind direction provided','');
/*!40000 ALTER TABLE `tbl_wcmweather` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-20 13:34:32
