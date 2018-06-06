-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 06 Juin 2018 à 16:44
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gevent_bdd`
--
CREATE DATABASE IF NOT EXISTS `gevent_bdd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gevent_bdd`;

-- --------------------------------------------------------

--
-- Structure de la table `t_events`
--

CREATE TABLE IF NOT EXISTS `t_events` (
  `idEvent` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `date` datetime NOT NULL,
  `private` tinyint(1) NOT NULL,
  `validate` tinyint(1) DEFAULT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `place_name` varchar(100) NOT NULL,
  `adress` varchar(200) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idEvent`),
  KEY `idUser` (`idUser`),
  KEY `idUser_2` (`idUser`),
  KEY `idUser_3` (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `t_events`
--

INSERT INTO `t_events` (`idEvent`, `name`, `description`, `date`, `private`, `validate`, `lat`, `lng`, `place_name`, `adress`, `idUser`) VALUES
(2, 'Paléo Festival', 'Le Paléo Festival Nyon, généralement appelé Paléo, est le plus grand festival en plein air de Suisse à Nyon et fait partie des événements musicaux majeurs en Europe. Il dure six jours, six nuits, avec environ 230 000 spectateurs attendus, plus de 230 concerts et spectacles répartis sur six scènes.', '2018-07-18 00:00:00', 0, NULL, 46.24, 6.12, 'Nyon', '', 4);

-- --------------------------------------------------------

--
-- Structure de la table `t_friendship`
--

CREATE TABLE IF NOT EXISTS `t_friendship` (
  `user_ask` int(11) NOT NULL,
  `user_receive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_users`
--

CREATE TABLE IF NOT EXISTS `t_users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `t_users`
--

INSERT INTO `t_users` (`idUser`, `username`, `email`, `password`) VALUES
(4, 'Admin', 'admin@admin.ch', '7c222fb2927d828af22f592134e8932480637c0d');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `t_events`
--
ALTER TABLE `t_events`
  ADD CONSTRAINT `t_events_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `t_users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
