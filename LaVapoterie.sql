
CREATE DATABASE ;

USE `lavapoterie`;

/*Table structure for table `client` */

DROP TABLE IF EXISTS `client`;

CREATE TABLE `client` (
  `cliId` INT(5) AUTO_INCREMENT NOT NULL,
  `cliPseudo` VARCHAR(100) NOT NULL,
  `cliMdp` VARCHAR(100) NOT NULL,
  `cliNom` VARCHAR(100) NOT NULL,
  `cliPrenom` VARCHAR(100) NOT NULL,
  `cliMail` VARCHAR(100) NOT NULL,
  `cliDate` DATE NOT NULL,
  `cliAge` DATE NOT NULL,
  `cliAdresse` VARCHAR(100),
  `cliCompAdresse` VARCHAR(100),
  `cliCpostal` VARCHAR(100),
  `cliVille` VARCHAR(100),
  `cliAdresseFac` VARCHAR(100),
  `cliCompAdresseFac` VARCHAR(100),
  `cliCpostalFac` VARCHAR(100),
  `cliVilleFac` VARCHAR(100),
  `cliNumCarte` INTEGER(16),
  `cliDateExpiration` VARCHAR(5),
  `cliCryptogramme` INTEGER(3) ,
  PRIMARY KEY (`cliId`)
) ENGINE=MYISAM DEFAULT CHARSET=latin1;


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
('L30','Liquide Mangue','Liquide',120,12)
('A28','Pochette accessoire','Rangement',10,25)
('A45','Seringue','Contenance',218,2)
('A26','Chargeur ','Pile',33,140);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


CREATE TABLE `commande` (
  `comRef` INTEGER(15) NOT NULL,
  `comClient` varchar(40) NOT NULL,
  `comDate` date NOT NULL,
  `comExpedition` int(5) DEFAULT NULL,
  `comRefExepediteur` int(5) DEFAULT NULL,
  PRIMARY KEY (`comRef`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `detailCommande` (
  `refProduit` varchar(4) NOT NULL,
  `refCommande` varchar(40) NOT NULL,
  `quantite` NUMERIC(5) NOT NULL,
  PRIMARY KEY (`refProduit`, `refCommande`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE detailCommande ADD CONSTRAINT FK_produit FOREIGN KEY (refProduit)  REFERENCES produit (prodId) ON DELETE CASCADE;
ALTER TABLE detailCommande ADD CONSTRAINT FK_commande FOREIGN KEY (refCommande)  REFERENCES commande (comRef) ON DELETE CASCADE;
