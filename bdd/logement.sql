-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 23 fév. 2021 à 15:36
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `immobilier`
--

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

CREATE TABLE `logement` (
  `id_logement` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `cp` int(11) NOT NULL,
  `surface` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` text,
  `type` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`id_logement`, `titre`, `adresse`, `ville`, `cp`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
(8, 'test1', '18 Place Georges Pompidou, 93160 Noisy-le-Grand, France', 'Noisy-le-Grand', 93160, 255, 5000, './uploads/logement_1614093434.jpg', 'Location', 'jfjf fjfjffg fklffnflff fkfnflff;fff'),
(9, 'test1', '6 rue du colonel chabanne, Résidence Sillac', 'Noisy-le-Grand', 93160, 2525, 25252525, './uploads/logement_1614093543.jpg', 'Location', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(10, 'test1', '18 Place Georges Pompidou, 93160 Noisy-le-Grand, France', 'Noisy-le-Grand', 93160, 222222, 2222222, './uploads/logement_1614093631.jpg', 'Location', '2222222222222222222222222'),
(11, 'test1', '18 Place Georges Pompidou, 93160 Noisy-le-Grand, France', 'Noisy-le-Grand', 93160, 22222, 222222, './uploads/logement_1614093849.jpg', 'Location', '2222222222222222222222222222222222'),
(12, 'test1', '6 rue du colonel chabanne, Résidence Sillac', 'Angouleme', 16000, 222222, 22222222, './uploads/logement_1614094077.jpg', 'Location', '222222222222222222222222');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`id_logement`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `logement`
--
ALTER TABLE `logement`
  MODIFY `id_logement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
