-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 16 mai 2019 à 15:49
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `alertes`
--

-- --------------------------------------------------------

--
-- Structure de la table `alertes`
--

DROP TABLE IF EXISTS `alertes`;
CREATE TABLE IF NOT EXISTS `alertes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `potentielle_alerte` tinyint(1) NOT NULL,
  `datetime_alerte` varchar(50) NOT NULL,
  `id_sensor` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `etat_trait` tinyint(1) NOT NULL,
  `datetime` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `alertes`
--

INSERT INTO `alertes` (`id`, `potentielle_alerte`, `datetime_alerte`, `id_sensor`, `id_client`, `etat_trait`, `datetime`) VALUES
(1, 1, '10-05-2019 11:12:11', 1, 1, 0, '2019-05-15 22:00:00'),
(2, 1, '10-05-2019 11:12:11', 2, 2, 0, '2019-05-15 22:00:00'),
(3, 1, '10/05/2019 11:11:11', 2, 2, 0, '2019-05-15 22:00:00'),
(4, 1, '12/30/2019 55:22:02', 1, 3, 0, '2019-05-15 22:00:00'),
(5, 1, '2019-05-15 00:00:00', 2, 4, 0, '2019-05-15 22:00:00'),
(6, 1, '2019-05-16 00:00:00', 1, 1, 0, '2019-05-15 22:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `date_nais` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `code_postal` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel_per` int(25) NOT NULL,
  `tel_tutel` int(25) NOT NULL,
  `id_sensor` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sensor_id` (`id_sensor`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `sexe`, `date_nais`, `address`, `code_postal`, `email`, `tel_per`, `tel_tutel`, `id_sensor`, `created_at`) VALUES
(1, 'DUPONT', 'ANTOINE', 'H', '1945-05-06', '20 av Dubouchard', '06', 'antoine@orange.fr', 123456, 321456, 1, '2019-05-15 22:00:00'),
(2, 'CORIN', 'Anne', 'F', '1955-05-14', '10 bd Jean Berha', '06', 'anne@orange.fr', 698745, 123654, 2, '2019-05-15 22:00:00'),
(3, 'NGUYEN', 'Thanh', 'F', '1933-05-09', '33 Rue Tournefort', '75005', 'nguyenthanhmary@yahoo.fr', 683760285, 683760285, 1, '2019-05-16 12:08:22'),
(4, 'NGUYEN', 'Thanh', 'F', '1933-05-09', '33 Rue Tournefort', '75005', 'nguyenthanhmary@yahoo.fr', 683760285, 683760285, 1, '2019-05-16 12:09:56'),
(5, 'aaa', 'Aurelie', 'H', '1966-05-02', '10 BOULEVARD JEAN BEHRA', '06100', 'aurelie@yahoo.fr', 23333333, 555555555, 2, '2019-05-16 12:18:33');

-- --------------------------------------------------------

--
-- Structure de la table `sensors`
--

DROP TABLE IF EXISTS `sensors`;
CREATE TABLE IF NOT EXISTS `sensors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `add_mac` varchar(255) NOT NULL,
  `add_IP` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sensors`
--

INSERT INTO `sensors` (`id`, `libelle`, `add_mac`, `add_IP`) VALUES
(1, 'ACCEL', '123456789', '1p2e2ce55zrzr'),
(2, 'PIR', '3698741', 'od41ee22eee55e');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fonction` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `fonction`) VALUES
(1, 'MOI', 'moi@moi.com', '$2y$10$anNTb9NsTCvSj67fOkqBYeJiYdRrKyGoQpqJR0emp7E3PUWPEY0RG', '2019-01-31 12:18:55', 'technicien'),
(2, 'TOI', 'toi@toi.com', '$2y$10$lvNJLcYfy1eG2oL4s6NtFeUzkJjzAdTVBuEut2wKuz/vx0V9MXZbi', '2019-02-01 11:38:42', 'Developper');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `alertes`
--
ALTER TABLE `alertes`
  ADD CONSTRAINT `id_client` FOREIGN KEY (`id_client`) REFERENCES `alertes` (`id`);

--
-- Contraintes pour la table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `sensor_id` FOREIGN KEY (`id_sensor`) REFERENCES `sensors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
