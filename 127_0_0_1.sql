-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 01:16 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `life_protfolio`
--
CREATE DATABASE IF NOT EXISTS `life_protfolio` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `life_protfolio`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `sn` int(11) NOT NULL,
  `title` varchar(140) NOT NULL,
  `detail` text NOT NULL,
  `text_one` varchar(100) NOT NULL,
  `text_two` varchar(100) NOT NULL,
  `text_three` varchar(100) NOT NULL,
  `text_four` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`sn`, `title`, `detail`, `text_one`, `text_two`, `text_three`, `text_four`) VALUES
(1, 'WHO AM I?', '<p>fsafaf afafsfsa fsfsaf fafaf df af jllllllllllllllllllllllllllllllff</p>\r\n', 'Graphic Design', 'Web Design', 'Software', 'Application');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_education`
--

CREATE TABLE `tbl_education` (
  `sn` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `title_one` varchar(50) NOT NULL,
  `title_one_details` varchar(50) NOT NULL,
  `title_two` varchar(50) NOT NULL,
  `title_two_details` text NOT NULL,
  `title_three` varchar(50) NOT NULL,
  `title_three_details` varchar(300) NOT NULL,
  `title_four` varchar(50) NOT NULL,
  `title_four_details` varchar(200) NOT NULL,
  `title_five` varchar(50) NOT NULL,
  `title_five_details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_education`
--

INSERT INTO `tbl_education` (`sn`, `title`, `title_one`, `title_one_details`, `title_two`, `title_two_details`, `title_three`, `title_three_details`, `title_four`, `title_four_details`, `title_five`, `title_five_details`) VALUES
(3, 'EDUCATION', 'MASTER DEGREE GRAPHIC DESIGN', 'Far far away, behind the word mountains, far from ', 'BACHELOR DEGREE OF COMPUTER SCIENCE', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.\r\n\r\nSeparated they live in Bookmarksgrove right\r\nSeparated they live in Bookmarksgrove right', 'DIPLOMA IN INFORMATION TECHNOLOGY', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'DIPLOMA IN INFORMATION TECHNOLOGY', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large ', 'HIGH SCHOOL SECONDARY EDUCATION', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `sn` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `text_one` varchar(50) NOT NULL,
  `text_one_details` text NOT NULL,
  `text_two` varchar(50) NOT NULL,
  `text_two_details` text NOT NULL,
  `text_three` varchar(50) NOT NULL,
  `text_three_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`sn`, `title`, `text_one`, `text_one_details`, `text_two`, `text_two_details`, `text_three`, `text_three_details`) VALUES
(4, 'HERE ARE SOME OF MY EXPERTISE ', 'INNOVATIVE IDEAS', 'Separated they live in Bookmarksgrove right at the coast of the Semantics', 'SOFTWARE', 'Separated they live in Bookmarksgrove right at the coast of the Semantics', 'APPLICATION', 'Separated they live in Bookmarksgrove right at the coast of the Semantics');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skill`
--

CREATE TABLE `tbl_skill` (
  `sn` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skill`
--

INSERT INTO `tbl_skill` (`sn`, `title`, `details`) VALUES
(1, 'MY SKILLS', 'SFDGDF ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `tbl_education`
--
ALTER TABLE `tbl_education`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `tbl_skill`
--
ALTER TABLE `tbl_skill`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_education`
--
ALTER TABLE `tbl_education`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_skill`
--
ALTER TABLE `tbl_skill`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
