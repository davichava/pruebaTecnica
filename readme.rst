# prueba Tecnica


# crear base de datos

CREATE DATABASE `clients` /*!40100 DEFAULT CHARACTER SET utf8 */;

# crear tabla client

CREATE TABLE `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
	`identification` varchar(255) DEFAULT NULL
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
