-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 02 avr. 2023 à 14:45
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `appreciation_hopital`
--

-- --------------------------------------------------------

--
-- Structure de la table `observation`
--

CREATE TABLE `observation` (
  `NumObs` int(11) NOT NULL,
  `NoteObs` smallint(2) NOT NULL,
  `AppreciationObs` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `observation`
--

INSERT INTO `observation` (`NumObs`, `NoteObs`, `AppreciationObs`) VALUES
(1, 18, 'Très-bien'),
(2, 18, 'Très-bien'),
(3, 18, 'Très-bien'),
(4, 10, 'Neutre'),
(5, 10, 'Neutre'),
(6, 12, 'Neutre'),
(7, 0, ''),
(8, 12, 'Neutre'),
(9, 0, ''),
(10, 0, 'Neutre'),
(11, 0, 'Assez-bien');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `observation`
--
ALTER TABLE `observation`
  ADD PRIMARY KEY (`NumObs`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `observation`
--
ALTER TABLE `observation`
  MODIFY `NumObs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
