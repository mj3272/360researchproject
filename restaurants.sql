-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 06:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs360 research project`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Location` varchar(50) DEFAULT NULL,
  `Cuisine` varchar(50) DEFAULT NULL,
  `Rating` varchar(5) DEFAULT NULL,
  `Price` varchar(50) DEFAULT NULL,
  `Dining` varchar(50) DEFAULT NULL,
  `YelpReviews` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`ID`, `Name`, `Location`, `Cuisine`, `Rating`, `Price`, `Dining`, `YelpReviews`) VALUES
(1, 'Pho Heaven', 'Moscow', 'Vietnamese', '*', 'Inexpensive', 'Carryout', 10),
(2, 'Hot Pot', 'Moscow', 'Korean', '****', 'VeryExpensive', 'Premise', 92),
(3, 'Ao Dai', 'Pullman', 'Vietnamese', '*****', 'Moderate', 'Both', 8),
(4, 'Ravi Kabob', 'Arlington', 'Pakistani', '*****', 'Inexpensive', 'Both', 20),
(5, 'Little Tibet', 'Spokane', 'Tibetan', '*****', 'Expensive', 'Both', 10),
(6, 'Burger Time', 'Lewiston', 'American', '***', 'Moderate', 'Both', 41),
(7, 'Happy Nook', 'Hayden', 'French', '*', 'Inexpensive', 'Premise', 36),
(8, 'Pizza Planet', 'CoeurdAlene', 'American', '*****', 'Moderate', 'Both', 90),
(9, 'WcDonalds', 'Moscow', 'American', '***', 'Inexpensive', 'Carryout', 53),
(10, 'Carbys', 'Pullman', 'American', '**', 'Inexpensive', 'Both', 68),
(11, 'Tomato Avenue', 'CoeurdAlene', 'Italian', '*****', 'Moderate', 'Both', 61),
(12, 'Texas Streethome', 'Lewiston', 'BBQ', '****', 'Moderate', 'Premise', 14),
(13, 'Freddy Fazbear Pizza', 'PostFalls', 'American', '*', 'Expenisive', 'Premise', 82),
(14, 'Bear Express', 'Hayden', 'Chinese', '***', 'VeryExpensive', 'Both', 75),
(15, 'Bluebird Cafe', 'PostFalls', 'French', '**', 'Inexpensive', 'Premise', 63),
(16, 'Spaghetti Bros', 'Spokane', 'Italian', '*****', 'VeryExpensive', 'Carryout', 80),
(17, 'Two Planets Cafe', 'Moscow', 'French', '*', 'Expensive', 'Premise', 53),
(18, 'Felipes Tacos', 'Spokane', 'Mexican', '***', 'Moderate', 'Carryout', 6),
(19, 'Jalapenos', 'Lewiston', 'Mexican', '****', 'VeryExpensive', 'Premise', 34),
(20, 'Noodle House', 'PostFalls', 'Korean', '*', 'Moderate', 'Both', 26),
(21, 'Jays BBQ', 'Hayden', 'BBQ', '*', 'Inexpensive', 'Premise', 73);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
