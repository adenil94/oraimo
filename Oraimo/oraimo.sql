-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 12 mai 2020 à 06:17
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `oraimo`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `idarticle` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prix` varchar(255) DEFAULT NULL,
  `etat` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `catégorie` int(10) UNSIGNED DEFAULT NULL,
  `vue` int(10) UNSIGNED DEFAULT NULL,
  `aime` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`idarticle`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `code_promo`
--

DROP TABLE IF EXISTS `code_promo`;
CREATE TABLE IF NOT EXISTS `code_promo` (
  `idcode_promo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `users_idusers` int(10) UNSIGNED NOT NULL,
  `type_promo_idtype_promo` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idcode_promo`),
  KEY `code_promo_FKIndex1` (`type_promo_idtype_promo`),
  KEY `code_promo_FKIndex2` (`users_idusers`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idcommande` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code_promo_idcode_promo` int(10) UNSIGNED NOT NULL,
  `paiement_idpaiement` int(10) UNSIGNED NOT NULL,
  `article_idarticle` int(10) UNSIGNED NOT NULL,
  `users_idusers` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idcommande`),
  KEY `commande_FKIndex1` (`users_idusers`),
  KEY `commande_FKIndex2` (`article_idarticle`),
  KEY `commande_FKIndex3` (`paiement_idpaiement`),
  KEY `commande_FKIndex4` (`code_promo_idcode_promo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `idcommentaire` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `article_idarticle` int(10) UNSIGNED NOT NULL,
  `commentaire` text DEFAULT NULL,
  PRIMARY KEY (`idcommentaire`),
  KEY `commentaire_FKIndex1` (`article_idarticle`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `idlivraison` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `commande_idcommande` int(10) UNSIGNED NOT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`idlivraison`),
  KEY `livraison_FKIndex1` (`commande_idcommande`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `idpaiement` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type_paiement_idtype_paiement` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idpaiement`),
  KEY `paiement_FKIndex1` (`type_paiement_idtype_paiement`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_paiement`
--

DROP TABLE IF EXISTS `type_paiement`;
CREATE TABLE IF NOT EXISTS `type_paiement` (
  `idtype_paiement` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type_paiement` varchar(255) DEFAULT NULL,
  `modalité` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idtype_paiement`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_promo`
--

DROP TABLE IF EXISTS `type_promo`;
CREATE TABLE IF NOT EXISTS `type_promo` (
  `idtype_promo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `promotion` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `reduction` int(10) UNSIGNED DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`idtype_promo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_user`
--

DROP TABLE IF EXISTS `type_user`;
CREATE TABLE IF NOT EXISTS `type_user` (
  `idtype_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `types` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idtype_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idusers` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type_user_idtype_user` int(10) UNSIGNED NOT NULL,
  `statut` varchar(255) DEFAULT NULL,
  `identifiant` varchar(255) DEFAULT NULL,
  `email_numero` varchar(255) DEFAULT NULL,
  `mot_pasee` varchar(255) DEFAULT NULL,
  `adresse` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`idusers`),
  KEY `users_FKIndex1` (`type_user_idtype_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vendeur_has_acheteur`
--

DROP TABLE IF EXISTS `vendeur_has_acheteur`;
CREATE TABLE IF NOT EXISTS `vendeur_has_acheteur` (
  `idvendeur_has_acheteur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `users_idusers` int(10) UNSIGNED NOT NULL,
  `id_acheteur` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`idvendeur_has_acheteur`),
  KEY `vendeur_has_acheteur_FKIndex1` (`users_idusers`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
