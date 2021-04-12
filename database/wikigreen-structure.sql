-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 12 avr. 2021 à 18:33
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
  `id_thm` int(11) NOT NULL,
  `id_ref` int(11) NOT NULL COMMENT 'reference de l''article (sa source)',
  `id_mb` int(11) NOT NULL COMMENT 'auteur de cette version de l''article',
  `titre` tinytext NOT NULL,
  `image` tinytext NOT NULL,
  `texte` text NOT NULL COMMENT 'résumé de l''article pour le présenter',
  `date` datetime NOT NULL COMMENT 'date de création de cette version de l''article',
  `noteposi` mediumint(9) NOT NULL COMMENT 'notations positives des membres',
  `notenega` mediumint(9) NOT NULL COMMENT 'notation négatives des membres'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='contenu. Présente un article et y redirige à sa source (ref)';

-- --------------------------------------------------------

--
-- Structure de la table `art_typeinfo`
--

CREATE TABLE `art_typeinfo` (
  `id` int(11) NOT NULL,
  `id_art` int(11) NOT NULL,
  `id_typeinfo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Structure de la table `cmt_art`
--

CREATE TABLE `cmt_art` (
  `id` int(11) NOT NULL,
  `id_art` int(11) NOT NULL,
  `id_cmt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cmt_ref`
--

CREATE TABLE `cmt_ref` (
  `id` int(11) NOT NULL,
  `id_ref` int(11) NOT NULL,
  `id_cmt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cmt_sec`
--

CREATE TABLE `cmt_sec` (
  `id` int(11) NOT NULL,
  `id_sec` int(11) NOT NULL,
  `id_cmt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='commentaires sur les sections';

-- --------------------------------------------------------

--
-- Structure de la table `cmt_thm`
--

CREATE TABLE `cmt_thm` (
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
  `mdp` text NOT NULL,
  `niveau` text NOT NULL COMMENT 'le niveau du membre (débutant, confirmé...)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mb_art`
--

CREATE TABLE `mb_art` (
  `id` int(11) NOT NULL,
  `id_mb` int(11) NOT NULL,
  `id_art` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='table de jonction pour les articles favoris des membres';

-- --------------------------------------------------------

--
-- Structure de la table `ref`
--

CREATE TABLE `ref` (
  `id` int(11) NOT NULL,
  `id_mb` int(11) NOT NULL COMMENT 'auteur de cette version de la reference',
  `titre` text NOT NULL,
  `logo` text NOT NULL COMMENT 'adresse de l''image',
  `texte` text COMMENT 'texte présentant la reference',
  `nvxvali` int(11) NOT NULL,
  `nvxvulga` int(11) NOT NULL,
  `note` int(11) NOT NULL COMMENT 'notation des membres',
  `date` datetime NOT NULL COMMENT 'date de publication de cette version de la reference'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ref_typeinfo`
--

CREATE TABLE `ref_typeinfo` (
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
  `id_mb` int(11) NOT NULL COMMENT 'auteur de cette version de la section',
  `titre` tinytext NOT NULL,
  `logo` tinytext NOT NULL COMMENT 'adresse de l''image',
  `texte` text NOT NULL COMMENT 'texte présentant la section',
  `date` datetime NOT NULL COMMENT 'date de publication de cette version de la section'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `thm`
--

CREATE TABLE `thm` (
  `id` int(11) NOT NULL,
  `id_sec` int(11) NOT NULL,
  `id_mb` int(11) NOT NULL COMMENT 'auteur de cette version du theme',
  `titre` tinytext NOT NULL,
  `logo` tinytext NOT NULL COMMENT 'adresse de l''image',
  `texte` text COMMENT 'texte présentant le theme',
  `date` datetime NOT NULL COMMENT 'date de publication de cette version du theme'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `typeinfo`
--

CREATE TABLE `typeinfo` (
  `id` int(11) NOT NULL,
  `type` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mb` (`id_mb`,`id_ref`,`date`),
  ADD KEY `id_ref` (`id_ref`),
  ADD KEY `id_thm` (`id_thm`);

--
-- Index pour la table `art_typeinfo`
--
ALTER TABLE `art_typeinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_art` (`id_art`,`id_typeinfo`),
  ADD KEY `id_typeinfo` (`id_typeinfo`);

--
-- Index pour la table `cmt`
--
ALTER TABLE `cmt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_membre` (`id_mb`);

--
-- Index pour la table `cmt_art`
--
ALTER TABLE `cmt_art`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_art` (`id_art`,`id_cmt`),
  ADD KEY `id_cmt` (`id_cmt`);

--
-- Index pour la table `cmt_ref`
--
ALTER TABLE `cmt_ref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ref` (`id_cmt`),
  ADD KEY `id_mb` (`id_ref`);

--
-- Index pour la table `cmt_sec`
--
ALTER TABLE `cmt_sec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mb` (`id_sec`),
  ADD KEY `id_sec` (`id_cmt`);

--
-- Index pour la table `cmt_thm`
--
ALTER TABLE `cmt_thm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mb` (`id_thm`),
  ADD KEY `id_thm` (`id_cmt`);

--
-- Index pour la table `mb`
--
ALTER TABLE `mb`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mb_art`
--
ALTER TABLE `mb_art`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mb` (`id_mb`,`id_art`),
  ADD KEY `id_art` (`id_art`);

--
-- Index pour la table `ref`
--
ALTER TABLE `ref`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mb` (`id_mb`),
  ADD KEY `date` (`date`);

--
-- Index pour la table `ref_typeinfo`
--
ALTER TABLE `ref_typeinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ref` (`id_ref`,`id_reftype`),
  ADD KEY `id_reftype` (`id_reftype`);

--
-- Index pour la table `sec`
--
ALTER TABLE `sec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mb` (`id_mb`),
  ADD KEY `id_mb_2` (`id_mb`),
  ADD KEY `date` (`date`);

--
-- Index pour la table `thm`
--
ALTER TABLE `thm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sec` (`id_sec`),
  ADD KEY `id_mb` (`id_mb`),
  ADD KEY `date` (`date`);

--
-- Index pour la table `typeinfo`
--
ALTER TABLE `typeinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `art`
--
ALTER TABLE `art`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `art_typeinfo`
--
ALTER TABLE `art_typeinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cmt`
--
ALTER TABLE `cmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cmt_art`
--
ALTER TABLE `cmt_art`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cmt_ref`
--
ALTER TABLE `cmt_ref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cmt_sec`
--
ALTER TABLE `cmt_sec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cmt_thm`
--
ALTER TABLE `cmt_thm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `mb`
--
ALTER TABLE `mb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `mb_art`
--
ALTER TABLE `mb_art`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ref`
--
ALTER TABLE `ref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ref_typeinfo`
--
ALTER TABLE `ref_typeinfo`
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
-- AUTO_INCREMENT pour la table `typeinfo`
--
ALTER TABLE `typeinfo`
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

--
-- Contraintes pour la table `art_typeinfo`
--
ALTER TABLE `art_typeinfo`
  ADD CONSTRAINT `art_typeinfo_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `art` (`id`),
  ADD CONSTRAINT `art_typeinfo_ibfk_2` FOREIGN KEY (`id_typeinfo`) REFERENCES `typeinfo` (`id`);

--
-- Contraintes pour la table `cmt`
--
ALTER TABLE `cmt`
  ADD CONSTRAINT `cmt_ibfk_1` FOREIGN KEY (`id_mb`) REFERENCES `mb` (`id`);

--
-- Contraintes pour la table `cmt_art`
--
ALTER TABLE `cmt_art`
  ADD CONSTRAINT `cmt_art_ibfk_1` FOREIGN KEY (`id_cmt`) REFERENCES `cmt` (`id`),
  ADD CONSTRAINT `cmt_art_ibfk_2` FOREIGN KEY (`id_art`) REFERENCES `art` (`id`);

--
-- Contraintes pour la table `cmt_ref`
--
ALTER TABLE `cmt_ref`
  ADD CONSTRAINT `cmt_ref_ibfk_1` FOREIGN KEY (`id_cmt`) REFERENCES `cmt` (`id`),
  ADD CONSTRAINT `cmt_ref_ibfk_2` FOREIGN KEY (`id_ref`) REFERENCES `ref` (`id`);

--
-- Contraintes pour la table `cmt_sec`
--
ALTER TABLE `cmt_sec`
  ADD CONSTRAINT `cmt_sec_ibfk_1` FOREIGN KEY (`id_cmt`) REFERENCES `cmt` (`id`),
  ADD CONSTRAINT `cmt_sec_ibfk_2` FOREIGN KEY (`id_sec`) REFERENCES `sec` (`id`);

--
-- Contraintes pour la table `cmt_thm`
--
ALTER TABLE `cmt_thm`
  ADD CONSTRAINT `cmt_thm_ibfk_1` FOREIGN KEY (`id_cmt`) REFERENCES `cmt` (`id`),
  ADD CONSTRAINT `cmt_thm_ibfk_2` FOREIGN KEY (`id_thm`) REFERENCES `thm` (`id`);

--
-- Contraintes pour la table `mb_art`
--
ALTER TABLE `mb_art`
  ADD CONSTRAINT `mb_art_ibfk_1` FOREIGN KEY (`id_mb`) REFERENCES `mb` (`id`),
  ADD CONSTRAINT `mb_art_ibfk_2` FOREIGN KEY (`id_art`) REFERENCES `art` (`id`);

--
-- Contraintes pour la table `ref`
--
ALTER TABLE `ref`
  ADD CONSTRAINT `ref_ibfk_2` FOREIGN KEY (`id_mb`) REFERENCES `mb` (`id`);

--
-- Contraintes pour la table `ref_typeinfo`
--
ALTER TABLE `ref_typeinfo`
  ADD CONSTRAINT `ref_typeinfo_ibfk_1` FOREIGN KEY (`id_ref`) REFERENCES `ref` (`id`),
  ADD CONSTRAINT `ref_typeinfo_ibfk_2` FOREIGN KEY (`id_reftype`) REFERENCES `typeinfo` (`id`);

--
-- Contraintes pour la table `sec`
--
ALTER TABLE `sec`
  ADD CONSTRAINT `sec_ibfk_1` FOREIGN KEY (`id_mb`) REFERENCES `mb` (`id`);

--
-- Contraintes pour la table `thm`
--
ALTER TABLE `thm`
  ADD CONSTRAINT `thm_ibfk_1` FOREIGN KEY (`id_sec`) REFERENCES `sec` (`id`),
  ADD CONSTRAINT `thm_ibfk_2` FOREIGN KEY (`id_mb`) REFERENCES `mb` (`id`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
