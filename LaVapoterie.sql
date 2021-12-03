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
('C01','Pod Caliburn','Cigarette',57,30);