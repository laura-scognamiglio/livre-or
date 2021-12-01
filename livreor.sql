-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 01 déc. 2021 à 14:26
-- Version du serveur : 5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateurs`, `date`) VALUES
(22, 'jtm', 43, '2021-11-29 18:11:45'),
(23, 'vive le cosmos !', 30, '2021-11-29 18:23:13'),
(24, 'gg', 43, '2021-11-30 12:29:17'),
(25, 'jtm &lt;3', 40, '2021-11-30 14:26:56'),
(26, 'Lolo le veau', 44, '2021-12-01 10:27:12'),
(27, 'wsh', 38, '2021-12-01 12:48:00');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(38, 'zz', '$2y$10$RimFv68eahaHy7ZHnmNmgeLRpLVIVrCe1M06i9rMD4k2SypCx9atK'),
(41, 'zz', '$2y$10$e9.AV32TWjGmxO8T88bcvuRPTcFPkcgElmVy3nbt5wW5bnbnbUn1G'),
(42, 't', '$2y$10$F9V1zJ6BuwHP.LKx6XrmL.xRAhEf5bG/vlJBfANepn3EeWMoRMXSy'),
(43, 'Laura', '$2y$10$ekHnaFBsHhNpmzj1MzyclOf.FIzPTZIsprQAuEW.FRl.027L.5aNy'),
(44, 'Tommy', '$2y$10$zks.QonCaOFFWZ8kf4WJJ.EHY1rs3OU0FEzkOU6HqCdf2V5zLYQgq');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
