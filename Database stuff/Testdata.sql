-- Dumping database structure for RecipeDatabase
DROP DATABASE IF EXISTS `RecipeDatabase`;
CREATE DATABASE IF NOT EXISTS `RecipeDatabase` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `RecipeDatabase`;

-- Dumping structure for table User
DROP TABLE IF EXISTS `User`;
CREATE TABLE IF NOT EXISTS `User` (
  `UserID` INT NOT NULL AUTO_INCREMENT,
  `Username` VARCHAR(50) NOT NULL,
  `Email` VARCHAR(50) NOT NULL,
  `Password` VARCHAR(255) NOT NULL,
  `Fav1` INT NOT NULL,
  `Fav2` INT NOT NULL,
  `Fav3` INT NOT NULL,
  `Fav4` INT NOT NULL,
  `Fav5` INT NOT NULL,
  `Fav6` INT NOT NULL,
  `Fav7` INT NOT NULL,
  `Fav8` INT NOT NULL,
  `Fav9` INT NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping structure for table Recipe
DROP TABLE IF EXISTS `Recipe`;
CREATE TABLE IF NOT EXISTS `Recipe` (
  `RecipeID` INT NOT NULL AUTO_INCREMENT,
  `Title` VARCHAR(100) NOT NULL,
  `Description` VARCHAR(100) NOT NULL,
  `Ingredients` VARCHAR(500) NOT NULL,
  `Method` VARCHAR(1000) NOT NULL,
  PRIMARY KEY (`RecipeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping structure for table Review
DROP TABLE IF EXISTS `Review`;
CREATE TABLE IF NOT EXISTS `Review` (
  `ReviewID` INT NOT NULL AUTO_INCREMENT,
  `RecipeID` INT NOT NULL,
  `UserID` INT NOT NULL,
  `Rating` INT NOT NULL,
  `Comments` VARCHAR(500),
  PRIMARY KEY (`ReviewID`),
  FOREIGN KEY (`RecipeID`) REFERENCES `Recipe`(`RecipeID`),
  FOREIGN KEY (`UserID`) REFERENCES `User`(`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;