-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour sauvons-les
CREATE DATABASE IF NOT EXISTS `sauvons-les` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sauvons-les`;

-- Listage de la structure de la table sauvons-les. animal
CREATE TABLE IF NOT EXISTS `animal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `poids` float DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `description` text,
  `date_ajout` datetime DEFAULT CURRENT_TIMESTAMP,
  `isDisponible` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Listage des données de la table sauvons-les.animal : ~3 rows (environ)
/*!40000 ALTER TABLE `animal` DISABLE KEYS */;
INSERT INTO `animal` (`id`, `nom`, `age`, `poids`, `image`, `description`, `date_ajout`, `isDisponible`) VALUES
	(1, 'Garfield', 0, 0, 'https://i.pinimg.com/550x/1c/48/4f/1c484fd8da81d0b03fc1c583ec423373.jpg', '', '2021-10-12 11:29:11', 1),
	(4, 'Garfield 2', 0, 20, 'https://i.pinimg.com/550x/1c/48/4f/1c484fd8da81d0b03fc1c583ec423373.jpg', 'LOrem lqksskdnvdlcnnnnnnnnnn', '2021-10-12 18:18:32', 1),
	(5, 'Garfield 2', 0, 20, 'https://i.pinimg.com/550x/1c/48/4f/1c484fd8da81d0b03fc1c583ec423373.jpg', 'LOrem lqksskdnvdlcnnnnnnnnnn', '2021-10-12 18:18:51', 1);
/*!40000 ALTER TABLE `animal` ENABLE KEYS */;

-- Listage de la structure de la table sauvons-les. contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_contact` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `tel` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Listage des données de la table sauvons-les.contact : ~1 rows (environ)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`id`, `email_contact`, `message`, `tel`) VALUES
	(2, 'test@yopmail.com', 'Je veux tous', '0102030405');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Listage de la structure de la table sauvons-les. user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Listage des données de la table sauvons-les.user : ~2 rows (environ)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `name`, `email`, `mdp`, `isAdmin`) VALUES
	(1, 'Kara', 'kara@yopmail.com', 'kara1234', 1),
	(2, 'Karamoko', 'user@yomail.com', 'kara1234', 1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
