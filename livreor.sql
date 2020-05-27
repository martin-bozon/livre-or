-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 27 mai 2020 à 15:40
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(20, 'Le formulaire doit avoir deux inputs : â€œloginâ€ et â€œpasswordâ€. Lorsque le\r\nformulaire est validÃ©, sâ€™il existe un utilisateur en bdd correspondant Ã  ces\r\ninformations, alors lâ€™utilisateur devient connectÃ© et une (ou plusieurs)\r\nvariables de session sont crÃ©Ã©es.', 5, '2020-05-27 17:39:43'),
(19, 'ioyjr erg ze th ', 5, '2020-05-27 17:39:17'),
(18, 'fZRFZ ZFQRG QEt', 5, '2020-05-27 17:39:10'),
(13, 'ihrvZR  ZMH MOIZ UFEA ', 3, '2020-05-27 17:15:35'),
(14, 'bla bla bla', 4, '2020-05-27 17:17:51'),
(15, 'lo lo lo', 4, '2020-05-27 17:18:01'),
(16, 'blabla bla', 6, '2020-05-27 17:38:45'),
(17, 'poarf faiejf a', 6, '2020-05-27 17:38:52'),
(12, 'BLABLABLA', 3, '2020-05-27 17:15:21');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(6, 'test', '$2y$10$rLWK9Nr3lg4AF5L5lOpg0.iSB8d5zHd8fDHvWt19N8AfUZJScDx5C'),
(5, 'Tarpin', '$2y$10$vRNQ46Zp.YXvEB06dAoJDOBfwAgLBVomNaNEuO7s/5/ZPfobHY6ya');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
