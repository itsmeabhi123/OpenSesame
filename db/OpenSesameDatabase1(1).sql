-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 19, 2018 at 11:54 PM
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
(36, 'd1', 'abhi', 'cet'),
(37, 'd1233', 'vinu', 'cet'),
(38, '1234', 'vvn', 'cet'),
(39, 'dd1', 'edd', 'cet college trivandrum'),
(40, 'd345', 'Jyothy', 'cet college trivandrum'),
(41, 'DVINU72', 'VINUVN', 'ccet'),
(42, '12', 'seses', 'ass'),
(43, 'df55', 'jyothy', 'cet'),
(44, 'jumana123', 'jumana', 'cet'),
(45, 'dcod123', 'kalidas', 'cet'),
(46, 'neenu1995', 'Neenu V S', 'cet'),
(47, '7515', 'DevikaR', 'CET'),
(48, 'dcod24', 'Janmasree', 'CET'),
(49, 'neema25', 'neema', 'cet'),
(50, 'dcod5', 'Keerthana', 'CET'),
(51, 'dcod101', 'Anjali', 'CET'),
(52, '56', 'sujitha', 'cet'),
(53, '123', 'Devu', 'cet'),
(54, '171212', 'aleena', 'college of engineering'),
(55, '101', 'Amrutha', 'cet'),
(56, '171114', 'selin marvan k', 'CET'),
(57, '171115', 'Jishnu M', 'CET'),
(58, 'jab', 'dcod', 'dcod'),
(59, '123', 'varna', 'cet');

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

--
-- Dumping data for table `FeedbackTable`
--

INSERT INTO `FeedbackTable` (`FeedbackNo`, `DcodId`, `QuestionFeedback`, `InterfaceFeedback`) VALUES
(13, 'd1', 'goofd', 'dfsd'),
(14, 'd1233', 'good', 'ghrll'),
(15, 'd1233', 'good', 'sdfsdf'),
(16, '1234', 'good', 'be'),
(17, 'dd1', 'asd', 'asdfg'),
(18, 'd345', 'NYCA', 'SOOPR'),
(19, 'DVINU72', 'nice', 'good\r\n'),
(20, '12', 'JGTRHJF', 'GFJHFHJ'),
(21, 'df55', 'NYCAAAA', 'KOLLAM\r\n'),
(22, '7515', 'NICE', 'GOOD'),
(23, 'dcod123', 'GOOD', 'IT WAS QUITE NICE\r\n'),
(24, 'neenu1995', 'GOOD', 'GOOD'),
(25, '123', 'good', 'poli'),
(26, 'neema25', 'good', 'nice'),
(27, '171212', 'not bad', 'good'),
(28, 'jab', 'veyyyy gooood\r\n', 'oooooo'),
(29, 'jumana123', 'almost hard', 'nice'),
(30, '171115', 'nice', 'good'),
(31, 'dcod5', 'NICE', 'OK'),
(32, '171114', 'very good', 'goood'),
(33, '123', 'GOOD', 'dfsdf'),
(34, '56', 'a', 'b'),
(35, 'dcod101', 'sooper', 'Wonderful');

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
(1, 'images/set1/Question1.jpg', 'VXFFHVV'),
(2, 'images/set1/Question2.jpg', 'HARD'),
(3, 'images/set1/Question3.jpg', 'once upon a time'),
(4, 'images/set1/Question4.jpg', 'LERABGA'),
(5, 'images/set1/Question5.jpg', 'i am surrounded by enemies'),
(6, 'images/set1/Question6.jpg', '819'),
(7, 'images/set1/Question7.jpg', 'Pi'),
(8, 'images/set1/Question8.jpg', 'you passed the level'),
(9, 'images/set1/Question9.jpg', '1999'),
(10, 'images/set1/Question10.jpg', 'GREAT JOB YOU GOT IT');

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
  `Level4` int(11) DEFAULT '0',
  `Level5` int(11) DEFAULT '0',
  `Level6` int(11) DEFAULT '0',
  `Level7` int(11) DEFAULT '0',
  `Level8` int(11) DEFAULT '0',
  `Level9` int(11) NOT NULL DEFAULT '0',
  `Level10` int(11) NOT NULL DEFAULT '0',
  `Total` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ScoreTable`
--

INSERT INTO `ScoreTable` (`Id`, `DcodId`, `ContestantName`, `Level1`, `Level2`, `Level3`, `Level4`, `Level5`, `Level6`, `Level7`, `Level8`, `Level9`, `Level10`, `Total`) VALUES
(62, 'd1233', 'vinu', 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10),
(63, 'd1233', 'vinu', 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10),
(64, 'd1233', 'vinu', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(65, 'd1233', 'vinu', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(66, '1234', 'vvn', 10, 10, 0, 0, 0, 0, 0, 0, 0, 0, 20),
(67, 'dd1', 'edd', 10, 10, 0, 0, 0, 0, 0, 0, 0, 0, 20),
(68, 'd345', 'Jyothy', 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 100),
(69, 'DVINU72', 'VINUVN', 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 100),
(70, '12', 'seses', 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 100),
(71, 'df55', 'jyothy', 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 100),
(72, 'jumana123', 'jumana', 10, 10, 10, 10, 10, 10, 10, 0, 0, 0, 70),
(73, 'neenu1995', 'Neenu V S', 10, 10, 10, 10, 10, 10, 10, 0, 0, 0, 70),
(74, 'dcod5', 'Keerthana', 10, 10, 10, 10, 10, 10, 10, 0, 0, 0, 70),
(75, '7515', 'DevikaR', 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 100),
(76, 'dcod123', 'kalidas', 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 100),
(77, 'neema25', 'neema', 10, 10, 10, 10, 10, 10, 10, 0, 0, 0, 70),
(78, '123', 'Devu', 10, 10, 10, 10, 10, 10, 10, 0, 0, 0, 70),
(79, '171212', 'aleena', 10, 10, 10, 10, 10, 10, 10, 0, 0, 0, 70),
(80, 'dcod24', 'Janmasree', 10, 10, 10, 10, 10, 10, 10, 10, 0, 0, 80),
(81, 'dcod101', 'Anjali', 10, 10, 10, 10, 10, 10, 10, 10, 0, 0, 80),
(82, '56', 'sujitha', 10, 10, 10, 10, 10, 10, 10, 10, 0, 0, 80),
(83, '101', 'Amrutha', 10, 10, 10, 10, 10, 10, 10, 10, 10, 0, 90),
(84, '171114', 'selin marvan k', 10, 10, 10, 10, 10, 10, 10, 10, 10, 0, 90),
(85, '171115', 'Jishnu M', 10, 10, 10, 10, 10, 10, 10, 10, 10, 0, 90),
(86, 'jab', 'dcod', 10, 10, 10, 10, 10, 10, 10, 10, 0, 0, 80),
(87, '123', 'varna', 10, 10, 10, 10, 10, 10, 10, 10, 0, 0, 80);

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
  MODIFY `RegistationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `FeedbackTable`
--
ALTER TABLE `FeedbackTable`
  MODIFY `FeedbackNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `LoginTable`
--
ALTER TABLE `LoginTable`
  MODIFY `LoginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ScoreTable`
--
ALTER TABLE `ScoreTable`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
