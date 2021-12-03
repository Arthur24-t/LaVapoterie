CREATE DATABASE lavapoterie;

USE `lavapoterie`;


CREATE TABLE `client` (
  `cliId` INT(5) NOT NULL,
  `cliNom` VARCHAR(15) NOT NULL,
  `cliPrenom` VARCHAR(15) NOT NULL,
  `cliMail` VARCHAR(30) NOT NULL,
  `cliDate` DATE NOT NULL,
  `cliAge` INT(3) NOT NULL,
  PRIMARY KEY (`cliId`)
) ENGINE=MYISAM DEFAULT CHARSET=latin1;

CREATE TABLE `produit` (
  `prodId` INT(4) NOT NULL,
  `prodNom` VARCHAR(15) DEFAULT NULL,
  `prodCateg` VARCHAR(10) NOT NULL,
  `prodStock` INT(5) DEFAULT NULL,
  `prodPrix` INT(5) DEFAULT NULL,
  PRIMARY KEY (`prodId`)
) ENGINE=MYISAM DEFAULT CHARSET=latin1;

INSERT  INTO `client`(`cliId`,`cliNom`,`cliPrenom`,`cliMail`,`cliDate`,`cliAge`) VALUES 
(1,'Bondroit','Sophie','connasse@gmail.com','2021-12-03',20),
(2,'Wandolski','Pauline','grospute@gmail.com','2021-12-03',20),
(3,'Trusgnach','Arthur','arthur@gmail.com','2021-12-03',20),
(4,'Trioux','Axel','charo@gmail.com','2021-12-03',19),
(5,'Perera','Donovan','ledebile@gmail.com','2021-12-03',20),
(6,'Mohamed','Amine','sanspapier@gmail.com','2021-12-03',30),
(7,'Tsougnui','Henri','pinguin@gmail.com','2021-12-03',60);

INSERT  INTO produit(prodId,prodNom,prodCateg,prodStock,prodPrix) VALUES 
('C16','Pod 2000','Cigarette',12,15),
('A17','Pochette Rangement','Rangement',100,25),
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