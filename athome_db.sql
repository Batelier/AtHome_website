-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 09 mai 2019 à 09:44
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
-- Structure de la table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `complete_name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`contact_id`)
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `orating_state` tinyint(1) NOT NULL,
  PRIMARY KEY (`equipment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `useful` int(11) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`question_id`, `question`, `answer`, `useful`) VALUES
(1, 'Comment DABer ?', '1. tendre un bras sur le coté (sans faire de salut nazi) \r\n2. tendre le deuxieme bras dans la meme direction que le premier\r\n3. plier legèrement le 2eme \r\n\r\nEt voila ! Vous avez accompli votre 1er DAB ! \r\nFélicitation GIGA-DABeur !!!', 666),
(2, 'Tous les pokemons sont-ils gay ?', 'La réponse est toute trouvée : les pokémons possedant un genre ne sont pas forcément gay (mais apres ils font ce qu\'ils veulent tavu). Au contraire les pokemon ne possedant pas de genre se reproduisent par mitose, et donc ne copulent pas. Ceci enlève donc tout doute possible : les pokémons non genrés ne sont pas gay. Toutefois, la théorie de la mitose n\'est pas admise par toute la communauté scientifique. De ce fait, les partisans de #balanceTaMitose considèrent que tous les pokémons non genrés sont gay.\r\n(Cet article est \"pour un ami\")  ', 151),
(3, 'Comment ?', 'Comme ça : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec sagittis massa. Nulla facilisi. Cras id arcu lorem, et semper purus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vel enim mi, in lobortis sem. Vestibulum luctus elit eu libero ultrices id fermentum sem sagittis.', 2);

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
  `room_id` int(11) NOT NULL,
  PRIMARY KEY (`home_id`),
  KEY `user_id` (`user_id`),
  KEY `room_id` (`room_id`)
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `name`, `first_name`, `password`, `mail`, `phone`, `mobile`, `registration`, `user_type`) VALUES
(1, 'latouffe', 'bob', '$2y$10$hpD/ZOO3QzwwhrGRG73.Nudkjfuxvd8ycO/HIjBlhzy4bUyT3W26W', 'client@gmail.com', '0000000000', '0000000000', '2019-05-07', 'utilisateur_principal');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
