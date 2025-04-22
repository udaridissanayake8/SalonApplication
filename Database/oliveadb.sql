-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2025 at 04:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oliveadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `UserName` varchar(10) NOT NULL,
  `Guest_Information` varchar(50) NOT NULL,
  `Service` text NOT NULL,
  `Employee` varchar(50) NOT NULL,
  `Time` time NOT NULL,
  `Date` date NOT NULL,
  `Note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`UserName`, `Guest_Information`, `Service`, `Employee`, `Time`, `Date`, `Note`) VALUES
('cutesigma', 'Me +1 Guest', 'Hair cut', 'Ethan Silver', '10:55:00', '2025-04-26', '.....'),
('Kalpana', 'Me +1 Guest', 'Color,Eyebrow shaping', 'Ethan Silver', '11:46:00', '2025-04-21', '..'),
('Malsha', 'Me +1 Guest', 'Color,Styling', 'Lindsay Toutain', '11:45:00', '2025-04-15', ''),
('Udari', 'Me +1 Guest', 'Color,Eyebrow shaping', 'Ryan O Sullivan', '11:30:00', '2025-04-19', '..........'),
('Udari', 'Me only', 'Color', 'J Correa', '14:01:00', '2025-04-21', '..'),
('Udari', 'Me +3 Guest', 'Color, Consultation,Hair cut', 'Lindsay Toutain', '15:23:00', '2025-04-26', '...');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Email`, `Message`) VALUES
(1, 'Udari', 'shdj@gmail.com', '...'),
(2, 'Malsha', 'sds@gmail.com', '...');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ConfirmPassword` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `MobilePhone` int(10) NOT NULL,
  `HomePhone` int(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BirthDay` date NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Marketing` varchar(50) NOT NULL,
  `reset_token` varchar(255) NOT NULL,
  `token_expiry` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `ConfirmPassword`, `Email`, `FirstName`, `LastName`, `MobilePhone`, `HomePhone`, `Gender`, `BirthDay`, `Contact`, `Marketing`, `reset_token`, `token_expiry`) VALUES
('cutesigma', '123456', '123456', 'theekshanadissanayake@gmail.com', 'theekshana', 'dissanayake', 119, 1990, 'male', '2012-11-30', 'callme', 'text', '', '0000-00-00 00:00:00'),
('Nethmi', '2020', '2020', 'nethmisamuduni3@gmail.com', 'Nethmi', 'Samuduni', 4546, 5637, 'female', '2025-04-07', 'textme', 'text', '', '0000-00-00 00:00:00'),
('Udari', '2002', '2002', 'udaridissanayake8@gmail.com', 'Udari', 'Dissanayake', 146, 4586, 'female', '2002-07-15', 'textme', 'text', '', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`UserName`,`Date`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
