-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 15, 2018 at 12:21 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `OpenSesameDatabase1`
--

-- --------------------------------------------------------

--
-- Table structure for table `ContestantTable`
--

CREATE TABLE `ContestantTable` (
  `RegistationId` int(11) NOT NULL,
  `DcodId` varchar(20) NOT NULL,
  `ContestantName` varchar(30) NOT NULL,
  `CollegeName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ContestantTable`
--

INSERT INTO `ContestantTable` (`RegistationId`, `DcodId`, `ContestantName`, `CollegeName`) VALUES
(3, 'dc122', 'shaheen ahmed', 'cet college trivandrum'),
(13, 'd1', 'abhi', 'cet'),
(14, 'D2', 'Muthu', 'Cet'),
(15, 'd5', 'akshay', 'cet'),
(16, '125', 'rahul kumar ms', 'cet'),
(17, 'D188', 'Anandhu', 'CET');

-- --------------------------------------------------------

--
-- Table structure for table `FeedbackTable`
--

CREATE TABLE `FeedbackTable` (
  `FeedbackNo` int(11) NOT NULL,
  `DcodId` varchar(30) NOT NULL,
  `QuestionFeedback` varchar(400) NOT NULL,
  `InterfaceFeedback` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `LoginTable`
--

CREATE TABLE `LoginTable` (
  `LoginId` int(11) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `UserType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `LoginTable`
--

INSERT INTO `LoginTable` (`LoginId`, `Password`, `UserType`) VALUES
(1, 'cetmca', 'contestant'),
(2, 'cet123mca', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `QuestionTable`
--

CREATE TABLE `QuestionTable` (
  `QuestionNo` int(11) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `QuestionTable`
--

INSERT INTO `QuestionTable` (`QuestionNo`, `Question`, `Answer`) VALUES
(1, 'images/set1/level1/qstn1.jpg', 'abhi'),
(2, 'images/set1/level2/qstn1.jpg', 'abhilash'),
(3, 'images/set1/level3/qstn1.jpg', 'abhi');

-- --------------------------------------------------------

--
-- Table structure for table `ScoreTable`
--

CREATE TABLE `ScoreTable` (
  `Id` int(11) NOT NULL,
  `DcodId` varchar(20) NOT NULL,
  `ContestantName` varchar(50) NOT NULL,
  `Level1` int(11) DEFAULT '0',
  `Level2` int(11) DEFAULT '0',
  `Level3` int(11) DEFAULT '0',
  `Total` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ScoreTable`
--

INSERT INTO `ScoreTable` (`Id`, `DcodId`, `ContestantName`, `Level1`, `Level2`, `Level3`, `Total`) VALUES
(39, 'd5', 'akshay', 10, 10, NULL, 20),
(40, 'd5', 'akshay', NULL, NULL, NULL, NULL),
(41, '125', 'rahul kumar ms', 10, NULL, NULL, 10),
(42, 'D188', 'Anandhu', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ContestantTable`
--
ALTER TABLE `ContestantTable`
  ADD PRIMARY KEY (`RegistationId`);

--
-- Indexes for table `FeedbackTable`
--
ALTER TABLE `FeedbackTable`
  ADD PRIMARY KEY (`FeedbackNo`);

--
-- Indexes for table `LoginTable`
--
ALTER TABLE `LoginTable`
  ADD PRIMARY KEY (`LoginId`);

--
-- Indexes for table `QuestionTable`
--
ALTER TABLE `QuestionTable`
  ADD PRIMARY KEY (`QuestionNo`);

--
-- Indexes for table `ScoreTable`
--
ALTER TABLE `ScoreTable`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ContestantTable`
--
ALTER TABLE `ContestantTable`
  MODIFY `RegistationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `FeedbackTable`
--
ALTER TABLE `FeedbackTable`
  MODIFY `FeedbackNo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `LoginTable`
--
ALTER TABLE `LoginTable`
  MODIFY `LoginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ScoreTable`
--
ALTER TABLE `ScoreTable`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
