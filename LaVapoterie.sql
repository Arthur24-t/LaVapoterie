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