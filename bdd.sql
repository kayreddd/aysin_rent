-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 14 sep. 2024 à 23:19
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `aysin_rent`
--

-- --------------------------------------------------------

--
-- Structure de la table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `car_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand` varchar(64) DEFAULT NULL,
  `model` varchar(64) DEFAULT NULL,
  `year` int DEFAULT NULL,
  `transmission` varchar(64) NOT NULL,
  `fuel` varchar(64) NOT NULL,
  `horsepower` int UNSIGNED DEFAULT NULL,
  `slogan_car` varchar(255) NOT NULL,
  `img1` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `price1` int DEFAULT NULL,
  `price2` int DEFAULT NULL,
  `price3` int DEFAULT NULL,
  `price4` int DEFAULT NULL,
  `price5` int DEFAULT NULL,
  `price6` int DEFAULT NULL,
  `bail` int DEFAULT NULL,
  `pages` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`car_id`),
  UNIQUE KEY `brand_model` (`brand`,`model`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `car`
--

INSERT INTO `car` (`car_id`, `brand`, `model`, `year`, `transmission`, `fuel`, `horsepower`, `slogan_car`, `img1`, `img2`, `img3`, `price1`, `price2`, `price3`, `price4`, `price5`, `price6`, `bail`, `pages`) VALUES
(1, 'Range Rover', 'Velar', 2019, 'Automatique', 'Essence', 551, 'Le design avant-gardiste du Range Rover Velar, avec ses éléments soignés et raffinés, est à la fois intriguant et séduisant.', 'land-rover-range-rover-velar-20394-1 2.png', '2020_range_rover_velar_r-dynamic_black_6_1600x1200 1.png', '10299608lpw-10299614-jpg_4560091 1.png', 150, 200, 400, 550, 700, 1800, 2500, 'range'),
(2, 'Lamborghini', 'Urus', 2023, 'Automatique', 'Essence', 810, 'Limité à 99 exemplaires, l\'Urus Scatenato promet d\'être à la hauteur de son nom, en libérant un mélange de performance et d\'exclusivité.', 'Lamborghini_Urus_Wald-Front-seitlich.jpg', 'Lamborghini_Urus_grau-Heck-seitlich.jpg', 'urus_gate_s_03.jpg', 500, 1000, 1500, 2000, 3500, 12000, 5500, 'urus'),
(3, 'Audi', 'RS3 ABT', 2023, 'Automatique', 'Essence', 460, 'Avec son design élégant, son moteur puissant et sa technologie avancée, l’Audi RS3 ABT de 460 CH ne manquera pas de faire tourner les têtes sur la route.', 'audi_rs3.jpg', 'ABT_RS_3_9.jpg', 'audi-rs-3-abt_interior.jpg', 350, 650, 950, 1250, 2400, 8000, 3500, 'rs3'),
(4, 'Mercedes-Benz', 'GT63s', 2023, 'Automatique', 'Essence', 630, 'Montez à bord de la Mercedes-Benz GT63S et éprouvez immédiatement la sensation excitante d’être assis dans un habitable racé et élégant.', 'citycarrentalsGT63S-8840.jpg', 'mercedes-amg-gt-63-s-with-aerodynamic-package.jpg', 'MBCAN-2023-AMG-GT-4DR-COUPE_interior.jpg', 400, 800, 1200, 1750, 2800, 9500, 4000, 'gt63s'),
(6, 'Audi', 'RS7 ABT', 2023, 'Automatique', 'Essence', 740, 'L’Audi RS 7 Sportback réinventée délivre une intensité fascinante sur toute la ligne. Son design puissant, sa dynamique de conduite exceptionnelle sont la promesse d’émotions fortes au quotidien.', 'ABT_RS7_LE-24-1536x1024 1.svg', 'ABT_RS7_LE-1-edited-scaled_back.jpg', 'rs7_abt_interior.jpg', 400, 800, 1200, 1750, 2800, 9500, 4000, 'rs7'),
(7, 'BMW', 'X6', 2020, 'Automatique', 'Essence', 530, 'Dans la BMW X6, la dynamique sportive maximale rencontre un design athlétique et un équipement luxueux.', 'bmw-x6-m-1-scaled 1.svg', 'bmw_x6_back.jpg', 'bmw-x-series-x6-m60i-gallery-image-impressions-03_1920.jpg.asset.1675123987754.jpg', 250, 500, 1000, 2200, 2900, 4600, 2500, 'x6'),
(8, 'Mercedes', 'G63s', 2020, 'Automatique', 'Essence', 585, 'La Nouvelle Mercedes-AMG G 63 incarne le paroxysme de l’esprit Mercedes-AMG. Chaque élément de son design, de sa nouvelle calandre à ses différents détails en carbone, incarnent la vision d’un luxe version Mercedes-AMG.', 'g63s_.svg', 'Mercedes-G63-2-scaled_back.jpg', 'merco_g63s_interior.jpg', 500, 1000, 1700, 2200, 3600, 10000, 5000, 'g63s'),
(9, 'Chevrolet', 'Camaro SS', 2022, 'Automatique', 'Essence', 461, 'De son allure athlétique instantanément reconnaissable à son intérieur raffiné et centré sur le conducteur, la Camaro 2022 est une extension élégante et puissante de la personne qui s\'installe derrière son volant.', 'camaro_chevrolet.svg', '2018-chevy-camaro-zl1_back.jpg', 'chevrolet_camaro_interior.jpg', 200, 400, 800, 1500, 3000, 5000, 2500, 'camaro');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(200) NOT NULL,
  `phone_number` int NOT NULL,
  `date_of_birth` datetime NOT NULL,
  `license_seniority` int NOT NULL,
  `departure_date` datetime NOT NULL,
  `arrival_date` datetime NOT NULL,
  `role` int DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `mdp`, `phone_number`, `date_of_birth`, `license_seniority`, `departure_date`, `arrival_date`, `role`) VALUES
(1, 'vv', 'tt', 'vv@gmail.com', 'azerty', 0, '1999-02-01 00:00:00', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(2, 'll', 'bh', 'bh@gmail.com', 'azerty', 0, '1999-02-01 00:00:00', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(3, 'bonbon', 'bob', 'bob@gmail.com', 'azerty', 0, '1999-02-01 00:00:00', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(22, 'ze', 'zz', 'zz@gmail.com', '$2y$10$QN4y8GSpZVUK6v2pqzKo7uHubYxDXzcT4Ys4c1DOa2LrjZboOpuh.', 0, '1999-01-01 00:00:00', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(23, 'jj', 'pierre', 'pierre@gmail.com', '$2y$10$8CpUqu4UEZ3Mqx6PAyDSWOSY8j3JT0hxL9UoR6sv6BqjGFiMlS/4S', 0, '1999-02-01 00:00:00', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
