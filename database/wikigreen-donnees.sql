-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 11 avr. 2021 à 19:57
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

--
-- Déchargement des données de la table `cmt`
--

INSERT INTO `cmt` (`id`, `id_mb`, `texte`, `date`, `noteposi`, `notenega`) VALUES
(1, 1, 'Je pense que ce thème mériterait d\\\'être une section à part entière étant donné la sensibilité du sujet', '2021-04-06 08:46:31', 4, 8),
(2, 1, 'Cette ref n\\\'a rien à faire ici, je pense que tu t\\\'es trompé de section @benji6\'', '2021-04-08 18:26:49', 9, 3),
(3, 3, 'Pas ouf tout ça, moi je pense que ça va mal finir d\'une manière ou d\'une autre', '2021-04-01 21:12:18', NULL, NULL),
(4, 7, 'C\'est clair que ça sent pas bon du tout !', '2021-04-05 21:29:06', 1, NULL);

--
-- Déchargement des données de la table `mb`
--

INSERT INTO `mb` (`id`, `nom`, `prenom`, `pseudo`, `mail`, `mdp`, `niveau`) VALUES
(1, 'Kevin', 'Jean', 'Jkv13', 'jean.kevin@yahoo.com', 'jfizojfze5456fzeu-_hef', ''),
(2, 'Cazoom', 'Marcus', 'Piriti', 'marcuscazoom37@orange.fr', 'foaizuehfiuhz46546ehfi', ''),
(3, 'Tari', 'Pierre', 'soyaka', 'pierre.tari@gmail.com', 'piuhifzuhe-_fieoz5_-_45', ''),
(4, 'Jonson', 'Michael', 'chifoumi', 'michael.jonson@gmail.com', 'jfioazprjfaozijojir-_-_-iorzjgfoizje', ''),
(5, 'Ideale', 'Cendrion', 'yellowbird', 'cendrineideal@zoho.com', 'fpioajzprgiozerpgjze^pkôjmlniuhreg', ''),
(6, 'Barbier', 'Sam', 'sami', 'sam.barbier@laposte.net', 'paoizjfpoijgmlqk,sdovijs', ''),
(7, 'Chemin', 'Iris', 'picoti', 'iris.chemin@orange.fr', 'apiuehpaoihuvaiovns', ''),
(8, 'Dufrantier', 'Walter', 'wali', 'walter.duplantier@gmail.com', 'perigpskd,oijpoijaspdj', '');

--
-- Déchargement des données de la table `reftype`
--

INSERT INTO `reftype` (`id`, `type`) VALUES
(1, 'vidéo'),
(2, 'podcast'),
(3, 'livre'),
(4, 'film documentaire');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
