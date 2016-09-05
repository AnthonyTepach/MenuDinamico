CREATE DATABASE MENU;
USE MENU;
CREATE TABLE `opcion` (
  `id_opc` int(11) NOT NULL,
  `nom_opc` text,
  PRIMARY KEY (`id_opc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;