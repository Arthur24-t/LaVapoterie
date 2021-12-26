/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 5.7.31 : Database - lavapoterie
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lavapoterie` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `lavapoterie`;

/*Table structure for table `client` */

DROP TABLE IF EXISTS `client`;

CREATE TABLE `client` (
  `cliId` int(5) NOT NULL,
  `cliNom` varchar(15) NOT NULL,
  `cliPrenom` varchar(15) NOT NULL,
  `cliMail` varchar(30) NOT NULL,
  `cliDate` date NOT NULL,
  `cliAge` int(3) NOT NULL,
  PRIMARY KEY (`cliId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `client` */

insert  into `client`(`cliId`,`cliNom`,`cliPrenom`,`cliMail`,`cliDate`,`cliAge`) values 
(1,'Bondroit','Sophie','connasse@gmail.com','2021-12-03',20),
(2,'Wandolski','Pauline','grospute@gmail.com','2021-12-03',20),
(3,'Trusgnach','Arthur','arthur@gmail.com','2021-12-03',20),
(4,'Trioux','Axel','charo@gmail.com','2021-12-03',19),
(5,'Perera','Donovan','ledebile@gmail.com','2021-12-03',20),
(6,'Mohamed','Amine','sanspapier@gmail.com','2021-12-03',30),
(7,'Tsougnui','Henri','pinguin@gmail.com','2021-12-03',60),
(8,'Chien','sam','SAm@gmail.com','2021-12-03',1);

/*Table structure for table `produit` */

DROP TABLE IF EXISTS `produit`;

CREATE TABLE `produit` (
  `prodId` varchar(4) NOT NULL,
  `prodNom` varchar(40) DEFAULT NULL,
  `prodCateg` varchar(10) NOT NULL,
  `prodStock` int(5) DEFAULT NULL,
  `prodPrix` int(5) DEFAULT NULL,
  PRIMARY KEY (`prodId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `produit` */

insert  into `produit`(`prodId`,`prodNom`,`prodCateg`,`prodStock`,`prodPrix`) values 
('C01','Pod Caliburn','Cigarette',57,30),
('P02','Resistance 50w','Resistance',2,3),
('A03','Pochette ','Rangement',47,20),
('C04','Ecigarette kit','Cigarette',8,40),
('L05','Liquide Pomme','Liquide',65,10),
('L06','Liquide Fraise','Liquide',89,11),
('P07','reservoir 10ml','Reservoir',62,4),
('C08','target kit','Cigarette',2,80),
('L09','Liquide Citron','Liquide',78,12),
('A10','chiffon','Nettoyage',72,1),
('A11','ACU 30w','Pile',15,10),
('A12','Chargeur double','Pile',36,14),
('A13','Outil demontage','Outil',41,21),
('C14','aegis solo','Cigarette',15,54),
('C15','M100','Cigarette',3,70),
('A17','Pochette Rangement','Rangement',100,25),
('C16','Pod 2000','Cigarette',12,15),
('P18','Batterie','Piles',11,150),
('A19','Seringue 10ml','Contenant',200,10),
('A20','Flacon','Contenant',600,12),
('L21','liquide Banane','Liquide',45,11),
('C22','VapeZen','Cigarette',23,123),
('A23','Drip Trip Bleu','Drip',5,30),
('A24','Reservoir','Contenance',0,100),
('L25','Liquide Ananas','Liquide',45,9),
('L26','Liquide Exotique','Liquide',22,10),
('P27','Clearomiseur','Autre',2,110),
('C28','Cigarette Perfect','Cigarette',4,125),
('C29','Cigarette Economique','Cigarette',56,100),
('L30','Liquide Mangue','Liquide',120,12);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


CREATE TABLE `commande` (
  `comRef` varchar(4) NOT NULL,
  `comClient` varchar(40) NOT NULL,
  `comDate` date NOT NULL,
  `comExpedition` int(5) DEFAULT NULL,
  `comRefExepediteur` int(5) DEFAULT NULL,
  PRIMARY KEY (`comRef`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `detailCommande` (
  `refProduit` varchar(4) NOT NULL,
  `refCommande` varchar(40) NOT NULL, 
  PRIMARY KEY (`refProduit`, `refCommande`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;