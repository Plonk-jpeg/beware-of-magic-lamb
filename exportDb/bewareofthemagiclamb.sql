-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 25 nov. 2020 à 14:07
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bewareofthemagiclamb`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPicture` varchar(255) NOT NULL,
  `productPrice` decimal(7,2) NOT NULL,
  `productQuote` varchar(255) NOT NULL,
  `productQuantity` int(255) NOT NULL,
  `productDescription` varchar(500) NOT NULL,
  `productStyle` varchar(50) NOT NULL,
  `productAbv` varchar(255) NOT NULL,
  `productHops` varchar(255) NOT NULL,
  `productMalt` varchar(255) NOT NULL,
  `productIngredient` varchar(255) NOT NULL,
  `categoryId` int(255) NOT NULL,
  `productYeast` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`productId`, `productName`, `productPicture`, `productPrice`, `productQuote`, `productQuantity`, `productDescription`, `productStyle`, `productAbv`, `productHops`, `productMalt`, `productIngredient`, `categoryId`, `productYeast`) VALUES
(1, 'La Refractaire', 'bottle-spin2-1024.gif', '0.00', 'Pour vos grand projets', 500, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Lager', '4.5', 'Simcoe', 'Pale ale 7 EBC\r\n', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Safale S-33'),
(2, 'La Chanus', 'bottle-spin2-1024.gif', '3.30', 'L\'ultime compagnon houblonnée', 500, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Lambic', '3.8', 'Taurus', 'Amber 50 EBC', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Safale T-58'),
(3, 'La Beerbastick', 'bottle-spin2-1024.gif', '4.25', 'Parce-que nous sommes du gras qui pense', 500, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Altbier', '7', 'Tettnanger', 'Special B 350 EBC\r\n', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Safale US-05'),
(4, 'Layoozah', 'bottle-spin2-1024.gif', '3.55', 'Pour changer d\'epaule comme de fusil', 500, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'I.P.A', '7.2', 'East Kent Goldings\r\n', 'Pale ale 7 EBC\r\n', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Safale S-04'),
(5, 'Dino-mite', 'bottle-spin2-1024.gif', '4.65', 'Déjà que vous en buvez bien assez comme ça', 500, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Pilsner', '7', 'Strisselspalt', 'Pils 3 EBC\r\n', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Safbrew WB-06'),
(6, 'La Croûtique', 'bottle-spin2-1024.gif', '4.35', 'Vive l\'intercroûte', 500, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Lager', '6.4', ' Tradition', 'Crystal 120 EBC\r\n', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Saflager S-23'),
(7, 'La Sundered', 'bottle-spin2-1024.gif', '0.00', 'S\'incruste dans votre tapis', 0, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Lager', '', 'Simcoe', 'Pale ale 7 EBC\r\n', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Safale S-33'),
(8, 'Me & My Toothbrush', 'bottle-spin2-1024.gif', '2.85', 'Pour un brossage à sec', 500, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Lambic', '8', 'Tradition', 'Amber 50 EBC', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Safale T-58'),
(9, 'Hoodlum Havoc', 'bottle-spin2-1024.gif', '4.10', 'Ça titillera votre vésicule', 500, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Lambic', '8.2', 'Tettnanger', 'Amber 50 EBC', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Safale US-05'),
(10, 'Gifle de réalisme', 'bottle-spin2-1024.gif', '4.35', 'C\'est la fin de la civilisation', 500, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Pilsner', '6.5', 'Spalter Select', 'Pils 3 EBC\r\n', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Safale S-04'),
(11, 'Supermenlovers', 'bottle-spin2-1024.gif', '3.75', 'Une dégustation à la dynamite', 500, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Eisbock', '6.2', 'Cascade', 'Aroma 150 EBC\r\n', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Safbrew WB-06'),
(12, 'Democracy Run', 'bottle-spin2-1024.gif', '3.20', 'Au Clerc de la ruse', 500, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Weissenbier', '7.6', 'Strisselspalt', 'Biscuit 50 EBC\r\n', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Saflager S-23'),
(13, 'Incroyable du cul', 'bottle-spin2-1024.gif', '3.80', 'Pour un amitié de courte durée... mais appréciée', 500, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Brown ale', '7.8', 'Perle', 'Cara-amber 60 EBC\r\n', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Safale S-33'),
(14, 'The Crunch', 'bottle-spin2-1024.gif', '4.20', 'Coding must\'...go on', 500, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Stout', '7.4', 'Hallertauer Tradition', 'Chocolat 800 EBC\r\n', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Safale T-58'),
(15, 'La Magouille Olligarchique', 'bottle-spin2-1024.gif', '3.00', 'Me demande pas j\'suis qu\'un stagiaire', 500, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Imperial Stout', '9.2', 'Tettnanger', 'Chocolat 800 EBC\r\n', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Safale US-05'),
(16, 'ALT 236', 'bottle-spin2-1024.gif', '3.15', 'Nous sommes les monstres', 500, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Guiness', '8.4', 'Fuggle', 'Chocolat 800 EBC\r\n', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Safale S-04'),
(17, 'La Tubiniphilie', 'bottle-spin2-1024.gif', '3.55', 'Mon cœur chauffe pour les radiateurs', 500, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Stout', '7.2', 'Fuggle', 'Chocolat 800 EBC\r\n', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Safbrew WB-06'),
(18, 'Doombeerlayer', 'bottle-spin2-1024.gif', '3.65', 'Dootdoot', 500, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Milk Stout', '10.2', 'Fuggle', 'Chocolat 800 EBC\r\n', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 1, 'Saflager S-23'),
(19, 'Pack de 12 bières variées', 'packof12BOTML.png', '12.65', 'Pour une ivresse au moults saveurs', 200, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Aléatoire', '∞', 'Aléatoire', 'Aléatoire', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 2, 'Aléatoire'),
(20, 'Pack de 12 bières I.P.A variées', 'packof12BOTML.png', '10.30', 'Toutes plus amères qu\'un gilet jaune', 200, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'I.P.A', '∞', 'Aléatoire', 'Pale ale 7 EBC\r\n', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 2, 'Aléatoire'),
(21, 'Pack de 12 bières Stout', 'packof12BOTML.png', '16.25', 'Noires avec un fond d\'espoir', 200, 'Bière de fermentation ouverte (levures « sauvages ») et de maturation à froid (entre 0 et 8 degrés durant 3 à 8 semaines), elle a un goût assez léger et houblonné. Bière de tradition ancienne, elle a pour origine le nord de l’Allemagne', 'Stout', '∞', 'Aléatoire', 'Chocolat 800 EBC\r\n', 'Malt, Blé, Houblon, Eau, Levure, Non pasteurisé, Non filtrée.', 2, 'Aléatoire');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `userId` int(255) NOT NULL,
  `userPseudo` varchar(255) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `userRole` varchar(255) NOT NULL DEFAULT 'Pim''s'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`userId`, `userPseudo`, `userPass`, `userRole`) VALUES
(1, 'admin', '$2y$10$NishR/4vwV6BTzlF4ZJ/SOhuR6TrZ88Ls3F5dmJ/e4EUUOtYIED9C', 'Morbette'),
(6, 'natacha', '$2y$10$uyM40IY0mU7tyqGsGfp6neu1LazKJ6EtHEcnxeF6EjGUcWHhfgYDS', 'Pim\'s');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
