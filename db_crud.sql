-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.38-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema kuliah
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ kuliah;
USE kuliah;

--
-- Table structure for table `kuliah`.`admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuliah`.`admin`
--

/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`,`username`,`password`) VALUES 
 (1,'admin','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


--
-- Table structure for table `kuliah`.`kuliah`
--

DROP TABLE IF EXISTS `kuliah`;
CREATE TABLE `kuliah` (
  `nim` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuliah`.`kuliah`
--

/*!40000 ALTER TABLE `kuliah` DISABLE KEYS */;
INSERT INTO `kuliah` (`nim`,`nama`,`alamat`) VALUES 
 ('4166417021','Ronaldo','Italia'),
 ('4611410768','dany','Kebumen'),
 ('4611417022','Hoho','Kebumen'),
 ('4611417034','risa','kebumen');
/*!40000 ALTER TABLE `kuliah` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
