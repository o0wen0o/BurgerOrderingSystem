-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2023 at 03:31 AM
-- Server version: 8.0.25
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `burger_shop_db`
--
CREATE DATABASE IF NOT EXISTS burger_shop_db COLLATE utf8mb4_general_ci;

/* switch to database */
USE burger_shop_db;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `email`, `username`, `password`) VALUES
(1, 'user1@gmail.com', 'David', '4297f44b13955235245b2497399d7a93'),
(2, 'user2@gmail.com', 'Alex', '4297f44b13955235245b2497399d7a93');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `item_type` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `item_type`, `item_name`, `unit_price`, `image_name`) VALUES
(1, 'bf_beverages', 'Mineral Water', '3.00', 'MineralWater.png'),
(2, 'bf_beverages', '100 Plus', '5.00', '100plus.png'),
(3, 'bf_beverages', 'Iced Milo', '7.00', 'MiloIced.png'),
(4, 'bf_beverages', 'Hot Milo', '6.00', 'MiloHot.png'),
(5, 'bf_limitedTimeOnly', 'Nasi Lemak', '8.00', 'BF_NasiLemak.png'),
(6, 'bf_limitedTimeOnly', 'Porridge', '7.00', 'BF_Porridge.png'),
(7, 'bf_burgerNTwister', 'Scrambled Egg Sandwich', '7.00', 'BF_ScrambledEggSandwich.png'),
(8, 'bf_burgerNTwister', 'Crispy Chicken Muffin', '8.00', 'BF_CrispyChickenMuffin.png'),
(9, 'bf_burgerNTwister', 'Tuna Egg', '7.00', 'BF_TunaEgg2.png'),
(10, 'bf_burgerNTwister', 'Strip Egg', '7.00', 'BF_StripEgg.png'),
(11, 'bf_burgerNTwister', 'BBQ Chicken Wrap', '8.00', 'BF_BBQChickenWrap1.png'),
(12, 'bf_burgerNTwister', 'Chicken Teriyaki Wrap', '9.00', 'BF_ChickenTeriyakiWrap.png'),
(13, 'bf_burgerNTwister', 'Italian BMT Wrap', '10.00', 'BF_ItalianBMTWrap.png'),
(14, 'bf_beverages', 'Hot Tea', '4.00', 'HotTea.png'),
(15, 'bf_beverages', 'Teh Tarik', '4.00', 'TehTarik.png'),
(16, 'bf_boxMeals', 'Riser Box', '12.00', 'BF_RiserBox.png'),
(17, 'bf_boxMeals', 'Happy Meal Porridge', '11.00', 'BF_HappyMealPorridge.png'),
(18, 'rg_beverages', 'Sprite', '5.00', 'sprite.png'),
(19, 'rg_beverages', 'Ice Lemon Tea', '7.00', 'IceLemonTea.png'),
(20, 'rg_beverages', '100 Plus', '5.00', '100plus.png'),
(21, 'rg_beverages', 'Mineral Water', '3.00', 'MineralWater.png'),
(22, 'rg_beverages', 'Iced Milo', '7.00', 'MiloIced.png'),
(23, 'rg_beverages', 'Hot Milo', '6.00', 'MiloHot.png'),
(24, 'rg_beverages', 'Hot Tea', '4.00', 'HotTea.png'),
(25, 'rg_beverages', 'Teh Tarik', '4.00', 'TehTarik.png'),
(26, 'rg_boxMeals', 'Twister Box Whipped Potato', '15.00', 'BOX_TwisterBoxWhippedPotato.png'),
(27, 'rg_boxMeals', 'Snacker Box Whipped Potato', '13.00', 'BOX_SnackerBoxWhippedPotato.png'),
(28, 'rg_boxMeals', 'Party Package A', '115.00', 'BOX_PartyPackageA.png'),
(29, 'rg_boxMeals', 'Party Package B', '142.00', 'BOX_PartyPackageB.png'),
(30, 'rg_burgerNTwister', 'Spicy Chicken Burger', '13.00', 'RG_SpicyChickenBurger.png'),
(31, 'rg_burgerNTwister', 'Filet-O-Fish', '9.00', 'RG_Filet-O-Fish.png'),
(32, 'rg_burgerNTwister', 'Spicy Crispy Chicken', '11.00', 'RG_SpicyCrispyChicken.png'),
(33, 'rg_burgerNTwister', 'Chicken Burger', '7.00', 'RG_ChickenBurger.png'),
(34, 'rg_burgerNTwister', 'Cheezy Combo', '18.00', 'RG_CheezyCombo.png'),
(35, 'rg_burgerNTwister', 'Stacker Combo', '22.00', 'RG_StackerCombo.png'),
(36, 'rg_limitedTimeOnly', 'Arabian Spice Crunch', '25.00', 'RGLimited_ArabianSpiceCrunch.png'),
(37, 'rg_limitedTimeOnly', '12pc Bucket', '90.00', 'RGLimited_12pcBucket.png'),
(38, 'rg_limitedTimeOnly', '3x Spicy Chicken 2pcs', '16.00', 'RGLimited_3xSpicyChicken.png'),
(39, 'rg_burgerNTwister', 'Spicy Tendercrisp', '10.00', 'RG_SpicyTendercrisp.png'),
(40, 'rg_burgerNTwister', 'Long Chicken', '10.00', 'RG_LongChicken.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
