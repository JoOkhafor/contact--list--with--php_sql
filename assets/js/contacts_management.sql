-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 10 juin 2022 à 16:18
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `contacts_management`
--

-- --------------------------------------------------------

--
-- Structure de la table `message_bdd`
--

CREATE TABLE `message_bdd` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `message_post` text NOT NULL,
  `priorite` varchar(30) NOT NULL,
  `type` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message_bdd`
--

INSERT INTO `message_bdd` (`id`, `name`, `message_post`, `priorite`, `type`) VALUES
(1, 'Guy', 'Hello world', 'Moyen', 'Plainte'),
(2, 'Jo', 'Hello world', 'Moyen', 'Plainte'),
(3, 'Jo', 'Hello world', 'Moyen', 'Plainte'),
(4, 'Okhafor', 'HeLLO EG', 'Moyen', 'Plainte'),
(5, 'Okhafor', 'HeLLO EG', 'Moyen', 'Plainte'),
(13, 'Guy', 'kok', 'Moyen', 'Plainte'),
(14, 'Féikandine', 'Hello je suis Féikandine', 'Sélectionnez:', 'Plainte');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `message_bdd`
--
ALTER TABLE `message_bdd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `message_bdd`
--
ALTER TABLE `message_bdd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
