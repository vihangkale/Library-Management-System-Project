-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 02:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library management system`
--
CREATE DATABASE IF NOT EXISTS `library management system` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `library management system`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Bookid` int(10) NOT NULL,
  `Mid` int(10) NOT NULL,
  `Author` varchar(30) NOT NULL,
  `Issue_date` date NOT NULL,
  `Return_date` date NOT NULL,
  `Cost` float NOT NULL,
  `Category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `Fid` int(10) NOT NULL,
  `Bid` int(10) NOT NULL,
  `Amount` float NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `issue book`
--

CREATE TABLE `issue book` (
  `Bid` int(10) NOT NULL,
  `Mid` int(10) NOT NULL,
  `Date` date NOT NULL,
  `Iid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lms`
--

CREATE TABLE `lms` (
  `Mid` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Phone` int(15) NOT NULL,
  `Fine` float NOT NULL,
  `Bid` int(10) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Author` varchar(30) NOT NULL,
  `Issue_date` date NOT NULL,
  `Return_date` date NOT NULL,
  `Cost` float NOT NULL,
  `Category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `Mid` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Phone` int(15) NOT NULL,
  `Fine` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `return book`
--

CREATE TABLE `return book` (
  `Iid` int(10) NOT NULL,
  `Bid` int(10) NOT NULL,
  `Mid` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Bookid`),
  ADD KEY `books_ibfk_1` (`Mid`);

--
-- Indexes for table `fine`
--
ALTER TABLE `fine`
  ADD PRIMARY KEY (`Fid`),
  ADD KEY `Bid` (`Bid`);

--
-- Indexes for table `issue book`
--
ALTER TABLE `issue book`
  ADD PRIMARY KEY (`Iid`);

--
-- Indexes for table `lms`
--
ALTER TABLE `lms`
  ADD PRIMARY KEY (`Mid`,`Bid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`Mid`);

--
-- Indexes for table `return book`
--
ALTER TABLE `return book`
  ADD KEY `return book_ibfk_1` (`Bid`),
  ADD KEY `return book_ibfk_2` (`Iid`),
  ADD KEY `Mid` (`Mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Bookid` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`Mid`) REFERENCES `members` (`Mid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fine`
--
ALTER TABLE `fine`
  ADD CONSTRAINT `fine_ibfk_1` FOREIGN KEY (`Bid`) REFERENCES `books` (`Bookid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `return book`
--
ALTER TABLE `return book`
  ADD CONSTRAINT `return book_ibfk_1` FOREIGN KEY (`Bid`) REFERENCES `books` (`Bookid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `return book_ibfk_2` FOREIGN KEY (`Iid`) REFERENCES `issue book` (`Iid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `return book_ibfk_3` FOREIGN KEY (`Mid`) REFERENCES `members` (`Mid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
