-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 22 mars 2020 à 02:53
-- Version du serveur :  5.7.17
-- Version de PHP :  7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `books`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `synopsis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `titre`, `auteur`, `synopsis`, `image`) VALUES
(30, 'Livre de test n°0', 'John Doe', 'Ceci est un livre de test', 'https://cdn.discordapp.com/attachments/430087482961559553/690913561555238932/images.png'),
(31, 'Livre de test n°1', 'John Doe', 'Ceci est un livre de test', 'https://cdn.discordapp.com/attachments/430087482961559553/690913561555238932/images.png'),
(32, 'Livre de test n°2', 'John Doe', 'Ceci est un livre de test', 'https://cdn.discordapp.com/attachments/430087482961559553/690913561555238932/images.png'),
(33, 'Livre de test n°3', 'John Doe', 'Ceci est un livre de test', 'https://cdn.discordapp.com/attachments/430087482961559553/690913561555238932/images.png'),
(34, 'Livre de test n°4', 'John Doe', 'Ceci est un livre de test', 'https://cdn.discordapp.com/attachments/430087482961559553/690913561555238932/images.png'),
(35, 'Ender\'s Game', 'Orson Scott Card', 'GIfted children are trained to fight in a intergalactic war under the pretense it\'s just a game', 'https://imgur.com/FpQFvaH'),
(37, 'Ender\'s Game', 'Orson Scott Card', 'GIfted children are trained to fight in a intergalactic war under the pretense it\'s just a game', 'https://i.imgur.com/FpQFvaH.jpg'),
(38, 'Death Race', 'Don Michael Paul', 'Cars with guns racing', 'https://I.imgur.com/R8t8Arx.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
