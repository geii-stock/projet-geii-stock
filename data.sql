-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 18 Mai 2015 à 15:51
-- Version du serveur :  5.6.24-0ubuntu2
-- Version de PHP :  5.6.4-4ubuntu6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `temp`
--

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom`, `date_creation`, `createur_categorie`) VALUES
(1, 'ROMANS', '2015-03-29 10:08:29', 'jehrlich'),
(2, 'RECITS', '2015-03-29 10:08:38', 'jehrlich'),
(3, 'ESSAIS', '2015-03-29 10:09:21', 'jehrlich'),
(4, 'POESIE', '2015-03-29 10:09:36', 'jehrlich'),
(5, 'GUIDES TOURISTIQUES', '2015-03-29 10:09:54', 'jehrlich'),
(6, 'REVUE SCIENTIFIQUE', '2015-03-29 10:11:14', 'jehrlich'),
(7, 'PROCEEDINGS', '2015-03-29 10:11:42', 'jehrlich'),
(8, 'LIVRES SCIENTIFIQUES', '2015-03-29 10:12:20', 'jehrlich'),
(9, 'FORMATION CONTINUE', '2015-04-04 09:32:38', 'jehrlich');

--
-- Contenu de la table `sous_categorie`
--

INSERT INTO `sous_categorie` (`id_soucat`, `nom`, `id_categorie_mere`, `date_creation`, `createur`) VALUES
(1, 'POLICIERS', 1, '2015-03-29 10:13:27', 'jehrlich'),
(2, 'HISTORIQUE', 3, '2015-03-29 10:13:36', 'jehrlich'),
(3, 'ECONOMIE', 9, '2015-04-04 09:32:56', 'jehrlich'),
(4, 'SCIENCES POUR L''INGENIEUR', 9, '2015-04-04 09:33:25', 'jehrlich'),
(5, 'LANGUES VIVANTES', 9, '2015-04-04 09:33:43', 'jehrlich'),
(6, 'COMPTABILITE', 9, '2015-04-04 09:34:00', 'jehrlich');

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_article`, `reference`, `id_categorie`, `id_sous_categorie`, `designation`, `id_destination`, `id_sous_destination`, `udv`, `seuilbas`, `date_creation`, `createur_article`) VALUES
(1, 'ISBN 978-2-330-00499-6', 1, 1, 'STIEG LARSSON : MILLENIEUM 1', 1, 0, 2, 3, '2015-04-05 21:51:55', 'jehrlich'),
(5, 'ISBN 978-2-754-02025-1', 9, 6, 'L''AUTO-ENTREPRENEUR POUR LES NULS, G. LECLERC, M GOUILLY-FRO', 6, 1, 1, 1, '2015-04-14 03:37:20', 'jehrlich'),
(6, 'ISBN 978-2-754-04293-2', 9, 6, 'PHP ET MYSQL POUR LES VRAIMENT NULS', 2, 0, 1, 1, '2015-04-05 15:41:25', 'jehrlich');

--
-- Contenu de la table `destination`
--

INSERT INTO `destination` (`id_destination`, `nom`, `date_creation`, `createur_destination`) VALUES
(1, 'DISTRACTIONS', '2015-03-29 10:12:47', 'jehrlich'),
(2, 'ETUDES', '2015-03-29 10:12:59', 'jehrlich'),
(3, 'RECHERCHE', '2015-03-29 10:13:12', 'jehrlich'),
(4, 'VIE QUOTIDIENNE', '2015-04-04 09:35:11', 'jehrlich'),
(5, 'VIE PROFESSIONNELLE', '2015-04-04 09:35:26', 'jehrlich'),
(6, 'AUTO ENTREPRISE', '2015-04-04 09:36:09', 'jehrlich');

--
-- Contenu de la table `journal`
--

INSERT INTO `journal` (`id_mouvement`, `id_article`, `prixht`, `prixttc`, `quantite`, `dateha`, `date_creation`, `createur_mouvement`) VALUES
(14, 5, 13.19, 12.50, 3, '2015-04-01', '2015-04-04 10:02:47', 'jehrlich'),
(15, 1, 2.00, 3.00, 13, '2015-04-02', '2015-04-11 03:08:32', 'jehrlich'),
(16, 6, 11.85, 12.50, 3, '2015-04-01', '2015-04-04 10:04:54', 'jehrlich'),
(17, 1, 8.00, 10.00, 1, '2015-04-01', '2015-04-14 03:32:24', 'jehrlich'),
(18, 5, 20.00, 24.00, 1, '2015-04-02', '2015-04-14 03:35:05', 'jehrlich'),
(19, 6, 0.00, 0.00, 1, '2015-04-03', '2015-04-12 02:29:00', 'jehrlich');

--
-- Contenu de la table `sous_destination`
--

INSERT INTO `sous_destination` (`id_sousdest`, `nom`, `id_destination_mere`, `date_creation`, `createur`) VALUES
(1, 'CREATION', 6, '2015-04-04 09:36:22', 'jehrlich'),
(2, 'GESTION QUOTIDIENNE', 6, '2015-04-04 09:36:45', 'jehrlich');

--
-- Contenu de la table `statut`
--

INSERT INTO `statut` (`id_statut`, `type_statut`) VALUES
(1, 'TEMPORAIRE'),
(2, 'EXAMINATEUR'),
(3, 'GESTIONNAIRE'),
(4, 'ADMINISTRATEUR'),
(5, 'SUPER UTILISATEUR');

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `nom`, `prenom`, `login`, `mdp`, `mail`, `id_statut`, `date_creation`, `alerteseuilbas`, `alertedepot`, `alerteretrait`, `alertecreeref`) VALUES
(4, 'Honime', 'Anne', 'anhonime', 'cfdf3751c9f8ca7228cd38fb7995c59d71ea3e5b', 'contact@djet.fr', 2, '2015-04-13 16:04:03', 0, 0, 0, 0),
(3, 'Milapie', 'Chris', 'cmilapie', 'c4842465d802461dff2c9479a6c86acf1f0fd411', 'jacques.ehrlich@neuf.fr', 1, '2015-03-31 15:29:30', NULL, NULL, NULL, NULL),
(1, 'Jacques', 'Ehrlich', 'jehrlich', 'aad581ce32714f2fb040263f94edf51c81458194', 'jacques.ehrlich@neuf.fr', 5, '2015-03-29 10:06:39', NULL, NULL, NULL, NULL),
(2, 'Onc', 'Picsou', 'opicsou', 'd42814be5e8051e524a037b1648adc53bcada553', 'contact@neuf.fr', 1, '2015-03-29 10:18:41', NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
