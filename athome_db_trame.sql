-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 03 juin 2019 à 08:40
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `athome_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `attribute`
--

DROP TABLE IF EXISTS `attribute`;
CREATE TABLE IF NOT EXISTS `attribute` (
  `secondary_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `primary_user_id` int(11) NOT NULL,
  `privilege_1` tinyint(1) NOT NULL,
  `privilege_2` tinyint(1) NOT NULL,
  `privilege_3` tinyint(1) NOT NULL,
  `privilege_4` tinyint(1) NOT NULL,
  PRIMARY KEY (`secondary_user_id`),
  KEY `primary_user_id` (`primary_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `catalogue`
--

DROP TABLE IF EXISTS `catalogue`;
CREATE TABLE IF NOT EXISTS `catalogue` (
  `catalogue_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (`catalogue_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `catalogue`
--

INSERT INTO `catalogue` (`catalogue_id`, `title`, `text`) VALUES
(1, 'Nouveau capteur disponible !', 'Nouveau capteur de tempÃ©rature disponible !'),
(2, 'Mise Ã  jour de la faq', 'DerniÃ¨re question rÃ©ponse en ligne !'),
(5, 'DÃ©couvrez AtHome', 'La solution domotique'),
(6, 'Nouveau capteur disponible !', 'Capteur humidite');

-- --------------------------------------------------------

--
-- Structure de la table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `complete_name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `complete_name`, `mail`, `message`) VALUES
(1, 'Baptiste Roberjot', 'yomek@g.com', 'Bonsoir'),
(2, 'Baptiste Roberjot', 'baptiste.rbj@gmail.com', 'Bonsoir'),
(3, 'Baptiste Roberjot', 'yomek@g.com', 'zerg'),
(4, 'Baptiste Roberjot', 'yomek@g.com', 'zaefaze'),
(5, 'Baptiste Roberjot', 'azer', 'azeufbgalzueo azliejpazile alzhbfe'),
(6, 'Baptiste Roberjot', 'baptiste.rbj@gmail.com', 'Bonsoir, je ne parviens pas Ã  daber'),
(7, 'Baptiste Roberjot', 'zae', 'aze'),
(8, 'Baptiste Roberjot', 'zae', 'aze'),
(9, 'Martin ', 'joe@gmail.com', 'Je ne parviens pas Ã  me connecter');

-- --------------------------------------------------------

--
-- Structure de la table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `data_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL,
  `num_objet` int(11) DEFAULT NULL,
  `type_requete` int(11) DEFAULT NULL,
  `type_capteur` int(11) DEFAULT NULL,
  `numero_capteur` int(11) DEFAULT NULL,
  `valeur` int(11) DEFAULT NULL,
  `num_trame` int(11) DEFAULT NULL,
  `checksum` int(11) DEFAULT NULL,
  `annee` int(11) DEFAULT NULL,
  `mois` int(11) DEFAULT NULL,
  `jour` int(11) DEFAULT NULL,
  `heure` int(11) DEFAULT NULL,
  `minutes` int(11) DEFAULT NULL,
  `secondes` int(11) DEFAULT NULL,
  PRIMARY KEY (`data_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `domisep_intervention`
--

DROP TABLE IF EXISTS `domisep_intervention`;
CREATE TABLE IF NOT EXISTS `domisep_intervention` (
  `intervention_id` int(11) NOT NULL AUTO_INCREMENT,
  `intervention _date` date NOT NULL,
  `report` text NOT NULL,
  `disponibility` tinyint(1) NOT NULL,
  `price` float NOT NULL,
  `sas_failure_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`intervention_id`),
  KEY `sas_failure_id` (`sas_failure_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `equip`
--

DROP TABLE IF EXISTS `equip`;
CREATE TABLE IF NOT EXISTS `equip` (
  `equip_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  PRIMARY KEY (`equip_id`),
  KEY `equipment_id` (`equipment_id`),
  KEY `room_id` (`room_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `equip`
--

INSERT INTO `equip` (`equip_id`, `equipment_id`, `room_id`) VALUES
(3, 3, 2),
(2, 3, 1),
(4, 1, 2),
(5, 1, 3),
(6, 3, 8),
(7, 1, 8),
(8, 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
CREATE TABLE IF NOT EXISTS `equipment` (
  `equipment_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacter` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `orating_state` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`equipment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `equipment`
--

INSERT INTO `equipment` (`equipment_id`, `manufacter`, `model`, `price`, `orating_state`, `name`, `description`) VALUES
(1, 'Stark Industries', 'ART', 50, 1, 'lumiere', 'rÃ©gler la luminositÃ©'),
(3, 'Tony Stark', 'RTY', 50, 1, 'lumiere', 'Allumer ou Ã©teindre');

-- --------------------------------------------------------

--
-- Structure de la table `equipment_type`
--

DROP TABLE IF EXISTS `equipment_type`;
CREATE TABLE IF NOT EXISTS `equipment_type` (
  `equipment_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`equipment_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `failure_type`
--

DROP TABLE IF EXISTS `failure_type`;
CREATE TABLE IF NOT EXISTS `failure_type` (
  `failure_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sas_failure_id` int(11) NOT NULL,
  PRIMARY KEY (`failure_type_id`),
  KEY `sas_failure_id` (`sas_failure_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`question_id`, `question`, `answer`) VALUES
(3, 'Comment ajouter une piÃ¨ce ?', 'Dans votre espace \"Home\", cliquez sur \"ajouter piÃ¨ce\", sÃ©lectionnez la maison dans laquelle vous voulez ajouter la piÃ¨ce, puis indiquez son nom et la surface.'),
(6, 'Question', 'Reponse');

-- --------------------------------------------------------

--
-- Structure de la table `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE IF NOT EXISTS `home` (
  `home_id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `postal_code` int(5) NOT NULL,
  `area` float NOT NULL,
  `water_consumption` float NOT NULL,
  `electrical_consumption` float NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`home_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `home`
--

INSERT INTO `home` (`home_id`, `address`, `postal_code`, `area`, `water_consumption`, `electrical_consumption`, `user_id`) VALUES
(2, '12 rue du pont royal', 69420, 300, 1, 1, 6),
(3, '20 rue de Vanves', 78130, 450, 1, 1, 6),
(4, '12 rue du pont royal', 69420, 2, 1, 1, 11);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `bin_data` longblob,
  `filename` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `filesize` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `file_type` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`image_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `measure`
--

DROP TABLE IF EXISTS `measure`;
CREATE TABLE IF NOT EXISTS `measure` (
  `measure_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `hour` time NOT NULL,
  `value` float NOT NULL,
  `equipment_id` int(11) NOT NULL,
  PRIMARY KEY (`measure_id`),
  KEY `equipment_id` (`equipment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `message_forum`
--

DROP TABLE IF EXISTS `message_forum`;
CREATE TABLE IF NOT EXISTS `message_forum` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_date` date NOT NULL,
  `message_hour` time NOT NULL,
  `message_content` text NOT NULL,
  `message_type` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  PRIMARY KEY (`message_id`),
  KEY `user_id` (`user_id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `program`
--

DROP TABLE IF EXISTS `program`;
CREATE TABLE IF NOT EXISTS `program` (
  `programmed_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL,
  PRIMARY KEY (`programmed_id`),
  KEY `equipment_id` (`equipment_id`),
  KEY `action_id` (`action_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `programmed_action`
--

DROP TABLE IF EXISTS `programmed_action`;
CREATE TABLE IF NOT EXISTS `programmed_action` (
  `action_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `hour` time NOT NULL,
  `details` text NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`action_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `area` float NOT NULL,
  `home_id` int(11) NOT NULL,
  PRIMARY KEY (`room_id`),
  KEY `home_id` (`home_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `room`
--

INSERT INTO `room` (`room_id`, `name`, `area`, `home_id`) VALUES
(1, 'bedroom', 45, 1),
(3, 'Cuisine', 30, 3),
(7, 'bedroom', 45, 2);

-- --------------------------------------------------------

--
-- Structure de la table `sas_failure`
--

DROP TABLE IF EXISTS `sas_failure`;
CREATE TABLE IF NOT EXISTS `sas_failure` (
  `sas_failure_id` int(11) NOT NULL AUTO_INCREMENT,
  `failure_date` date NOT NULL,
  `failure_hour` time NOT NULL,
  `sas_message_date` date NOT NULL,
  `sas_message_hour` time NOT NULL,
  `text` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  PRIMARY KEY (`sas_failure_id`),
  KEY `user_id` (`user_id`),
  KEY `equipment_id` (`equipment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

DROP TABLE IF EXISTS `topic`;
CREATE TABLE IF NOT EXISTS `topic` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `registration` date NOT NULL,
  `user_type` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `name`, `first_name`, `password`, `mail`, `phone`, `mobile`, `registration`, `user_type`) VALUES
(10, 'Henry', 'Jean', '$2y$10$LD8NbEzBVO0a8wBPzwRTzO5gywNLqtTlg81U.oVgH5.uq0.7M2zBK', 'jean@gmail.com', '0656565656', '0589787878', '2019-05-03', 'utilisateur_principal'),
(7, 'Roberjot', 'Baptiste', '$2y$10$icRRWS0D3zLgZ3E8ZVUFOe7c/S..T9N/9UP4N2LpsAfLgUilu6FYe', 'admin@gmail.com', '0656565656', '02', '2019-05-09', 'administrateur'),
(6, 'Roberjot', 'Baptiste', '$2y$10$0j9oEF3omX0V0K5AwCUtEOPD1xuD7XQ/lslJZQQgklBRxBxxbmslS', 'client@gmail.com', '0656565656', '0', '2019-05-02', 'utilisateur_principal'),
(5, 'Roberjot', 'Baptiste', '$2y$10$2hoC70wnJOg3i7AZo/O55OU3eg4Ez7pEeQFUHBj85alIrN4Ycq/0m', 'baptiste.roberjot@gmail.com', '0656565656', '0589787878', '2019-05-09', 'administrateur'),
(11, 'Roberjot', 'Zhaobo', '$2y$10$WcqJU4/yBjXuAPNfNp0dFOKjYyHvIb.dRo5m.zVuAGnvxV2mRnTvK', 'zhaobo@gmail.com', '0656565656', '0589787878', '2019-05-17', 'utilisateur_principal'),
(12, 'Roberjot', 'Zhaobo', '$2y$10$EPLhG9CGL1Ih5SkDGztMleKYAFtPun58891keqRI2c0d0Zs0zTiBa', 'cli@gmail.com', '0656565656', '0589787878', '2019-05-02', 'utilisateur_principal');

-- --------------------------------------------------------

--
-- Structure de la table `website_rating`
--

DROP TABLE IF EXISTS `website_rating`;
CREATE TABLE IF NOT EXISTS `website_rating` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `rating` int(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`rating_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `website_rating`
--

INSERT INTO `website_rating` (`rating_id`, `comment`, `rating`, `user_id`) VALUES
(14, 'Plus besoin de se lever pour allumer les lumiÃ¨res !', 3, 1),
(13, 'TrÃ¨s pratique !', 4, 1),
(12, 'J\'utilise AtHome tous les jours !', 5, 1),
(16, 'AtHome c\'est cool', 5, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
