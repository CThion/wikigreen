-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 08 avr. 2021 à 20:03
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
-- Base de données : `wikigreen`
--

-- --------------------------------------------------------

--
-- Structure de la table `cmt`
--

CREATE TABLE `cmt` (
  `id` int(11) NOT NULL,
  `id_mb` int(11) NOT NULL,
  `texte` text NOT NULL,
  `date` datetime NOT NULL,
  `noteposi` int(11) DEFAULT NULL,
  `notenega` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cmtref`
--

CREATE TABLE `cmtref` (
  `id` int(11) NOT NULL,
  `id_ref` int(11) NOT NULL,
  `id_cmt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cmtsec`
--

CREATE TABLE `cmtsec` (
  `id` int(11) NOT NULL,
  `id_sec` int(11) NOT NULL,
  `id_cmt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='commentaires sur les sections';

-- --------------------------------------------------------

--
-- Structure de la table `cmtthm`
--

CREATE TABLE `cmtthm` (
  `id` int(11) NOT NULL,
  `id_thm` int(11) NOT NULL,
  `id_cmt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='commentaires sur les thèmes';

-- --------------------------------------------------------

--
-- Structure de la table `mb`
--

CREATE TABLE `mb` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `pseudo` text NOT NULL,
  `mail` text NOT NULL,
  `mdp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ref`
--

CREATE TABLE `ref` (
  `id` int(11) NOT NULL,
  `id_thm` int(11) NOT NULL,
  `titre` text NOT NULL,
  `logo` text NOT NULL COMMENT 'adresse de l''image',
  `nvxvali` int(11) NOT NULL,
  `nvxvulga` int(11) NOT NULL,
  `note` int(11) NOT NULL COMMENT 'notation des membres'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reftype`
--

CREATE TABLE `reftype` (
  `id` int(11) NOT NULL,
  `type` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ref_reftype`
--

CREATE TABLE `ref_reftype` (
  `id` int(11) NOT NULL,
  `id_ref` int(11) NOT NULL,
  `id_reftype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sec`
--

CREATE TABLE `sec` (
  `id` int(11) NOT NULL,
  `titre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `thm`
--

CREATE TABLE `thm` (
  `id` int(11) NOT NULL,
  `id_sec` int(11) NOT NULL,
  `titre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cmt`
--
ALTER TABLE `cmt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_membre` (`id_mb`);

--
-- Index pour la table `cmtref`
--
ALTER TABLE `cmtref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ref` (`id_cmt`),
  ADD KEY `id_mb` (`id_ref`);

--
-- Index pour la table `cmtsec`
--
ALTER TABLE `cmtsec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mb` (`id_sec`),
  ADD KEY `id_sec` (`id_cmt`);

--
-- Index pour la table `cmtthm`
--
ALTER TABLE `cmtthm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mb` (`id_thm`),
  ADD KEY `id_thm` (`id_cmt`);

--
-- Index pour la table `mb`
--
ALTER TABLE `mb`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ref`
--
ALTER TABLE `ref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_thm` (`id_thm`);

--
-- Index pour la table `reftype`
--
ALTER TABLE `reftype`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ref_reftype`
--
ALTER TABLE `ref_reftype`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ref` (`id_ref`,`id_reftype`);

--
-- Index pour la table `sec`
--
ALTER TABLE `sec`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `thm`
--
ALTER TABLE `thm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sec` (`id_sec`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cmt`
--
ALTER TABLE `cmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cmtref`
--
ALTER TABLE `cmtref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cmtsec`
--
ALTER TABLE `cmtsec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cmtthm`
--
ALTER TABLE `cmtthm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `mb`
--
ALTER TABLE `mb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ref`
--
ALTER TABLE `ref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reftype`
--
ALTER TABLE `reftype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ref_reftype`
--
ALTER TABLE `ref_reftype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sec`
--
ALTER TABLE `sec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `thm`
--
ALTER TABLE `thm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cmt`
--
ALTER TABLE `cmt`
  ADD CONSTRAINT `cmt_ibfk_1` FOREIGN KEY (`id_mb`) REFERENCES `mb` (`id`);

--
-- Contraintes pour la table `cmtref`
--
ALTER TABLE `cmtref`
  ADD CONSTRAINT `cmtref_ibfk_1` FOREIGN KEY (`id_cmt`) REFERENCES `cmt` (`id`),
  ADD CONSTRAINT `cmtref_ibfk_2` FOREIGN KEY (`id_ref`) REFERENCES `ref` (`id`);

--
-- Contraintes pour la table `cmtsec`
--
ALTER TABLE `cmtsec`
  ADD CONSTRAINT `cmtsec_ibfk_1` FOREIGN KEY (`id_cmt`) REFERENCES `cmt` (`id`),
  ADD CONSTRAINT `cmtsec_ibfk_2` FOREIGN KEY (`id_sec`) REFERENCES `sec` (`id`);

--
-- Contraintes pour la table `cmtthm`
--
ALTER TABLE `cmtthm`
  ADD CONSTRAINT `cmtthm_ibfk_1` FOREIGN KEY (`id_cmt`) REFERENCES `cmt` (`id`),
  ADD CONSTRAINT `cmtthm_ibfk_2` FOREIGN KEY (`id_thm`) REFERENCES `thm` (`id`);

--
-- Contraintes pour la table `ref`
--
ALTER TABLE `ref`
  ADD CONSTRAINT `ref_ibfk_1` FOREIGN KEY (`id_thm`) REFERENCES `thm` (`id`);

--
-- Contraintes pour la table `thm`
--
ALTER TABLE `thm`
  ADD CONSTRAINT `thm_ibfk_1` FOREIGN KEY (`id_sec`) REFERENCES `sec` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
