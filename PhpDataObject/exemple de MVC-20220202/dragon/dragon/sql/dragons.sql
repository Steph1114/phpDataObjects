-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 02 fév. 2022 à 16:03
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10
-- nom de la database : dragon2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dragon2`
--

-- --------------------------------------------------------

--
-- Structure de la table `dragons`
--

CREATE TABLE `dragons` (
  `id_dragon` int(2) NOT NULL,
  `dragon` varchar(50) NOT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `longueur` int(11) DEFAULT NULL,
  `nombre_ecailles` int(11) DEFAULT NULL,
  `crache_feu` varchar(10) DEFAULT NULL,
  `comportement_amoureux` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `dragons`
--

INSERT INTO `dragons` (`id_dragon`, `dragon`, `sexe`, `longueur`, `nombre_ecailles`, `crache_feu`, `comportement_amoureux`) VALUES
(1, 'Smaug', 'Male', 152, 1857, 'oui', 'macho'),
(2, 'Birdurh', 'Male', 258, 4787, 'non', 'timide'),
(3, 'Negueth', 'Female', 128, 1581, 'oui', 'sincere'),
(4, 'MissToc', 'Female', 183, 2781, 'non', 'superflu'),
(5, 'Bolong', 'Male', 213, 2751, 'oui', 'macho'),
(6, 'Miloch', 'Male', 83, 718, 'oui', 'timide'),
(7, 'Nessie', 'Male', 168, 1721, 'non', 'absent'),
(8, 'Tarak', 'Female', 123, 851, 'oui', 'timide'),
(10, 'solong', NULL, NULL, 2345, NULL, NULL),
(14, 'Kevin', NULL, NULL, NULL, NULL, 'gentil des fois'),
(16, 'tototot-- phpMyAdmin SQL Dump', NULL, NULL, NULL, NULL, NULL),
(17, '-- phpMyAdmin SQL Dump', NULL, NULL, NULL, NULL, NULL),
(18, 'toto', NULL, NULL, NULL, NULL, NULL),
(19, 'titi', NULL, NULL, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `dragons`
--
ALTER TABLE `dragons`
  ADD PRIMARY KEY (`id_dragon`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dragons`
--
ALTER TABLE `dragons`
  MODIFY `id_dragon` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
