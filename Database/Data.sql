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

-- Dumping data for table recipedatabase.recipes: ~2 rows (approximately)
REPLACE INTO `recipes` (`RecipeID`, `Title`, `Description`, `Ingredients`, `Method`) VALUES
	(1, 'test', 'test', 'test', 'test'),
	(2, 'test2', 'test2', 'test2', 'test2');

-- Dumping data for table recipedatabase.reviews: ~1 rows (approximately)
REPLACE INTO `reviews` (`ReviewID`, `RecipeID`, `UserID`, `Rating`, `Comments`) VALUES
	(1, 1, 1, 5, 'was good test');

-- Dumping data for table recipedatabase.users: ~1 rows (approximately)
REPLACE INTO `users` (`UserID`, `Username`, `Email`, `Password`, `Fav1`, `Fav2`, `Fav3`, `Fav4`, `Fav5`, `Fav6`, `Fav7`, `Fav8`, `Fav9`) VALUES
	(1, 'Zac', 'zac@gmail.com', 'Password', 1, 2, 3, 4, 5, 6, 7, 8, 9);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
