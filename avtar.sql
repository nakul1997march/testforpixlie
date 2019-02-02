-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2019 at 12:23 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backup`
--

-- --------------------------------------------------------

--
-- Table structure for table `avtar`
--

CREATE TABLE `avtar` (
  `callno` int(11) NOT NULL,
  `avtr1` varchar(20) COLLATE big5_bin NOT NULL,
  `score_ofavtar1` int(20) NOT NULL,
  `st_avtar1` varchar(10) COLLATE big5_bin NOT NULL,
  `avtr2` varchar(20) COLLATE big5_bin NOT NULL,
  `score_ofavtar2` int(20) NOT NULL,
  `st_avtar2` varchar(10) COLLATE big5_bin NOT NULL,
  `winner_score` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5 COLLATE=big5_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avtar`
--
ALTER TABLE `avtar`
  ADD PRIMARY KEY (`callno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avtar`
--
ALTER TABLE `avtar`
  MODIFY `callno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
