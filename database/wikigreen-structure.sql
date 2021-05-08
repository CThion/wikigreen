-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 08 mai 2021 à 16:22
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cthion`
--

-- --------------------------------------------------------

--
-- Structure de la table `art`
--

CREATE TABLE `art` (
  `id` int(11) NOT NULL,
  `artroot` int(11) NOT NULL COMMENT 'l''unique valeur non soumise à modif => pilier pour versionnage',
  `id_thm` int(11) NOT NULL,
  `id_ref` int(11) NOT NULL COMMENT 'reference de l''article (sa source)',
  `id_mb` int(11) NOT NULL COMMENT 'auteur de cette version de l''article',
  `titre` tinytext NOT NULL,
  `texte` text NOT NULL COMMENT 'résumé de l''article pour le présenter',
  `dateajout` datetime NOT NULL COMMENT 'date de création de cette version de l''article',
  `noteposi` mediumint(9) NOT NULL COMMENT 'notations positives des membres',
  `notenega` mediumint(9) NOT NULL COMMENT 'notation négatives des membres'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='contenu. Présente un article et y redirige à sa source (ref)';

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mb` (`id_mb`,`id_ref`,`dateajout`),
  ADD KEY `id_ref` (`id_ref`),
  ADD KEY `id_thm` (`id_thm`),
  ADD KEY `id_artroot` (`artroot`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `art`
--
ALTER TABLE `art`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `art`
--
ALTER TABLE `art`
  ADD CONSTRAINT `art_ibfk_1` FOREIGN KEY (`id_mb`) REFERENCES `mb` (`id`),
  ADD CONSTRAINT `art_ibfk_2` FOREIGN KEY (`id_ref`) REFERENCES `ref` (`id`),
  ADD CONSTRAINT `art_ibfk_3` FOREIGN KEY (`id_thm`) REFERENCES `thm` (`id`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
