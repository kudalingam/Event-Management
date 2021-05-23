-- phpMyAdmin SQL Dump
-- version 4.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2016 at 04:22 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Job_id` int(11) NOT NULL,
  `First_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Last_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email_Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone_Number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` DATE NOT NULL,
  `Gender` ENUM('Male','Female','Transcender') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Qualification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Experience` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Salary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `About` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Role` SET('All','Technicians','Designer','Corpender','Helper') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `District` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `State` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pincode` int(25) COLLATE utf8_unicode_ci NOT NULL,
  `Photo` LONGBLOB NOT NULL ,
  `ID_Proof` LONGBLOB NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Job_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

