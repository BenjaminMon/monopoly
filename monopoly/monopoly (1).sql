-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 08 Février 2017 à 16:43
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `monopoly`
--

-- --------------------------------------------------------

--
-- Structure de la table `argent`
--

CREATE TABLE `argent` (
  `euro_500` int(11) NOT NULL,
  `euro_100` int(11) NOT NULL,
  `euro_50` int(11) NOT NULL,
  `euro_20` int(11) NOT NULL,
  `euro_10` int(11) NOT NULL,
  `euro_5` int(11) NOT NULL,
  `euro_1` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `joueur_id` int(11) NOT NULL,
  `joueur_argent` int(11) NOT NULL,
  `joueur_case_courante` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`joueur_id`, `joueur_argent`, `joueur_case_courante`) VALUES
(1, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `loyer`
--

CREATE TABLE `loyer` (
  `propriete_id` int(11) NOT NULL,
  `loyer_vide` int(11) NOT NULL,
  `loyer_1maison` int(11) NOT NULL,
  `loyer_2maison` int(11) NOT NULL,
  `loyer_3maison` int(11) NOT NULL,
  `loyer_4maison` int(11) NOT NULL,
  `loyer_hotel` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `maison_joueur`
--

CREATE TABLE `maison_joueur` (
  `joueur_id` int(11) NOT NULL,
  `propriete_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `partie`
--

CREATE TABLE `partie` (
  `partie_id` int(11) NOT NULL,
  `partie_nom` varchar(40) NOT NULL,
  `partie_nbJoueur` int(11) NOT NULL,
  `partie_plein` tinyint(1) NOT NULL,
  `partie_go` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `propriete`
--

CREATE TABLE `propriete` (
  `propriete_id` int(11) NOT NULL,
  `propriete_cout_achat` int(11) NOT NULL,
  `propriete_cout_hypotheque` int(11) NOT NULL,
  `propriete_adresse` int(11) NOT NULL,
  `propriete_cout_maison` int(11) NOT NULL,
  `propriete_cout_hotel` int(11) NOT NULL,
  `propriete_maisons` int(11) NOT NULL,
  `propriete_hotel` tinyint(1) NOT NULL,
  `propriete_case` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_pseudo` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`joueur_id`);

--
-- Index pour la table `loyer`
--
ALTER TABLE `loyer`
  ADD PRIMARY KEY (`propriete_id`);

--
-- Index pour la table `partie`
--
ALTER TABLE `partie`
  ADD PRIMARY KEY (`partie_id`);

--
-- Index pour la table `propriete`
--
ALTER TABLE `propriete`
  ADD PRIMARY KEY (`propriete_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
