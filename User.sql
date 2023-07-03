-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jul 03, 2023 at 12:25 AM
-- Server version: 10.6.12-MariaDB-1:10.6.12+maria~ubu2004-log
-- PHP Version: 8.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Reglage`
--

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `ID_User` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Surname` varchar(30) DEFAULT NULL,
  `Otchestvo` varchar(30) DEFAULT NULL,
  `Number` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`ID_User`, `Name`, `Surname`, `Otchestvo`, `Number`, `Password`, `admin`) VALUES
(1, 'Екатерина ', 'Нилова', 'Андреевна', '89998685592', '123', NULL),
(2, 'Андрей', 'Такой', 'Такое', '899945433911', '444', NULL),
(3, 'Николая', 'Семякин', 'Дмитриевич', '73339273301', NULL, NULL),
(4, 'Карина', 'Альтонова ', 'Андреевна', '64449492263', NULL, NULL),
(5, 'Малина', 'Калина', 'Балина', '89995754401', NULL, NULL),
(6, 'Николай', 'Как', 'Т', '85559895592', NULL, NULL),
(7, 'Практика', 'Уродская', 'Правда', '88889998888', NULL, NULL),
(8, 'Я', 'Устала ', 'Вводить', '75757430', NULL, NULL),
(9, 'Этих', 'Гребанных', 'Пользователей', '76598765', NULL, NULL),
(10, 'Помогите ', 'ПЖ', 'Ну Прям ПЖ', '09876567', NULL, NULL),
(11, 'Это', 'Почти', 'Конец', '987655678', NULL, NULL),
(12, 'Осталось ', 'Еще', 'Немного', '09876543', NULL, NULL),
(13, 'УРА', 'ЭТО', 'ВСЕ', '09087654', NULL, NULL),
(25, 'Проверка', 'Проверка', 'Проверка', '777', '777', NULL),
(26, 'fghjjk', 'vbnm', 'cgfvhbjnkj', '1234', '1234', NULL),
(27, 'fgvhbjn', 'dfgjhbn', 'cfhjn', 'fccvgbh', '9', NULL),
(28, 'Роман', 'Антощак', 'Денисович', '789', '789', NULL),
(29, 'Тёма', 'Новосельцев ', 'Романович ', '900', '900', NULL),
(30, 'Екатерина', 'Нилова', 'Андреевна ', '111', '111', 1),
(31, 'ghjdthfr', 'kj ccdcd', 'gjhkl', '90876', '1222', NULL),
(32, '5678', ';lkjh', 'kljh', 'kljh', '9898', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
