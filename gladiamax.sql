-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 20 nov. 2020 à 13:44
-- Version du serveur :  8.0.22-0ubuntu0.20.04.2
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gladiamax`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'RETIAIRIUS', '\r\nArmed with the trident and a net, and had neither helmet nor shield. His only protections were a shoulder pad, ankle brace and armband.'),
(2, 'THRAEX', '\r\nA curved dagger sharp on both sides of the blade. He was protected by a small shield, often square in shape, and by two leggings that reached up to the thighs. He wore a brimmed helmet.'),
(3, 'SAMNITE', '\r\nArmed with a long rectangular shield (scutum), a helmet surmounted by a plume2, a short sword and a legging on his left leg which reached up to his knee.'),
(4, 'SECUTOR', '\r\nLong shield, protected by a legging on the left leg. His remarkable helmet, without brim, surmounted by a ridgeless crest, therefore offers less net grip than that of other gladiators.'),
(5, 'MURMILLO', '\r\nArmed with his sword, and protected by his scutum shield, helmet, ocrea and leather manica, the mirmillon is the most heavily equipped gladiator.\r\n'),
(6, 'BESTIARIUS', '\r\nA varying equipment, a man who fights in the circus against the beasts, or a gladiator who voluntarily does this profession for money or for glory.'),
(7, 'PROVOCATOR', '\r\nIts armature derives from Samnite. His shield is similar to that of the Roman legionary. The provocator is armed with a dagger which allows only close hits.\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `gladiator`
--

CREATE TABLE `gladiator` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `weight` int NOT NULL COMMENT 'In kilograms',
  `height` int NOT NULL COMMENT 'In cm',
  `sword` int NOT NULL COMMENT 'skill(1-5)',
  `shield` int NOT NULL COMMENT 'skill(1-5)',
  `hand` int NOT NULL COMMENT 'skill(1-5)',
  `winner` int NOT NULL,
  `losing` int NOT NULL,
  `likes` int NOT NULL,
  `dislike` int NOT NULL,
  `id_category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `gladiator`
--

INSERT INTO `gladiator` (`id`, `name`, `country`, `weight`, `height`, `sword`, `shield`, `hand`, `winner`, `losing`, `likes`, `dislike`, `id_category`) VALUES
(1, 'ANDREJOS LOBOSS', 'THRACE', 80, 180, 5, 5, 5, 5000, 0, 5000, 1, 7),
(2, 'CAROLINA WONDERINA', 'GAULE', 50, 174, 5, 5, 5, 4000, 0, 50000, 1, 7),
(3, 'RAFFAELO DELACHAUSSURO', 'GAULE', 150, 220, 5, 5, 5, 50000, 0, 1000, 1, 7),
(4, 'MIKAELO ', 'MONGOLIE', 180, 100, 5, 5, 5, 500, 0, 1000, 14, 6),
(5, 'boobaus', 'Afrika', 120, 198, 3, 5, 2, 2, 1, 12, 25, 3),
(6, 'kaaris', 'Afrika', 100, 170, 5, 2, 3, 2, 1, 100, 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gladiator`
--
ALTER TABLE `gladiator`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `gladiator`
--
ALTER TABLE `gladiator`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `gladiator`
--
ALTER TABLE `gladiator`
  ADD CONSTRAINT `gladiator_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
