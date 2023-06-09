-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for recipedatabase
DROP DATABASE IF EXISTS `recipedatabase`;
CREATE DATABASE IF NOT EXISTS `recipedatabase` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `recipedatabase`;

-- Dumping structure for table recipedatabase.recipes
DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `RecipeID` int NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Ingredients` varchar(500) NOT NULL,
  `Method` varchar(1000) NOT NULL,
  PRIMARY KEY (`RecipeID`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table recipedatabase.recipes: ~10 rows (approximately)
REPLACE INTO `recipes` (`RecipeID`, `Title`, `Description`, `Ingredients`, `Method`) VALUES
	(1, 'Chicken', 'Example description', '1. Chicken, 2. Veggies', '1. Make sure cooked till not raw'),
	(2, 'Beef', 'Example description', '1. Beef, 2. Veggies', '1. Make sure cooked till not raw'),
	(3, 'Pork', 'Example description', '1. Pork, 2. Veggies', '1. Make sure cooked till not raw'),
	(4, 'Salad', 'Example description', '1. Green leaf', '1. Make sure cooked till not raw'),
	(5, 'Another chicken', 'Example description', '1. Chicken, 2. Veggies', '1. Make sure cooked till not raw'),
	(6, 'Soup', 'Example description', '1. Chicken, 2. Veggies', '1. Make sure cooked till not raw'),
	(7, 'Soup', 'Example description', '1. Chicken, 2. Veggies', '1. Make sure cooked till not raw'),
	(8, 'Soup', 'Example description', '1. Chicken, 2. Veggies', '1. Make sure cooked till not raw'),
	(9, 'Soup', 'Example description', '1. Chicken, 2. Veggies', '1. Make sure cooked till not raw'),
	(88, 'Another example', 'Chicken in the description', 'Test data 1', 'Test data 1');

-- Dumping structure for table recipedatabase.reviews
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `ReviewID` int NOT NULL AUTO_INCREMENT,
  `RecipeID` int NOT NULL,
  `UserID` int NOT NULL,
  `Rating` int NOT NULL,
  `Comments` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ReviewID`),
  KEY `RecipeID` (`RecipeID`),
  KEY `UserID` (`UserID`),
  CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`RecipeID`) REFERENCES `recipes` (`RecipeID`),
  CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table recipedatabase.reviews: ~4 rows (approximately)
REPLACE INTO `reviews` (`ReviewID`, `RecipeID`, `UserID`, `Rating`, `Comments`) VALUES
	(1, 2, 1, 5, 'Test comment for reviewID 2'),
	(2, 2, 2, 5, 'Test comment for reviewID 2'),
	(3, 2, 2, 4, 'Only the 3rd should update'),
	(4, 2, 2, 5, 'Test comment for reviewID 2');

-- Dumping structure for table recipedatabase.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Fav1` int NOT NULL,
  `Fav2` int NOT NULL,
  `Fav3` int NOT NULL,
  `Fav4` int NOT NULL,
  `Fav5` int NOT NULL,
  `Fav6` int NOT NULL,
  `Fav7` int NOT NULL,
  `Fav8` int NOT NULL,
  `Fav9` int NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table recipedatabase.users: ~6 rows (approximately)
REPLACE INTO `users` (`UserID`, `Username`, `Email`, `Password`, `Fav1`, `Fav2`, `Fav3`, `Fav4`, `Fav5`, `Fav6`, `Fav7`, `Fav8`, `Fav9`) VALUES
	(1, 'Test Username', 'Test@email.com', 'Test password', 2, 2, 2, 2, 2, 2, 2, 2, 2),
	(2, 'An updated username', 'Updatedtest@email.com', 'A new password', 2, 2, 2, 2, 2, 2, 2, 2, 2),
	(3, 'Test Username', 'Test@email.com', 'Test password', 2, 2, 2, 2, 2, 2, 2, 2, 2),
	(4, 'Test Username', 'Test@email.com', 'Test password', 2, 2, 2, 2, 2, 2, 2, 2, 2),
	(20, 'Dynamic tests', 'asd@asd', 'asd', 2, 3, 2, 3, 2, 2, 2, 2, 2),
	(30, 'Instructor Testing User', 'TestEmail@Email.com', 'testpass', 1, 2, 3, 4, 5, 6, 7, 8, 9);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
